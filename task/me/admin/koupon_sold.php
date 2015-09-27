<?php
include("bin/lock_merchant.php");
include("bin/business_info_fun.php");
include("bin/functions.php");
include("bin/header.php"); ?>
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Koupons Availed</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <div class="pull-left m-r-xs">
                        <span class="block">Koupons <span class="badge up bg-danger" data-toggle='tooltip' data-placement='bottom' data-title='Koupons sold'>+<?php echo get_merchant_details($_SESSION['login_user'],'tot_koupons_sold');?></span></span>                    
                        <span class="h4" data-toggle='tooltip' data-placement='bottom' data-title='Koupons created'><?php echo get_merchant_details($_SESSION['login_user'],'koupons');?></span>
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
							<td style='padding:10px 10px 10px 15px;' width="80%">
								<li class="active"><a href="#tab2" data-toggle="tab"><font size='4pt' color='gray'><strong><i class='icon-list-alt'></i>Koupons</strong></font></a></li>
							</td>
							<td align='right'>
								<form name='search_form' action='koupon_sold.php' method='post' class="navbar-form navbar-left m-t-sm">
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
							</tr>
							</table>
                          </ul>
                        </header>
                        <section class="scrollable"  style="overflow-y: scroll;">
                            <div class="tab-pane" id="tab2">
                              <ul class="list-group m-b-none m list-group-lg list-group-sp">
										<?php 
												if(isset($_POST['search'])){
													get_sold_koupons_search($_POST['search']);
												}
												else{
													get_sold_koupons($_SESSION['login_user']);
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