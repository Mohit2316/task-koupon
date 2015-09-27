<?php
/*
-- ****************************************************************************************
-- Copyright (c)  2013  koupon.com
-- All rights reserved
-- ****************************************************************************************
--
-- PROGRAM NAME
-- checkout.php
--
-- DESCRIPTION
--  checkout screen
-- 
-- 
-- LAST UPDATE DATE  09 SEP 2013
--   Date the program has been modified for the last time
-- 
-- HISTORY
-- =======
-- 
-- VERSION  DATE             AUTHOR(S)         DESCRIPTION
-- ------- ---------------  ---------------   ------------------------------------
-- 1001     09-SEP-2013      AJ 			  Initial draft 
--*******************************************************************************************************
*/
session_start();
if(!isset($_SESSION['user_name'])){ 
	header('Location: index.php');
	
}
include_once("bin/functions.php");
ob_start();
$id = $_GET["payment_id"];
$deals = new kpn_manages();
$dealarray=$deals->getDealDtls($id);
$sql1=mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."'");
$user=mysql_fetch_array($sql1);

// Merchant key here as provided by Payu
$MERCHANT_KEY = "JBZaLc";

// Merchant Salt as provided by Payu
$SALT = "GQs7yium";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Kouponize - Deal</title>
	<script src="js/jquery.js"></script>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Kouponize" />
    <meta name="description" content="Koupon-ze - Localized Deal">
    <meta name="author" content="Anil Joshua, KrishnaSai Chintala">
	<!--FB Meta Tags-->
	<meta property="og:type" content="Free Localized Coupons"/> 
	<meta property="profile:first_name" content="Kouponize"/> 
	<meta property="profile:last_name" content="free koupons"/>
	<meta property="profile:username" content=""/>
	<meta property="og:title" content="Kouponize"/>
	<meta property="og:description" content="Kouponize showcases free coupons from an array of local businesses. Interested in a particular coupon -- 'Click  Claim and Redeem Coupon', verify the coupon code at the local business and redeem your coupon."/>
	<meta property="og:image" content="https://kouponize.com/img/logo-kpsmall.png"/>
	<meta property="og:url" content="http://www.kouponize.com"/>
	<meta property="og:site_name" content="Kouponize"/>
	<meta property="og:see_also" content="http://www.kouponize.com"/>
	<meta property="fWebsite  Descriptionb:admins" content="318664324940433"/>
	<!--Google Search Meta Tags-->
	<meta property="place:location:latitude" content="17.42655"/>
	<meta property="place:location:longitude" content="78.41487"/>
	<meta property="business:contact_data:street_address" content="Plot. No: 283, Jubliee Hills"/>
	<meta property="business:contact_data:locality" content="Hyderabad"/>
	<meta property="business:contact_data:postal_code" content="500033"/>
	<meta property="business:contact_data:country_name" content="India"/>
	<meta property="business:contact_data:email" content="reachout@kouponize.com"/>
	<meta property="business:contact_data:phone_number" content="+91 9849859336"/>
	<meta property="business:contact_data:website" content="http://www.kouponize.com"/>
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="css/mystyles.css">

	<script>
		var hash = '<?php echo $hash ?>';
		function submitPayuForm() {
		  if(hash == '') {
			  alert('nO hASH');
			return;
		  }
		  var payuForm = document.forms.payuForm;
		  payuForm.submit();
		}
	</script>

</head>

