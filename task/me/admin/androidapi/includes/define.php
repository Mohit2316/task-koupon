<?php
//Server Path
define('SITE_URL', 'http://'. $_SERVER['HTTP_HOST'] .'/demo/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/demo/androidapi/');
define('CURRENT_URL', 'http://'. $_SERVER['SERVER_NAME'] . rtrim($_SERVER['REQUEST_URI'], '/'));

//Directories
define('DIR_INC', 'includes/');
define('DIR_CLASS', 'classfiles/');
define('DIR_CSS', 'css/');
define('DIR_IMAGES', 'img/');
define('DIR_SCRIPTS', 'js/');
define('DIR_AJAX', 'ajax/');


//Self URl

//Title
define('TITLE','kouponize.com');

//DB COnnection String
define('HOST','localhost');
define('USERNAME','kouponiz_demo');
define('PASSWORD','U478IFbw?pBb');
define('DSN',"mysql:host=localhost;dbname=kouponiz_demo");

//Admin Table Names
define('CATEGORY','kpn_menu_classes');
define('KOUPONS','kpn_deal_headers');
define('KOUPONS_DETAILS','kpn_deal_details');
define('MERCHANT_DETAILS','kpn_merchant_details');


//Max Page Size
define('MAX_RECORDS_PER_PAGE','30');
define('MAX_PAGE_LINKS','3');

//UPload Path
?>
