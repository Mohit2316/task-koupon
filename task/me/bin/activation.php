<?php
include("config.php");
session_destroy();
$msg='';
if(!empty($_GET['actCode']) && isset($_GET['actCode'])) {
	$code=mysql_real_escape_string($_GET['actCode']);
	$c=mysql_query("SELECT user_id FROM kpn_user_profile WHERE activation='$code'");  
	if(mysql_num_rows($c) > 0) {
		$count=mysql_query("SELECT user_id FROM kpn_user_profile WHERE activation='$code' and status='Block';");  
		if(mysql_num_rows($count) == 1) {
			mysql_query("UPDATE kpn_user_profile SET status='Active' WHERE activation='$code'"); $msg="<h4>Thank you for chosing Kouponize.com</h4><h1>Your Account has been Verified. Sign in to discover amazing offers and deals across your city.</h1><br><br><h3><div id='numberCountdown'></div></h3> <META HTTP-EQUIV=Refresh CONTENT='4; URL=index.php'>";  
		}
		else {
			$msg ="<h1>Your account is already active, no need to activate again.</h1><h3><div id='numberCountdown'></div> </h3><META HTTP-EQUIV=Refresh CONTENT='4; URL=index.php'>";
		}  
	}
	else {
		$msg ="<h1>Wrong activation code.</h1></h1><br><h3><div id='numberCountdown'></div> </h3><META HTTP-EQUIV=Refresh CONTENT='4; URL=index.php'>"; 
	}
} 
else {
		$msg ="<h1>Wrong activation code.</h1></h1><br><h3><div id='numberCountdown'></div> </h3><META HTTP-EQUIV=Refresh CONTENT='4; URL=index.php'>"; 
} 

?>