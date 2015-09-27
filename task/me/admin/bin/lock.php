<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
if($_SESSION['login_type']=='merchant')
{
	$sql_merchant=mysql_query("SELECT uid FROM kpn_merchant_details WHERE uid='$user_check'");
	 if(mysql_num_rows($sql_merchant)==1){
		$merchant=mysql_fetch_array($sql_merchant);
		$login_session=$merchant['uid'];
	}

}
else if($_SESSION['login_type']=='admin')
{
	$sql_admin=mysql_query("SELECT * FROM admin WHERE email='$user_check'");
	 if(mysql_num_rows($sql_admin)==1){
		$admin=mysql_fetch_array($sql_admin);
		$login_session=$admin['email'];
	}
}
if(!isset($login_session))
{
header("Location:signin.php");
}
?>
