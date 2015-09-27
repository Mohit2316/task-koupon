<?php
include("config.php");
include('../mail_checker.php');
session_start();
$email = $_POST['email'];
$volume = $_POST['volume'];
$mobile = $_POST['mobile'];
$paid = $_POST['paid'];
$nPaid = $_POST['nPaid'];

$sql=mysql_query("SELECT * FROM kpn_deal_headers WHERE kpn_id='".$_SESSION['kpn_id']."'");
$kpn=mysql_fetch_array($sql);

function get_company_name($uid)
	{
		$sql=mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$uid';");
		$u=mysql_fetch_array($sql);
		return $u['company_name'];
	}
function get_det($uid,$cat)
	{
		$sql=mysql_query("SELECT * FROM kpn_merchant_details WHERE uid='$uid';");
		$u=mysql_fetch_array($sql);
		switch($cat)
			{
				default:
				return $u[$cat];
			}
	}

if(($kpn['volume']==-1) or ($kpn['volume']>=$_POST['volume']))
	{
		$kpn_ids=" ";
		if($kpn['kpn_code']=='-1'){
			$last_kpn=get_det($kpn['created_by'],'last_kpn');
			$short_code=get_det($kpn['created_by'],'short_code');
			for($a=0;$a<$_POST['volume'];$a++)
				{
					$last_kpn++;
					$kpn_ids.=$short_code.$last_kpn.":";
				}
			$sql99=mysql_query("UPDATE kpn_merchant_details SET last_kpn='$last_kpn' where uid=".$kpn['created_by'].";");
		}
		else {
			for($a=0;$a<$_POST['volume'];$a++)
			{
				$kpn_ids.=$kpn['kpn_code'].":";
			}			
		}

		$timezone = date('H-i-s, j-y-m'); // HR||MN||SC||DD||YY||MM
		$op = preg_replace("/[^0-9]/","",$timezone);
		$kpnu = "KPN".$op;
		
		//Sending SMS
		$merchnt = get_company_name($kpn['created_by']);
		$msg = "Your Koupon ID is ".$kpn_ids.". You Paid Rs".$paid.", Pay Rs".$nPaid." to merchant onsite. You can claim your Koupon at ".$merchnt.". Thank you for using www.kouponize.com";							
		$url = "http://sms.todaybiz.in/SendSMS/sendmsg.php?uname=koupon&pass=arun123&send=koupon&dest=".urlencode($mobile)."&msg=".urlencode($msg);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$curl_scraped_page = curl_exec($ch);
		curl_close($ch);

		//Updating Database
		$sql=mysql_query("INSERT INTO `kpn_processed_deals` (`id`, `uid`, `kpn_id`, `kpn_identifier`, `user_id`, `volume_purchased`, `purchased_date`, `claim`) VALUES (NULL, '".$kpn['created_by']."', '".$kpn['kpn_id']."','".$kpn_ids."', '".$_SESSION['user_name']."', '".$_POST['volume']."', '".date("Y-m-d H:i:s")."', 'n');");
		
		if(($kpn['volume']!=-1))
			{
				$update_vol=$kpn['volume']-$_POST['volume'];
				mysql_query("UPDATE kpn_deal_headers SET volume='".$update_vol."' WHERE kpn_id='".$kpn['kpn_id']."'");
			}
		$claimDate = date("d-M-Y H:i:s");

		//Sending Mails
		payProcess($email, $kpnu, $paid, $claimDate);
		
		//send meila to merchant 
		//availedMerchant(get_company_name($kpn['created_by']),"admin/".get_det($kpn['created_by'],'image'),get_det($kpn['created_by'],'email'),get_det($kpn['created_by'],'mobile'),$kpn['title'],$_POST['volume'],$kpn_ids,$email,$mobile);*/
		
		//send mail to user
		availedUser($email,"../admin/".get_det($kpn['created_by'],'image'),$kpn['title'],$kpn_ids,get_company_name($kpn['created_by']),get_det($kpn['created_by'],'email'),get_det($kpn['created_by'],'mobile'),get_det($kpn['created_by'],'address_line1'),get_det($kpn['created_by'],'address_line2'),get_det($kpn['created_by'],'address_line3'),get_det($kpn['created_by'],'city'),$paid, $nPaid);

		echo $kpn_ids;
	}
	else
	{
		echo 'false';
	}
?>