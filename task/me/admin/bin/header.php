<?php include("top.php");
include_once("./bin/onLoad.php"); ?>
<body>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-success dker aside-sm nav-vertical" id="nav">
      <section class="vbox">
			<header class="bg-black nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="icon-reorder"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen"><img src='images/logo.png'></a>
          <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="icon-comment-alt"></i>
          </a>
        </header>
        <section>
          <!-- nav -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
				 <li>
				<a href="index.php">
                  <i class="icon-home"></i>
                  <span>Home</span>
                </a>
              </li>  
			  <?php
				if($_SESSION['login_type']=="merchant"){
				echo "
			  <li>
                <a href='profile.php'>
                  <i class='icon-file-text'></i>
                  <span>Profile</span>
                </a>
              </li> 			  
			  <li>
                <a href='koupon_info.php'>
                  <i class='icon-list-alt'></i>
                  <span>Koupon Info</span>
                </a>
              </li>
			   <li>
                <a href='koupon_sold.php'>
                  <i class='icon-cloud-upload'></i>
                  <span>Koupons Availed</span>
                </a>
              </li>";}
			  else if($_SESSION['login_type']=="admin"){
				  echo "
				  <li>
                <a href='user_info.php'>
                  <i class='icon-user'></i>
                  <span>User Info</span>
                </a>
              </li>              
			  <li>
                <a href='business_info.php'>
                  <i class='icon-thumbs-up'></i>
                  <span>Business Info</span>
                </a>
              </li>              
			  <li>
                <a href='validate_merchant.php'>
                  <i class='icon-check'></i>
                  <span>Validate Merchant</span>
                </a>
              </li>";}
			  ?>
			  	 <li>
				<a href="create_koupon.php">
                  <i class="icon-credit-card"></i>
                  <span>Create Koupon</span>
                </a>
              </li> 
			  <li>
				<a href="create_loyalty_koupon.php">
                  <i class="icon-group"></i>
                  <span>Customer Engagement</span>
                </a>
              </li>
			  <li>
				<a href="gallery.php">
                  <i class="icon-picture"></i>
                  <span>Gallery</span>
                </a>
              </li> 			  
                </ul>
              </li> 
                </ul>
              </li>
          </nav>
          <!-- / nav -->
        </section>
       <!--  <footer class="footer bg-gradient hidden-xs">
         <a href="modal.lockme.php" data-toggle="ajaxModal" class="btn btn-sm btn-link m-r-n-xs pull-right">
            <i class="icon-off"></i>
          </a>
          <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
            <i class="icon-reorder"></i>
          </a>
        </footer>-->
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header bg-black navbar navbar-inverse">
          <div class="collapse navbar-collapse pull-in">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                    <img src='<?php echo $_SESSION['image']; ?>'>
                  </span>
                 <?php echo $_SESSION['email']; ?> 
				<b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">                 
                  <li>
                    <a href="profile.php">Profile</a>
                  </li>                  
                  <!--<li>
                    <a href="docs.php">Help</a>
                  </li> -->
                  <li>
                    <a href="bin/logout.php">Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </header>