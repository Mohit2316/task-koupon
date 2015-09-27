<?php

//Connect Database
$conn=mysql_connect('localhost', 'kouponiz_root', 'U478IFbw?pBb');

//Check for mysql connection
if(mysql_ping($conn)>=1)
{
$db=mysql_select_db('kouponiz_master',$conn) or die("no database" . mysql_error());
}
?>