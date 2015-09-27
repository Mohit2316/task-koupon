<?php
include("bin/lock_admin.php");
include("bin/functions.php");
include("bin/business_info_fun.php");
include("bin/header.php"); ?>
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Validate Merchants</h3>
                  <p class="block text-muted">Welcome to application</p>
                </div>
                <div class="col-sm-8">
                  <div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs">
                    <div class="pull-left">                  
                      <div class="pull-left m-r-xs">
                        <span class="block">Merchants <span class="badge up bg-danger" data-toggle='tooltip' data-placement='bottom' data-title='Not validated merchants'>+<?php 
						echo(notvalidated_count_of('kpn_merchant_details'));?></span></span>                    
                        <span class="h4" data-toggle='tooltip' data-placement='bottom' data-title='Total Merchants'><?php echo(count_of('kpn_merchant_details')-1);?></span>
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
							<td width='80%' style='padding:10px 10px 10px 15px;'>
								<li class="active"><a href="#tab2" data-toggle="tab"><font size='4pt' color='gray'><strong><i class='icon-user'></i>Merchants</strong></font></a></li>
							</td>
							<td align='right'>
								<form name='search_form' action='validate_merchant.php' method='post' class="navbar-form navbar-left m-t-sm">
								  <div class="form-group">
									<div class="input-group input-s">
									  <input name="search" type="text" class="form-control input-sm no-border bg-dark" placeholder="Search" style='background-color:#f3f5f9;color:#92cf5c;'>
									  <span class="input-group-btn">
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
							if(isset($_POST['active_this'])){
								change_status_active($_POST['active_this']);
							}
							if(isset($_POST['search'])){
								search_notvalidated_merchants($_POST['search']);
							}
							else{
								get_notvalidated_merchants();
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
					<aside class='b-l aside-lg'>
					<section class='vbox'>
					<section class='scrollable wrapper'>

                          <div class='text-center m-b'>
                            <div class='inline'>
                              <div class='easypiechart' data-percent='65' data-line-width='25' data-track-color='#eee' data-bar-color='#afcf6f' data-scale-color='#ddd' data-loop='false' data-size='180'>
                                <span class='h2'>60</span>%
                                <div class='easypie-text'>Processing</div>
                              </div>
                            </div>
                          </div>
                          <div class='panel-group m-b' id='accordion2'>
                            <div class='panel'>
                              <div class='panel-heading'>
                                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne'>
                                  Collapsible Group Item #1
                                </a>
                              </div>
                              <div id='collapseOne' class='panel-collapse in'>
                                <div class='panel-body text-sm'>
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt.
                                </div>
                              </div>
                            </div>
                            <div class='panel'>
                              <div class='panel-heading'>
                                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseTwo'>
                                  Collapsible Group Item #2
                                </a>
                              </div>
                              <div id='collapseTwo' class='panel-collapse collapse'>
                                <div class='panel-body text-sm'>
                                  Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>
                            <div class='panel'>
                              <div class='panel-heading'>
                                <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseThree'>
                                  Collapsible Group Item #3
                                </a>
                              </div>
                              <div id='collapseThree' class='panel-collapse collapse'>
                                <div class='panel-body text-sm'>
                                  Sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                              </div>
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