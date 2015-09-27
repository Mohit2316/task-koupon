<?php
include_once("../bin/functions.php");
include('../bin/config.php');
include('../mail_checker.php');
session_start();
$sql=mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='".$_SESSION['kpn_id']."'");
$kpn=mysql_fetch_array($sql);
$sql1=mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."'");
$user=mysql_fetch_array($sql1);
function get_company_name($uid){
$sql=mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$uid';");
$u=mysql_fetch_array($sql);
return $u['company_name'];
}
function get_det($uid,$cat){
$sql=mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$uid';");
$u=mysql_fetch_array($sql);
switch($cat){
default:
	return $u[$cat];}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
  <link rel="stylesheet" href="js/select2/select2.css" type="text/css" />
  <link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
  <link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />
  <link rel="stylesheet" href="js/slider/slider.css" type="text/css" />
  <link rel="stylesheet" href="css/plugin.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>
					<section class="tab-pane" id="wizard">
              <div class="panel">
                <div class="wizard clearfix" id="form-wizard">
				
				<?php if(!isset($_POST['email'])){ ?>
                  <ul class="steps">
                    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Click</li>
                    <li data-target="#step2"><span class="badge">2</span>Claim</li>
                    <li data-target="#step3"><span class="badge">3</span>Redeem</li>
                  </ul>
                </div>
                <div class="step-content">
                  <form method='POST' id='deal'>
                    <div class="step-pane active" id="step1">
					<strong><?php echo $kpn['title'];?></strong><br>
					<small><?php echo $kpn['short_desc'];?></small><br><br>
					<strong><table><tr>
					<td>Available Volume </td><td>: <?php  if($kpn['volume']==-1) echo "Unlimited"; else{ echo $kpn['volume'];}?></td><tr>
					<tr><td>Company Name</td><td>: <?php echo get_company_name($kpn['created_by']);?></td></tr></table></strong><br>
                      <p>Your email:</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" name='email' value="<?php echo $user['email'];?>" readonly><br>
                  <div class="actions m-t">
                    <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
                    <button type="button" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" >Next</button>
                  </div>
                    </div>
                    <div class="step-pane" id="step2">
                      <p>Volume Reqired :</p>
                      <input type="text" class="form-control" data-trigger="change" data-required="true" data-max="3" name='volume_pur' data-type="number" placeholder="Volume">
						<br>
					  <p>By clicking submit button, you are agreed terms and conditions of website.</p>
                  <div class="actions m-t">
                    <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous">Prev</button>
                    <button type="submit" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" >Submit</button>
                  </div>
                    </div>
					<?php }
					else{ 
						if(($kpn['volume']==-1) or ($kpn['volume']>=$_POST['volume_pur'])){
							$kpn_ids="";
							for($a=0;$a<$_POST['volume_pur'];$a++){
								$identifier = rand(100000,999999);
								$kpn_ids.=$identifier.":";
							}

							$merchnt = get_company_name($kpn['created_by']);
							$mobile = $_SESSION['user_mobile'];
							
							$msg = "Your Koupon ID is ".$kpn_ids.". You can claim your Koupon at ".$merchnt.". Thank you for using www.kouponize.com";							
							
							$url = "http://sms.todaybiz.in/SendSMS/sendmsg.php?uname=koupon&pass=arun123&send=koupon&dest=".urlencode($mobile)."&msg=".urlencode($msg);

							$ch = curl_init($url);
							
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							$curl_scraped_page = curl_exec($ch);
							curl_close($ch);
							
							mysql_query(" INSERT INTO `kpn_processed_deals` (`id` ,`uid` ,`kpn_id` ,`kpn_identifier` ,`user_id` ,`volume_purchased` ,`purchased_date` ,`claim`) VALUES (NULL,'".$kpn['created_by']."','".$kpn['kpn_id']."','".$kpn_ids."','".$_SESSION['user_name']."','".$_POST['volume_pur']."','".date("Y-m-d H:i:s")."','n')");
							if(($kpn['volume']!=-1)){
							$update_vol=$kpn['volume']-$_POST['volume_pur'];
							mysql_query("UPDATE kpn_deal_headers SET volume='".$update_vol."' WHERE kpn_id='".$kpn['kpn_id']."'");}
							availedMerchant(get_company_name($kpn['created_by']),get_det($kpn['created_by'],'image'),get_det($kpn['created_by'],'email'),get_det($kpn['created_by'],'mobile'),$kpn['title'],$_POST['volume_pur'],$kpn_ids,$user['email'],$user['mobile']);
							availedUser($user['email'],get_det($kpn['created_by'],'image'),$kpn['title'],$kpn_ids,get_company_name($kpn['created_by']),get_det($kpn['created_by'],'email'),get_det($kpn['created_by'],'mobile'),get_det($kpn['created_by'],'address_line1'),get_det($kpn['created_by'],'address_line2'),get_det($kpn['created_by'],'address_line3'),get_det($kpn['created_by'],'city'));
					?>
                  <ul class="steps">
                    <li data-target="#step1"><span class="badge badge-success">1</span>Click</li>
                    <li data-target="#step2"><span class="badge badge-success">2</span>Claim</li>
                    <li data-target="#step3" class="active"><span class="badge badge-info">3</span>Redeem</li>
                  </ul>
                </div>
                <div class="step-content"><form method='POST' action='' id='deal'>
                    <div class="step-pane active" id="step3">Thank You for using Kouponize.com<br><br>Your Koupon Identifiers are :<?php $kpn_ids_array=spliti(":",$kpn_ids); foreach($kpn_ids_array as $ids) echo $ids."<br>";?>Please note your koupon identifier numbers and claim your koupons at respective merchant.
                  <div class="actions m-t">
                  </div>
					</div>         
					<?php }
					else{ ?>
                  <ul class="steps">
                    <li data-target="#step1"><span class="badge badge-success">1</span>Click</li>
                    <li data-target="#step2"><span class="badge badge-success">2</span>Claim</li>
                    <li data-target="#step3" class="active"><span class="badge badge-info">3</span>Redeem</li>
                  </ul>
                </div>
                <div class="step-content"><form method='POST' action='' id='deal'>
                    <div class="step-pane active" id="step3">Sorry,<br><br>Available koupons are <?php echo $kpn['volume']; ?> only<br>Please try again with the available koupons.<br>Thank you.
                  <div class="actions m-t">
                  </div>
					</div>   
					<?php } } ?>
                  </form>
                </div>
              </div>
            </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- app -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
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
  <script>
  var links = document.getElementsByClassName("link"); // Get all the elements with the class link

for (var i; i < links.length; i++) { // Loop over all the links
    links[i].onclick = function(e) { // Tell them what to do when they're clicked
        e.preventDefault(); // Prevent the browser from navigating to the address of the links href
        document.getElementById("iframe").src = links[i].href; // Set the iframe's src to the href of the a.
    }
}
  </script>
</body>
</html>