<?php
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

        <div class="gap"></div>


        <!-- //////////////////////////////////
	//////////////END MAIN HEADER////////// 
	////////////////////////////////////-->


        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->


        <div class="container">
            <div class="row row-wrap">
                <div class="col-md-6">
                    <div id="map-canvas1" style="width:100%; height:300px;"></div>
                </div>
                <div class="col-md-3">
                    <form name="contactForm" id="contact-form" class="contact-form" method="post" action="includes/mail/index.html">
                        <fieldset>
                            <div class="form-group">
                                <label>Name</label>
                                <div class="bg-warning form-alert" id="form-alert-name">Please enter your name</div>
                                <input class="form-control" id="name" type="text" placeholder="Enter Your name here" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="bg-warning form-alert" id="form-alert-email">Please enter your valid E-mail</div>
                                <input class="form-control" id="email" type="text" placeholder="You E-mail Address" />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <div class="bg-warning form-alert" id="form-alert-message">Please enter message</div>
                                <textarea class="form-control" id="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="bg-warning alert-success form-alert" id="form-success">Your message has been sent successfully!</div>
                            <div class="bg-warning alert-error form-alert" id="form-fail">Sorry, error occured this time sending your message</div>
                            <button id="send-message" type="submit" class="btn btn-primary">Send Message</button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3">
                    <h5><strong>Contact Info</strong></h5>
                    <p>For any issues or concerns, please contact us in the below address :</p>
					<ul class="list">
						<li><i class="fa fa-map-marker"></i> Location: Plot. No: 283, Jubilee Hills, Hyderabad - 500033</li>
						<li><i class="fa fa-phone"></i> Phone: +91-9849-859-336</li>
						<li><i class="fa fa-envelope"></i> E-mail: <a href="#">reachout@kouponize.com</a>
						</li>
					</ul>
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
