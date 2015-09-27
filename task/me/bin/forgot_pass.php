<?php
	include("config.php");
	include('../mail_checker.php');
	$email = $_POST['email'];

	$chkuserreg=mysql_query("SELECT email FROM kpn_user_profile WHERE email='$email';");
	if(mysql_num_rows($chkuserreg)==0){
		echo 'false';
	}
	else
	{
	$forgot = mysql_query("SELECT * FROM kpn_user_profile WHERE email='$email';") or die(mysql_error());
	$row=mysql_fetch_array($forgot);
	forgotUSER($row['email'],$row['password'],$row['mobile']);
	echo 'true';
	}

?>