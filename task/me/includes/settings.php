<?php
session_start();
include_once("bin/functions.php");
$user_id=$_SESSION['user_name'];
$details = new user_dtls();
$user=$details->viewUserDtls($user_id);

$business = new business_dtls();
$busdtls=$business->viewBusiness($user_id);

$busnames = new bus_dtls();
$busnamesdtls = $busnames->viewBusDtls($user_id);

//get user categories
$categories = new category_dtls();
$catdtls=$categories->viewCategories($user_id);

//get all categories
$catnames = new cat_dtls();
$catnamesdtls = $catnames->viewCatDtls($user_id);

?>

<?php 
	if(!empty($user )){
		foreach($user as $data)	{ ?>
	<!-- Setting Tab -->
	<div class="col-md-9" id="0">
	<div id="message1" style="color:red"></div>	<br/>
		<div class="row">
			<div class="col-md-6">
				<form action="">
					<div class="form-group">
						<label for="">E-mail</label>
						<input type="text" id="alt-email" value="<?php echo $data['email'];?>" class="form-control" readonly data-toggle="tooltip" data-placement="top" data-title="Email Cannot be altered">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input type="text" id="alt-mobile" value="<?php echo $data['mobile'];?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input type="text" id="alt-city" value="<?php echo $data['city'];?>" class="form-control">
					</div>					
					<input type="Button" value="Save Changes" id="save" class="btn btn-primary">
				</form>
			</div>
		</div>
		<div class="gap"></div>
	</div>
<?php }
}else{?>


<?php } ?>
	<!-- Change Password Tab -->
	<div class="col-md-9 mfp-hide" id="3">
		<div id="message1" style="color:red"></div>	<br/>
		<div class="row">
			<div class="col-md-6">
				<form action="">
					<div class="form-group">
						<label for="">E-mail</label>
						<input type="text" id="email" value="<?php echo $data['email'];?>" class="form-control" readonly data-toggle="tooltip" data-placement="top" data-title="Email Cannot be altered">
					</div>
					<div class="form-group">
						<label for="">Old Password</label>
						<input id="old_password" type="password" placeholder="My Old password" class="form-control">
					</div>				
					<div class="form-group">
						<label for="">New Password</label>
						<input id="new_password" type="password" placeholder="My New password" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Repeat Password</label>
						<input id="repeat" type="password" placeholder="Repeat New password" class="form-control">
					</div>				
					<input type="Button" value="Change Password" id="update_password" class="btn btn-primary">
				</form>
			</div>
		</div>
		<div class="gap"></div>
	</div>

	
	<!-- FOLLOWING Tab -->
	<div class="col-md-9 mfp-hide" id="1">
		<!-- Follow POP -->
		<div id="add-address-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
			<form>
				<div class="form-group">
					<label>Business </label>
					<select id="business" class="form-control">
					<?php 
					if(!empty($busnamesdtls )){
						foreach($busnamesdtls as $busnamesdata)	{ ?>
							<option value="<?php echo $busnamesdata['uid'];?>"><?php echo $busnamesdata['company_name'];?></option>
						<?php }
					}?>
					</select>
				</div>
				<input type="Button" id="follow-set" value="Follow Me" class="btn btn-primary">
			</form>
		</div>
		<!-- Follow POP END -->
		<div class="row row-wrap">
		<?php
		if(!empty($busdtls )){
			foreach($busdtls as $busdata)	{?>
			<div class="col-md-4-cust" >
				<div class="address-box" style="background-image: url(./img/profile/<?php echo(rand(1,10));?>.jpg); background-size:100%; opacity: 0.5; background-size: cover;">
					<a class="address-box-remove remove-fol" id="removefol<?php echo $busdata['uid'];?>" data-toggle="tooltip" data-placement="right" title="Unfollow"></a>
					<ul>

						<li></br></br></br></br></br><b><font color="white"><?php echo $busdata['company_name'];?></font></b></br></li>
					</ul>
				</div>
			</div><?php
			}
		}?>			
			<div class="col-md-4" >
				<a class="address-box address-box-new popup-text" href="#add-address-dialog" data-effect="mfp-move-from-top">
					<div class="vert-center"><i class="fa fa-plus address-box-new-icon"></i>
						<p>Follow a Business</p>
					</div>
				</a>
			</div>
		</div>
		<div class="gap"></div>
	</div>	

	<!-- Categories Tab -->
	<!-- Categories Tab -->
	<div class="col-md-9 mfp-hide" id="4">
		<!-- Follow POP -->
		<div id="add-cat-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
			<form>
				<div class="form-group">
					<label>Categories </label>
					<select id="categ" class="form-control">
					<?php 
					if(!empty($catnamesdtls )){
						foreach($catnamesdtls as $catnamesdata)	{ ?>
							<option value="<?php echo $catnamesdata['menu_id'];?>"><?php echo $catnamesdata['name'];?></option>
						<?php }
					}?>
					</select>
				</div>
				<input type="Button" id="follow-cat" value="Watch Category" class="btn btn-primary">
			</form>
		</div>
		<!-- Follow POP END -->
		<div class="row row-wrap">
		<?php
		if(!empty($catdtls )){
			foreach($catdtls as $catdata)	{?>
			<div class="col-md-4">
				<div class="address-box" style="background-image: url(./img/cat/<?php echo $catdata['name'];?>.jpg); background-size:100%; opacity: 1.0; background-size: cover;">
					<a class="address-box-remove remove-cat" id="removecat<?php echo $catdata['menu_id'];?>" data-toggle="tooltip" data-placement="right" title="Unfollow"></a>
					<ul>
						<li><br><br><br><br><b><font color="white"><?php echo $catdata['name'];?></font></b></li>
					</ul>
				</div>
			</div><?php
			}
		}?>			
			<div class="col-md-4">
				<a class="address-box address-box-new popup-text" href="#add-cat-dialog" data-effect="mfp-move-from-top">
					<div class="vert-center"><i class="fa fa-plus address-box-new-icon"></i>
						<p>Watch this Category</p>
					</div>
				</a>
			</div>
		</div>
		<div class="gap"></div>
	</div>	
	
	<!-- Order History Tab -->
	<div class="col-md-9 mfp-hide" id="2">
		<div class="row">
			<div class="col-md-9">
				<table class="table table-order">
					<thead>
						<tr>
							<th>Item</th>
							<th>Name</th>
							<th>Qty</th>
							<th>Price(₹)</th>
							<th>Date</th>
							<th>Koupons</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include('./bin/config.php');
					$user_id=$_SESSION['user_name'];
					function koupon_details($kpn_id,$cat){
						$sql=mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kdd.deal_type, kdd.deal_value, kdd.deal_condition, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.company_name, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by and kph.kpn_id='$kpn_id'");
						$kpn=mysql_fetch_array($sql);
							switch($cat)
							{
							default:
								return $kpn[$cat];
							}
					}
					function company_details($uid){
					}
					$sql=mysql_query("SELECT * FROM kpn_processed_deals WHERE user_id='$user_id'");
					if (mysql_num_rows($sql)==0) {echo "You have not claimed any koupon yet.";}
					while($deal=mysql_fetch_array($sql)){	?>				
						<tr>
							<td class="table-order-img">
								<a href="#">
									<img src="<?php echo "admin/". koupon_details($deal['kpn_id'],'image_small'); ?>" style='height:60px;width:60px;' alt="Image Alternative text" title="" />
								</a>
							</td>
							<td><a href="#"><?php echo  koupon_details($deal['kpn_id'],'title'); ?></a>
							</td>
							<td><?php echo  $deal['volume_purchased']; ?></td>
							<td><?php echo  koupon_details($deal['kpn_id'],'deal_cost'); ?></td>
							<td><?php echo date("d/m/Y.",strtotime($deal['purchased_date'])); ?></td>
							<td><?php echo  $deal['kpn_identifier']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="gap"></div>
	</div>	


