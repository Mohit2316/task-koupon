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
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Kouponize - Free Localized Coupons</title>
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
            <div class="row row-wrap">
                <div class="col-md-9">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">When will I receive my coupon code?</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapse-1">
                                <div class="panel-body">
                                    <p>You will receive an SMS and an e-mail immediately to your registered mobile number and email account once you claim a deal. In case you haven’t received them, please do drop in a mail with the coupon details to support@koupinze.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-2">Is it important for me to sign-up to utilize Kouponize.com?</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapse-2">
                                <div class="panel-body">
                                    <p>Yes. We make it mandatory to sign-up to Kouponize to claim a particular deal. This is because, we believe you will have a quicker and smoother transaction, and will make your experience on Kouponize much more enjoyable. However, to view the site and its features, you need not sign-up.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-3">I don't want to receive any e-mails from you anymore. What should I do?</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapse-3">
                                <div class="panel-body">
                                    <p>You can unsubscribe from our e-mails by clicking the ‘Unsubscribe’ link at the bottom of the e-mail you have received from us. You will do us a favour if you let us know your reason(s) for unsubscribing, so that we can keep this in mind and serve you better in the future.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-4">How long do I have to wait to use my Coupons once I’ve claimed it?</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapse-4">
                                <div class="panel-body">
                                    <p>Most of the coupons can be used immediately upon claiming. However do check the rules and the fine print once before using a coupon.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-5">Do I need to mention Kouponize before using a coupon?</a></h4>
                            </div>
                            <div class="panel-collapse collapse in" id="collapse-5">
                                <div class="panel-body">
                                    <p>Yes. Please do mention to the business establishment that the current coupon has been claimed from Kouponize.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <aside class="sidebar-right">
                        <h4>Still Have Questions?</h4>
                        <form class="box">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Ask Question" />
                        </form>
                    </aside>
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
                            <p>Eget luctus nam convallis ligula pretium mi elementum fusce eu dignissim rutrum sodales quisque et class laoreet elementum a ad</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Sign Up to the Newsletter</h4>
                            <div class="box">
                                <form>
                                    <div class="form-group mb10">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <p class="mb10">Mauris parturient enim parturient cras commodo fusce</p>
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
                                        <h5 class="thumb-list-item-title"><a href="#">Pulvinar mattis</a></h5>
                                        <p class="thumb-list-item-desciption">Pretium dignissim et netus sagittis</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Nascetur mauris</a></h5>
                                        <p class="thumb-list-item-desciption">Vehicula facilisi et faucibus morbi</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/70x70.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                        <h5 class="thumb-list-item-title"><a href="#">Sodales ad</a></h5>
                                        <p class="thumb-list-item-desciption">Ac tempor mauris aliquam lectus</p>
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
        <script src="js/jquery.js"></script>
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
