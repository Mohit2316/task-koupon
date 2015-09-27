<?php

$business = new business_dtls();
$busdtls=$business->viewBusiness($user_id);

$busnames = new bus_dtls();
$busnamesdtls = $busnames->viewBusDtls($user_id);

?>
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
			<div class="col-md-4">
				<div class="address-box">
					<a class="address-box-remove" id="unfollow-set" data-toggle="tooltip" data-placement="right" title="Unfollow"></a>
					<ul>
						<li><b><?php echo $busdata['company_name'];?></b></li>
						<li><?php echo $busdata['email'];?></li>
						<li id="businesId" style="display:none;"><?php echo $busdata['uid'];?></li>
					</ul>
				</div>
			</div><?php
			}
		}?>			
			<div class="col-md-4">
				<a class="address-box address-box-new popup-text" href="#add-address-dialog" data-effect="mfp-move-from-top">
					<div class="vert-center"><i class="fa fa-plus address-box-new-icon"></i>
						<p>Follow a Business</p>
					</div>
				</a>
			</div>
		</div>
		<div class="gap"></div>
