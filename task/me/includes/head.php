        <header class="main main-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.php" class="logo">
                            <img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                    </div>
                    <div class="col-md-4">
                        <ul class="login-register">
							<?php if(isset($_SESSION['user_name'])){ ?> 
								<?php if((isset($_COOKIE["Kouponize"])) OR (isset($_GET['selectedCity']))){ ?>
									<li><a class="popup-text" href="#location-dialog" data-effect="mfp-move-from-top"><i class="fa fa-map-marker"></i>
									<?php if((isset($_GET['selectedCity']))){echo $_GET['selectedCity'];} else {echo $_COOKIE["Kouponize"]; }?> </a></li>
								<?php } else {?>
									<li><a class="popup-text" href="#location-dialog" data-effect="mfp-move-from-top"><i class="fa fa-map-marker"></i>Location</a></li>
								<?php } ?>
								<li><a href="profile.php" ><i class="fa fa-sign-in"></i>Profile</a></li>
								<li><a href="./bin/logout.php"><i class="fa fa-edit"></i>Logout</a></li>							
							<?php } else {?>
								<?php if((isset($_COOKIE["Kouponize"])) OR (isset($_GET['selectedCity']))){ ?>
									<li><a class="popup-text" href="#location-dialog" data-effect="mfp-move-from-top"><i class="fa fa-map-marker"></i>
									<?php if((isset($_GET['selectedCity']))){echo $_GET['selectedCity'];} else {echo $_COOKIE["Kouponize"]; }?> </a></li>
								<?php } else {?>
									<li><a class="popup-text" href="#location-dialog" data-effect="mfp-move-from-top"><i class="fa fa-map-marker"></i>Location</a></li>
								<?php } ?>								
								<li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a></li>
								<li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a></li>
							<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
