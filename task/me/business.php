<?php
/*
-- *******************************************************************************
-- Copyright (c)  2013  kouponize.com
-- All rights reserved
-- *******************************************************************************
--
-- PROGRAM NAME
-- index.php
--
-- DESCRIPTION
--  Launch Home screen
-- 
-- 
-- LAST UPDATE DATE  02-May-2014
--   Date the program has been modified for the last time
-- 
-- HISTORY
-- =======
-- 
-- VERSION  DATE             AUTHOR(S)         DESCRIPTION
-- ------- ---------------  ---------------   ------------------------------------
-- 1001     09-SEP-2013      AJ 			  Initial draft 
--********************************************************************************
*/
session_start();

include("./bin/functions.php");
$follow = new user_det();
$user=$follow->viewFollowing();
$posting = new kpn_manages();
$updatesarray=$posting->viewDeals(0); 
$business=$updatesarray[0];
if(!$business){header("Location:error.php");}


?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Business Profile</title>
	<script src="js/jquery.js"></script>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="deals & Offers" />
    <meta name="description" content="deals & Offers">
    <meta name="author" content="Anil Joshua, KrishnaSai Chintala">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'> 
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
	<link rel="stylesheet" href="css/schemes/teal.css">

</head>

<body class="sticky-header">
    <div class="global-wrap">

        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
		<?php include("includes/header1.php"); ?>
		<?php include("includes/search.php"); ?>		
		<?php include("includes/merchantcarousel.php"); ?>

        <div class="gap-custom"></div>


        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->


        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-page-meta box">
                        <h4><?php echo $business['company_name'];?></h4>
                        <p><?php echo get_merchant_details($_GET["business_id"],"about_me");?></p>
                        <ul class="list product-page-meta-info">
                            <li>
                                <ul class="list product-page-meta-price-list">
                                    <li><span class="product-page-meta-title">Phone Number </span><span class="product-page-meta-price"><?php echo  $business['mobile'];?></span>
                                    </li>
                                </ul>
                            </li>
                            <li><h4>Location</h4>
                                <!-- COUNTDOWN -->
                                <p><?php echo  $business['address_line1'];?><br><?php echo  $business['address_line2'];?><br><?php echo  $business['address_line3'];?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-3" data-toggle="tab"><i class="fa fa-comments"></i>Coupons</a>
                            </li>
                            <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>Location</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-info"></i>Photos</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="tab-1">
                                <div class="row text-smaller">
                                    <div class="col-md-4">
                                        <h4>About</h4>
                                        <p>Libero laoreet imperdiet tempor parturient porttitor luctus aliquam at nibh fusce laoreet per potenti pharetra lacinia ultricies curabitur potenti sociosqu</p>
                                        <p>Sed malesuada diam adipiscing ridiculus suspendisse et senectus sed sem primis neque hendrerit litora quisque cubilia lacinia inceptos blandit sollicitudin</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>In a Nutshel</h4>
                                        <p>Leo potenti urna morbi interdum ac a neque ridiculus hendrerit</p>
                                        <p>Mi sapien mattis imperdiet duis metus class cursus facilisis nulla maecenas facilisi magnis lacinia curabitur taciti accumsan rutrum auctor lorem natoque aliquet posuere donec inceptos aliquet aenean pharetra dolor consectetur</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>The Fine Print</h4>
                                        <p>Malesuada vel dui consequat commodo ornare cubilia integer euismod sollicitudin donec sapien aliquet cum convallis ornare semper orci convallis sed nibh ultrices urna nisl sociosqu bibendum pulvinar tortor mauris potenti etiam adipiscing commodo ultrices ridiculus sit nam eu ut parturient hac tristique volutpat gravida lobortis iaculis ornare elit habitasse sagittis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="google-map-tab">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div id="map-canvas" style="width:100%; height:300px;"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list">
                                            <li>Anchorage</li>
                                            <li>1947 E 5th Ave</li>
                                            <li>Anchorage, Alaska 99501</li>
                                            <li>907-522-8699</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade  in active" id="tab-3">
							<div class="row">
								<?php
									include('admin/bin/SimpleImage.php');
									$follow = new user_det();
									$user=$follow->viewFollowing();
									$posting1 = new kpn_manages();
									$event=0;
									if(isset($_REQUEST['id'])){
										$event = $_REQUEST['id'];
										$updatesarray1=$posting1->viewDeals($event);
									}
									else {
										$updatesarray1=$posting1->viewDeals($event);
									}
									if(!empty($updatesarray1 )){
										foreach($updatesarray1 as $data)	{
											
											$desc=$data['short_desc'];
											$desc = strip_tags($desc);

											if (strlen($desc) > 100) {
												// truncate desc
												$desc = substr($desc, 0, 100);
												//$stringCut = substr($desc, 0, 100);

												// make sure it ends in a word so assassinate doesn't become ass...
												//$desc = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
											}
											else {
												$rem = 100-strlen($desc);
												$desc = str_pad($desc,$rem);
											}
											
											//Convert to date
											
											$datestr=$data['deal_end_date'];//Your date
											$date=strtotime($datestr);//Converted to a PHP date (a second count)

											//Calculate difference
											$diff=$date-time();//time returns current time in seconds
											$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
											$hours=round(($diff-$days*60*60*24)/(60*60));
											$companyNameUrl = str_replace(' ', '-',$data['company_name']); 
											$dealUrl = str_replace(' ', '-',$data['title']); 

								?>					
							
							
								<!-- START COMMENTS -->
						<!-- <div>event : <?php echo $event; echo $_COOKIE["Kouponize"];?></div> -->
                        <div class="col-md-3 col-masonry" >
							<a href="deal.php?deal_id=<?php echo $data['kpn_id']; ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo 'admin/'.$data['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $data['title']; ?>" />
									<span class="product-label-custom label label-danger-custom">₹<?php echo $data['deal_cost']; ?></span>
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?php echo $data['title']; ?></h5>
                                    <div ><span class="product-time"><i class="fa fa-clock-o"></i> <?php echo $days ?> days <?php echo $hours ?> hrs remaining</span>
                                        <ul class="product-actions-list">
										<?php if(isset($_SESSION['user_name'])){ ?>
                                            <li><a href="checkout.php?payment_id=<?php echo $data['kpn_id'];?>&etoken=<?php echo md5($data['title']);?>&session=<?php echo md5($id);?>" class="btn btn-sm" data-toggle="tooltip" data-placement="top" data-title="Claim This Coupon"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
										<?php }
										else { ?>
                                            <li>
												<a href="#login-dialog" data-effect="mfp-move-from-top" class="btn btn-sm popup-text" data-toggle="tooltip" data-placement="top" data-title="Claim This Coupon">
													<i class="fa fa-shopping-cart"></i>
												</a>
										<?php } ?>
                                            <li>
												<a href="deal.php?deal_id=<?php echo $data['kpn_id']; ?>" class="btn btn-sm" data-toggle="tooltip" data-placement="top" data-title="Details">
													<i class="fa fa-bars"></i>
												</a>
											</li>
											<!-- <i class="fa fa-home" style="color: red;"></i> -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
							</a>
                        </div> 
								<!-- END COMMENTS -->
								<?php }}?>	
                            </div></div>
                            <div class="tab-pane fade" id="tab-4">

								<div class="row row-wrap" id="popup-gallery">
									<?php 
									$dirname = "./admin/media/gallery/".$_GET["business_id"]."/";
									$images = glob($dirname."*.**g");
									if(!$images){echo "<h4>Sorry, No images found.</h4>";}
									foreach($images as $image) {
									?>	
									
										<div class="col-md-3">
											<!-- HOVER IMAGE -->
											<a class="hover-img popup-gallery-image" href="<?php echo $image; ?>" data-effect="mfp-zoom-out">
												<img src="<?php echo $image; ?>" alt="Image Alternative text" /><i class="fa fa-resize-full hover-icon"></i>
											</a>
										</div>
										
									<?php
									}
									?>									
								</div>

                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                    <div class="gap gap-small"></div>

                </div>
            </div>
			<div class="gap gap-small"></div>
        </div>


	

        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->



        <!-- //////////////////////////////////
	//////////////MAIN FOOTER////////////// 
	////////////////////////////////////-->
	<?php include("includes/footer.php"); ?>
        <!-- //////////////////////////////////
	//////////////END MAIN  FOOTER///////// 
	////////////////////////////////////-->



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
