<?php
/* -----------------------------------------------------------------------------------------
   IdiotMinds - http://idiotminds.com
   -----------------------------------------------------------------------------------------
*/
session_start();
//Facebook App Id and Secret
$appID='318664324940433';
$appSecret='6c30285ce12d72ad55e8cbedefc9a1f6';

//URL to your website root
if($_SERVER['HTTP_HOST']=='localhost'){
$base_url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}else{
$base_url='http://'.$_SERVER['HTTP_HOST'];	
}
?>