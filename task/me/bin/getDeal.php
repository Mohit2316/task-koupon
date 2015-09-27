<?php 
include("config.php");
$sql1=mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."'");
$user=mysql_fetch_array($sql1);
?>
	<div id="small-dialog" style="background:f2f2f2" class="mfp-with-anim mfp-hide mfp-dialog-custom">
		<div class="gap gap-small"></div>
        <div class="row">
            <div class="span3 sidebar-left">
                <h4>&nbsp; </h4>
                <!-- COUPON THUMBNAIL -->
                <div class="coupon-thumb coupon-thumb-hold" style='margin-top:-20px;'>
                   <img src="<?php echo 'admin/'.$data['image_small']; ?>" alt="<?php echo $desc; ?>" title="<?php echo $data['title']; ?>" />
				<div class="coupon-inner">
					<h5 class="coupon-title"><?php echo $data['title']; ?></h5>
					<p class="coupon-desciption"><?php echo $desc; ?></p>
					<div class="coupon-meta">
						<span class="coupon-time">
							<?php if ($data['time_bound']==1) {?>
								<?php echo $days ?> days <?php echo $hours ?> hrs remaining
							<?php } else {?>
								Deal Not Time Bound
							<?php } ?>
							      
						</span>
						<?php if($data['deal_type']=='FREE') {?>
							<span class="coupon-save">OFFER</span>
							<div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price"><?php echo $data['deal_value']; ?></span>
						<?php } else {?>
							<span class="coupon-save">Save <?php echo $data['deal_discount']; ?>%</span>
							<div class="coupon-price"><span class="coupon-old-price">Rs <?php echo $data['deal_orig_cost']; ?></span><span class="coupon-new-price">Rs <?php echo $data['deal_cost']; ?></span>
						<?php } ?>
						
						</div>
					</div>
					<div class="coupon-meta"> <p class="coupon-desciption"><strong><?php echo $data['company_name']; ?></strong></p> </div>
				</div>
                </div>
                <div class="gap gap-small"></div>
            </div>
            <div class="span4">
			<?php if($data['kpn_type']=="Free"){?>
				<div class="row-fluid">
					<h3>Claim Koupon</h3>
					<h6><div id='result'>Thank You, Please fill all details to Claim Koupon</div></h6>
					<legend></legend>
					<div class="err" id="resp" style='color:red;margin-top:-10px;margin-bottom:5px;font-size:8pt;'></div>
					<div class="row-fluid">
					<div id='claim_koupon_form'>
						<form class="dialog-form">
							<label>E-mail</label>
							<input id="email" type="text" placeholder="email@domain.com" class="span12"  value="<?php echo $user['email'];?>" readonly>
							<label>Mobile</label>
							<input id="mobile" type="text" class="span12" value="<?php echo $user['mobile'];?>" readonly>
							<label>Volumn Required</label>
							<input id="volume" type="text" placeholder="Max : 3 Koupons" class="span12">
							<div class="gap gap-mini"></div>
							<input type="button" id="claim" value="Claim Koupon" class="btn btn-primary">
						</form>
						</div>
					</div>
				</div>
				<?php }
				else if(($data['kpn_type']=="Percentage") OR ($data['kpn_type']=="Fixed")){?>
				<div class="row-fluid">
					<h3>Claim Koupon</h3>
					<h6><div id='result'>Thank You, Please fill all details to Claim Koupon</div></h6>
					<legend></legend>
					<div class="err" id="resp" style='color:red;margin-top:-10px;margin-bottom:5px;font-size:8pt;'></div>
					<div class="row-fluid">
					<div id='claim_koupon_form'>
						<form class="dialog-form">
							<label>E-mail</label>
							<input id="email" type="text" placeholder="email@domain.com" class="span12"  value="<?php echo $user['email'];?>" readonly>
							<label>Mobile</label>
							<input id="mobile" type="text" class="span12" value="<?php echo $user['mobile'];?>" readonly>
							<label>Volumn Required</label>
							<input id="volume" type="text" placeholder="No. of Koupons" class="span12">
							<strong>Rs.<?php echo $data['pay'];?>/- for each Koupon.</strong>
							<div class="gap gap-mini"></div>
							<input type="button" id="claim" value="Claim Koupon" class="btn btn-primary">
						</form>
						</div>
					</div>
				</div>
				<?php }?>
            </div>
        </div>
	</div>
