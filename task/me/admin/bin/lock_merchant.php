<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$sql_merchant=mysql_query("SELECT uid FROM kpn_merchant_details WHERE uid='$user_check'");
 if(mysql_num_rows($sql_merchant)==1){
	$merchant=mysql_fetch_array($sql_merchant);
	$login_session=$merchant['uid'];
}
if(!isset($login_session))
{
header("Location:signin.php");
}
?>
