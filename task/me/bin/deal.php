<?php
session_start();
include_once("bin/functions.php");
include_once("includes/get_deal.php");
$follow = new user_det();
$user=$follow->viewFollowing();
$deals = new kpn_manages();
$_SESSION['kpn_id']=$id;
$dealarray=$deals->getDealDtls($id);

if(!empty($dealarray )){
	foreach($dealarray as $data)	{ ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
					<article class="post">
                        <div class="post-inner">
                            <h4 class="post-title"><?php echo $data['company_name'];?></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-tags"></i><?php echo $data['address_line1'];?>,<?php echo $data['city'];?></a>
                                </li>
                            </ul>
                        </div>
					
						<div class="post-inner">				
							<div class="fotorama">
								<img src="admin/<?php echo $data['image_large']; ?>" alt="Image Alternative text" title="cascada" />
							</div>
						</div>
					</article>
                    <div class="gap gap-small"></div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-tag"></i>The Deal</a>
                            </li>
                            <li><a href="#google-map-tab" data-toggle="tab"><i class="fa fa-map-marker"></i>Location</a>
                            </li>
							<!--
                            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-comments"></i>How it Works</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-info"></i>The Company</a>
                            </li>  -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <h4><strong><?php echo $data['title']; ?></strong></h4>
								<p><?php echo ereg_replace("\n",'<br>',$data['long_desc']); ?></p>                            
							</div>
							
                            <div class="tab-pane fade" id="google-map-tab">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div id="map-canvas" style="width:100%; height:300px;"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list">
                                            <li><small><?php echo $data['name'];?></small></li>
                                            <li><i class="fa fa-home"></i>&nbsp;<small><?php echo $data['address_line1'];?></small></li>
                                            <li><small><?php echo $data['address_line2'];?></small></li>
                                            <li><small><?php echo $data['address_line3']; ?></small></li>
											<li><small><i class="fa fa-phone-square"></i>&nbsp;<?php echo $data['mobile']; ?></small></li>
                                        </ul> <br />
										
										<?php $addresses=$deals->viewAddress($data['created_by']);
										if(!empty($addresses)){
											$a=1;
											foreach($addresses as $address){
												$a++;?>
												<ul class="list">
													<li><small><i class="fa fa-home"></i>&nbsp;<?php echo $address['address_line1'];?></small></li>
													<li><small><?php echo $address['address_line2'];?></small></li>
													<li><small><?php echo $address['address_line3']; ?></small></li>
													<li><small><i class="fa fa-phone-square"></i>&nbsp;<?php echo $address['mobile']; ?></small></li>
												</ul><br />
											<?php }
										} ?>
										
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <!-- START COMMENTS -->
								<p><strong>Kouponize</strong> showcases free coupons from an array of local businesses. Interested in a particular coupon -- Click on <br><strong>"Claim Coupon"</strong>, verify the coupon code at the local business and redeem your coupon.</br></br> Read the <strong>"Rules"</strong> section of the coupon. Each coupon includes a section of rules that highlight how the coupons may be used. Make sure you are  comfortable with the rules before claiming a coupon.</p>
								<a href="contact.php" class="btn btn-primary">Ask Question</a>

                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                <h3><?php echo $data['company_name']; ?></h3>
                                <p><?php echo $data['about_me']; ?></p>
								<a href="<?php echo $data['website']; ?>" class="btn btn-primary">Company Website <i class="fa fa-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="gap gap-small"></div>
                    <h3 class="mb20">Top Deals For You </h3>
                    <div class="row row-wrap">
					<?php 
					$similar = new kpn_manages();
					$similararray=$similar->viewDeals($data['menu_id']);
					if(!empty($similararray )){
						for($iter=0;$iter<3;$iter=$iter+4)	{ 

						if($iter<(count($similararray))){	
							$desc=$similararray[$iter]['short_desc'];
							$desc = strip_tags($desc);

							if (strlen($desc) > 100) {
								// truncate desc
								$desc = substr($desc, 0, 100);
								//$stringCut = substr($desc, 0, 100);

								// make sure it ends in a word so assassinate doesn't become ass...
								//$desc = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
							}
							//Convert to date
							
							$datestr=$similararray[$iter]['deal_end_date'];//Your date
							$date=strtotime($datestr);//Converted to a PHP date (a second count)

							//Calculate difference
							$diff=$date-time();//time returns current time in seconds
							$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
							$hours=round(($diff-$days*60*60*24)/(60*60)); ?>
						
							<a class="col-md-4" href="deal.php?deal_id=<?php echo $similararray[$iter]['kpn_id']; ?>">
								<div class="product-thumb">
									<header class="product-header">
										<img src="<?php echo 'admin/'.$similararray[$iter]['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $similararray[$iter]['title']; ?>" />
									</header>
									<div class="product-inner">
										<ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
										</ul>
										<h5 class="product-title"><?php echo $similararray[$iter]['title']; ?></h5>
										<p class="product-desciption"><?php echo $desc; ?></p>
										<div class="product-meta">
											<ul class="product-price-list">
												<li><span class="product-price">Rs <?php echo $similararray[$iter]['deal_cost']; ?></span>
												</li>
												<li><span class="product-old-price">Rs <?php echo $similararray[$iter]['deal_orig_cost']; ?></span>
												</li>
												<li><span class="product-save">Save <?php echo $similararray[$iter]['deal_discount']; ?>%</span>
												</li>
											</ul>
										</div>
										<p class="product-location"><i class="fa fa-map-marker"></i> <?php echo $similararray[$iter]['company_name']; ?></p>
									</div>
								</div>
							</a>
							<?php $iter++;} ?>
							
						<?php if($iter<(count($similararray))){$desc=$similararray[$iter]['short_desc'];
						$desc = strip_tags($desc);

						if (strlen($desc) > 100) {
							// truncate desc
							$desc = substr($desc, 0, 100);
							//$stringCut = substr($desc, 0, 100);

							// make sure it ends in a word so assassinate doesn't become ass...
							//$desc = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
						}
						//Convert to date
						
						$datestr=$similararray[$iter]['deal_end_date'];//Your date
						$date=strtotime($datestr);//Converted to a PHP date (a second count)

						//Calculate difference
						$diff=$date-time();//time returns current time in seconds
						$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
						$hours=round(($diff-$days*60*60*24)/(60*60));?>

							<a class="col-md-4" href="deal.php?deal_id=<?php echo $similararray[$iter]['kpn_id']; ?>">
								<div class="product-thumb">
									<header class="product-header">
										<img src="<?php echo 'admin/'.$similararray[$iter]['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $similararray[$iter]['title']; ?>" />
									</header>
									<div class="product-inner">
										<ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
										</ul>
										<h5 class="product-title"><?php echo $similararray[$iter]['title']; ?></h5>
										<p class="product-desciption"><?php echo $desc; ?></p>
										<div class="product-meta">
											<ul class="product-price-list">
												<li><span class="product-price">Rs <?php echo $similararray[$iter]['deal_cost']; ?></span>
												</li>
												<li><span class="product-old-price">Rs <?php echo $similararray[$iter]['deal_orig_cost']; ?></span>
												</li>
												<li><span class="product-save">Save <?php echo $similararray[$iter]['deal_discount']; ?>%</span>
												</li>
											</ul>
										</div>
										<p class="product-location"><i class="fa fa-map-marker"></i> <?php echo $similararray[$iter]['company_name']; ?></p>
									</div>
								</div>
							</a>
							<?php $iter++;} ?>						
						
						<?php if($iter<(count($similararray))){
						$desc=$similararray[$iter]['short_desc'];
							$desc = strip_tags($desc);

							if (strlen($desc) > 100) {
								// truncate desc
								$desc = substr($desc, 0, 100);
								//$stringCut = substr($desc, 0, 100);

								// make sure it ends in a word so assassinate doesn't become ass...
								//$desc = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
							}
							//Convert to date
							
							$datestr=$similararray[$iter]['deal_end_date'];//Your date
							$date=strtotime($datestr);//Converted to a PHP date (a second count)

							//Calculate difference
							$diff=$date-time();//time returns current time in seconds
							$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
							$hours=round(($diff-$days*60*60*24)/(60*60));
							?>
						
							<a class="col-md-4" href="deal.php?deal_id=<?php echo $similararray[$iter]['kpn_id']; ?>">
								<div class="product-thumb">
									<header class="product-header">
										<img src="<?php echo 'admin/'.$similararray[$iter]['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $similararray[$iter]['title']; ?>" />
									</header>
									<div class="product-inner">
										<ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
											<li><i class="fa fa-star"></i>
											</li>
										</ul>
										<h5 class="product-title"><?php echo $similararray[$iter]['title']; ?></h5>
										<p class="product-desciption"><?php echo $desc; ?></p>
										<div class="product-meta">
											<ul class="product-price-list">
												<li><span class="product-price">Rs <?php echo $similararray[$iter]['deal_cost']; ?></span>
												</li>
												<li><span class="product-old-price">Rs <?php echo $similararray[$iter]['deal_orig_cost']; ?></span>
												</li>
												<li><span class="product-save">Save <?php echo $similararray[$iter]['deal_discount']; ?>%</span>
												</li>
											</ul>
										</div>
										<p class="product-location"><i class="fa fa-map-marker"></i> <?php echo $similararray[$iter]['company_name']; ?></p>
									</div>
								</div>
							</a>
							<?php $iter=$iter-3;} ?>							
						<?php } } ?>
                    </div>
                    <div class="gap gap-small"></div>

                </div>
                <div class="col-md-3">
                    <div class="product-page-meta box">
                        <h4><strong><?php echo $data['title']; ?></strong></h4>
                        <p><?php echo $data['short_desc']; ?></p>

						<?php
							$pay = $data['deal_cost']*0.10;
							$rem = $data['deal_cost'] - $pay;
						?>
					
                        <ul class="list product-page-meta-info">
                            <li>
                                <ul class="list product-page-meta-price-list">
                                    <li><span class="product-page-meta-title">List Price</span><span class="product-page-meta-price">₹<?php echo $data['deal_cost']; ?></span>
                                    </li>
                                    <li><span class="product-page-meta-title">Discount</span><span class="product-page-meta-price"><?php echo $data['deal_discount']."%"; ?></span>
                                    </li>
                                    <li><span class="product-page-meta-title">Savings</span><span class="product-page-meta-price">₹<?php echo ($data['deal_orig_cost']-$data['deal_cost']); ?></span>
                                    </li>
                                </ul>
                            </li>
							<!--
                            <li>
                                <ul class="list product-page-meta-price-list">
                                    <li><span class="product-page-meta-title">Pay to Claim</span><span class="product-page-meta-price">₹<?php //echo $pay;?></span>
                                    </li>
                                    <li><span class="product-page-meta-title">Pay Merchant</span><span class="product-page-meta-price">₹<?php //echo $rem;?></span>
                                    </li>
                                </ul>
                            </li>
							-->
                            <li><span class="product-page-meta-title">Time Left to Buy</span>
                                <!-- COUNTDOWN -->
                                <div data-countdown="<?php echo date("Y/m/d", strtotime($data['deal_end_date'])); ?>" class="countdown countdown-inline"></div>
                            </li>
							<li>
								<?php if(isset($_SESSION['user_name'])){ ?>
									<a class="btn btn-primary btn-lg btn-block" href="checkout.php?payment_id=<?php echo $data['kpn_id'];?>&etoken=<?php echo md5($data['title']);?>&session=<?php echo md5($id);?>">₹25 Buy Now</a>
								<?php }
								else { ?>
									<div  id="dealbtn" class="btn btn-primary btn-lg btn-block">
										<a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><font color='white'>₹25 Buy Now</font></a>
									</div>
								<?php } ?>
							</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
	<?php } 
	}
	else{?>
	
    <div class="container">
				<h2>Sorry, this Koupon no longer exist.</h2><br><br><br>
	</div>
	<?php 
	}?>

