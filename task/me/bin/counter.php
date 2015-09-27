<?php
/*
-- 
****************************************************************************************
-- Copyright (c)  2013  kouponize.com
-- All rights reserved
-- 
****************************************************************************************
--
-- Counter
-- counter.php
--
-- DESCRIPTION
--  Counting the number of hits
-- 
-- 
-- CREATION DATE  26 JAN 2014
-- LAST UPDATE DATE 26 JAN 2014
-- 
-- HISTORY
-- =======
-- 
-- VERSION  DATE             AUTHOR(S)         DESCRIPTION
-- ------- ---------------  --------------- ------------------------------------
-- 1001     26 JAN 2014      KrishnaSai           Initial draft
--*******************************************************************************************************
*/
include("bin/config.php");
$cookie_namee='kouponize'; //Setting a cookie
$sql = mysql_query("SELECT count from counter WHERE date=CURDATE();");	//Cheking for the last count
if (mysql_num_rows($sql)>0) {
	$array=mysql_fetch_array($sql);
}
else { 
	$insert=mysql_query("INSERT INTO counter VALUES (CURDATE(),0);");			// If date not found adding that date
	$array =mysql_fetch_array(mysql_query("SELECT count from counter WHERE date=CURDATE();"));
}
$count = $array['count'];
if (!isset($_COOKIE[$cookie_namee])) {
	$count=$count+1;
    $sql_w=mysql_query("UPDATE counter SET count='$count' WHERE date=CURDATE();");
    //setcookie($cookie_namee,"Checked",time()+1);  //Iam putting time as 0 as of now as we can change it later
}
?>