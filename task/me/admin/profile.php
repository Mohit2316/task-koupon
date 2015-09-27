<?php
include("bin/lock_merchant.php");
include("bin/business_info_fun.php");
include("bin/header.php");
include('bin/SimpleImage.php');?>
        <section class="scrollable">
          <section class="hbox stretch">
            <aside class="aside-lg bg-light lter b-r" style='width:270px;'>
              <section class="vbox">
                <section class="scrollable">
                  <div class="wrapper">
                    <div class="clearfix m-b">
                      <a href="#" class="pull-left thumb m-r">
                        <img src="<?php echo get_merchant_details($_SESSION['login_user'],'image');?>" class="img-circle">
                      </a>
                      <div class="clear">
                        <div class="h3 m-t-xs m-b-xs"><?php echo get_merchant_details($_SESSION['login_user'],'company_name');?></div>
						<?php if(get_merchant_details($_SESSION['login_user'],'business_type')=='Onsite'){ ?>
                        <small class="text-muted"><i class="icon-map-marker"></i> <?php echo get_merchant_details($_SESSION['login_user'],'city')." ,".get_merchant_details($_SESSION['login_user'],'state');?></small>
						<?php } else if(get_merchant_details($_SESSION['login_user'],'business_type')=='Online'){?>
						 <small class="text-muted"><i class="icon-globe"></i> <?php echo get_merchant_details($_SESSION['login_user'],'website');?></small>
						<?php }?>
                      </div>                
                    </div>
					<div style='margin-left:-5px;'>
					<table style='font-size:9pt;'>
					<tr><td>Email</td><td>: <?php echo get_merchant_details($_SESSION['login_user'],'email');?></td></tr>
					<tr><td>Mobile No.</td><td>: <?php echo get_merchant_details($_SESSION['login_user'],'mobile');?></td></tr>
					<tr><td>Status</td><td><b>: <?php echo get_merchant_details($_SESSION['login_user'],'status');?></b></td></tr>
					</table><br>
					</div>
                    <div class="panel wrapper" style='width:235px;margin-left:0px;'>
                      <div class="row">
                        <div class="col-xs-4" style='width:70px;'>
                          <a href="#">
                            <span class="m-b-xs h4 block" data-toggle="tooltip" data-placement="bottom" data-title="Koupons"><i class='icon-cloud-download' style='font-size:10pt;'></i><?php echo get_merchant_details($_SESSION['login_user'],'koupons');?></span>
                            <small class="text-muted"></small>
                          </a>
                        </div>
                        <div class="col-xs-4" style='width:70px;'>
                          <a href="#">
                            <span class="m-b-xs h4 block" data-toggle="tooltip" data-placement="bottom" data-title="Total Koupons sold"><i class='icon-cloud-upload' style='font-size:10pt;'></i><?php echo get_merchant_details($_SESSION['login_user'],'tot_koupons_sold');?></span>
                            <small class="text-muted"></small>
                          </a>
                        </div>
                        <div class="col-xs-4" style='width:70px;'>
                          <a href="#">
                            <span class="m-b-xs h4 block" data-toggle="tooltip" data-placement="bottom" data-title="People following"><i class='icon-eye-open' style='font-size:10pt;'></i><?php
							$no_follow=0;
							$sql11=mysql_query("SELECT u".$_SESSION['login_user']." FROM kpn_merchant_followers;");
							while($followers=mysql_fetch_array($sql11)){
								$no_follow+=$followers[0];
							}
							echo $no_follow;?></span>
                            <small class="text-muted"></small>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--  <div class="btn-group btn-group-justified m-b">
                      <a class="btn btn-success btn-rounded" data-toggle="button">
                        <span class="text">
                        <i class="icon-eye-open"></i> Follow
                        </span>
                        <span class="text-active">
                          <!--<i class="icon-eye-open"></i> <!--Following
                        </span>
                      </a>
                      <a class="btn btn-info btn-rounded">
                        <!--<i class="icon-comment-alt"></i><!-- Chat
                      </a>
                    </div>-->
                    <div>
                      <small class="text-uc text-xs text-muted">about me</small>
                      <p><?php echo get_merchant_details($_SESSION['login_user'],'about_me');?></p>
                      <small class="text-uc text-xs text-muted">connection</small>
                      <p class="m-t-sm">
                        <a href="http://www.twitter.com/<?php echo get_merchant_details($_SESSION['login_user'],'twitter');?>" class="btn btn-rounded btn-twitter btn-icon"><i class="icon-twitter"></i></a>
                        <a href="http://www.facebook.com/<?php echo get_merchant_details($_SESSION['login_user'],'facebook');?>" class="btn btn-rounded btn-facebook btn-icon"><i class="icon-facebook"></i></a>
                        <a href="http://www.googleplus.com/<?php echo get_merchant_details($_SESSION['login_user'],'gplus');?>" class="btn btn-rounded btn-gplus btn-icon"><i class="icon-google-plus"></i></a>
                      </p>
                    </div>
                  </div>
                </section>
              </section>
            </aside>
            <aside class="bg-white">
              <section class="vbox">
                <header class="header bg-light bg-gradient">
                  <ul class="nav nav-tabs nav-white">
                    <li class="active"><a href="#activity" data-toggle="tab"><i class='icon-credit-card'></i>&nbsp;Active Koupons</a></li>
                    <li class=""><a href="#edit_profile" data-toggle="tab"><i class='icon-edit'></i>&nbsp;Edit Profile</a></li>
                  </ul>
                </header>
                <section class="scrollable">
                  <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                      <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
						<?php get_koupons_profile($_SESSION['login_user']); ?>
                      </ul>
                    </div>
                    <div class="tab-pane" id="edit_profile">                        
						<?php
						if(isset($_POST['company_name'])){
							$uid=$_SESSION['login_user'];
								$sql=mysql_query("UPDATE kpn_merchant_details SET mobile='".$_POST['mobile']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET about_me='".$_POST['about_me']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET twitter='".$_POST['twitter']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET facebook='".$_POST['facebook']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET gplus='".$_POST['gplus']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET address_line1='".$_POST['address_line1']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET address_line2='".$_POST['address_line2']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET address_line3='".$_POST['address_line3']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET city='".$_POST['city']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET state='".$_POST['state']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET country='".$_POST['country']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET latitude='".$_POST['latitude']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET longitude='".$_POST['longitude']."' WHERE uid='$uid' ");
								$sql=mysql_query("UPDATE kpn_merchant_details SET longitude='".$_POST['website']."' WHERE uid='$uid' ");
								if($_POST['fields']>1){	
								for($i=2;$i<=$_POST['fields'];$i++){
									$sql=mysql_query("UPDATE kpn_merchant_address SET mobile='".$_POST['mobile'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
									$sql=mysql_query("UPDATE kpn_merchant_address SET address_line1='".$_POST['address_line1'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
									$sql=mysql_query("UPDATE kpn_merchant_address SET address_line2='".$_POST['address_line2'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
									$sql=mysql_query("UPDATE kpn_merchant_address SET address_line3='".$_POST['address_line3'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
									$sql=mysql_query("UPDATE kpn_merchant_address SET latitude='".$_POST['latitude'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
									$sql=mysql_query("UPDATE kpn_merchant_address SET longitude='".$_POST['longitude'.$i]."' WHERE sno='".$_POST['fieldno'.$i]."' ");
								}}
								echo "<br><br><center><h4>Profile updated successfully.</h4></center>";				
								if($_FILES["edit_image"]["error"] > 0){}
								else{
									$image = new SimpleImage();
									$image->load($_FILES["edit_image"]["tmp_name"]);
									$image->resizeToWidth(320);
									$image->save("media/uploads/merchants/".$uid.".png");
								}
							}
							else{
								include('bin/edit_profile.php');
							}
					  	?>
                    </div>
                  </div>
                </section>
              </section>
            </aside>
            <aside class="col-lg-4 b-l">
              <section class="vbox">
                <section class="scrollable">
                  <div class="wrapper">
                   <!-- <section class="panel">
                      <form>
                        <textarea class="form-control no-border" rows="5" placeholder="What are you doing..."></textarea>
                      </form>
                      <footer class="panel-footer bg-light lter">
                        <button class="btn btn-info pull-right btn-sm">POST</button>
                        <ul class="nav nav-pills nav-sm">
                          <li><a href="#"><i class="icon-camera"></i></a></li>
                          <li><a href="#"><i class="icon-facetime-video"></i></a></li>
                        </ul>
                      </footer>
                    </section>-->
                    <section class="panel">
                      <h4 class="font-thin padder">Latest Tweets</h4>
                      <ul class="list-group">
                        <li class="list-group-item">
                            <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                            <small class="block text-muted"><i class="icon-time"></i>2 minuts ago</small>
                        </li>
                        <li class="list-group-item">
                            <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                            <small class="block text-muted"><i class="icon-time"></i>1 hour ago</small>
                        </li>
                        <li class="list-group-item">                     
                            <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                            <small class="block text-muted"><i class="icon-time"></i>2 hours ago</small>
                        </li>
                      </ul>
                    </section>
                    <section class="panel clearfix bg-info lter">
                      <div class="panel-body">
                        <a href="#" class="thumb pull-left m-r">
                          <img src="images/avatar.jpg" class="img-circle">
                        </a>
                        <div class="clear">
                          <a href="www.twitter.com/kouponize" class="text-info">@Kouponize <i class="icon-twitter"></i></a>
                          <a href="www.twitter.com/kouponize" class="btn btn-xs btn-success m-t-xs">Follow</a>
                        </div>
                      </div>
                    </section>
                  </div>
                </section>
              </section>              
            </aside>
          </section>
        </section>
      </section>
      <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
    </section>
    <!-- /.vbox -->
  </section>
</body>
</html>