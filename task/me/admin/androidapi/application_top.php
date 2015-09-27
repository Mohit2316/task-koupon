<?php
ob_start();
session_start();
error_reporting(E_ERROR);

// Custom Functions and Classes
require_once('includes/define.php');
require_once(DIR_INC.'header_functions.php');

set_error_handler("myErrorHandler");

function __autoload($classname)
{
	require_once DIR_CLASS.$classname.'.php';
}

?>
