<?php
include("config.php");

//Retriving User Info
function get_users(){
	$strSQL = "SELECT * FROM kpn_user_profile ORDER BY email";
	$user_profile = mysql_query($strSQL);
	if(mysql_num_rows($user_profile)<=0){
		echo "No users registered yet.";
	}
	else{
	while($user = mysql_fetch_array($user_profile)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			//echo "<img src='".$user['image']."'alt='User Image' class='img-circle'>";
			echo "<img src='images/avatar_default.jpg' alt='User Image' class='img-circle'>";
			echo "</a>";
			echo "<form id='block_form".$user['user_id']."' name='block_form' action='user_info.php' method='POST'>";
			echo "<input name='block_this' type='hidden' value='".$user['user_id']."'>";
			echo "</form>";		
			echo "<form id='active_form".$user['user_id']."' name='active_form' action='user_info.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$user['user_id']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'><table style=\"font-family:'Calibri';font-size:10pt;\"><tr><td colspan='2' style='color:#fb6b5b;' data-toggle='tooltip' data-placement='bottom' data-title='Last Login'><i class='icon-signin' ></i>&nbsp;".get_user_login($user['user_id'])."</td></tr><tr><td></td><td height='40px' align='right'>".get_status_user($user['user_id'],"status")."&nbsp;&nbsp;<i class='icon-list' style='font-size:11pt;color:gray;' data-toggle='tooltip' data-placement='bottom' data-title='Drop Down'></i></td></tr></table></small>";
			echo get_status_user($user['user_id'],"email");
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\"><tr>";
			echo "<td><small><i class='icon-phone'></i> ".$user['mobile']."</small></td></tr>";
			echo "<tr><td><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($user['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
			echo "<center>";
			echo "<div id='koupon_panel'><br>";
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                <table class='table table-striped m-b-none' data-ride='datatables' style='font-size:9pt;'>";
			echo "                    <thead>";
			echo "                      <tr>";
			echo "                        <th width='10%'>KPN_ID</th>";
			echo "                        <th width='20%'>Title</th>";
			echo "                        <th width='10%'>Volume</th>";
			echo "                        <th width='30%'>Koupon Identifier</th>";
			echo "                        <th width='20%'>Claimed Date</th>";
			echo "                        <th width='10%'>Mail</th>";
			echo "                      </tr>";
			echo "                    </thead>";
			echo "                    <tbody>";
			get_koupons($user['user_id']);
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

//Searching User Details
function search_users($search){
	if(filter_var($search, FILTER_VALIDATE_EMAIL)){
	$strSQL = "SELECT * FROM kpn_user_profile WHERE email='$search'";
	echo "Searched eMail ";
	}
	else if((ctype_digit($search))&(strlen($search)==10)){
	$strSQL = "SELECT * FROM kpn_user_profile WHERE mobile='$search'";
	echo "Searched Mobile Number ";
	}
	else if(!ctype_digit($search)){
	$strSQL = "SELECT * FROM kpn_user_profile WHERE(email LIKE '%".$search."%')";
	echo "Searched Email Partially ";
	}
	else{
		echo "Please enter a valid Moblie Number or eMail.";
		return;
	}
	$user_profile = mysql_query($strSQL);
	if(mysql_num_rows($user_profile)<=0){
		echo "doesn't matched with any of the user detail.";
	}
	else{
	echo "matched with ".mysql_num_rows($user_profile)." user details.<br><br>";
	while($user = mysql_fetch_array($user_profile)) {
			echo "<div id='people_panel'>";
			echo "<li class='list-group-item'>";
			echo "<a href='' class='thumb-sm pull-left m-r-sm'>";
			echo "<img src='images/avatar_default.jpg' alt='User Image' class='img-circle'>";
			echo "</a>";
			echo "<form id='block_form".$user['user_id']."' name='block_form' action='user_info.php' method='POST'>";
			echo "<input name='block_this' type='hidden' value='".$user['user_id']."'>";
			echo "</form>";		
			echo "<form id='active_form".$user['user_id']."' name='active_form' action='user_info.php' method='POST'>";
			echo "<input name='active_this' type='hidden' value='".$user['user_id']."'>";
			echo "</form>";
			echo "<a href='#' class='clear'>";
			echo "<small class='pull-right'><table style=\"font-family:'Calibri';font-size:10pt;\"><tr><td colspan='2' style='color:#fb6b5b;' data-toggle='tooltip' data-placement='bottom' data-title='Last Login'><i class='icon-signin' ></i>&nbsp;".get_user_login($user['user_id'])."</td></tr><tr><td></td><td height='40px' align='right'>".get_status_user($user['user_id'],"status")."&nbsp;&nbsp;<i class='icon-list' style='font-size:11pt;color:gray;' data-toggle='tooltip' data-placement='bottom' data-title='Drop Down'></i></td></tr></table></small>";
			echo get_status_user($user['user_id'],"email");
			echo "<table style=\"font-family:'Calibri';font-size:11pt;\"><tr>";
			echo "<td><small><i class='icon-phone'></i> ".$user['mobile']."</small></td></tr>";
			echo "<tr><td><small data-toggle='tooltip' data-placement='bottom' data-title='Registered on'><i class='icon-edit'></i>".date("l, d-F-Y. h:ia",strtotime($user['creation_date']))."</small></td></tr></table>";
			echo "</a>";
			echo "</li></div>";
			echo "<center>";
			echo "<div id='koupon_panel'><br>";
			echo "<div class='tab-pane' id='datatable' style='margin-top:-15px;margin-bottom:-20px;'>";
			echo "              <section class='panel'>";
			echo "                <div class='table-responsive'>";
			echo "                <table class='table table-striped m-b-none' data-ride='datatables' style='font-size:9pt;'>";
			echo "                    <thead>";
			echo "                      <tr>";
			echo "                        <th width='10%'>KPN_ID</th>";
			echo "                        <th width='20%'>Title</th>";
			echo "                        <th width='10%'>Volume</th>";
			echo "                        <th width='30%'>Koupon Identifier</th>";
			echo "                        <th width='20%'>Claimed Date</th>";
			echo "                        <th width='10%'>Mail</th>";
			echo "                      </tr>";
			echo "                    </thead>";
			echo "                    <tbody>";
			get_koupons($user['user_id']);
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

//Retriving User Last Login
function get_user_login($userid){
$strSQL1 = "SELECT login_date_time FROM kpn_user_login where user_id='$userid'";
$users_login = mysql_query($strSQL1);
$user_login = mysql_fetch_array($users_login);
if($user_login[0]){
	return date("h:ia d/m/Y",strtotime($user_login[0]));
	}
else{
	return "Not logged in till now";
}
}

//Retriving Koupons of a User
function get_koupons($userid){
	$strSQL = "SELECT * FROM kpn_processed_deals WHERE user_id='$userid'";
	$user_koupons = mysql_query($strSQL);
	if(mysql_num_rows($user_koupons)<=0){
			echo "<tr><td align='center' colspan='4'>No Koupons purchased till now.</td></tr>";
	}
	else{
		while($koupon = mysql_fetch_array($user_koupons)) {

			echo"					 <tr><td>".$koupon['kpn_id']."</td><td>".get_koupon_title($koupon['kpn_id'])."</td><td>".$koupon['volume_purchased']."</td><td>".$koupon['kpn_identifier']."</td><td>".date("h:ia d/m/Y",strtotime($koupon['purchased_date']))."</td><td><i class='icon-envelope' style='cursor:pointer;' data-toggle='tooltip' data-placement='bottom' data-title='Mail'></i></td></tr>";
		}
	}
}

//Retriving User Status
function get_status_user($userid,$detail){
$strSQL1 = "SELECT * FROM kpn_user_profile where user_id='$userid'";
$users_login = mysql_query($strSQL1);
$user_login = mysql_fetch_array($users_login);
switch($detail){
	case "status":
		if($user_login['status']=="Active"){
			return "<i class='icon-plus-sign' style='font-size:12pt;color:GREEN;' alt='Block User' onClick=\"document.getElementById('block_form".$userid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status: Active'></i>";
		}
		else if($user_login['status']=="Block"){
			return "<i class='icon-minus-sign' style='font-size:12pt;color:RED;' alt='Activate User' onClick=\"document.getElementById('active_form".$userid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Status: Blocked'></i>";
		}
	case "email":
		if($user_login['status']=="Active"){
			return "<strong class='block' style='color:#80c740;'>".$user_login['email']."</strong>";
		}
		else if($user_login['status']=="Block"){
			return "<strong class='block' style='color:#fb6b5b;'>".$user_login['email']."</strong>";
		}
	}
}

//Changing status of User
function change_status_active($userid){
$strSQL1 = "SELECT * FROM kpn_user_profile where user_id='$userid'";
$users_login = mysql_query($strSQL1);
	while($user_login = mysql_fetch_array($users_login)){
			mysql_query("UPDATE kpn_user_profile SET status='Active' WHERE user_id='$userid'");
	}
}
function change_status_block($userid){
$strSQL1 = "SELECT * FROM kpn_user_profile where user_id='$userid'";
$users_login = mysql_query($strSQL1);
	while($user_login = mysql_fetch_array($users_login)){
		mysql_query("UPDATE kpn_user_profile SET status='Block' WHERE user_id='$userid'");
	}
}	
?>