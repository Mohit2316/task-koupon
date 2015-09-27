<?php
	include("config.php");
	include('../mail_checker.php');
	$key=$_POST['key'];


		$mobile=$_POST['mobile'];
		$city=$_POST['city'];
		
		$update=mysql_query("UPDATE kpn_user_profile SET mobile='$mobile', city='$city' WHERE email='$key'");
		if($update) echo 'true';
		else echo 'false';

?>