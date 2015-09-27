<?php
include("config.php");

function get_sold_koupons(){
	$uid=$_SESSION['login_user'];
	$sql1=mysql_query("SELECT COUNT(*) AS `Rows` , `kpn_id` FROM `kpn_processed_deals` WHERE uid='$uid' GROUP BY `kpn_id` ORDER BY `kpn_id`");
	if(mysql_num_rows($sql1)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No one purchased your koupons yet.</center></strong></header></section>" ;}
	while($process = mysql_fetch_array($sql1)){
			$kpn_id_details=mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='".$process['kpn_id']."'");
			$koupon=mysql_fetch_array($kpn_id_details);
			include("sold_koupon_template.php");
		}
}
function get_sold_koupons_search($search){
	$uid=$_SESSION['login_user'];
	$count=0;
	if((ctype_digit($search))&(strlen($search)==6)){
		$sql1=mysql_query("SELECT * FROM `kpn_processed_deals` WHERE uid='$uid' AND kpn_identifier LIKE '%$search%'");
		while($process = mysql_fetch_array($sql1))
		{
			$kpn_id_details=mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='".$process['kpn_id']."'");
			if(mysql_num_rows($kpn_id_details)==0){}
			else{
			$koupon=mysql_fetch_array($kpn_id_details);
			include("sold_koupon_template.php");
			$count++;}
		}
	}
	else
	{
		$sql1=mysql_query("SELECT COUNT(*) AS `Rows` , `kpn_id` FROM `kpn_processed_deals` WHERE uid='$uid' GROUP BY `kpn_id` ORDER BY `kpn_id`");
		while($process = mysql_fetch_array($sql1))
		{
			$kpn_id_details=mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='".$process['kpn_id']."' AND title LIKE '%$search%' ");
			if(mysql_num_rows($kpn_id_details)==0){}
			else{
			$koupon=mysql_fetch_array($kpn_id_details);
			include("sold_koupon_template.php");
			$count++;}
		}
	}
	
		if($count==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No Koupons Found with search details.</center></strong></header></section>" ;}
}
function get_users_purchased($kpn_id){
	$users=mysql_query("SELECT * FROM kpn_processed_deals WHERE kpn_id='$kpn_id'");
	while($process_users = mysql_fetch_array($users)){
		$user_details=mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$process_users['user_id']."'");
		$user=mysql_fetch_array($user_details);
		$claim='Yes';
		if ($process_users['claim']=='n'){$claim="<form id='claim".$process_users['id']."' name='claim' action='' method='POST'><input name='claim_id' type='hidden' value='".$process_users['id']."'></form>No&nbsp;<i class='icon-check' style='font-size:13pt;cursor:pointer;' onClick=\"document.getElementById('claim".$process_users['id']."').submit();\"  data-toggle='tooltip' data-placement='bottom' data-title='Click me if Claimed'></i>";}
		echo "<tr><td>".$user['email']."</td><td>".date("h:ia d/m/Y.",strtotime($process_users['purchased_date']))."</td><td>".$process_users['volume_purchased']."</td><td style='word-wrap:break-word;'>".$process_users['kpn_identifier']."</td><td>".$user['mobile']."</td><td>".$user['city']."</td><td>".$claim."</td></tr>";
	}
}
if (isset($_POST['claim_id'])){ claim_details($_POST['claim_id']);}
function claim_details($id){
	$det=mysql_query("UPDATE kpn_processed_deals SET claim='y' WHERE id='$id'");
}

function get_koupon_details($id,$num){
	$strSQL1 = mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$id'");
	$koupon1 = mysql_fetch_array($strSQL1);
	$strSQL2 = mysql_query("SELECT * FROM kpn_menu_classes WHERE menu_id='$id'");
	$koupon2 = mysql_fetch_array($strSQL2);
	$strSQL3 = mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='$id'");
	$koupon3 = mysql_fetch_array($strSQL3);
	switch($num){
		case "name":
			return $koupon2['name'];
		case "time_bound":
			if($koupon3['time_bound']==0) return "No";
			else return "Yes";
		case "volume_say":
			if($koupon3['volume']==-1) return "Unlimited";
			else return $koupon3['volume'];
		default:
			return $koupon1[$num];
	}	
}
function get_merchant_details($id,$feild){
	$strSQL1 = mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$id'");
	$koupon1 = mysql_fetch_array($strSQL1);
	$strSQL4 = mysql_query("SELECT * FROM kpn_merchant_details WHERE company_name='$id'");
	$koupon4 = mysql_fetch_array($strSQL4);
	$strSQL2 = "SELECT * FROM kpn_deal_headers WHERE created_by='$id'";
	$koupons = mysql_query($strSQL2);
	$no_koupons = mysql_num_rows($koupons);
	$sold=0;
	$tot_koupons=0;
	while($koupon = mysql_fetch_array($koupons)) {
		$tot_koupons=$tot_koupons+$koupon['orig_volume'];
		$var1=$koupon['kpn_id'];
			$strSQL3= "SELECT * FROM kpn_processed_deals WHERE kpn_id='$var1'";
			$koupon_id_list = mysql_query($strSQL3);
			while($koupon_id = mysql_fetch_array($koupon_id_list)) {
				$sold=$sold+$koupon_id['volume_purchased'];
			}
	}
	switch($feild){
		case "koupons":
			return $no_koupons;
		case "tot_koupons_sold":
			return $sold;
		case "tot_koupons":
			while($koupon = mysql_fetch_array($koupons)) {
			if($koupon['orig_volume']=='-1') $tot_koupons="Unlimited";
			}
			return $tot_koupons;
		case "uid_company_name":
			return $koupon4['uid'];
		default:
			return $koupon1[$feild];
	}	
}
function get_koupons_profile($uid){
$strSQL2 = "SELECT * FROM kpn_deal_headers WHERE created_by='$uid' and status='Active' and volume<>0 and deal_start_date<=CURRENT_TIMESTAMP and deal_end_date>=CURRENT_TIMESTAMP";
$koupons = mysql_query($strSQL2);
if(mysql_num_rows($koupons)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No koupons created yet.</center></strong></header></section>" ;}
while($koupon = mysql_fetch_array($koupons)) {
		echo "		      <li class='list-group-item'>";
		echo "                          <a href='#' class='thumb-sm pull-left m-r-sm'>";
		echo "                            <img src=".$koupon['image_small']." class='img-circle'>";
		echo "                          </a>";
		echo "                          <a href='#' class='clear'>";
		echo "                            <small class='pull-right' style='color:NAVY;' data-toggle='tooltip' data-placement='bottom' data-title='Creation Date'><i class='icon-cloud-download' ></i>&nbsp;".date("h:ia d/m/Y",strtotime($koupon['creation_date']))." </small>";
		echo "                            <table><tr><td width='100px'><strong class='block'  style='color:#80c740;'>".$koupon['title']."</strong></td><td></td></tr></table>";
		echo "                            <small>".$koupon['short_desc']."</small>";
	
		echo "                          </a>";
		echo "                        </li>";
	}
}

function get_koupon_status_profile($kpnid){
	$strSQL1 = "SELECT * FROM kpn_deal_headers where kpn_id='$kpnid'";
	$koupons_status = mysql_query($strSQL1);
	while($koupon_status = mysql_fetch_array($koupons_status)){
		if($koupon_status['deal_end_date']<date( "Y-m-d H:i:s",mktime(0, 0, 0))){
			return "<i class='icon-unlink'  data-toggle='tooltip' data-placement='bottom' data-title='Koupon Expired' style='font-size:12pt;color:RED;'></i>";
		}
		else if($koupon_status['deal_start_date']>date( "Y-m-d H:i:s",mktime(0, 0, 0))){
			return "<i class='icon-link'  data-toggle='tooltip' data-placement='bottom' data-title='Coming soon' style='font-size:12pt;color:ORANGE;'></i>";
		}
		else if($koupon_status['volume']==0){
			return "<i class='icon-stackexchange'  data-toggle='tooltip' data-placement='bottom' data-title='Out of stock' style='color:NAVY;font-size:12pt;'></i>";
		}
		else{
					if($koupon_status['status']=="Active"){
						return "<i class='icon-plus-sign' style='font-size:12pt;color:GREEN;cursor:pointer;' data-toggle='tooltip' data-placement='bottom' data-title='Active Koupon'></i>";
					}
					else if($koupon_status['status']=="Block"){
						return "<i class='icon-minus-sign' style='font-size:12pt;color:RED;cursor:pointer;' data-toggle='tooltip' data-placement='bottom' data-title='Blocked Koupon'></i>";
					}
		}
	}
}
//Retriving merchant Info
function get_merchants(){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE uid>0 ORDER BY company_name";
	$merchant_details = mysql_query($strSQL);
	if(mysql_num_rows($merchant_details)<=0){
		echo "No merchants registered yet.";
	}
	else{
	while($merchant = mysql_fetch_array($merchant_details)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			echo "<img src='".$merchant['image']."'alt='merchant Image' class='img-circle'>";
			echo "</a>";
			echo "<form id='block_form".$merchant['email']."' name='block_form' action='business_info.php' method='POST'>";
			echo "<input name='block_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";		
			echo "<form id='active_form".$merchant['email']."' name='active_form' action='business_info.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<form id='info_form".$merchant['email']."' name='info_form' action='business_info.php' method='POST'>";
			echo "<input name='get_info' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'><table style=\"font-family:'Calibri';font-size:10pt;\"><tr><td colspan='2' style='color:#fb6b5b;' data-toggle='tooltip' data-placement='bottom' data-title='Last Login'><i class='icon-signin' ></i>&nbsp;".date("h:ia d/m/Y",strtotime($merchant['update_date']))."</td></tr><tr><td></td><td height='40px' align='right'><i class='icon-info-sign' style='font-size:11pt;color:navy;' onClick=\"document.getElementById('info_form".$merchant['email']."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Company Info'></i>&nbsp;&nbsp;".get_status_merchant($merchant['email'],"status")."&nbsp;&nbsp;<i class='icon-list' style='font-size:11pt;color:gray;' data-toggle='tooltip' data-placement='bottom' data-title='Drop Down'></i></td></tr></table></small>";
			echo get_status_merchant($merchant['email'],"company_name");
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\" width='70%'><tr>";
			echo "<td width='40%'><i class='icon-envelope-alt' style='font-size:9pt;'></i>".$merchant['email']."</td><td><small><i class='icon-phone'></i> ".$merchant['mobile']."</small></td></tr>";
			echo "<tr><td colspan='2'><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($merchant['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
			echo "<center>";
			echo "<div id='koupon_panel'><br>";
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                  <table class='table table-striped m-b-none' data-ride='datatables'>";
			echo "                    <thead>";
			echo "                      <tr>";
			echo "                        <th width='10%'>Koupon ID</th>";
			echo "                        <th width='20%'>Title</th>";
			echo "                        <th width='12%'>Time Bound</th>";
			echo "                        <th width='8%'>Volume</th>";
			echo "                        <th width='20%'>Start Date</th>";
			echo "                        <th width='20%'>End Date</th>";
			echo "                        <th width='10%'>Satus</th>";
			echo "                      </tr>";
			echo "                    </thead>";
			echo "                    <tbody>";
			get_koupons($merchant['uid']);
			echo "                    </tbody>";
			echo "                  </table>";
			echo "                </div>";
			echo "              </section>";
			echo "            </div>";
			echo "</div>";
			echo "</center>";
		}
	}
}

//not validated merchants
function get_notvalidated_merchants(){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE uid>0 and status='Not validated' ORDER BY company_name";
	$merchant_details = mysql_query($strSQL);
	if(mysql_num_rows($merchant_details)<=0){
		echo "All are validated";
	}
	else{
	while($merchant = mysql_fetch_array($merchant_details)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			echo "<img src='".$merchant['image']."'alt='merchant Image' class='img-circle'>";
			echo "</a>";	
			echo "<form id='active_form".$merchant['email']."' name='active_form' action='validate_merchant.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'>
			<table style=\"font-family:'Calibri';font-size:10pt;\">
			<tr><td width='70px'></td><td><button type='submit' class='btn btn-success btn-s-xs' style='margin-top:10px;' onClick=\"document.getElementById('active_form".$merchant['email']."').submit();\">Validate</button></td></tr>
			</table></small>";
			echo "<strong class='block'>".$merchant['company_name']."</strong>";
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\" width='70%'><tr>";
			echo "<td width='40%'><i class='icon-envelope-alt' style='font-size:9pt;'></i>".$merchant['email']."</td><td><small><i class='icon-phone'></i> ".$merchant['mobile']."</small></td></tr>";
			echo "<tr><td colspan='2'><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($merchant['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
		}
	}
}

function search_notvalidated_merchants($search){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE uid>0 and status='Not validated' and ((company_name LIKE '%".$search."%') or (mobile LIKE '%".$search."%') or (email LIKE '%".$search."%'));";
	$merchant_details = mysql_query($strSQL);
	if(mysql_num_rows($merchant_details)<=0){
		echo "No merchant found";
	}
	else{
	while($merchant = mysql_fetch_array($merchant_details)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			echo "<img src='".$merchant['image']."'alt='merchant Image' class='img-circle'>";
			echo "</a>";	
			echo "<form id='active_form".$merchant['email']."' name='active_form' action='validate_merchant.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'>
			<table style=\"font-family:'Calibri';font-size:10pt;\">
			<tr><td width='70px'></td><td><button type='submit' class='btn btn-success btn-s-xs' style='margin-top:10px;' onClick=\"document.getElementById('active_form".$merchant['email']."').submit();\">Validate</button></td></tr>
			</table></small>";
			echo "<strong class='block'>".$merchant['company_name']."</strong>";
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\" width='70%'><tr>";
			echo "<td width='40%'><i class='icon-envelope-alt' style='font-size:9pt;'></i>".$merchant['email']."</td><td><small><i class='icon-phone'></i> ".$merchant['mobile']."</small></td></tr>";
			echo "<tr><td colspan='2'><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($merchant['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
		}
	}
}

//Getting Information
function get_information($email){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE email='$email'";
	$merchant_details = mysql_query($strSQL);
	$merchant = mysql_fetch_array($merchant_details);
	$var=$merchant['uid'];
	$strSQL1 = "SELECT * FROM kpn_deal_headers WHERE created_by='$var'";
	$koupons = mysql_query($strSQL1);
	$no_koupons = mysql_num_rows($koupons);
	$sold=0;
	while($koupon = mysql_fetch_array($koupons)) {
		$var1=$koupon['kpn_id'];
			$strSQL2= "SELECT * FROM kpn_processed_deals WHERE kpn_id='$var1'";
			$koupon_id_list = mysql_query($strSQL2);
			while($koupon_id = mysql_fetch_array($koupon_id_list)) {
				$sold=$sold+$koupon_id['volume_purchased'];
			}
	}
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo"<br><center><strong><font color='#80c740'>Business Details</font></strong></center>";
			echo"<br><center><img src='".$merchant['image']."' height='100px' width='100px'></center>";
			echo "<br><strong><font color='#fb6b5b'>Company Details</font></strong>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                  <table class='table table-striped m-b-none' data-ride='datatables'>";
			echo "                    <tbody>";
			echo "<tr><td><strong>Name </strong></td><td>".$merchant['company_name']."</td></tr>";
			echo "<tr><td><strong>Status </strong></td><td>".$merchant['status']."</td></tr>";
			echo "<tr><td><strong>Location </strong></td><td>".$merchant['longitude']." , ".$merchant['latitude']."</td></tr>";
			echo "                    </tbody>";
			echo "                  </table>";
			echo "                </div>";
			echo "              </section>";
			//echo "		<i class='icon-chevron-left' style='cursor:pointer;'></i><i class='icon-chevron-right' style='cursor:pointer;'></i>";	
			echo "            </div>";
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo "<br><strong><font color='#fb6b5b'>Koupon Details</font></strong>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                  <table class='table table-striped m-b-none' data-ride='datatables'>";
			echo "                    <tbody>";
			echo "<tr><td width='90%'><strong>Koupons </strong></td><td>".$no_koupons."</td></tr>";
			echo "<tr><td width='90%'><strong>Koupons sold </strong></td><td>".$sold."</td></tr>";
			echo "                    </tbody>";
			echo "                  </table>";
			echo "                </div>";
			echo "              </section>";
			//echo "		<i class='icon-chevron-left' style='cursor:pointer;'></i><i class='icon-chevron-right' style='cursor:pointer;'></i>";	
			echo "            </div>";
}



//Searching merchant Details
function search_merchants($search){
	if(filter_var($search, FILTER_VALIDATE_EMAIL)){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE email='$search'";
	echo "Searched eMail ";
	}
	else if((ctype_digit($search))&(strlen($search)==10)){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE mobile='$search'";
	echo "Searched Mobile Number ";
	}
	else if(!ctype_digit($search)){
	$strSQL = "SELECT * FROM kpn_merchant_details WHERE (company_name LIKE '%".$search."%')";
	echo "Searched Company Name ";
	}
	else{
		echo "Please enter a valid Company Name or Moblie Number or eMail.";
		return;
	}
	$merchant_details = mysql_query($strSQL);
	if(mysql_num_rows($merchant_details)<=0){
		echo "doesn't matched with any of the Merchant detail.";
	}
	else{
	echo "matched with ".mysql_num_rows($merchant_details)." merchant details.<br><br>";
	while($merchant = mysql_fetch_array($merchant_details)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			echo "<img src='".$merchant['image']."'alt='merchant Image' class='img-circle'>";
			echo "</a>";
			echo "<form id='block_form".$merchant['email']."' name='block_form' action='business_info.php' method='POST'>";
			echo "<input name='block_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";		
			echo "<form id='active_form".$merchant['email']."' name='active_form' action='business_info.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<form id='info_form".$merchant['email']."' name='info_form' action='business_info.php' method='POST'>";
			echo "<input name='get_info' type='hidden' value='".$merchant['email']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'><table style=\"font-family:'Calibri';font-size:10pt;\"><tr><td colspan='2' style='color:#fb6b5b;' data-toggle='tooltip' data-placement='bottom' data-title='Last Login'><i class='icon-signin' ></i>&nbsp;".date("h:ia d/m/Y",strtotime($merchant['update_date']))."</td></tr><tr><td></td><td height='40px' align='right'><i class='icon-info-sign' style='font-size:11pt;color:navy;' onClick=\"document.getElementById('info_form".$merchant['email']."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Company Info'></i>&nbsp;&nbsp;".get_status_merchant($merchant['email'],"status")."&nbsp;&nbsp;<i class='icon-list' style='font-size:11pt;color:gray;' data-toggle='tooltip' data-placement='bottom' data-title='Drop Down'></i></td></tr></table></small>";
			echo get_status_merchant($merchant['email'],"company_name");
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\" width='70%'><tr>";
			echo "<td width='40%'><i class='icon-envelope-alt' style='font-size:9pt;'></i>".$merchant['email']."</td><td><small><i class='icon-phone'></i> ".$merchant['mobile']."</small></td></tr>";
			echo "<tr><td colspan='2'><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($merchant['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
			echo "<center>";
			echo "<div id='koupon_panel'><br>";
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                  <table class='table table-striped m-b-none' data-ride='datatables'>";
			echo "                    <thead>";
			echo "                      <tr>";
			echo "                        <th width='10%'>Koupon ID</th>";
			echo "                        <th width='20%'>Title</th>";
			echo "                        <th width='12%'>Time Bound</th>";
			echo "                        <th width='8%'>Volume</th>";
			echo "                        <th width='20%'>Start Date</th>";
			echo "                        <th width='20%'>End Date</th>";
			echo "                        <th width='10%'>Satus</th>";
			echo "                      </tr>";
			echo "                    </thead>";
			echo "                    <tbody>";
			get_koupons($merchant['uid']);
			echo "                    </tbody>";
			echo "                  </table>";
			echo "                </div>";
			echo "              </section>";
			echo "            </div>";
			echo "</div>";
			echo "</center>";
		}
	}
}

//Retriving Koupons of a merchant
function get_koupons($merchant_id){
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE created_by='$merchant_id'";
	$merchant_koupons = mysql_query($strSQL);
	if(mysql_num_rows($merchant_koupons)<=0){
			echo "<tr><td align='center' colspan='4'>No Koupons created till now.</td></tr>";
	}
	else{
		while($koupon = mysql_fetch_array($merchant_koupons)) {
			echo "<form id='block_koupon_form".$koupon['kpn_id']."' name='block_koupon_form' action='business_info.php' method='POST'>";
			echo "<input name='block_this_koupon' type='hidden' value='".$koupon['kpn_id']."'>";
			echo "</form>";		
			echo "<form id='active_koupon_form".$koupon['kpn_id']."' name='active_koupon_form' action='business_info.php' method='POST'>";
			echo "<input name='active_this_koupon' type='hidden' value='".$koupon['kpn_id']."'>";
			echo "</form>";
			echo"					 <tr><td>".$koupon['kpn_id']."</td><td>".get_koupon_title($koupon['kpn_id'])."</td><td>".get_koupon_details($koupon['kpn_id'],"time_bound")."</td><td>".get_koupon_details($koupon['kpn_id'],"volume_say")."</td><td>".date("h:ia d/m/Y",strtotime($koupon['deal_start_date']))."</td><td>".date("h:ia d/m/Y",strtotime($koupon['deal_end_date']))."</td><td>".get_koupon_status($koupon['kpn_id'])."</td></tr>";
		}
	}
}

//Retriving status of koupon
function get_koupon_status($kpnid){
	$strSQL1 = "SELECT * FROM kpn_deal_headers where kpn_id='$kpnid'";
	$koupons_status = mysql_query($strSQL1);
	while($koupon_status = mysql_fetch_array($koupons_status)){
		if($koupon_status['deal_end_date']<date( "Y-m-d H:i:s",mktime(0, 0, 0))){
			return "<i class='icon-unlink' style='font-size:12pt;color:RED;cursor:default;' data-toggle='tooltip' data-placement='bottom' data-title='Expired'></i>";
		}
		else if($koupon_status['volume']==0){
			return "<i class='icon-stackexchange' style='cursor:default;color:NAVY;font-size:12pt;' data-toggle='tooltip' data-placement='bottom' data-title='Out of stock'></i>";
		}
		else{
					if($koupon_status['status']=="Active"){
						return "<i class='icon-plus-sign' style='font-size:12pt;color:GREEN;cursor:pointer;' alt='Block merchant' onClick=\"document.getElementById('block_koupon_form".$kpnid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status: Active'></i>";
					}
					else if($koupon_status['status']=="Block"){
						return "<i class='icon-minus-sign' style='font-size:12pt;color:RED;cursor:pointer;' alt='Activate merchant' onClick=\"document.getElementById('active_koupon_form".$kpnid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status: Blocked'></i>";
					}
		}
	}
}

//Changing status of koupon
function change_koupon_status_active($kpnid){
$strSQL1 = "SELECT * FROM kpn_deal_headers where kpn_id='$kpnid'";
$koupons_status = mysql_query($strSQL1);
	while($koupon_status = mysql_fetch_array($koupons_status)){
			mysql_query("UPDATE kpn_deal_headers SET status='Active' WHERE kpn_id='$kpnid'");
	}
}
function change_koupon_status_block($kpnid){
$strSQL1 = "SELECT * FROM kpn_deal_headers where kpn_id='$kpnid'";
$koupons_status = mysql_query($strSQL1);
	while($koupon_status = mysql_fetch_array($koupons_status)){
			mysql_query("UPDATE kpn_deal_headers SET status='Block' WHERE kpn_id='$kpnid'");
	}
}	

//Retriving merchant Status
function get_status_merchant($merchantmail,$detail){
$strSQL1 = "SELECT * FROM kpn_merchant_details where email='$merchantmail'";
$merchants_login = mysql_query($strSQL1);
$merchant_login = mysql_fetch_array($merchants_login);
switch($detail){
	case "status":
		if($merchant_login['status']=="Validated"){
			return "<i class='icon-check' style='font-size:12pt;color:GREEN;' alt='Block merchant' onClick=\"document.getElementById('block_form".$merchantmail."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status:Validated'></i>";
		}
		else if($merchant_login['status']=="Not Validated"){
			return "<i class='icon-check-minus' style='font-size:12pt;color:#f9001d;' alt='Activate merchant' onClick=\"document.getElementById('active_form".$merchantmail."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status:Not Validated'></i>";
		}
	case "company_name":
		if($merchant_login['status']=="Validated"){
			return "<strong class='block' style='color:#80c740;'>".$merchant_login['company_name']."</strong>";
		}
		else if($merchant_login['status']=="Not Validated"){
			return "<strong class='block' style='color:#fb6b5b;'>".$merchant_login['company_name']."</strong>";
		}
	}
}

//Changing status of merchant
function change_status_active($merchantmail){
$strSQL1 = "SELECT * FROM kpn_merchant_details where email='$merchantmail'";
$merchants_login = mysql_query($strSQL1);
	while($merchant_login = mysql_fetch_array($merchants_login)){
			mysql_query("UPDATE kpn_merchant_details SET status='Validated' WHERE email='$merchantmail'");
	}
}
function change_status_block($merchantmail){
$strSQL1 = "SELECT * FROM kpn_merchant_details where email='$merchantmail'";
$merchants_login = mysql_query($strSQL1);
	while($merchant_login = mysql_fetch_array($merchants_login)){
		mysql_query("UPDATE kpn_merchant_details SET status='Not Validated' WHERE email='$merchantmail'");
	}
}	
?>