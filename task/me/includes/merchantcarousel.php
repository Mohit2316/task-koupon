        <!-- TOP AREA -->
        <div class="top-area">
            <div id="owl-carousel-slider2">
                <div>
                    <div class="bg-holder">
                        <img src="img/backgrounds/BusinsessProfileBG1.jpg" alt="Image Alternative text" title="Bridge" />
                        <div class="bg-mask"></div>
                        <div class="bg-front vert-center text-white text-center">
                            <h2 class="text-hero"><?php echo $business['company_name'];?></h2> 
							<p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo  $business['address_line3'];?>, <?php echo  $business['city'];?></</p>
							
							<div class="gap"></div>
							
                            <div class="countdown-cust countdown-big" >
								<a class="btn btn-lg btn-ghost-ban btn-white-ban">
									<i class="fa fa-shopping-cart"></i>
									<?php echo get_merchant_details($_GET["business_id"],"koupons");?> Koupons
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								
								<a class="btn btn-lg btn-ghost-ban btn-white-ban">
									<i class="fa fa-ticket"></i>
									<?php echo get_merchant_details($_GET["business_id"],"tot_koupons_sold");?> Bought
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
								
								<a class="btn btn-lg btn-ghost-ban btn-white-ban">
									<i class="fa fa-magnet"></i>
									<?php echo get_merchant_details($_GET["business_id"],"followers");?> Followers
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA -->
