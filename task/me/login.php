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

<body class="sticky-header" background="img/bg-14.jpg">

        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
	<?php include("includes/header2.php"); ?>




        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->


        <div class="container">
        <div class="gap"></div>
            <div class="row row-wrap">
                <div class="col-md-8">
                    <!-- START BOOTSTRAP CAROUSEL -->
					<div class="col-md-5">
						<a href="index.php"><img src="img/logo-foot.png"></img></a>
					</div>
					<div class="gap"></div>
					<div class="col-md-10">
						<p style="color:white;">Login / Register to avail a wide-array of coupons from your favorite local stores ranging from the newest restaurants to the freshest fashion outlets.</p>
						<p style="color:white;">Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
						<div class="gap"></div><div class="gap"></div>
						<p style="color:white;">Copyright © 2014, koupon.me, All Rights Reserved</p>
					</div>
                    <!-- END BOOTSTRAP CAROUSEL -->
                </div>
                <div class="col-md-4">
					<div id="login-dialog" class="mfp-with-anim mfp-dialog clearfix">
						<h3>Member Login</h3>
						<h5>Welcome back, friend. Login to get started</h5>
						<div id="add_err" style='color:red;font-size:12px;'></div>
						<form class="dialog-form">
							<div class="form-group">
								<label>E-mail</label>
								<input id="logemail" type="text" placeholder="email@domain.com" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input id="logpassword" type="password" placeholder="My password" class="form-control">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Remember me
								</label>
							</div>
							<input type="Button" id="login" value="login" class="btn btn-primary">
						</form>
						<ul class="dialog-alt-links">
							<li><a class="kpn-log-reg" href="javascript:void(0)" data-effect="mfp-zoom-out">Not member yet</a>
							</li>
							<li><a class="kpn-log-pwd" href="javascript:void(0)" data-effect="mfp-zoom-out">Forgot password</a>
							</li>
						</ul>
					</div>


					<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
						<h3>Member Register</h3>
						<h5>Ready to get best offers? Let's get started!</h5>
						<div id="add_err_reg" style='color:red;font-size:12px;'></div>
						<form class="dialog-form">
							<div class="form-group">
								<label>E-mail</label>
								<input id="email" type="text" placeholder="email@domain.com" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input id="password" type="password" placeholder="My secret password" class="form-control">
							</div>
							<div class="form-group">
								<label>Repeat Password</label>
								<input id="repeat" type="password" placeholder="Type your password again" class="form-control">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Your Area</label>
										<input id="city" type="text" placeholder="Hyderabad" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile</label>
										<input id="mobile" type="text" placeholder="12345" class="form-control">
									</div>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox">Get hot offers via e-mail
								</label>
							</div>
							<input type="submit" id="reg_user" value="Sign up" class="btn btn-primary">
						</form>
						<ul class="dialog-alt-links">
							<li><a class="kpn-log-log" href="javascript:void(0)" data-effect="mfp-zoom-out">Already member</a>
							</li>
						</ul>
					</div>


					<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
						<h3>Password Recovery</h3>
						<div class="col-md-14">
							<p>Fortgot your password? Don't worry we can deal with it</p>
						</div>						
						<form class="dialog-form">
							<div class="form-group">
								<div id="forgot-error" style='color:red;font-size:12px;'></div>
								<label id="forgoteml">E-mail</label>
								<input type="text" id="emailfgt" placeholder="email@domain.com" class="form-control">							
							</div>
							<input type="submit" id="forgot-pass" value="Request new password" class="btn btn-primary">
							<input type="submit" id="login1" value="Login" class="btn btn-primary">
						</form>
					</div>
					<!-- END LOGIN REGISTER LINKS CONTENT -->
					
					<!-- Reg Success Dialouge -->
					<div id="register-success-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
						<i class="icon-retweet dialog-icon"></i>
						<i class="fa fa-edit dialog-icon"></i>
						<h3>Registration Successful</h3>
						<legend></legend>
						<div class="col-md-14">
							<p>An Email has been sent with the activation link. Please follow the steps mentioned in the mail to activate your account.</p>
						</div>
						<div class="row-fluid"></div>
					</div>
					<!-- Reg Success Dialouge END-->

					<!-- Cat Choice Success Dialouge -->
					<div id="cat-success-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
						<i class="icon-retweet dialog-icon"></i>
						<h3>We Noted Your Preferences</h3>
						<legend></legend>
						<h5>Thank you for your selection. You may continue with your deals and ofers</h5>
						<div class="row-fluid"></div>
					</div>
					<!-- Cat Choice Success Dialouge END-->
					
                </div>
            </div>

        </div>

	

        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->

        <!-- Scripts queries -->
        <script src="js/boostrap.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/flexnav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/tweet.min.js"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
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
</body>

</html>
