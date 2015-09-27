<?php
/*
-- ****************************************************************************************
-- Copyright (c)  2013  koupon.com
-- All rights reserved
-- ****************************************************************************************
--
-- PROGRAM NAME
-- /bin/functions.php
--
-- DESCRIPTION
--  Site Functions FIle
-- 
-- HISTORY
-- =======
-- 
-- VERSION  DATE             AUTHOR(S)         DESCRIPTION
-- ------- ---------------  ---------------   ------------------------------------
-- 1.0     23-MAY-2013      AJ 			  
--*******************************************************************************************************
*/

include_once("config.php");


class kpn_manages {

	public function viewDeals($event)
	{
	  //if((isset($_GET['selectedCity'])) OR isset($_COOKIE["Kouponize"])) {
	  if(isset($_COOKIE["Kouponize"])){
	  $selCity=$_COOKIE["Kouponize"];
	  //if ((isset($_COOKIE["Kouponize"])) AND (!isset($_GET['selectedCity']))){$selCity=$_COOKIE["Kouponize"];}
	  //if ((!isset($_COOKIE["Kouponize"])) AND (isset($_GET['selectedCity']))){$selCity=$_GET["selectedCity"];setcookie("Kouponize", $_GET['selectedCity'],time()+(10*365*24*60*60));}
	  //if ((isset($_COOKIE["Kouponize"])) AND (isset($_GET['selectedCity']))){
		//$selCity=$_GET["selectedCity"];
		//if ($_COOKIE["Kouponize"]!=$_GET['selectedCity']){setcookie("Kouponize", $_GET['selectedCity'],time()+(10*365*24*60*60));}
	 // }
	  
		if($event==0)
		{
			if(isset($_GET['search_for']) OR isset($_GET['address']))
			{
				$address=$_GET['address'];
				$search_for=$_GET['search_for'];
				if($address=="")
					{
						$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.business_type, kmd.website,kmd.company_name, kmd.mobile, kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.city, kmd.state, kmc.menu_id, kmc.name FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_menu_classes kmc, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.menu_id=kmc.menu_id AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND kph.visible='normal' AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND ( kph.title LIKE '%$search_for%' OR kph.short_desc LIKE '%$search_for%' OR kmc.name LIKE '%$search_for%' OR kmd.company_name LIKE '%$search_for%' OR kmd.email LIKE '%$search_for%' ) ORDER BY kph.creation_date DESC") or die(mysql_error());
					}
				else
					{
						$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.city, kmd.business_type, kmd.website,kmd.company_name, kmd.mobile, kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.state, kmc.menu_id, kmc.name FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_menu_classes kmc, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.menu_id=kmc.menu_id AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND kph.visible='normal' AND ( kph.title LIKE '%$search_for%' OR kph.short_desc LIKE '%$search_for%' OR kmc.name LIKE '%$search_for%' OR kmd.company_name LIKE '%$search_for%' OR kmd.email LIKE '%$search_for%' ) AND ( kmd.city='$address' OR kmd.country='$address' OR kmd.state='$address' OR kmd.address_line1='$address' OR kmd.address_line2='$address' OR kmd.address_line3='$address' OR kmd.business_type='Online' ) ORDER BY kph.creation_date DESC") or die(mysql_error());
					}
					//if(mysql_num_rows($Viewposts)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
			}

			else
			{
				if($_GET['business_id']){
				//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.address_line1, kmd.mobile, kmd.business_type, kmd.website,kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND  kmd.uid='".$_GET['business_id']."' AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());

				}
				else{
					//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type,kph.created_by, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.mobile, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());}
			}
			if(mysql_num_rows($Viewposts)>=1)
			{
				while($fetchPosts=mysql_fetch_array($Viewposts))
				$data[]=$fetchPosts;
				return $data;
			}
			if(sizeof($data)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
			return $data;
		}
		else if($event==100){
				$user=mysql_fetch_array(mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';"));
				$following_arr=explode("-", $user['following']);
				$data[]=array();
				array_pop($data);
				for($i=1;$i<(sizeof($following_arr)-1);$i++) {
				$kpn=$following_arr[$i];
				$single = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.city, kmd.company_name, kmd.mobile, kmd.business_type, kmd.website,kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.state FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.created_by='$kpn' AND kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND  (kph.visible='normal' OR kph.visible LIKE '%-".$_SESSION['user_name']."-%') ORDER BY kph.creation_date DESC");
				while($fetchPosts=mysql_fetch_array($single))
				$data[]=$fetchPosts;
				//array_push($data,$single);
				}
				if(sizeof($data)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
				return $data;
			}
		else
		{
			if($_GET['business_id']){
				//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.created_by, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by and kph.menu_id ='".$event."' AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kmd.uid='".$_GET['business_id']."' AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());

			}
			else{
				//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type,kph.created_by, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by and kph.menu_id ='".$event."' AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND (kmd.city='".$selCity."' OR kmd.business_type='Online') AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());}
			if(mysql_num_rows($Viewposts)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
			if(mysql_num_rows($Viewposts)>=1){
				while($fetchPosts=mysql_fetch_array($Viewposts))
				$data[]=$fetchPosts;
				return $data;
			}
		}
	  }  // isset of kouponize
	  else{
	  		if($event==0)
			{
				if(isset($_GET['search_for']) OR isset($_GET['address']))
				{
					$address=$_GET['address'];
					$search_for=$_GET['search_for'];
					if($address=="")
						{
							$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.business_type, kmd.website,kmd.uid, kmd.city, kmd.company_name, kmd.mobile, kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.state, kmc.menu_id, kmc.name FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_menu_classes kmc, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.menu_id=kmc.menu_id AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND kph.visible='normal' AND ( kph.title LIKE '%$search_for%' OR kph.short_desc LIKE '%$search_for%' OR kmc.name LIKE '%$search_for%' OR kmd.company_name LIKE '%$search_for%' OR kmd.email LIKE '%$search_for%' ) ORDER BY kph.creation_date DESC") or die(mysql_error());
						}
					else
						{
							$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.city, kmd.business_type, kmd.website,kmd.company_name, kmd.mobile, kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.state, kmc.menu_id, kmc.name FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_menu_classes kmc, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.menu_id=kmc.menu_id AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND kph.visible='normal' AND ( kph.title LIKE '%$search_for%' OR kph.short_desc LIKE '%$search_for%' OR kmc.name LIKE '%$search_for%' OR kmd.company_name LIKE '%$search_for%' OR kmd.email LIKE '%$search_for%' ) AND ( kmd.city='$address' OR kmd.country='$address' OR kmd.state='$address' OR kmd.address_line1='$address' OR kmd.address_line2='$address' OR kmd.address_line3='$address' OR kmd.business_type='Online' ) ORDER BY kph.creation_date DESC") or die(mysql_error());
						}
						if(mysql_num_rows($Viewposts)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
				}

				else
				{
				if($_GET['business_id']){
					//Disply event post only
					$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kmd.uid='".$_GET['business_id']."' AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());

				}
				else{
					//Disply event post only
					$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type,kph.created_by, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());}
				}
				if(mysql_num_rows($Viewposts)>=1)
				{
					while($fetchPosts=mysql_fetch_array($Viewposts))
					$data[]=$fetchPosts;
					return $data;
				}
		}
		else if($event==100){
				$user=mysql_fetch_array(mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';"));
				$following_arr=explode("-", $user['following']);
				$data[]=array();
				array_pop($data);
				for($i=1;$i<(sizeof($following_arr)-1);$i++) {
				$kpn=$following_arr[$i];
				$single = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date, kph.volume, kph.created_by, kph.time_bound, kph.image_small, kph.image_large, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.city, kmd.business_type, kmd.website,kmd.company_name, kmd.mobile, kmd.email, kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.country, kmd.state FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.created_by='$kpn' AND kph.kpn_id = kdd.kpn_id AND kph.created_by = kmd.uid AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND (kph.visible='normal' OR kph.visible LIKE '%-".$_SESSION['user_name']."-%') ORDER BY kph.creation_date DESC");
				while($fetchPosts=mysql_fetch_array($single))
				$data[]=$fetchPosts;
				//array_push($data,$single);
				}
				if(sizeof($data)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
				return $data;
			}
		else
		{
			if($_GET['business_id']){
				//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.address_line1, kmd.mobile, kmd.business_type, kmd.website,kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by and kph.menu_id ='".$event."' AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kmd.uid='".$_GET['business_id']."' AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());

			}
			else{
				//Disply event post only
				$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.menu_id, kph.deal_start_date, kph.deal_end_date,kph.image_small, kph.image_large, kph.volume, kph.time_bound, kph.visible, kph.created_by, kdd.deal_type, kdd.deal_value, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.uid, kmd.company_name, kmd.address_line1, kmd.mobile, kmd.business_type, kmd.website,kmd.address_line2, kmd.address_line3, kmd.city, kmd.country  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id AND kmd.uid = kph.created_by and kph.menu_id ='".$event."' AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.visible='normal' AND kph.volume !=0 ORDER BY kph.creation_date DESC") or die(mysql_error());
			}
			if(mysql_num_rows($Viewposts)==0) { echo "<br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sorry, No Koupons found.</b><br><br>";}
			if(mysql_num_rows($Viewposts)>=1){
				while($fetchPosts=mysql_fetch_array($Viewposts))
				$data[]=$fetchPosts;
				return $data;
			}
		}
	  }
	}
	
	public function getDealDtls($id)
	{
			$Viewposts = mysql_query("SELECT kph.kpn_id, kph.title, kph.short_desc, kph.long_desc, kph.menu_id, kph.deal_start_date,kph.image_small, kph.image_large, kph.deal_end_date, kph.created_by, kph.volume, kph.time_bound, kph.visible, kdd.deal_type, kdd.deal_value, kdd.deal_condition, kdd.deal_cost, kdd.deal_orig_cost, kdd.deal_discount, kmd.company_name, kmd.business_type, kmd.website,kmd.address_line1, kmd.address_line2, kmd.address_line3, kmd.city, kmd.country, kmd.longitude, kmd.latitude, kmd.mobile, kmd.twitter, kmd.facebook, kmd.gplus,kmd.about_me,kmd.website  FROM kpn_deal_headers kph, kpn_deal_details kdd, kpn_merchant_details kmd WHERE kph.kpn_id = kdd.kpn_id and kmd.uid = kph.created_by AND kph.deal_end_date >= SYSDATE() AND kph.deal_start_date <= SYSDATE() AND kph.status != 'BLOCK' AND kph.volume !=0 AND (kph.visible='normal' OR kph.visible LIKE '%-".$_SESSION['user_name']."-%') AND kph.kpn_id ='".$id."' ") or die(mysql_error());
			if(mysql_num_rows($Viewposts)>=1){
				while($fetchPosts=mysql_fetch_array($Viewposts))
				$data[]=$fetchPosts;
				return $data;
			}	

	}
	
	public function viewAddress($var)
	{
	$sql1=mysql_query("SELECT * FROM kpn_merchant_address WHERE uid='".$var."';");
	if(mysql_num_rows($sql1)>=1){
			while($fetchPosts=mysql_fetch_array($sql1))
			$data[]=$fetchPosts;
			return $data;
		}
	}
}
class user_det {
	public function viewFollowing()
	{
	if(isset($_SESSION['user_name'])){
	$sql1=mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';");
	$user=mysql_fetch_array($sql1);
	$data[]=$user;
	return $data[0];
	}}
}

class user_dtls {
	public function viewUserDtls($user_id)
	{
		$sql=mysql_query("SELECT email, mobile, password, city FROM kpn_user_profile WHERE user_id='".$user_id."';");		
		if(mysql_num_rows($sql)>=1){
			while($user=mysql_fetch_array($sql))
			$data[]=$user;
			return $data;
		}
	}
}

class business_dtls {
	public function viewBusiness($user_id)
	{
		$user=mysql_fetch_array(mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';"));
		$following_arr=explode("-", $user['following']);
		$data[]=array();
		array_pop($data);
		for($i=0;$i<(sizeof($following_arr)-1);$i++) {
			$kpn=$following_arr[$i];
			$single = mysql_query("select * from kpn_merchant_details where uid='".$kpn."';");
			while($fetchPosts=mysql_fetch_array($single))
			$data[]=$fetchPosts;
			//array_push($data,$single);
		}
		if(sizeof($data)==0) { }
		return $data;
	}
	
}

class bus_dtls {
	public function viewBusDtls($user_id)
	{
		$sql=mysql_query("SELECT * FROM kpn_merchant_details;");		
		if(mysql_num_rows($sql)>=1){
			while($user=mysql_fetch_array($sql))
			$data[]=$user;
			return $data;
		}
	}
}

//category details
class category_dtls {
	public function viewCategories($user_id)
	{
		$user=mysql_fetch_array(mysql_query("SELECT * FROM kpn_user_profile WHERE user_id='".$_SESSION['user_name']."';"));
		$following_arr=explode("-", $user['category']);
		$data[]=array();
		array_pop($data);
		for($i=0;$i<(sizeof($following_arr)-1);$i++) {
			$kpn=$following_arr[$i];
			$single = mysql_query("select * from kpn_menu_classes where menu_id='".$kpn."';");
			while($fetchPosts=mysql_fetch_array($single))
			$data[]=$fetchPosts;
			//array_push($data,$single);
		}
		if(sizeof($data)==0) { echo "";}
		return $data;
	}
	
}

class cat_dtls {
	public function viewCatDtls($user_id)
	{
		$sql=mysql_query("SELECT * FROM kpn_menu_classes;");		
		if(mysql_num_rows($sql)>=1){
			while($user=mysql_fetch_array($sql))
			$data[]=$user;
			return $data;
		}
	}
}

class businessFunctions{

	public function followers($id){
		
		return $no_follow;
	}
	public function claimedCoupons($id){
	
	}
}

function get_merchant_details($id,$feild){
	$no_follow=0;
	$sql11=mysql_query("SELECT u".$id." FROM kpn_merchant_followers;");
	while($followers=mysql_fetch_array($sql11)){
		$no_follow+=$followers[0];
	}
	$strSQL1 = mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$id'");
	$koupon1 = mysql_fetch_array($strSQL1);
	$strSQL4 = mysql_query("SELECT * FROM kpn_merchant_details WHERE company_name='$id'");
	$koupon4 = mysql_fetch_array($strSQL4);
	$strSQL2 = "SELECT * FROM kpn_deal_headers WHERE created_by='$id'";
	$koupons = mysql_query($strSQL2);
	$no_koupons = mysql_num_rows($koupons);
	$sold=0;
	$tot_koupons=0;
	while($koupon = mysql_fetch_array($koupons)) {
		$tot_koupons=$tot_koupons+$koupon['orig_volume'];
		$var1=$koupon['kpn_id'];
			$strSQL3= "SELECT * FROM kpn_processed_deals WHERE kpn_id='$var1'";
			$koupon_id_list = mysql_query($strSQL3);
			while($koupon_id = mysql_fetch_array($koupon_id_list)) {
				$sold=$sold+$koupon_id['volume_purchased'];
			}
	}
	switch($feild){
		case "koupons":
			return $no_koupons;
		case "followers":
			return $no_follow;
		case "tot_koupons_sold":
			return $sold;
		case "tot_koupons":
			while($koupon = mysql_fetch_array($koupons)) {
			if($koupon['orig_volume']=='-1') $tot_koupons="Unlimited";
			}
			return $tot_koupons;
		case "uid_company_name":
			return $koupon4['uid'];
		default:
			return $koupon1[$feild];
	}	
}