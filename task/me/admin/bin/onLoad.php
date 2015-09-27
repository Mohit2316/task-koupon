<?php
include("./bin/config.php");
$sql = mysql_query("SELECT * FROM kpn_merchant_followers WHERE date=CURDATE();");
if (mysql_num_rows($sql)==0) {
	$sql="SELECT * FROM kpn_merchant_details";
	$result=mysql_query($sql);
	$u_count=mysql_num_rows($result);
	$val=",";
	for($i=0;$i<$u_count;$i++){$val.="0,";}
	$insert=mysql_query("INSERT INTO kpn_merchant_followers VALUES (CURDATE()".$val."0);");	
}
?>