<section class="panel">
                <div class="panel-body">
                  <form class="form-horizontal" action='profile.php' method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Company Name</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='company_name' type="text" placeholder="<?php echo get_merchant_details($_SESSION['login_user'],'company_name');?>" readonly>
                      </div>
                    </div>
					<div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='email' type="text" placeholder="<?php echo get_merchant_details($_SESSION['login_user'],'email');?>" readonly>
                      </div>
                    </div>
					<div class="line line-dashed line-lg pull-in"></div>					
                    <div class="form-group">
                      <label class="col-lg-2 control-label">About Me</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='about_me' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'about_me');?>">
                      </div>
                    </div>
					<div class="line line-dashed line-lg pull-in"></div>					
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Mobile No.</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='mobile' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'mobile');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>			
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="edit_image">Image</label>
                      <div class="col-sm-10" style="margin-top:5px;">
						  <input type="file" name="edit_image">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group">
                      <label class="col-lg-2 control-label">Twitter</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='twitter' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'twitter');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Facebook</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='facebook' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'facebook');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Google Plus</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='gplus' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'gplus');?>">
                      </div>
                    </div>
					<?php if(get_merchant_details($_SESSION['login_user'],'business_type')=="Online"){?>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Web Site</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='website' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'website');?>" readonly>
                      </div>
                    </div>
					<?php }
					else if(get_merchant_details($_SESSION['login_user'],'business_type')=="Onsite"){?>
					
                    <div class="line line-dashed line-lg pull-in"></div>               
					<div class="form-group">
                      <label class="col-lg-2 control-label">City</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='city' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'city');?>" readonly>
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>  
					<div class="form-group">
                      <label class="col-lg-2 control-label">State</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='state' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'state');?>" readonly>
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
					                    <div class="form-group">
                      <label class="col-lg-2 control-label">Country</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='country' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'country');?>" readonly>
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
					<section class='panel'><header class='panel-heading'><strong>Primary Address</strong></header></section>        
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line1</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line1' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'address_line1');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div> 
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line2</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line2' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'address_line2');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>        
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line3</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line3' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'address_line3');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>  
					<div class="form-group">
                      <label class="col-lg-2 control-label">Longitude</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='longitude' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'longitude');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>          
					<div class="form-group">
                      <label class="col-lg-2 control-label">Latitude</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='latitude' type="text" value="<?php echo get_merchant_details($_SESSION['login_user'],'latitude');?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>
					<?php 
					$fields=1;
					$sql_q1=mysql_query("SELECT * FROM kpn_merchant_address WHERE uid='".$_SESSION['login_user']."'");
					if(mysql_num_rows($sql_q1)>0){
						while($addresses=mysql_fetch_array($sql_q1)){
						$fields++;
					?>
						<section class='panel'><header class='panel-heading'><strong>Address <?php echo $fields; ?></strong></header></section>  
					
					<div class="form-group">
                      <label class="col-lg-2 control-label">Phone No.</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='mobile<?php echo $fields; ?>' type="text" value="<?php echo $addresses['mobile'];?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div> 
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line1</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line1<?php echo $fields; ?>' type="text" value="<?php echo $addresses['address_line1'];?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div> 
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line2</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line2<?php echo $fields; ?>' type="text" value="<?php echo $addresses['address_line2'];?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>        
					<div class="form-group">
                      <label class="col-lg-2 control-label">Address Line3</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='address_line3<?php echo $fields; ?>' type="text" value="<?php echo $addresses['address_line3'];?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>  
					<div class="form-group">
                      <label class="col-lg-2 control-label">Longitude</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='longitude<?php echo $fields; ?>' type="text" value="<?php echo $addresses['longitude'];?>">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>          
					<div class="form-group">
                      <label class="col-lg-2 control-label">Latitude</label>
                      <div class="col-lg-10">
                        <input class="form-control" name='latitude<?php echo $fields; ?>' type="text" value="<?php echo $addresses['latitude'];?>">
                      </div>
                    </div>
					<input name='fieldno<?php echo $fields; ?>' type="hidden" value="<?php echo $addresses['sno']; ?>">
					<?php }}
					?> 
					<input name='fields' type="hidden" value="<?php echo $fields; ?>">
					<?php } ?>
                    <div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <div class="col-sm-4 col-sm-offset-2">
					  <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </section>