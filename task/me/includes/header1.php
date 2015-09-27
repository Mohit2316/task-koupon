        <!-- <header class="main"> -->
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.php" class="logo">
                            <img src="img/Logo.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-4">
                        <ul class="login-register">
							<?php 
							if(isset($_SESSION['user_name'])){ ?> 
								<li><a href="profile.php" ><i class="fa fa-sign-in"></i>Profile</a></li>
								<li><a href="./bin/logout.php"><i class="fa fa-edit"></i>Logout</a></li>							
							<?php } 
							else {?>								
								<li><a href="login.php" ><i class="fa fa-sign-in"></i>Sign in / Register</a></li>
							<?php } ?>
                        </ul>
                    </div>
                </div>
            </div> -->
            <header class="main">
                <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar-two" id="nav-category">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar reduced-width-1 centered"></span>
        <span class="icon-bar reduced-width-2 centered"></span>                        
      </button>
      <a href="index.php" class="logo">
                            <img src="img/Logo.png" alt="Image Alternative text" title="Image Title" />
                        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <?php 
                            if(isset($_SESSION['user_name'])){ ?> 
                                <li><a href="profile.php" ><i class="fa fa-sign-in"></i>Profile</a></li>
                                <li><a href="./bin/logout.php"><i class="fa fa-edit"></i>Logout</a></li>                            
                            <?php } 
                            else {?>                                
                                <li><a href="login.php" ><i class="fa fa-sign-in"></i>Sign in / Register</a></li>
                            <?php } ?>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar-two">
            <ul class="nav navbar-nav">
                    <?php if(isset($_SESSION['user_name'])){ ?>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="100"><i class="fa fa-user"></i>My Feed</a>
                    </li><?php } ?>
                    <li class="active"><a href="javascript:void(0)" class="nav_stack_cpn" rel="0" ><i class="fa fa-ticket"></i>All</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="1"><i class="fa fa-cutlery"></i>Food & Drink</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="2"><i class="fa fa-calendar"></i>Events</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="3"><i class="fa fa-female"></i>Beauty</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="4"><i class="fa fa-bolt"></i>Fitness</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="5"><i class="fa fa-headphones"></i>Electronics</a>
                    </li>
                    <li><a href="javascript:void(0)" class="nav_stack_cpn" rel="7"><i class="fa fa-umbrella"></i>Fashion</a>
                    </li>
                </ul>
          </div>
  </div>

  
  
</nav>
        </header>

		
		
		<?php 
	if((isset($_SESSION['user_name'])) AND ($_SESSION['category']==0) AND (!isset($_SESSION['catViews'])) ){ ?>
		<!-- added by AJ for Auto category popup 1004  -->
		<script>
			$(function() {
			$.magnificPopup.open({
				  items: {
					  src: '#follow-dialog',
					  type: 'inline'
				  },
				  closeBtnInside: true
			});			
			});				
		</script>
		<?php $_SESSION['catViews']=1;
	 } ?>
		
    <div id="location-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-map-marker dialog-icon"></i>
        <h3>Location</h3>
        <h5>Hi, Let us know your city to show best deals.</h5>
		<div class="err" id="add_err"></div>
            <form class="dialog-form" id="location-form" method="GET" action="./index.php">
				<div class="form-group">
					<label>City</label>
					<select name="selectedCity" id="selectedCity" class="form-control">>
						<option vlaue="Hyderabad">Hyderabad</option>
						<option vlaue="Bangalore">Bangalore</option>
						<option vlaue="Pune">Pune</option>
						<option vlaue="Mumbai">Mumbai</option>
					</select>
				</div>
                <input type="button" id="location" value="Go" class="btn btn-primary">
            </form>
    </div>
		
        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
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
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
            </ul>
        </div>


        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
			<div id="add_err" style='color:red;font-size:12px;'></div>
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
                <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>


        <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="icon-retweet dialog-icon"></i>
            <h3>Password Recovery</h3>
            <h5>Fortgot your password? Don't worry we can deal with it</h5>
            <form class="dialog-form">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="span12">
                <input type="submit" value="Request new password" class="btn btn-primary">
            </form>
        </div>
        <!-- END LOGIN REGISTER LINKS CONTENT -->

	<!-- Reg Success Dialouge -->
    <div id="register-success-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="icon-retweet dialog-icon"></i>
		<i class="fa fa-edit dialog-icon"></i>
        <h3>Registration Successful</h3>
		<legend></legend>
        <h5>An Email has been sent with the activation link. Please follow the steps mentioned in the mail to activate your account.</h5>
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
		
        <div id="follow-dialog" class="mfp-with-anim mfp-hide mfp-dialog-follow clearfix">
            <h3>Follow Categories</h3>
            <h5>Follow topics to see the best deal about them ..........</h5>
			<div id="add_err" style='color:red;font-size:12px;'></div>
            <form class="dialog-form">
                    <div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/food.jpg" alt="cat:food" title="Food & Wine" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Food & Drrinks
									</label>
								</div>
							
                        </a>
                    </div>
                    <div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/events.jpg" alt="cat:events" title="Events Around" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Events
									</label>
								</div>
                        </a>
                    </div>                    
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/beauty.jpg" alt="cat:beauty" title="Beauty" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Beauty
									</label>
								</div>
                        </a>
                    </div>                    
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/fitness.jpg" alt="cat:fitness" title="Health & Fitness" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Fitness
									</label>
								</div>
                        </a>
                    </div>                    
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/electronics.jpg" alt="cat:electronics" title="Electronics" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Electronics
									</label>
								</div>
                        </a>
                    </div>                    
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/kids.jpg" alt="cat:kids" title="Kids" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Kids
									</label>
								</div>
                        </a>
                    </div>
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/fashion.jpg" alt="cat:fashion" title="Fashion & Trends" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Fashion
									</label>
								</div>
                        </a>
                    </div>
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/shopping.jpg" alt="cat:shopping" title="Shopping" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Shopping
									</label>
								</div>
                        </a>
                    </div>
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/activities.jpg" alt="cat:activities" title="Activities" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Activities
									</label>
								</div>
                        </a>
                    </div>
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/travel.jpg" alt="cat:travel" title="Travel & Destination" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />Travel
									</label>
								</div>
                        </a>
                    </div>
					<div class="span333">
                        <!-- HOVER IMAGE -->
                        <a class="hover-img" href="#">
                            <img src="img/cat/800x600.png" alt="cat:all" title="All Categories" />
								<div class="radio">
									<label>
										<input type="radio" class="i-radio" name="primaryAddressOption" />All Categories
									</label>
								</div>
                        </a>
                    </div>  
					<input type="button" id="follow" value="Save Preferences" class="btn btn-primary">
				</form>
        </div>
		