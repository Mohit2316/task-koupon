<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$sql_admin=mysql_query("SELECT * FROM admin WHERE email='$user_check'");
if(mysql_num_rows($sql_admin)==1){
$admin=mysql_fetch_array($sql_admin);
$login_session=$admin['email'];}
if(!isset($login_session))
{
header("Location:signin.php");
}
?>
