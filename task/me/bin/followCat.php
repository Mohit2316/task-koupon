<?php
	include("config.php");
	$uid=$_POST['uid'];
	session_start();
	if(isset($_POST['koupon'])){
		$koupon = $_POST['koupon'];	
		$sql=mysql_query("SELECT category FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';");
		$arr=mysql_fetch_array($sql);
		$following=$arr['category'];
		$following.=$uid."-";
		$sql1=mysql_query("UPDATE kpn_user_profile SET category='$following' WHERE user_id='".$_SESSION['user_name']."';");
		if($sql1){
			echo 'true';
		}
	}
	else if(isset($_POST['unkoupon'])){
		$koupon = $_POST['unkoupon'];
		$sql=mysql_query("SELECT category FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';");
		$arr=mysql_fetch_array($sql);
		$following=$arr['category'];
		$following=str_replace($uid."-","",$following);
		$sql1=mysql_query("UPDATE kpn_user_profile SET category='$following' WHERE user_id='".$_SESSION['user_name']."';");
		if($sql1){
			echo 'true';
		}
	}
	else{
		echo "false";
	}
?>