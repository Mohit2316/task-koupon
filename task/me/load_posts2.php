<?php
	session_start();
	include_once("bin/functions.php");
	include('admin/bin/SimpleImage.php');
	$follow = new user_det();
	$user=$follow->viewFollowing();
	$posting = new kpn_manages();
	$event=0;
	if(isset($_REQUEST['id'])){
		$event = $_REQUEST['id'];
		$updatesarray=$posting->viewDeals($event);
	}
	else {
		$updatesarray=$posting->viewDeals($event);
	}
	if(!empty($updatesarray )){
		foreach($updatesarray as $data)	{
			
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
						<!-- <div>event : <?php echo $event; echo $_COOKIE["Kouponize"];?></div> -->
                        <!-- <div class="col-md-4 col-masonry" > -->
						<div class="col-md-3">
							<a href="deal.php?deal_id=<?php echo $data['kpn_id']; ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo 'admin/'.$data['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $data['title']; ?>" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?php echo $data['title']; ?></h5>
                                    <p class="product-desciption"><?php echo $desc; ?></p>
                                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> <?php echo $days ?> days <?php echo $hours ?> hrs remaining</span>
                                        <ul class="product-price-list">
                                            <li><span class="product-price">₹<?php echo $data['deal_cost']; ?></span>
                                            </li>
                                            <li><span class="product-old-price">₹<?php echo $data['deal_orig_cost'];?></span>
                                            </li>
                                            <li><span class="product-save">Save <?php echo $data['deal_discount']; ?>%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
										<?php if(isset($_SESSION['user_name'])){ ?>
                                            <li><a href="checkout.php?payment_id=<?php echo $data['kpn_id'];?>&etoken=<?php echo md5($data['title']);?>&session=<?php echo md5($id);?>" class="btn btn-sm" data-toggle="tooltip" data-placement="top" data-title="Claim This Coupon"><i class="fa fa-shopping-cart"></i></a>
                                            </li>
										<?php }
										else { ?>
                                            <li><a href="#login-dialog" data-effect="mfp-move-from-top" class="btn btn-sm popup-text" data-toggle="tooltip" data-placement="top" data-title="Claim This Coupon"><i class="fa fa-shopping-cart"></i></a>
										<?php } ?>
                                            <li><a href="deal.php?deal_id=<?php echo $data['kpn_id']; ?>" class="btn btn-sm" data-toggle="tooltip" data-placement="top" data-title="Details"><i class="fa fa-bars"></i></a></li>
											<?php $following=$user['following'];
												$following_arr=explode("-", $following);
												if (in_array($data['uid'],$following_arr)) { ?>
													<li><a class="btn btn-sm unfollow" id="unfollow<?php echo $data['uid']?>" data-toggle="tooltip" data-placement="top" data-title="Un-Follow  <?php echo $data['company_name'];?>">
													<i class="fa fa-heart" style="color: red;">
											<?php } else { ?>	
													<li><a class="btn btn-sm follow" id="follow<?php echo $data['uid']?>" data-toggle="tooltip" data-placement="top" data-title="Follow <?php echo $data['company_name'];?>">
													<i class="fa fa-heart">
											<?php } ?>   
											</i></a>
											<!-- <i class="fa fa-home" style="color: red;"></i> -->
                                            </li>
                                        </ul>
                                    </div>
									<ul class="product-actions-list">
										<?php if(isset($_SESSION['user_name'])){ ?>
											<p class="product-location">
												<i class="fa fa-map-marker"></i>&nbsp;
												<a style="font-syze: 12px;" href="business.php?type=1&&business_id=<?php echo $data['created_by'];?>"><?php echo $data['company_name']; ?></a>
											</p>	
										<?php } else {?>
												<a style="font-size: 12px;" class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><?php echo $data['company_name']; ?></a>
										<?php } ?> 
									</ul>
                                </div>
                            </div>
							</a>
                        </div>
<?php }
}?>
