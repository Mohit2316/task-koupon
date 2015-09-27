
	  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
		<div class="row m-n">
		  <div class="col-md-8 col-md-offset-0 m-t-lg">
			<section class="panel">
			  <header class="panel-heading bg bg-primary text-left" style='background-color:#376d9b'>
				<strong>Merchant Regestration</strong>
			  </header>
			  <form class="form-horizontal" data-validate="parsley" action='signup_merchant.php' method="POST" enctype="multipart/form-data">
                    <section class="panel">
                      <div class="panel-body">
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Company <font color='red'>*</font></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='company_name' data-required="true" placeholder="Company Name">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>    
						<div class="form-group">
                           <label class="col-lg-2 control-label">Short Code<font color='red'> *</font></label>
                          <div class="col-sm-9">
							<input type="text" class="form-control" data-maxlength="5"  name='short_code' placeholder="Used in Coupon Id. Max length 5 chars." data-required="true" rows="6">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>    
						<div class="form-group">
                           <label class="col-lg-2 control-label">About Company<font color='red'> *</font></label>
                          <div class="col-sm-9">
							<textarea class="form-control parsley-validated" data-maxlength="500"  name='about_me' placeholder="Less than 500 charecters" data-required="true" data-minwords="6" rows="6"></textarea>
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Email Address<font color='red'> *</font></label>
                          <div class="col-sm-9">
							<input type="email" class="form-control"  data-required="true" name='email' placeholder="Enter email">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>  
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Password<font color='red'> *</font></label>
                          <div class="col-sm-9">
							<input type="password" class="form-control" data-required="true" name='password' placeholder="password"  id="pwd">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>  
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Retype Password<font color='red'> *</font></label>
                          <div class="col-sm-9">
							<input type="password" class="form-control"  data-required="true" placeholder="retype password"  data-equalto="#pwd" >
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>  
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Mobile<font color='red'> *</font></label>
                          <div class="col-sm-9">
                            <input type="text" data-type="number" data-required="true" name='mobile' class="form-control" placeholder="like 9999999999">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>  	
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="image">Image<font color='red'> *</font></label>
							<div class="col-sm-10" style="margin-top:5px;">
						  <input type="file"  data-required="true" name="image">
                      </div>
                    </div>		 
                        <div class="line line-dashed line-lg pull-in"></div>  
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Twitter Acc URL</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='twitter' placeholder="like kouponize">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>    
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Facebook</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='facebook' placeholder="like kouponize">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>     
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Google Plus</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='gplus' placeholder="like 109987298262776094176">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>   <div class="form-group">
				     <label class="col-lg-2 control-label">Business Type</label>
					  <div class="col-lg-10">
					          <div class="row">
						        <div class="col-sm-6">
									<div class="radio">
									  <label class="radio-custom" id="disable_add">
										<input type="radio" name="bType" id="bTypeOn" value='Online' checked="checked">
										<i class="icon-circle-blank checked"></i>
										Online
									  </label>
									</div>
									<div class="radio">
									  <label class="radio-custom" id="enable_add">
										<input type="radio" name="bType"  id="bType" value='Onsite'>
										<i class="icon-circle-blank"></i>
										On-site
									  </label>
									</div>
								</div>
							</div>
					</div>
					</div>
                        <div class="line line-dashed line-lg pull-in"></div>  
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Website URL<font color='red' id="catn"> *</font></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='website' id='website' placeholder="www.kouponize.com">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
		<div class="pr_add">
				<div class="col-sm-12">
                  <section class="panel">
                    <header class="panel-heading font-bold">Primary Address</header>
                    <div class="panel-body">
                      <div class="form-group">
                           <label class="col-lg-2 control-label">Address<font color='red'> *</font></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='address_line1' id='address_line1' data-required="true" placeholder="Door No."><br>
                            <input type="text" class="form-control" name='address_line2' placeholder="Street"><br>
                            <input type="text" class="form-control" name='address_line3' placeholder="Road, Landmark">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
						<div class="form-group">
						  <label class="col-lg-2 control-label">City<font color='red'> *</font></label>
						  <div class="col-sm-9">
							<div id="myCombobox" class="input-group dropdown combobox">
							  <input class="form-control" name='city' id='city' type="text">
							  <div class="input-group-btn">
								<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
								<ul class="dropdown-menu pull-right">
								  <li data-value="Hyderabad" data-selected="true"><a href="#">Hyderabad</a></li>
								  <li data-value="Mumbai"><a href="#">Mumbai</a></li>
								  <li data-value="Bangalore"><a href="#">Bangalore</a></li>
								  <!--<li class="divider" data-fizz="buzz"></li>-->
								  <li data-value="Pune"><a href="#">Pune</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						</div>						   
                        <div class="line line-dashed line-lg pull-in"></div> 
                        
						<div class="form-group">
						  <label class="col-lg-2 control-label">State<font color='red'> *</font></label>
						  <div class="col-sm-9">
							<div id="myCombobox" class="input-group dropdown combobox">
							  <input class="form-control" name='state' id='state' type="text">
							  <div class="input-group-btn">
								<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
								<ul class="dropdown-menu pull-right">
								  <li data-value="Hyderabad" data-selected="true"><a href="#">Telangana</a></li>
								  <li data-value="Mumbai"><a href="#">Karnataka</a></li>
								  <li data-value="Bangalore"><a href="#">Kerala</a></li>
								  <!--<li class="divider" data-fizz="buzz"></li>-->
								</ul>
							  </div>
							</div>
						  </div>
						</div>						   
                        <div class="line line-dashed line-lg pull-in"></div> 
						<div class="form-group">
						  <label class="col-lg-2 control-label">State<font color='red'> *</font></label>
						  <div class="col-sm-9">
							<div id="myCombobox" class="input-group dropdown combobox">
							  <input class="form-control" name='country' id='country' type="text">
							  <div class="input-group-btn">
								<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button>
								<ul class="dropdown-menu pull-right">
								  <li data-value="Hyderabad" data-selected="true"><a href="#">India</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						</div>			
                        <div class="line line-dashed line-lg pull-in"></div>   
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Lattitude</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="number" name='latitude' class="form-control" placeholder="like 9">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>     
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Longitude</label>
                          <div class="col-sm-9">
                            <input type="text" data-type="number" name='longitude' class="form-control" placeholder="like 59">
                          </div>
                        </div>
						</div>
						</div><button type="button" id="add_loc" class="btn btn-success" style="float:right;margin-top:-10px;margin-bottom:10px;">Add Location</button>
                        <div class="line line-dashed line-lg pull-in"></div> 
					</div>  
						<small><font color='red'>  *</font> Feilds are mandatory.</small>
                      </div>
					   <input type="hidden" data-type="number" name='fields' id='fields' value="2">
                      <footer class="panel-footer text-right bg-light lter">
                        <div id="error" class="col-sm-4" style="color:red;text-align:left;"></div><button type="submit" id="reg_me" class="btn btn-info">Register</button>
                      </footer>
                    </section>
                  </form>
			</section>
		  </div>
		</div>
	  </section>