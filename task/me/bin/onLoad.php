<?php
include("./admin/bin/functions.php");
$sql = mysql_query("SELECT * FROM kpn_merchant_followers WHERE date=CURDATE();");
if (mysql_num_rows($sql)==0) {
	$u_count=count_of('kpn_merchant_details');
	$val=",";
	for($i=0;$i<$u_count;$i++){$val.="0,";}
	$insert=mysql_query("INSERT INTO kpn_merchant_followers VALUES (CURDATE()".$val."0);");	
}
?>