<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "webmail12";
$mysql_database = "koupon_root";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Opps some thing went wrong with mysql connectivity...");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong with Database...");
?>
