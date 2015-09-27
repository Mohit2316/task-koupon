<?php
include("bin/lock_merchant.php");
include("bin/koupon_info_fun.php");
include("bin/functions.php");
include("bin/header.php"); ?>
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Koupon Info</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <div class="pull-left m-r-xs">
                        <span class="block">Koupons <span class="badge up bg-danger"  data-toggle='tooltip' data-placement='bottom' data-title='Active Koupons'>+<?php echo(recent_count_of_merchant('kpn_deal_headers',$_SESSION['login_user']));?></span></span>                    
                        <span class="h4" data-toggle='tooltip' data-placement='bottom' data-title='Koupons created'><?php echo(count_of_merchant('kpn_deal_headers',$_SESSION['login_user']));?></span>
                        <i class="icon-level-up text-success"></i>
                      </div>
					   <div class="clear">
                        <div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#eee']">5:5,8:4,12:5,10:6,11:7,12:2,8:6</div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            <section>
              <section>
                <section>
                  <section  class="hbox stretch">
                    <aside>
                      <section class="vbox">
                        <header class="header bg-light dk">
                          <ul class="nav nav-tabs">
							<table width='100%'>
							<tr>
							<td style='padding:10px 10px 10px 15px;'>
								<li class="active"><a href="#tab2" data-toggle="tab"><font size='4pt' color='gray'><strong><i class='icon-list-alt'></i>Koupons</strong></font></a></li>
							</td>
							<td align='right' width='23%'>
								<form name='search_form' action='koupon_info.php' method='post' class="navbar-form navbar-left m-t-sm">
								  <div class="form-group">
									<div class="input-group input-s">
									  <input name="search" type="text" class="form-control input-sm no-border bg-dark" placeholder="Search" style='background-color:#f3f5f9;color:#92cf5c;'>
									  <span class="input-group-btn" data-toggle='tooltip' data-placement='bottom' data-title='Search'>
										<button type="submit" class="btn btn-sm btn-success btn-icon" ><i class="icon-search"></i></button>
									  </span>
									</div>
								  </div>
								</form>
							</td>
							<td width='5%' align='center' style='background-color:#f3f5f9;border-right:3px solid #e4e8f2;'>
							<form name='alphabet' id='alphabet' data-toggle='tooltip' data-placement='bottom' data-title='Alphabetical order'>
							<input name='order' type='hidden' value="alphabet">
							<i class='icon-sort-by-alphabet' onClick="document.getElementById('alphabet').submit();" style="cursor:pointer; font-size:11pt;"><font face='Calibri'></font></i>
							</form>
							</td>							
							<td width='5%' align='center' style='background-color:#f3f5f9;border-right:3px solid #e4e8f2;'>
							<form name='latest_koupons' id='latest_koupons' data-toggle='tooltip' data-placement='bottom' data-title='Latest Koupons'>
							<input name='order' type='hidden' value="latest_koupons">
							<i class='icon-sort-by-order' onClick="document.getElementById('latest_koupons').submit();" style="cursor:pointer; font-size:11pt;"><font face='Calibri'><b></b></font></i>
							</form>
							</td>
							<td width='17%' align='right' style='background-color:#f3f5f9;'>
							<form id='main_items' data-toggle='tooltip' data-placement='bottom' data-title='Category Search'><i class='icon-folder-close-alt' style='font-size:12pt;'></i><?php $name = 'order'; $selected = "All"; echo dropdown( $name, $menu, $selected );?><i class='icon-arrow-right' style='font-size:12pt;color:GREEN;cursor:pointer;' onClick="document.getElementById('main_items').submit();"></i></form>
							</td>
							</tr>
							</table>
                          </ul>
                        </header>
                        <section class="scrollable"  style="overflow-y: scroll;">
                            <div class="tab-pane" id="tab2">
                              <ul class="list-group m-b-none m list-group-lg list-group-sp">
						<?php
							if(isset($_GET['order'])){
								order_koupons($_GET['order']);
							}
							else if(isset($_POST['search'])){
								search_koupons($_POST['search']);
							}
							else{
								get_koupons();
							}
						?>
                              </ul>
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
  </section>
</body>
</html>