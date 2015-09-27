<?php include('bin/top.php');
include("bin/config.php");
include('bin/SimpleImage.php');
include('../mail_checker.php');
?>
<body>
<script src="js/register.js"></script>
<div id='panel'>
	<div class='left_panel'>
			   <?php 
			   if(isset($_POST['company_name'])){
				   $check=mysql_query("SELECT email FROM admin WHERE email='".$_POST['email']."';");
				   $count=mysql_num_rows($check);
				   if($count==0){
					   mysql_query("INSERT INTO kpn_merchant_details VALUES (NULL,'".$_POST['company_name']."','".$_POST['short_code']."','1000','".$_POST['about_me']."','".$_POST['email']."','".$_POST['website']."','".$_POST['twitter']."','".$_POST['facebook']."','".$_POST['gplus']."','".$_POST['mobile']."','".$_POST['bType']."','".$_POST['address_line1']."','".$_POST['address_line2']."','".$_POST['address_line3']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['longitude']."','".$_POST['latitude']."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','image','Not Validated')");			
					   $sql2=mysql_query("SELECT @last := LAST_INSERT_ID();");
						$uid = mysql_fetch_array($sql2);
						mysql_query("INSERT INTO `admin` (`id`,`uid`,`password`,`email`,`name`,`login_type`) VALUES (NULL , '".$uid[0]."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['company_name']."', 'merchant');");
						mysql_query("UPDATE kpn_merchant_details SET image='media/uploads/merchants/".$uid[0].".png' WHERE uid='".$uid[0]."';");
						if($_POST['fields']>1){
							if($_POST['mobile'.$_POST['fields']]!=""){
								mysql_query("INSERT INTO `kouponiz_demo`.`kpn_merchant_address` (`uid`, `mobile`, `address_line1`, `address_line2`, `address_line3`, `longitude`, `latitude`) VALUES ('".$uid[0]."','".$_POST['mobile'.$_POST['fields']]."', '".$_POST['address_line1'.$_POST['fields']]."', '".$_POST['address_line2'.$_POST['fields']]."', '".$_POST['address_line3'.$_POST['fields']]."', '".$_POST['longitude'.$_POST['fields']]."', '".$_POST['latitude'.$_POST['fields']]."');");
							}
						}
						mysql_query("ALTER TABLE kpn_merchant_followers ADD u".$uid[0]." INT(10) NOT NULL DEFAULT 0;");
						$image = new SimpleImage();
						$image->load($_FILES["image"]["tmp_name"]);
						$image->resizeToWidth(320);
						$image->save("media/uploads/merchants/".$uid[0].".png");
						echo "<section id='content' class='m-t-lg wrapper-md animated fadeInDown' style='margin-top:15%;'>		<div class='row m-n'>		  <div class='col-md-8 col-md-offset-0 m-t-lg'>			<section class='panel'>			  <header class='panel-heading bg bg-primary text-left' style='background-color:#376d9b'>				<strong>Regestratoin Success</strong>			  </header><p><i class='icon-quote-left' style='font-size:20pt'></i><font size='2pt'>Thank you for registering with Kouponize.com, you will be able to login to the analytics and admin page once you have been verified.<br><center>Thank you for your co-operation.</font><i class='icon-quote-right' style='font-size:20pt'></i></center></p></section>		  </div>		</div>	  </section>";												
						//adminMail($_POST['company_name'],"media/uploads/merchants/".$uid[0].".png",$_POST['email'],$_POST['password'],$_POST['mobile']);
						merchantMail($_POST['company_name'],"media/uploads/merchants/".$uid[0].".png",$_POST['email'],$_POST['password'],$_POST['mobile']);
				   }
				   else{
						echo "<section id='content' class='m-t-lg wrapper-md animated fadeInDown' style='margin-top:15%;'>		<div class='row m-n'>		  <div class='col-md-8 col-md-offset-0 m-t-lg'>			<section class='panel'>			  <header class='panel-heading bg bg-primary text-left' style='background-color:#376d9b'>				<strong>Alert</strong>			  </header><font size='2pt'><br><center><i class='icon-quote-left' style='font-size:20pt'></i>Merchant email already registered.<br>Please register with another email address.</font><i class='icon-quote-right' style='font-size:20pt'></i></center></section>		  </div>		</div>	  </section>";
				   }
				}
				else{
					include('bin/merchant_register_form.php');
				}			   
			   ?>
	</div>
	<div class="right_panel"><br>
	  <center>
					<img src='images/logo.png' width='300px'>
				  <div class="social-list center clearfix" style='margin-top:150px; margin-left:-20px;'>
					  <ul class="social-icon">
						  <li><a href="https://www.facebook.com/kouponize"><i class="icon-facebook"></i></a></li>
						  <li><a href="https://twitter.com/kouponize"><i class="icon-twitter"></i></a></li>
						  <li><a href="https://plus.google.com/109987298262776094176"><i class="icon-google-plus"></i></a></li>
					  </ul><!--/.social-icon-->
				  </div><!--/.social-list-->
	  </center>
    </div>
</div>
  <!-- / footer -->
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
</body>
</html>