<body onload="submitPayuForm()" class="sticky-header">


    <div class="global-wrap">


        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
	<?php include("includes/header1.php"); ?>	
	<?php include("includes/search.php"); ?>

	<div class="gap"></div>
        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->


        <div class="container">
            <div class="row">
				<?php if(!empty($dealarray )){
				foreach($dealarray as $data)	{ ?>
						<?php $pay = $data['deal_cost']*0.10;
							  $rem = $data['deal_cost'] - $pay; ?>
                        <div class="col-md-4" >
							<a href="deal.php?deal_id=<?php echo $data['kpn_id']; ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo 'admin/'.$data['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $data['title']; ?>" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?php echo $data['title']; ?></h5>
                                    <p class="product-desciption"><?php echo $desc; ?></p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">₹<?php echo $data['deal_cost']; ?></span>
                                            </li>
                                            <li><span class="product-old-price">₹<?php echo $data['deal_orig_cost'];?></span>
                                            </li>
                                            <li><span class="product-save">Save <?php echo $data['deal_discount']; ?>%</span>
                                            </li>
                                        </ul>
                                    </div>
									<p class="product-location"></p>
									<div align="left" STYLE="Padding: 20px,0,0,30px;">
										<ul class="list coupon-list-prices">
											<li><span class="coupon-meta-title" style='font-size:9pt; color:black'>Pay to Claim (₹)</span>
												<span class="coupon-price" id="pay" style='float:right; display:block;'><?php echo $pay;?></span></li>
											<li>
											<li><span class="coupon-meta-title" style='font-size:9pt; color:black'>Pay Merchant (₹)</span>
												<span class="coupon-price" id='rem' style='float:right; display:block;'><?php echo $rem;?></span></li>
											<div class="coupon-meta"></div>
												
										</ul>	
									</div>
                                    <p class="product-location"></p>	
									<div align="left" STYLE="Padding: 20px,0,0,30px;">
										<ul class="list coupon-list-prices">
											<li>
												<li><span class="coupon-meta-title" style='font-size:9pt; color:black'><strong>Total (₹)</strong></span>
												<span class="coupon-price"><span class="coupon-new-price" id='tota' style='float:right; display:block;'><?php echo $data['deal_cost']; ?></span></span>
											<li>											
											<div class="coupon-meta"></div>
												
										</ul>	
									</div>	
									<p class="product-location"><i class="fa fa-map-marker"></i>&nbsp;<?php echo $data['company_name']; ?></p>	
								</div>
							</div>
							</a>
                        </div>
				<?php } }?>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Pay Via Credit/Debit Card</h3>
                            <form action="<?php echo $action; ?>" method="post" name="payuForm">
							      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
								  <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
								  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
								  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
								  <textarea name="productinfo" style="display:none;">Product Information</textarea>
								  <input type="hidden" name="surl" value="http://localhost/new/success.php?payment_id=<?php echo $id;?>" />
								  <input type="hidden" name="furl" value="http://www.kouponize.com/new"  />
								  
								  <input type="hidden" name="amount" value="500" />

                                <!-- <legend>Personal Information</legend> -->
                                <div class="form-group">
                                    <label for="">First & Last Name</label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="9999999999" value="<?php echo $user['mobile'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="example@email.com" value="<?php echo $user['email'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">No. Of Koupons</label>
                                    <input type="text" id="volume" class="form-control" placeholder="Example : 1" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>">		
									<script>  
									$(function() {
										$origPay = $('#pay').text();
										$origRem = $('#rem').text();
										$origTot = $('#tota').text();
										$('#volume').on('input', function() {
											$vol = $(this).val();
											if (($vol == '' || $vol == '0')) {
												$('#pay').html($origPay);
												$('#rem').html($origRem);
												$('#tota').html($origTot);
											}
											else{
												$('#pay').html($(this).val()*$origPay);
												$('#rem').html($(this).val()*$origRem);
												$('#tota').html($(this).val()*$origTot);
											}

										});
									});	
									</script>	
									
                                </div>								

                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h3>Pay Via PayU</h3>
                            <p>Important: You will be redirected to PayU's website to securely complete your payment.</p>
							  <?php if(!$hash) { ?>
								<input type="submit" value="Checkout via PayU" class="btn btn-primary"/>
							  <?php } ?>							
                        </div>
					</form>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>

        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->



        <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->

        <footer class="main">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row row-wrap">
                        <div class="col-md-3">
                            <a href="index.html">
                                <img src="img/logo.png" alt="logo" title="logo" class="logo">
                            </a>
                            <ul class="list list-social">
                                <li>
                                    <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                                </li>
                                <li>
                                    <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                                </li>
                                <li>
                                    <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                                </li>
                                <li>
                                    <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                                </li>
                            </ul>
                            <p>Urna class vivamus sem sed senectus fringilla tempor nibh vestibulum libero aliquam imperdiet quam dignissim erat risus tortor tincidunt a</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Sign Up to the Newsletter</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Metus praesent nec himenaeos at aptent himenaeos</p>
                                    <input type="submit" class="btn btn-primary" value="Sign Up" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Couponia on Twitter</h4>
                            <!-- START TWITTER -->
                            <div class="twitter-ticker" id="twitter-ticker"></div>
                            <!-- END TWITTER -->
                        </div>
                        <div class="col-md-3">
                            <h4>Recent News</h4>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">At at</a></h5>
                                        <p class="thumb-list-item-desciption">Vitae egestas felis maecenas massa</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Porta risus</a></h5>
                                        <p class="thumb-list-item-desciption">Placerat viverra vulputate facilisi odio</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Vulputate sociosqu</a></h5>
                                        <p class="thumb-list-item-desciption">Donec scelerisque orci leo hac</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Copyright © 2014, Your Store, All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 col-md-offset-2">
                            <div class="pull-right">
                                <ul class="list-inline list-payment">
                                    <li>
                                        <img src="img/payment/american-express-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/cirrus-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/discover-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/ebay-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/maestro-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/mastercard-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                    <li>
                                        <img src="img/payment/visa-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src="js/boostrap.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/flexnav.min.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/tweet.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/fitvids.min.js"></script>
        <script src="js/mail.min.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/masonry.js"></script>
        <script src="js/nicescroll.js"></script>

        <!-- Custom scripts -->
        <script src="js/custom.js"></script>
    </div>
</body>

</html>
