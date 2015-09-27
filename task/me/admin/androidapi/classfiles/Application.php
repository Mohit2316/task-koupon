<?php

class Application extends PDO_Database
{
	function __construct()
	{
		parent::__construct();
	}
	
	function fetchAllCategory()
	{
	
		$query = " SELECT menu_id as category_id,name as category_name,menu_image as category_marker FROM ".CATEGORY;
		$arrCategory = $this->Fetch($query,0,array());
		
		return json_encode(array("categoryList"=>$arrCategory));
	
	}
	
	function fetchAllDeals($pageno,$itemno,$menuid = 0)
	{
		
		$start_limit = $pageno;		
		
		$query = "SELECT k.kpn_id as deal_id,title,deal_end_date as end_date,deal_cost as after_discount_value,deal_orig_cost as start_value,image_small as image,menu_image as category_marker ";
		$query .= " FROM ".KOUPONS. " k , ".KOUPONS_DETAILS." d , ".CATEGORY." c WHERE k.kpn_id = d.kpn_id AND k.menu_id = c.menu_id AND k.status = 'Active' ";
		if($menuid != 0)
			$query .= " AND k.menu_id = $menuid ";
		$query .= " ORDER BY k.kpn_id DESC ";
		$query .= " LIMIT $start_limit, $itemno ";
		
		$arrDeals = $this->Fetch($query,0,array());
		
		if($menuid != 0)
			return json_encode(array("dealByCategory"=>$arrDeals));
		else
			return json_encode(array("latestDeals"=>$arrDeals));
	}
	
	function fetchDealDetails($deal_id)
	{
		
		//company,title,address,after_discount_value,start_value,discount,save_value,start_date,end_date,description,deal_url,image,category_marker,longitude,latitude
		
		if($deal_id != 0)
		{
		$query = "SELECT company_name as company,title,CONCAT(address_line1,address_line2,address_line3) as address,deal_cost as after_discount_value,deal_orig_cost as start_value,deal_discount as discount, ";
		$query .= " (deal_orig_cost-deal_cost) as save_value,deal_start_date as start_date, deal_end_date as end_date,long_desc as description,website as deal_url,image_small as image,menu_image as category_marker,longitude,latitude ";
		$query .= " FROM ".KOUPONS. " k , ".KOUPONS_DETAILS." d , ".CATEGORY." c, ".MERCHANT_DETAILS." m WHERE k.kpn_id = d.kpn_id AND k.menu_id = c.menu_id AND k.created_by = m.uid ";
		$query .= " AND k.kpn_id = ? ";
		
		$arrDeals = $this->Fetch($query,1,array($deal_id));
		
		return json_encode(array("dealDetail"=>$arrDeals));
		}
		else 
			return 0;
	}

	function __destruct()
	{
		parent::__destruct();
	}
}

?>
