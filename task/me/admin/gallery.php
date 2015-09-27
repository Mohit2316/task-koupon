<?php
include("bin/lock.php");
include("bin/header.php");
include('bin/SimpleImage.php');?>
        <section id="content">
         <section class="vbox">
        
        <section class="scrollable" id="pjax-container">
          <section class="vbox flex">
            <header class="header">
              <div class="row b-b">
                <div class="col-sm-4">
                  <h3 class="m-t m-b-none">Gallery</h3>
                  <p class="block text-muted">Welcome to application</p>
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
                            <li class="active"><a href="#tab1" data-toggle="tab">Gallery</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">Editor</a></li>
                           <!-- <li class=""><a href="#tab3" data-toggle="tab">Interaction</a></li>-->
                          </ul>
                        </header>
                        <section class="scrollable">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
							<?php
							function getExtension($str)
							{
									 $i = strrpos($str,".");
									 if (!$i) { return ""; }
									 $l = strlen($str) - $i;
									 $ext = substr($str,$i+1,$l);
									 return $ext;
							}
							$errors=0;
							if(isset($_POST['sendfiles'])) 
							{
							  $uploaddir = "./media/gallery/".$_POST['guid'];
							  if(!file_exists($uploaddir)){mkdir($uploaddir);}
							  
							  echo $uploaddir."\n<br>";
								foreach ($_FILES['photos']['name'] as $name => $value)
								{
								echo $value;
								$extension=getExtension($value);
								if(($extension=='jpg')OR($extension=='png')OR($extension=='gif')OR($extension=='jpeg')){
									if(filesize($_FILES['photos']['tmp_name'][$name])>2048){
										if(move_uploaded_file($_FILES['photos']['tmp_name'][$name],$uploaddir."/". $_FILES["photos"]["name"][$name])){echo "Success";}
										else{echo "FAIL";}
									}
									else{echo "M<br>";}
								}
								else{
									echo "Not Valid";
								}
								}
							}
							?>
							<div class="row">
							<div class="panel col-lg-2 text-center"><strong>Hi</strong></div>
							</div>
							<?php 
							$dirname = "./media/gallery/".$_SESSION["login_user"]."/";
							$images = glob($dirname."*.**g");
							foreach($images as $image) {
							?>
							 <div class="col-lg-2 text-center">
								  <img src="<?php echo $image; ?>" style="width:200px;height:200px"/>
								  <a href="<?php echo $image; ?>" rel="prettyPhoto[gallery]"></a><br><br>
								  <div> View | Delete</div>
							  </div>
							<?php
							}?>
                            </div>

                            <div class="tab-pane text-center" id="tab2">
								<div style="height:10px;"></div>
								<div class="col-lg-1"></div>
								 <div class="list-group-item col-lg-10">
									<h4 class="blok">Upload Your Photos here</h4>
								<form method="post" action="" enctype="multipart/form-data">
									<input type="hidden" name="MAX_FILE_SIZE" value="500000">
									<input type="hidden" name="guid" value="<?php echo $_SESSION['login_user'];?>">
									<!--<div class="form-group">
										<div class="dropfile visible-lg">
										  <small>Drag and Drop file here</small>
										</div>
									</div>-->
									<div class="form-group">
										<small>OR</small>
									</div>
									<div class="form-group">
										  <label class="col-lg-6 text-right">Upload your Images here.</label><label class="col-lg-6"><input multiple="true"  type="file" name="photos[]"/></label>
											<input type="hidden" name="sendfiles" value="Send Files" />
								

   								</div>
									<div class="form-group">
											<div style="height:40px"></div>
										  <label class="col-lg-12"><input type="submit" class="btn btn-primary" value="Upload"></label>
									</div>
									</form>
                                </div>
                            </div>                            
                            <!--<div class="tab-pane" id="tab3">
                              <div class="text-center wrapper">
                                <i class="icon-spinner icon-spin icon-large"></i>
                              </div>
                            </div>-->
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