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
//$vol=$_GET["volume"];

//return get objects from payU
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="GQs7yium";
$vol=$_POST["udf1"];


?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Kouponize - Free Localized Coupons</title>
	<script src="js/jquery.js"></script>
	<!--<script>
	$(function() {
	$.magnificPopup.open({
		  items: {
			  src: '#success-confirm',
			  type: 'inline'
		  },
		  closeBtnInside: true
	});			
	});				
	</script>	-->
	
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
	<link rel="stylesheet" href="css/tsc_tables1.css" />
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="css/mystyles.css">


</head>

<body class="sticky-header">


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
                        <div class="col-md-3" >
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
	
									<p class="product-location"><i class="fa fa-map-marker"></i>&nbsp;<?php echo $data['company_name']; ?></p>	
								</div>
							</div>
							</a>
                        </div>
				<?php } }?>
                <div class="col-md-8">
                    <div class="row">
						<article class="post">
							<header class="post-header"><a class="post-link" href="#">Pyment Successful</a>
							</header>
							<div class="post-inner">
								<h4 class="post-title"><a href="post-sidebar-right.html"><?php echo $data['title']; ?></a></h4>
								<ul class="post-meta">
									<li><i class="fa fa-calendar"></i><a href="#"><?php echo date(DATE_RFC2822);?></a>
									</li>
									<li><i class="fa fa-user"></i><a href="#"><?php echo $email;?></a>
									</li>
								</ul><br>
								<p>Your Payments towards <?php echo $data['company_name']; ?> has been successful.</p>
								<p>We Will email you a receipt confirming your payment shortly. kouponize will appear on your bank statement</p>
								<p>Your Koupon Codes are : </p>
							</div>
							<div class="col-md-12">
								<div class="col-md-7">
									<table class="tsc_table_s8" summary="Sample Table" style="width:80%;">
										<tfoot>
											<tr>
												<th scope="row">Total</th>
												<td colspan="7">(₹) <?php echo ($pay*$vol)+($rem*$vol);?></td>
											</tr>
										</tfoot>
										<tbody>
											<tr >
												<td></td>
												<td></td>
											</tr>
											<tr class="odd" style="background:#f8f8f8;border-top:1px solid #D8D8D8;border-bottom:1px solid #D8D8D8;">
												<td>Amnt. Paid</td>
												<td>(₹) <?php echo $pay*$vol;?></td>
											</tr>
											<tr class="odd">
												<td>Pay Merchant</td>
												<td>(₹) <?php echo $rem*$vol;?></td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>	
								<div class="col-md-5">
									<img src="img/payment/payu.png"></img>
								</div>								
							</div>
							<div class="col-md-12">
								<div class="alert alert-success" style="font-size: 12px;">
									Please carry the Email confirmation of the koupons and produce to the merchant to avail the offer/discount.
									volume <?php echo $udf1;?>
								</div>
							</div>
						</article>
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
	
		<div id="success-confirm" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
			<img src="img/payment/payment_kpn.png"></img>
		</div>


        <!-- Scripts queries -->
        <script src="js/boostrap.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/flexnav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
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
