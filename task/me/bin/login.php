<?php
session_start();
include_once("config.php");
$username = $_POST['name'];
$password = $_POST['pwd'];
//echo $password;
	//$query = "SELECT * FROM kpn_user_profile WHERE email='$username' AND password='$password' ";
	$login = mysql_query("SELECT * FROM kpn_user_profile WHERE email='$username' AND password='$password' AND status='Active';") or die(mysql_error());
	//$result = mysql_query($mysqli,$query)or die(mysqli_error());
	$num_row = mysql_num_rows($login);
	//echo $num_row;
	$row=mysql_fetch_array($login);
	if( $num_row >=1 ) {
		$_SESSION['user_name']=$row['user_id'];
		$_SESSION['user_mobile']=$row['mobile'];
		$_SESSION['category']=$row['category'];

			echo 'true';
	}
	else{
		$login1 = mysql_query("SELECT * FROM kpn_user_profile WHERE email='$username' AND password='$password' AND status='Block';") or die(mysql_error());
		$num_row1 = mysql_num_rows($login1);
		if( $num_row1 >=1 ) {
			echo 'Block';
		}
		else{
			echo 'false';
		}
	}
?>