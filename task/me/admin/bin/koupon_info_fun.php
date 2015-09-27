<?php
include("config.php");
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
		case "volume":
			if($koupon3['volume']==-1) return "Unlimited";
			else return $koupon3['volume'];
		default:
			return $koupon1[$num];
	}	
}

$sql="SELECT * from  kpn_menu_classes";
$result=mysql_query($sql);
$menu=array();
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    array_push($menu,($row['name']));
} 

function dropdown( $name, array $options, $selected=null )
{
$dropdown = '<select name="'.$name.'" id="'.$name.'">'."\n";
$selected = $selected;
foreach( $options as $key=>$option )
{
	$select = $selected==$key ? ' selected' : null;
	$dropdown .= '<option value="'.$option.'">'.$option.'</option>'."\n";
}
$dropdown .= '</select>'."\n";
return $dropdown;
}

//Retriving User Info
function get_koupons(){
	$uid=$_SESSION['login_user'];
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE created_by='$uid' ORDER BY deal_end_date";
	$koupon_details= mysql_query($strSQL);
	if(mysql_num_rows($koupon_details)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No koupons created yet.</center></strong></header></section>" ;}
	while($koupon = mysql_fetch_array($koupon_details)) {
				include("koupon_info_template.php");
			
	}
}



function order_koupons($para){
	$uid=$_SESSION['login_user'];
	if($para=="latest_koupons"){
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE created_by='$uid' ORDER BY creation_date DESC";
	$koupon_details= mysql_query($strSQL);
	if(mysql_num_rows($koupon_details)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No koupons created yet.</center></strong></header></section>" ;}
	while($koupon = mysql_fetch_array($koupon_details)) {
				include("koupon_info_template.php");
			
		}
	}
	else if($para=="alphabet"){
	$uid=$_SESSION['login_user'];
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE created_by='$uid' ORDER BY title";
	$koupon_details= mysql_query($strSQL);
	if(mysql_num_rows($koupon_details)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No koupons created yet.</center></strong></header></section>" ;}
	while($koupon = mysql_fetch_array($koupon_details)) {			
				include("koupon_info_template.php");
		}
	}
	else if($para=="All"){
		get_koupons();
	}
	else{
	$menu = mysql_query("SELECT * FROM kpn_menu_classes where name='$para'");
	$menu_id = mysql_fetch_array($menu);
	$var_menu=$menu_id['menu_id'];
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE created_by='$uid' and  and menu_id='$var_menu' ORDER BY deal_end_date";
	$koupon_details= mysql_query($strSQL);
	if(mysql_num_rows($koupon_details)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>Sorry, No koupons created yet.</center></strong></header></section>" ;}
	while($koupon = mysql_fetch_array($koupon_details)) {
			
				include("koupon_info_template.php");
	}}
}

//Searching Koupon Details
function search_koupons($search){
	$uid=$_SESSION['login_user'];
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE (title LIKE '%".$search."%') and created_by='$uid' ORDER BY deal_end_date";
	$koupon_details= mysql_query($strSQL);
	while($koupon = mysql_fetch_array($koupon_details)) {
				include("koupon_info_template.php");
	}
	if(mysql_num_rows($koupon_details)==0){echo " <section class='panel'><header class='panel-heading'><strong><center>No result found.Please search with a valid Title.</center></strong></header></section>" ;}
}


if(isset($_POST['block_this_koupon'])){
	change_koupon_status_block($_POST['block_this_koupon']);
}
if(isset($_POST['active_this_koupon'])){
	change_koupon_status_active($_POST['active_this_koupon']);
}
//Retriving status of koupon
function get_koupon_status($kpnid){
	$strSQL1 = "SELECT * FROM kpn_deal_headers where kpn_id='$kpnid'";
	$koupons_status = mysql_query($strSQL1);
	while($koupon_status = mysql_fetch_array($koupons_status)){
		if($koupon_status['deal_end_date']<date( "Y-m-d H:i:s",mktime(0, 0, 0))){
			return "<button type='submit' class='btn btn-s-md btn-white' style='margin-top:10px;' data-toggle='tooltip' data-placement='bottom' data-title='Koupon Expired'><i class='icon-unlink' style='font-size:12pt;color:RED;cursor:default;'></i></button>";
		}
		else if($koupon_status['volume']==0){
			return "<button type='submit' class='btn btn-s-md btn-white' style='margin-top:10px;' data-toggle='tooltip' data-placement='bottom' data-title='Out of stock'><i class='icon-stackexchange' style='cursor:default;color:NAVY;font-size:12pt;'></i></button>";
		}
		else{
					if($koupon_status['status']=="Active"){
						return "<button type='submit' class='btn btn-s-md btn-danger' style='margin-top:10px;' onClick=\"document.getElementById('block_koupon_form".$kpnid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Expire this koupon'>Expire</button>";
					}
					else if($koupon_status['status']=="Block"){
						return "<button type='submit' class='btn btn-s-md btn-success' style='margin-top:10px;' onClick=\"document.getElementById('active_koupon_form".$kpnid."').submit();\" data-toggle='tooltip' data-placement='bottom' data-title='Activate this koupon'>Activate</button>";
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

?>