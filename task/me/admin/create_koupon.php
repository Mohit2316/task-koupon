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
                  <h3 class="m-t m-b-none">Create Koupon</h3>
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
									if(($_POST['kpn_code_val'])!=''){
										$_POST['kpn_code']=$_POST['kpn_code_val'];
									}
									if(isset($_POST['company_name'])){										
									mysql_query("INSERT into kpn_deal_headers values('NULL','".$_POST['title']."','".$_POST['short_desc']."','".$_POST['long_desc']."','".$_POST['kpn_code']."','".$_POST['menu_id']."','".$_POST['time_bound']."','".$_POST['volume']."','".$_POST['volume']."','".$_POST['deal_start_date']."','".$_POST['deal_end_date']."','media/uploads/koupons/small/image.png','media/uploads/koupons/large/image.png','".get_merchant_details($_POST['company_name'],'uid_company_name')."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','Active','0','normal');");
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
									kouponMail($_POST['company_name'],get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'image'),get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'email'),get_merchant_details(get_merchant_details($_POST['company_name'],'uid_company_name'),'mobile'),$_POST['title'],$_POST['long_desc']);
									echo "  		<section class='panel'>" ;
									echo "                      <header class='panel-heading'>" ;
									echo "                        <strong><center>Koupon Created Successfully</center></strong>" ;
									echo "                      </header>" ;
									echo "		      </section>" ;
									}
									else{
									mysql_query("INSERT into kpn_deal_headers values(NULL,'".$_POST['title']."','".$_POST['short_desc']."','".$_POST['long_desc']."','".$_POST['kpn_code']."','".$_POST['menu_id']."','".$_POST['time_bound']."','".$_POST['volume']."','".$_POST['volume']."','".$_POST['deal_start_date']."','".$_POST['deal_end_date']."','media/uploads/koupons/small/".$_SESSION['login_user'].".png','media/uploads/koupons/large/".$_SESSION['login_user'].".png','".$_SESSION['login_user']."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','Active','0','normal');");
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
									kouponMail(get_merchant_details($_SESSION['login_user'],'company_name'),get_merchant_details($_SESSION['login_user'],'image'),get_merchant_details($_SESSION['login_user'],'email'),get_merchant_details($_SESSION['login_user'],'mobile'),$_POST['title'],$_POST['long_desc']);
									echo "  		<section class='panel'>" ;
									echo "                      <header class='panel-heading'>" ;
									echo "                        <strong><center>Koupon Created Successfully</center></strong>" ;
									echo "                      </header>" ;
									echo "		      </section>" ;
									}
								}
								else{?>
								<form class="form-horizontal" data-validate="parsley" action='create_koupon.php' method="POST" enctype="multipart/form-data">
								<?php include('bin/form_create_koupon.php');
								}
								;?>
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