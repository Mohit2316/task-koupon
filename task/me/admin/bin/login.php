<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$myemail=addslashes($_POST['email']);
	$mypassword=addslashes($_POST['password']);
	$login_type=0;
	$sql_query=mysql_query("SELECT ad.* FROM admin ad, kpn_merchant_details kmd WHERE ad.uid=kmd.uid and ad.email='$myemail' and ad.password='$mypassword' and (kmd.status = 'Validated' OR kmd.status = 'Admin')");
	$admin_table=mysql_fetch_array($sql_query);
	if((mysql_num_rows($sql_query)==1)&&($admin_table['login_type']=='merchant'))
	{
		$sql_sub_query=mysql_query("SELECT * FROM kpn_merchant_details WHERE email='$myemail'");
		$merchant=mysql_fetch_array($sql_sub_query);
		$_SESSION['login_user']=$merchant['uid'];
		$_SESSION['email']=$merchant['company_name'];
		$_SESSION['image']=$merchant['image'];
		$_SESSION['login_type']="merchant";
		header("location:../index.php");
	}
	else if((mysql_num_rows($sql_query)==1)&&($admin_table['login_type']=='admin'))
	{
		$_SESSION['login_user']=$admin_table['email'];
		$_SESSION['email']="Admin";		
		$_SESSION['image']="images/admin.jpg";
		$_SESSION['login_type']="admin";
		header("location:../index.php");
	}
	else
	{
		header("location:../signin_repeat.php");
	}
}
?>
