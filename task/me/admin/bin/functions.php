<?php
include("config.php");

//Counting
function count_of($table_name){
$sql="SELECT * FROM ".$table_name;
$result=mysql_query($sql);
$count=mysql_num_rows($result);
return $count;
}
function count_of_merchant($table_name,$uid){
$sql="SELECT * FROM ".$table_name." WHERE created_by='$uid'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
return $count;
}
function notvalidated_count_of($table_name){
$sql="SELECT * FROM ".$table_name." WHERE status='Not Validated'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
return $count;
}

//Recent_Counting
function recent_count_of($table_name){
$sql="SELECT * FROM ".$table_name." where creation_date > CURRENT_TIMESTAMP - INTERVAL 3 DAY";
$result=mysql_query($sql);
$recent_count=mysql_num_rows($result);
return $recent_count;
}

function recent_count_of_merchant($table_name,$uid){
$sql="SELECT * FROM ".$table_name." WHERE status='Active' and created_by='$uid' and volume<>0 and deal_start_date<=CURRENT_TIMESTAMP and deal_end_date > CURRENT_TIMESTAMP";
$result=mysql_query($sql);
$recent_count=mysql_num_rows($result);
return $recent_count;
}

//Retriving Koupon title
function get_koupon_title($kpnid){
	$strSQL = "SELECT * FROM kpn_deal_headers WHERE kpn_id='$kpnid'";
	$user_koupons = mysql_query($strSQL);
	$koupon = mysql_fetch_array($user_koupons);
	return $koupon['title'];
}

?>