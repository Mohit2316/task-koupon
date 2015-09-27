<?php
	include("config.php");
	include('../mail_checker.php');
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];

	$chkuserreg=mysql_query("select email from kpn_user_profile where email='$email'");
	if(mysql_num_rows($chkuserreg)>0){
		echo 'already';
	}
	else
	{	
		$activation=md5($email.time());
		$reguser=mysql_query("INSERT INTO kpn_user_profile VALUES (NULL,'".$email."','".$password."','".$mobile."', '".$city."', '".$_SERVER['REMOTE_ADDR']."', '".date('Y-m-d')."','".$activation."','Block','-','-','-',0);");
		if($reguser) {
			/*$login = mysql_query("SELECT * FROM kpn_user_profile WHERE email='$email' AND password='$password' ") or die(mysql_error());
			$num_row = mysql_num_rows($login);
			$row=mysql_fetch_array($login);
			if( $num_row >=1 ) {
				$_SESSION['user_name']=$row['user_id'];
				$_SESSION['user_mobile']=$row['mobile'];
			}*/
			echo 'true';
			userMail($email,$password,$mobile,$activation);
		}
		else {
			echo 'false';
		}
	}

?>