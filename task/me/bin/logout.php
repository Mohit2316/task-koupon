<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['user_mobile']);
unset($_SESSION['category']);
unset($_SESSION['views']);
unset($_SESSION['catViews']);
unset($_SESSION['kpn_id']);
unset($_SESSION['access_token']);
unset($_SESSION['gplusuer']);
unset($_SESSION['host']);
unset($_SESSION['uri']);
unset($_SESSION['glog']);
session_destroy();
setcookie("Kouponize", "", time()-3600);
header('Location: ../index.php');
?>