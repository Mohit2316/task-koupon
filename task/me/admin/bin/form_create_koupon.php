
				  
                    <section class="panel">
                      <header class="panel-heading">
                        <strong>Koupon Details</strong>
                      </header>
                      <div class="panel-body">    
					 <?php
						if($_SESSION['login_type']=="admin"){
							echo "<div class='form-group'>" ;
							echo " <label class='col-lg-2 control-label'>Company Name</label>" ;
							echo " <div class='col-sm-9'>" ;
							echo " <input type='text' class='form-control' name='company_name' data-required='true' placeholder='Company Name Exactly as mentioned'>" ;
							echo " </div>" ;
							echo " </div>";
							echo "<div class='line line-dashed line-lg pull-in'></div> ";  }
						?>
                        <div class="form-group">
                           <label class="col-lg-2 control-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" data-maxlength="60" class="form-control" name='title' data-required="true" placeholder="Title of the Koupon">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>      
						<div class="form-group">
                           <label class="col-lg-2 control-label">Short Descreption</label>
                          <div class="col-sm-9">
                            <input type="text" data-maxlength="100" name='short_desc' class="form-control"  data-required="true" placeholder="Less than 100 charecters">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div> 
						<div class="form-group">
                           <label class="col-lg-2 control-label">Long Descreption</label>
                          <div class="col-sm-9">
							<textarea class="form-control parsley-validated" data-maxlength="500"  name='long_desc' placeholder="Less than 500 charecters" data-required="true" data-minwords="6" rows="6"></textarea>
                          </div>
                        </div>
                    <div class="line line-dashed line-lg pull-in"></div>		
			    <div class="form-group">
                          <label class="col-sm-2 control-label">Koupon Code</label>
                          <div class="col-sm-9">
						  <div class="row">
						        <div class="col-sm-9">		
								<div class="radio">
									  <label class="radio-custom" id="random">
										<input type="radio" name="kpn_code" checked="checked" value='-1'>
										<i class="icon-circle-blank checked"></i>
										Random&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>Generate Koupon Codes Randomly Based Upon Your Company Name.</small>
									  </label>
									</div>
									<div class="radio">
									  <label class="radio-custom">
										<input type="radio" name="kpn_code">
										<i class="icon-circle-blank"  id="predef"></i>	
										   Pre-defined &nbsp;&nbsp;&nbsp;&nbsp;<small>Generate Pre-Defined Koupon Codes.</small><input type="text" id="kpn_code_val" data-maxlength="12"  name="kpn_code_val" class="form-control" placeholder="max 12 char" style="margin-top:5px;">
									  </label>
									</div>
								</div>
							</div></div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>
				   <div class="form-group">
				     <label class="col-lg-2 control-label">Koupon Type</label>
					  <div class="col-lg-10">
						<div class="btn-group m-r">
                          <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle">
                            <span class="dropdown-label" data-placeholder="Please select">Please select</span> 
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-select">
                              <li><a href="#"><input type="radio" value="1" name="menu_id" >Food & Drinks</a></li>
                              <li><a href="#"><input type="radio" value="2" name="menu_id">Events</a></li>
                              <li><a href="#"><input type="radio" value="3" name="menu_id">Beauty</a></li>
                              <li><a href="#"><input type="radio" value="4" name="menu_id">Fitness</a></li>
                              <li><a href="#"><input type="radio" value="5" name="menu_id">Electronics</a></li>
                              <li><a href="#"><input type="radio" value="6" name="menu_id">Kids</a></li>
                              <li><a href="#"><input type="radio" value="7" name="menu_id">Fashion</a></li>
                              <li><a href="#"><input type="radio" value="8" name="menu_id">Shopping</a></li>
                              <li><a href="#"><input type="radio" value="9" name="menu_id">Activities</a></li>
                              <li><a href="#"><input type="radio" value="10" name="menu_id">Travel</a></li>
                          </ul>
                        </div>
					</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>      
				   <div class="form-group">
				     <label class="col-lg-2 control-label">Time Bounded</label>
					  <div class="col-lg-10">
					          <div class="row">
						        <div class="col-sm-6">
									<div class="radio">
									  <label class="radio-custom" onclick="enableme()">
										<input type="radio" name="time_bound" value='1' checked="checked">
										<i class="icon-circle-blank checked"></i>
										Yes
									  </label>
									</div>
									<div class="radio">
									  <label class="radio-custom" onclick="disableme()">
										<input type="radio" name="time_bound" value='0'>
										<i class="icon-circle-blank"></i>
										No
									  </label>
									</div>
								</div>
							</div>
					</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>  
					<div class="form-group">
                      <label class="col-sm-2 control-label">Deal Start Date</label>
						<div class="col-sm-9">
							<input class="form-control parsley-validated" data-required="true" name='deal_start_date' type="text" placeholder="YYYY-MM-DD" data-type="dateIso"></input>
						</div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div><div class="form-group">
                      <label class="col-sm-2 control-label">Deal End Date</label>
                      	<div class="col-sm-9">
							<input class="form-control parsley-validated" id='ded' data-required="true" name='deal_end_date' type="text" placeholder="YYYY-MM-DD" data-type="dateIso"></input>
						</div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>		
			    <div class="form-group">
                          <label class="col-sm-2 control-label">Volume</label>
                          <div class="col-sm-9">
						  <div class="row">
						        <div class="col-sm-6">		
								<div class="radio">
									  <label class="radio-custom" id="unlimited">
										<input type="radio" name="volume" checked="checked" value='-1'>
										<i class="icon-circle-blank checked"></i>
										Unlimited
									  </label>
									</div>
									<div class="radio">
									  <label class="radio-custom">
										<input type="radio" name="volume">
										<i class="icon-circle-blank" id="limited"></i>	
										   Limited <input type="text" data-type="number" name="volume_limited" id="volume_val" class="form-control" placeholder="double click to enter value" style="margin-top:5px;">
									  </label>
									</div>
								</div>
							</div></div>
                        </div>
					<div class="line line-dashed line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="small_image">Small Image</label>
							<div class="col-sm-10" style="margin-top:5px;">
						  <input type="file"  data-required="true" name="small_image">
                      </div>
                    </div>		
                    <div class="line line-dashed line-lg pull-in" for="large_image"></div>	
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Large Image</label>
                      <div class="col-sm-10" style="margin-top:px;">
						  <input type="file" data-required="true" name="large_image">
                      </div>
                    </div>
                    <div class="line line-dashed line-lg pull-in"></div>	
				   <div class="form-group" onload="defaultfun()">
				     <label class="col-lg-2 control-label">Deal Type</label>
					  <div class="col-lg-10">
					          <div class="row">
						        <div class="col-sm-10">
									<div class="radio">
									  <label class="radio-custom" onclick="enableItem()">
										<input type="radio" name="deal_type" value='FREE' checked="checked">
										<i class="icon-circle-blank checked"></i>
										FREE : <small> A deal that provides for a free offering.</small>
									  </label>
									</div>
									<div class="radio">
									  <label class="radio-custom" onclick="disableItem()">
										<input type="radio" name="deal_type" value='OFF'>
										<i class="icon-circle-blank"></i>
										OFF : <small> A deal that provides for a discount.</small>
									  </label>
									</div>
								</div>
							</div>
					</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div> 
					<div class="form-group">
                           <label class="col-lg-2 control-label">Deal Value</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="items1" name='deal_value' data-required='true' placeholder="Free Item Name: like pen, 1+1, etc.,">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div> 
						<div class="form-group">
                           <label class="col-lg-2 control-label">Deal Condition</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="items2" name='deal_condition' data-required='true' placeholder="Condition: like every purchase of 5 books, etc.,">
                          </div>
                        </div>
					<div class="line line-dashed line-lg pull-in"></div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Deal Cost</label>
                          <div class="col-sm-9">
                            <input type="text" name='deal_cost' id="items3" data-required='true' class="form-control" placeholder="like 230, 150, etc.">
                          </div>
                        </div>
					<div class="line line-dashed line-lg pull-in"></div>
						<div class="form-group">
                          <label class="col-sm-2 control-label">Deal Original Cost</label>
                          <div class="col-sm-9">
                            <input type="text" name='deal_orig_cost' id="items4" data-required='true' class="form-control" placeholder="like 500, 600, etc.,">
                          </div>
                        </div>
                        <div class="line line-dashed line-lg pull-in"></div>  
						<small align='right'>* All feilds are need to be filled</small>
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>
                      </footer>
                    </section>
                  </form>