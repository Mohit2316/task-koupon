<?php
include("bin/lock.php");
include("bin/business_info_fun.php");
include("bin/functions.php");
include("bin/header.php");
include("bin/config.php");
include('bin/SimpleImage.php');
include('../mail_checker.php');?>
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Customer Engagement</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
            </header>
            <section>
              <section>
                <section>
                  <section  class="hbox stretch">
                    <aside>
                      <section class="vbox">                       
                        <section class="scrollable"  style="overflow-y: scroll;">
                            <div class="tab-pane" id="tab2">
                              <ul class="list-group m-b-none m list-group-lg list-group-sp">
								<?php if(isset($_POST['title'])){
									$discount=null;
									$useroption=$_POST["benfer"];
									$benfers[]=array();
									$benfers_str="-";
									array_pop($benfers);
									if(($useroption==1) or ($useroption==3)){
										$sqll1=mysql_query("SELECT user_id FROM kpn_user_profile WHERE following LIKE '%-".get_merchant_details($_POST['company_name'],'uid_company_name')."-%';");
										while($array_userid=mysql_fetch_array($sqll1)){
											//$benfers[]=$array_userid["user_id"];
											array_push($benfers,$array_userid["user_id"]);
										}
									}
									if(($useroption==2) or ($useroption==3)){
										$sqll2=mysql_query("SELECT user_id FROM kpn_processed_deals WHERE uid='".get_merchant_details($_POST['company_name'],'uid_company_name')."';");
										while($array_userid=mysql_fetch_array($sqll2)){
											//$benfers[]=$array_userid["user_id"];
											array_push($benfers,$array_userid["user_id"]);
										}
									}
									foreach($benfers as $ben) {
										$benfers_str.=$ben."-";
									}
									if(!isset($_POST['deal_value']) and (!isset($_POST['deal_condition']))){
												$_POST['deal_value']=null;
												$_POST['deal_condition']=null;
												$discount=round(((($_POST['deal_orig_cost']-$_POST['deal_cost'])/$_POST['deal_orig_cost'])*100),2);
									}
									if(!isset($_POST['deal_end_date'])){
												$_POST['deal_end_date']="2099-12-31";
									}
									if(($_POST['volume_limited'])>0){
										$_POST['volume']=$_POST['volume_limited'];
									}
									if(isset($_POST['company_name'])){										
									mysql_query("INSERT into kpn_deal_headers values('NULL','".$_POST['title']."','".$_POST['short_desc']."','".$_POST['long_desc']."','".$_POST['menu_id']."','".$_POST['time_bound']."','".$_POST['volume']."','".$_POST['volume']."','".$_POST['deal_start_date']."','".$_POST['deal_end_date']."','media/uploads/koupons/small/image.png','media/uploads/koupons/large/image.png','".get_merchant_details($_POST['company_name'],'uid_company_name')."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','Active','0','".$benfers_str."');");
									$sql2=mysql_query("SELECT @last := LAST_INSERT_ID();");
									$kpn_id = mysql_fetch_array($sql2);
									mysql_query("UPDATE kpn_deal_headers SET image_small='media/uploads/koupons/small/".$kpn_id[0].".png' WHERE kpn_id='".$kpn_id[0]."';");
									mysql_query("UPDATE kpn_deal_headers SET image_large='media/uploads/koupons/large/".$kpn_id[0].".png' WHERE kpn_id='".$kpn_id[0]."';");	
									mysql_query("INSERT into kpn_deal_details (`kpn_id`,`deal_type`,`deal_value`,`deal_condition`,`deal_cost`,`deal_orig_cost`,`deal_discount`,`creation_date`,`last_update_date`) values(@last,'".$_POST['deal_type']."','".$_POST['deal_value']."','".$_POST['deal_condition']."','".$_POST['deal_cost']."','".$_POST['deal_orig_cost']."','".$discount."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."');");
									$image = new SimpleImage();
									$image->load($_FILES["small_image"]["tmp_name"]);
									$image->resize(800,600);
									$image->save("media/uploads/koupons/small/".$kpn_id[0].".png");
									$image = new SimpleImage();
									$image->load($_FILES["large_image"]["tmp_name"]);
									$image->resize(960,540);
									$image->save("media/uploads/koupons/large/".$kpn_id[0].".png");
									$vol='Unlimited';
									if($_POST['volume']!=-1){$vol=$_POST['volume'];}
									kouponMail($_POST['company_name'],get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'image'),get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'email'),get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'mobile'),$_POST['title'],$_POST['long_desc']); ?>
									<section class="panel clearfix"> 
								<div class="wizard wizard-vertical clearfix" id="wizard-2">
								  <ul class="steps">
									<li data-target="#step4" class="complete"><span class="badge badge-success">1</span>Choose your Audience</li>
									<li data-target="#step5" class="complete"><span class="badge badge-success">2</span>Create Koupon</li>
									<li data-target="#step6" class="active"><span class="badge badge-info">3</span>Action Complete</li>
								  </ul>
								</div>
								<div class="step-content">
								  <div class="step-pane active" id="step6">
								<section class='panel'>
									<header class='panel-heading'>
										<strong><center>Loyalty Koupon Created Successfully</center></strong>
									</header>
								</section>
								<center><div class="span3" style='height:400px;width:260px;background:#fafafa;border-bottom:3px solid #efefef;'>
								<!-- COUPON THUMBNAIL -->
								<div style="height:5px;width:100%;display:block;background:#7fa832;"></div>
								<img src="<?php echo "media/uploads/koupons/small/".$kpn_id[0].".png"; ?>" width="260px" alt="<?php echo $_POST['short_desc']; ?>" title="<?php echo $_POST['title']; ?>" />
								<div class="coupon-inner" style="padding:10px;">
								<h5 class="coupon-title" style='font-weight:bold;color:#7fa832;border-bottom:1px solid #efefef;text-align:left;'><?php echo $_POST['title']; ?></h5>
								<p class="coupon-desciption" style="border-bottom:1px solid #efefef;text-align:left;"><?php echo $_POST['short_desc']; ?></p>
								<div class="coupon-meta" style="text-align:left;">
								<span class="coupon-time">
								Koupon is active for <?php echo sizeof($benfers); ?> Users.
								</span>
								</div>
								</div>
								</div></center>
								  </div>
								</div>
							  </section>
									<?php
									}
									else{
									$useroption=$_POST["benfer"];
									$benfers[]=array();
									$benfers_str="-";
									array_pop($benfers);
									if(($useroption==1) or ($useroption==3)){
										$sqll1=mysql_query("SELECT user_id FROM kpn_user_profile WHERE following LIKE '%-".$_SESSION['login_user']."-%';");
										while($array_userid=mysql_fetch_array($sqll1)){
											//$benfers[]=$array_userid["user_id"];
											array_push($benfers,$array_userid["user_id"]);
										}
									}
									if(($useroption==2) or ($useroption==3)){
										$sqll2=mysql_query("SELECT user_id FROM kpn_processed_deals WHERE uid='".$_SESSION['login_user']."';");
										while($array_userid=mysql_fetch_array($sqll2)){
											//$benfers[]=$array_userid["user_id"];
											array_push($benfers,$array_userid["user_id"]);
										}
									}
									foreach($benfers as $ben) {
										$benfers_str.=$ben."-";
									}
									mysql_query("INSERT into kpn_deal_headers values(NULL,'".$_POST['title']."','".$_POST['short_desc']."','".$_POST['long_desc']."','".$_POST['menu_id']."','".$_POST['time_bound']."','".$_POST['volume']."','".$_POST['volume']."','".$_POST['deal_start_date']."','".$_POST['deal_end_date']."','media/uploads/koupons/small/".$_SESSION['login_user'].".png','media/uploads/koupons/large/".$_SESSION['login_user'].".png','".$_SESSION['login_user']."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','Active','0','".$benfers_str."');");
									$sql2=mysql_query("SELECT @last := LAST_INSERT_ID();");
									$kpn_id = mysql_fetch_array($sql2);
									mysql_query("UPDATE kpn_deal_headers SET image_small='media/uploads/koupons/small/".$kpn_id[0].".png' WHERE kpn_id='".$kpn_id[0]."';");
									mysql_query("UPDATE kpn_deal_headers SET image_large='media/uploads/koupons/large/".$kpn_id[0].".png' WHERE kpn_id='".$kpn_id[0]."';");
									mysql_query("INSERT into kpn_deal_details (`kpn_id`,`deal_type`,`deal_value`,`deal_condition`,`deal_cost`,`deal_orig_cost`,`deal_discount`,`creation_date`,`last_update_date`) values(@last,'".$_POST['deal_type']."','".$_POST['deal_value']."','".$_POST['deal_condition']."','".$_POST['deal_cost']."','".$_POST['deal_orig_cost']."','".$discount."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."');");
									$image = new SimpleImage();
									$image->load($_FILES["small_image"]["tmp_name"]);
									$image->resize(800,600);
									$image->save("media/uploads/koupons/small/".$kpn_id[0].".png");
									$image = new SimpleImage();
									$image->load($_FILES["large_image"]["tmp_name"]);
									$image->resize(960,540);
									$image->save("media/uploads/koupons/large/".$kpn_id[0].".png");
									$vol='Unlimited';
									if($_POST['volume']!=-1){$vol=$_POST['volume'];}
									kouponMail(get_merchant_details($_SESSION['login_user'],'company_name'),get_merchant_details($_SESSION['login_user'],'image'),get_merchant_details($_SESSION['login_user'],'email'),get_merchant_details($_SESSION['login_user'],'mobile'),$_POST['title'],$_POST['long_desc']);?>
									<section class="panel clearfix"> 
								<div class="wizard wizard-vertical clearfix" id="wizard-2">
								  <ul class="steps">
									<li data-target="#step4" class="complete"><span class="badge badge-success">1</span>Choose your Audience</li>
									<li data-target="#step5" class="complete"><span class="badge badge-success">2</span>Create Koupon</li>
									<li data-target="#step6" class="active"><span class="badge badge-info">3</span>Action Complete</li>
								  </ul>
								</div>
								<div class="step-content">
								  <div class="step-pane active" id="step6">
								<section class='panel'>
									<header class='panel-heading'>
										<strong><center>Loyalty Koupon Created Successfully</center></strong>
									</header>
								</section>
								<center><div class="span3" style='height:400px;width:260px;background:#fafafa;border-bottom:3px solid #efefef;'>
								<!-- COUPON THUMBNAIL -->
								<div style="height:5px;width:100%;display:block;background:#7fa832;"></div>
								<img src="<?php echo "media/uploads/koupons/small/".$kpn_id[0].".png"; ?>" width="260px" alt="<?php echo $_POST['short_desc']; ?>" title="<?php echo $_POST['title']; ?>" />
								<div class="coupon-inner" style="padding:10px;">
								<h5 class="coupon-title" style='font-weight:bold;color:#7fa832;border-bottom:1px solid #efefef;text-align:left;'><?php echo $_POST['title']; ?></h5>
								<p class="coupon-desciption" style="border-bottom:1px solid #efefef;text-align:left;"><?php echo $_POST['short_desc']; ?></p>
								<div class="coupon-meta" style="text-align:left;">
								<span class="coupon-time">
								Koupon is active for <?php echo sizeof($benfers); ?> Users.
								</span>
								</div>
								</div>
								</div></center>
								  </div>
								</div>
							  </section>
									<?php
									}
								}
								else{
								?>
								<section class="panel clearfix"> 
								<div class="wizard wizard-vertical clearfix" id="wizard-2">
								  <ul class="steps">
									<li data-target="#step4" class="active"><span class="badge badge-info">1</span>Choose your Audience</li>
									<li data-target="#step5"><span class="badge">2</span>Create Koupon</li>
									<li data-target="#step6"><span class="badge">3</span>Action Complete</li>
								  </ul>
								</div>
								<div class="step-content">
								  <div class="step-pane active" id="step4">
									<p><strong>Choose your Audience</strong>.</a>
									<br>
									<div class="col-sm-6" id="area">
										<!-- checkbox -->
										<div class="checkbox">
										  <label class="checkbox-custom">
											<input type="checkbox" id="followcheck"> <!--checked="checked">-->
											<i class="icon-unchecked"></i>
										   Followers - <?php if($_SESSION['login_type']=='merchant'){echo mysql_num_rows(mysql_query("SELECT user_id FROM kpn_user_profile WHERE following LIKE '%-".$_SESSION['login_user']."-%';"));} else{echo mysql_num_rows(mysql_query("SELECT user_id FROM kpn_user_profile WHERE following LIKE '%-".get_merchant_details($_POST['company_name'],'uid_company_name')."-%';"));} ?>
										  </label>
										</div>
										<div class="checkbox">
										  <label class="checkbox-custom">
											<input type="checkbox" id="previouscheck">
											<i class="icon-unchecked"></i>
											 Previous Claimed Koupons - <?php if($_SESSION['login_type']=='merchant'){echo mysql_num_rows(mysql_query("SELECT user_id FROM kpn_processed_deals WHERE uid='".$_SESSION['login_user']."';"));} else{echo mysql_num_rows(mysql_query("SELECT user_id FROM kpn_processed_deals WHERE uid='".get_merchant_details($_POST['company_name'],'uid_company_name')."';"));} ?>
										  </label>
										</div>
									  </div>
									</p>
								  <div class="actions m-t text-right">
									<button type="button" class="btn btn-white btn-sm btn-prev" data-target="#wizard-2" data-wizard="previous" disabled="disabled">Prev</button>
									<button type="button" id='next-button' class="btn btn-white btn-sm btn-next" data-target="#wizard-2" data-wizard="next" data-last="Finish" disabled="disabled">Next</button>
								  </div>
								  </div>
								  <div class="step-pane" id="step5">
								  <form class="form-horizontal" data-validate="parsley" action='create_loyalty_koupon.php' method="POST" enctype="multipart/form-data">
									<input type="hidden" name="benfer" id="benfer" value="0">
									<?php include("bin/form_create_koupon.php");?>
								  </div>
								</div>
							  </section>
								<?php };?>
							</div>
                            <div class="tab-pane" id="tab3">
                              <div class="text-center wrapper">
                                <!--<i class="icon-spinner icon-spin icon-large"></i>-->
                              </div>
                            </div>
                          </div>
                        </section>
                      </section>
                    </aside>
					<?php include_once("bin/right_panel.php");?>                  
				  </section>
                </section>
              </section>
            </section>
          </section>
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>
    <!-- /.vbox -->
  <!-- fuelux -->
  <script src="js/fuelux/fuelux.js"></script>
  <!-- datepicker -->
  <script src="js/datepicker/bootstrap-datepicker.js"></script>
  <!-- slider -->
  <script src="js/slider/bootstrap-slider.js"></script>
  <!-- file input -->  
  <script src="js/file-input/bootstrap.file-input.js"></script>
  <!-- combodate -->
  <script src="js/libs/moment.min.js"></script>
  <script src="js/combodate/combodate.js" cache="false"></script>
  <!-- parsley -->
  <script src="js/parsley/parsley.min.js" cache="false"></script>
  <script src="js/parsley/parsley.extend.js" cache="false"></script>
  <!-- select2 -->
  <script src="js/select2/select2.min.js" cache="false"></script>
  <!-- wysiwyg -->
  <script src="js/wysiwyg/jquery.hotkeys.js" cache="false"></script>
  <script src="js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
  <script src="js/wysiwyg/demo.js" cache="false"></script>
  <!-- markdown -->
  <script src="js/markdown/epiceditor.min.js" cache="false"></script>
  <script src="js/markdown/demo.js" cache="false"></script>
  </section>
</body>
</html>