<?php
/*
-- 
****************************************************************************************
-- Copyright (c)  2013  kouponize.com
-- All rights reserved
-- 
****************************************************************************************
--
-- Admin Dashboard
-- index.php
--
-- DESCRIPTION
--  Analytics
-- 
-- 
-- CREATION DATE  26 JAN 2014
-- LAST UPDATE DATE 26 JAN 2014
-- 
-- HISTORY
-- =======
-- 
-- VERSION  DATE             AUTHOR(S)         DESCRIPTION
-- ------- ---------------  --------------- ------------------------------------
-- 1001     26 DEC 2013      KrishnaSai           Initial draft
-- 1002     26 JAN 2014      KrishnaSai           Added Graphs

--*******************************************************************************************************
*/
include("bin/lock.php");
include("bin/config.php");
include("bin/header.php");
function get_num_koup($a,$b) {
 return mysql_num_rows(mysql_query("SELECT * FROM kpn_processed_deals WHERE purchased_date BETWEEN DATE_ADD(CURDATE(), INTERVAL ".$a." HOUR)  AND DATE_ADD(CURDATE(), INTERVAL ".$b." HOUR) ;"));
}
function get_followers($date,$merch) {
if(($_SESSION['login_type'])!="admin"){
 $data_follow= mysql_fetch_array(mysql_query("SELECT "."u".$merch." FROM kpn_merchant_followers WHERE date='".$date."';"));
 return $data_follow[0];}
}
$follow_flow_chart="";
date_default_timezone_set('UTC');
$date = '2014-03-04';
$end_date = date("Y-m-d");
while (strtotime($date) <= strtotime($end_date)) {
$follow_flow_chart.=get_followers($date,$_SESSION['login_user']).",";
$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
}
$follow_flow_chart=rtrim($follow_flow_chart, ",");
?>
<base href="http://localhost/admin/">
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Dashboard</h3>
                  <p class="block text-muted">Welcome to Kouponize Admin Dashboard</p>
                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
				 <?php
				$claimed=0;
				$sql=mysql_query("SELECT * FROM kpn_processed_deals");				
				while($process = mysql_fetch_array($sql)) {
					$claimed=$claimed+$process['volume_purchased'];
				}
				$redeemed=0;
				$sql1=mysql_query("SELECT * FROM kpn_processed_deals WHERE claim='y';");				
				while($process = mysql_fetch_array($sql1)) {
					$redeemed=$redeemed+$process['volume_purchased'];
				}

				 if($_SESSION['login_type']=="admin"){?>
                    <div class="pull-left">                  
                      <div class="pull-left m-r-xs">
                        <span class="block">Koupons <span class="badge up bg-danger"  data-toggle='tooltip' data-placement='bottom' data-title='Redeemed'>+<?php 
						echo($redeemed);?></span></span>                    
                        <span class="h4" data-toggle='tooltip' data-placement='bottom' data-title='Claimed'><?php echo($claimed);?></span>
                        <i class="icon-level-up text-success"></i>
                      </div>
                      <!--<div class="clear">
                        <div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#eee']">5:5,8:4,12:5,10:6,11:7,12:2,8:6</div>
                      </div>-->
                    </div>
					<?php } ?>
                    <!--<div class="pull-left m-l-lg">
                      <div class="pull-left m-r-xs">
                        <span class="block">Profit</span>                    
                        <span class="h4">$4k</span>
                        <i class="icon-level-down text-danger"></i>
                      </div>
                      <div class="clear">
                        <div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-bar-color="#fb6b5b">6,5,8,9,6,3,5</div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <!--<div class="wrapper bg-light pull-in b-b font-bold">
                <a href="#" class="m-r"><i class="icon-bar-chart icon-2x icon-muted  v-middle"></i> Analysis</a>
                <a href="#" class="m-r"><span class="badge up m-r-n bg-danger">4</span><i class="icon-envelope icon-2x icon-muted  v-middle"></i> Message</a>
                <a href="#" class="m-r"><i class="icon-calendar icon-2x icon-muted  v-middle"></i> My Calendar</a>
                <a href="#"><i class="icon-cog icon-2x icon-muted  v-middle"></i> Settings</a>
              </div>-->
            </header>
            <section>
              <section>
                <section>
                  <section  class="hbox stretch">
					<aside>
                      <section class="vbox">
                        <header class="header bg-light dk">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab1" data-toggle="tab"> <i class="icon-bar-chart"></i> Analytics</a></li>
                            <!--<li class=""><a href="#tab2" data-toggle="tab"> <i class="icon-edit"></i> Views</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab"> <i class="icon-eye-open"></i> Followers</a></li>-->
                          </ul>
                        </header>
                        <section class="scrollable">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                              <div class="wrapper">
							  <div class="col-md-12">
                                    <section class="panel">
                                      <header class="panel-heading">Koupons</header>
										<div class="panel-body">
										  <div class="btn-group" data-toggle="buttons">
											<label class="btn btn-sm btn-white active">
											  <input type="radio" name="options" id="option1"> Day
											</label>
											<!--<label class="btn btn-sm btn-white">
											  <input type="radio" name="options" id="option2"> Week
											</label>
											<label class="btn btn-sm btn-white">
											  <input type="radio" name="options" id="option2"> Month
											</label>
											<label class="btn btn-sm btn-white">
											  <input type="radio" name="options" id="option2"> Year
											</label>-->
										  </div>
										  <div class="line line-lg pull-in"></div>
										  <div class="sparkline" data-type="line" data-resize="true" data-height="185" data-width="100%" data-line-width="1" data-line-color="#afcf6f" data-spot-color="#afcf6f" data-fill-color="rgba(240,240,240,0.5)" data-highlight-line-color="#e1e5e9" data-spot-radius="4" data-data="[0,<?php for($i=0;$i<23;$i++) { echo(get_num_koup($i,$i+1).","); }?><?php echo  get_num_koup(23,24);?>]" data-composite-config='{"lineColor":"#dddddd","fillColor":"#ffffff","spotColor":"#dddddd","spotRadius":"4"}' ></div>
										  <ul class="list-inline text-muted axis" margi><li>1:00<br>am</li><li>3:00</li><li>5:00</li><li>7:00</li><li>9:00</li><li>11:00</li><li>1:00<br>pm</li><li>3:00</li><li>5:00</li><li>7:00</li><li>9:00</li><li>11:00</li></ul>
										</div>
									  </section>
                                  </div>
								 <div class="col-md-12">
                                  <section class="panel">
                                      <header class="panel-heading">Views</header>
									<div class="panel-body">
									<div id="hero-area" class="graph"></div>
									</div>
								</section>
									</div>
								<div class="col-md-12">
                                    <section class="panel">
                                      <header class="panel-heading">Followers</header>
									<div class="panel-body">
										  <div class="sparkline" data-type="line" data-resize="true" data-height="185" data-width="100%" data-line-width="1" data-line-color="#afcf6f" data-spot-color="#afcf6f" data-fill-color="rgba(240,240,240,0.5)" data-highlight-line-color="#e1e5e9" data-spot-radius="4" data-data="[0,<?php
										 echo $follow_flow_chart; ?>]" data-composite-config='{"lineColor":"#dddddd","fillColor":"#ffffff","spotColor":"#dddddd","spotRadius":"4"}' ></div>
										  <ul class="list-inline text-muted axis" margi><li>2014-03-04</li>
										  <?php
										$date = '2014-03-04';
										$end_date = date("Y-m-d");
										while (strtotime($date) <= strtotime($end_date)) {
											echo  "<li></li><li></li>";
											$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));}?>
										
										<li><?php echo date("Y-m-d"); ?></li></ul>
										</div></div>
									  </section>
                                  </div>
                              </div>
                            </div>
                           <!-- <div class="tab-pane" id="tab2">
								
                            </div>                        
                            <div class="tab-pane" id="tab3">
                              <div class="text-center wrapper">


                              </div>    -->
                            </div>
                          </div>
                        </section>
                      </section>
                    </aside>
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
  </section>
</body>
</html>