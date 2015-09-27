<?php
	include("config.php");
	$uid=$_POST['uid'];
	session_start();
	if(isset($_POST['koupon'])){
		$koupon = $_POST['koupon'];	
		$sql=mysql_query("SELECT following FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';");
		$arr=mysql_fetch_array($sql);
		$following=$arr['following'];
		$following.=$uid."-";
		$sql1=mysql_query("UPDATE kpn_user_profile SET following='$following' WHERE user_id='".$_SESSION['user_name']."';");
		if($sql1){
			echo 'true';
			$arr11=mysql_fetch_array(mysql_query("SELECT following FROM kpn_deal_headers WHERE kpn_id='$koupon';"));
			$following=$arr11['following'];
			$following++;
			$sql11=mysql_query("UPDATE kpn_deal_headers SET following='$following' WHERE kpn_id='$koupon';");
			$sql12 = mysql_query("SELECT u".$uid." from kpn_merchant_followers WHERE date=CURDATE();");	
			$array=mysql_fetch_array($sql12);
			$merchant_followers_per_day=$array[0];
			$merchant_followers_per_day++;		
			$sql13=mysql_query("UPDATE kpn_merchant_followers SET u".$uid."='$merchant_followers_per_day' WHERE date=CURDATE();");
		}
	}
	else if(isset($_POST['unkoupon'])){
		$koupon = $_POST['unkoupon'];
		$sql=mysql_query("SELECT following FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';");
		$arr=mysql_fetch_array($sql);
		$following=$arr['following'];
		$following=str_replace($uid."-","",$following);
		$sql1=mysql_query("UPDATE kpn_user_profile SET following='$following' WHERE user_id='".$_SESSION['user_name']."';");
		if($sql1){
			echo 'true';
			$arr11=mysql_fetch_array(mysql_query("SELECT following FROM kpn_deal_headers WHERE kpn_id='$koupon';"));
			$following=$arr11['following'];
			$following--;
			$sql11=mysql_query("UPDATE kpn_deal_headers SET following='$following' WHERE kpn_id='$koupon';");
			$sql12 = mysql_query("SELECT u".$uid." from kpn_merchant_followers WHERE date=CURDATE();");	
			$array=mysql_fetch_array($sql12);
			$merchant_followers_per_day=$array[0];
			$merchant_followers_per_day--;	
			$sql13=mysql_query("UPDATE kpn_merchant_followers SET u".$uid."='$merchant_followers_per_day' WHERE date=CURDATE();");
		}
	}
	else{
		echo "false";
	}
?>