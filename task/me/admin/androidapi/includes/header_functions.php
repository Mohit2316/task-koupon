<?php
//Function to Redirect if Session is not set
function Redirect_Index()
{
	//getRequestURL();
	if(!isset($_SESSION['AppsCPanel_NAM']))
	{
		header("Location: index.php");
		exit;
	}
}

function getRequestURL()
{
  $current_url_domain = $_SERVER['HTTP_HOST'];
  $current_url_path = $_SERVER['SCRIPT_NAME'];
  $current_url_querystring = $_SERVER['QUERY_STRING'];
  $current_url = "http://".$current_url_domain.$current_url_path;
  if($current_url_querystring != "") {  $current_url .= "?".$current_url_querystring; }
  if(isset($_SESSION['AppsCPanel_URL']))
    unset($_SESSION['AppsCPanel_URL']);
  $_SESSION['AppsCPanel_URL'] = $current_url;
} 


function getFilename()
{
	return $filename = trim(substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1));
}


//Function to get the HTTP Referrer
function getHTTPReffer()
{
	return trim(substr($_SERVER['HTTP_REFERER'],strrpos($_SERVER['HTTP_REFERER'],"/")+1));
}

// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
	    
	if (!(error_reporting() & $errno)) 
	{
	// This error code is not included in error_reporting
	return;
	}

	switch ($errno) 
	{
	case E_USER_ERROR:
		$error_msg = "<b>My ERROR</b> [$errno] $errstr<br />\n";
		$error_msg .= "  Fatal error on line $errline in file $errfile";
	break;

	case E_USER_WARNING:
		$error_msg = "<b>My WARNING</b> [$errno] $errstr<br />\n";
	break;

	case E_NOTICE:
		$error_msg = "<b>My NOTICE</b> [$errno] $errstr<br />\n";
	break;

	default:
		$error_msg = "Unknown error type: [$errno] $errstr<br />\n";
	break;
	}
	error_log($error_msg,3,BASE_PATH."/Log/error_log.txt");  
	/* Don't execute PHP internal error handler */
	return true;
}

?>
