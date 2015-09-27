<?php
ini_set('display_errors','On');
//error_reporting(0);
require_once('includes/define.php');
require_once('classfiles/PDO_Database.php');
require_once('classfiles/Application.php');

$action = $_REQUEST['action'];


$application = new Application();

switch($action)
{
	//To fetch both games and apps category
	case 'category_list':
		echo $retval = $application->fetchAllCategory();
	break;
	
	case 'latest_deals':
		$page_no = $_REQUEST["start_index"];
		$no_items = $_REQUEST["items_per_page"];
		echo $retval = $application->fetchAllDeals($page_no,$no_items,$menu_id);
	break;
	
	case 'deal_by_category':
		$page_no = $_REQUEST["start_index"];
		$no_items = $_REQUEST["items_per_page"];
		$menu_id = ($_REQUEST["menu_id"] != "") ? $_REQUEST["menu_id"] : 0;
		echo $retval = $application->fetchAllDeals($page_no,$no_items,$menu_id);
	break;
	
	case 'deal_detail':
		$deal_id = ($_REQUEST["deal_id"] != "") ? $_REQUEST["deal_id"] : 0;
		echo $retval = $application->fetchDealDetails($deal_id);
	break;

}

?>

