<?php
$mysql_hostname = "localhost";
//$mysql_user = "kouponiz_demo";
//$mysql_password = "U478IFbw?pBb";
$mysql_user = "koupon_root";
$mysql_password = "Helpdesk1";
$mysql_database = "koupon_root";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some thing went wrong with mysql connectivity...");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong with Database...");
?>