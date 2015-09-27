<?php
    
    require_once("Rest.inc.php");
    /**
    * File        : api.php
    * App name    : Goceng
    * Version     : 1.1.3
    * Created     : 01/22/14

    * Created by Taufan Erfiyanto & Cahaya Pangripta Alam on 01/22/14.
    * Copyright (c) 2013 pongodev. All rights reserved.
    */
    
    
    
    class API extends REST {          
        public $data = "";
        const DB_SERVER = "localhost";  // Server Name
    	const DB_USER = "kouponiz_demo";        // Database User Name
    	const DB_PASSWORD = "U478IFbw?pBb";        // Database Password
    	const DB = "kouponiz_demo";         // Database Name
        
        public function __construct(){
        	parent::__construct();				// Init parent contructor
        	$this->dbConnect();					// Initiate Database connection
    	}
        
        
        // Database connection 
    	private function dbConnect(){
    		$this->db = new mysqli(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
    		$this->db->set_charset('utf8');
    		if($this->db)
    			$this->db->select_db(self::DB);
    	}
    	
    	public function processApi(){
    		$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
    		if((int)method_exists($this,$func) > 0)
    			$this->$func();
    		else
    			$this->response('',404); // If the method not exist with in this class, response would be "Page not found".
    	}
        
        
        // Web service = your-website.com/your-folder/api/
        // Service     = notify_new_deal?
        // Parameter   = 
        // Response    = status
        // Example     = http://your-website/your-folder/api/notify_new_deal
        // Description = this function is used to check new deal
        private function notify_new_deal(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
			
            // Join deals table with categories table
            $query = "SELECT deal_id
            	    FROM tbl_deals d, tbl_categories c 
                    WHERE d.category_id = c.category_id AND CURDATE() <= d.end_date 
                    ORDER BY deal_id DESC 
                    LIMIT 1";
                    
            
            $sql = $this->db->query($query);
            
            
            
            // Create variabel array
            $result = array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result 
		$result[] = $row;
		
            }
            
            // Convert result to json
            $this->response($this->json(array('latestDeals' => $result)), 200);
        }
        
        // Web service = your-website.com/your-folder/api/
        // Service     = latest_deals?
        // Parameter   = start_index, items_per_page
        // Response    = deal_id, title, end_date, after_discount_value, start_value, category_marker, image
        // Example     = http://your-website/your-folder/api/latest_deals?start_index=0&items_per_page=2
        // Description = this function is used to get all deals data order by date for listview
        private function latest_deals(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            $start_index     = $_GET['start_index'];
            $items_per_page  = $_GET['items_per_page'];
			
            // Join deals table with categories table
            $query = "SELECT deal_id, title, DATE_FORMAT(end_date, '%D %M %Y') as end_date,     
                    after_discount_value, start_value, category_marker, image
                    FROM tbl_deals d, tbl_categories c 
                    WHERE d.category_id = c.category_id AND CURDATE() <= d.end_date 
                    ORDER BY deal_id DESC 
                    LIMIT $start_index, $items_per_page";
            
            $sql = $this->db->query($query);
            
            
            // Create variabel array
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result 
				$result[] = $row;
            }
            
            // Convert result to json
            $this->response($this->json(array('latestDeals' => $result)), 200);
        }
        
        
        // Web service = your-website.com/your-folder/api/
        // Service     = category_list?
        // Parameter   = -
        // Response    = category_id, category_name, category_marker
        // Example     = http://your-website.com/your-folder/api/category_list?
        // Description = this function is used to get all categories data for listview
        private function category_list(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
			// Table category order by category_name
            $query = "SELECT menu_id,name,menu_image
                      FROM kpn_menu_classes 
                      ORDER BY name ASC";
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result
				$result[] = $row;
            }
            
            // Convert result to json
            $this->response($this->json(array('categoryList' => $result)), 200);
				
        }
        
        // Web service = your-website.com/your-folder/api/
        // Service     = deal_by_category?
        // Parameter   = category_id, start_index, items_per_page
        // Response    = deal_id, title, end_date, after_discount_value, start_value, category_marker, image
        // Example     = http://your-website.com/your-folder/api/deal_by_category?category_id=1&start_index=0&items_per_page=2
        // Description = this function is used to get all deals data by category on listview 
        private function deal_by_category(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            $category_id     = $_GET['category_id'];
            $start_index     = $_GET['start_index'];
            $items_per_page   = $_GET['items_per_page'];
            
    		/// Join deals table with categories table
            $query = "SELECT deal_id, title, DATE_FORMAT(end_date, '%D %M %Y') as end_date, 
                      after_discount_value, start_value, category_marker, image 
                      FROM tbl_categories c 
                      INNER JOIN tbl_deals d on d.category_id = c.category_id 
                      WHERE c.category_id = '$category_id' AND CURDATE() <= d.end_date
                      ORDER BY d.end_date ASC 
                      LIMIT $start_index, $items_per_page";
            
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {   
                // Include content to variabel array result
				$result[] = $row;
            }
            
            // Convert result to json
            $this->response($this->json(array('dealByCategory' => $result)), 200);
				
        }  
        
        // Web service = your-website.com/your-folder/api/
        // Service     = deal_detail?
        // Parameter   = deal_id
        // Example     = http://your-website.com/your-folder/api/deal_detail?deal_id=1
        // Response    = title, company, address, latitude, longitude, deal_url, image, after_discount_value, start_value, discount, save_value, start_date, end_date, description
        // Description = this function is used to get detail deal data
        private function deal_detail(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            $deal_id = $_GET['deal_id'];
            
    		// Get all deal data from deals table
            $query = "SELECT title, company, address, category_marker, latitude, longitude, deal_url, image, after_discount_value, start_value, discount, save_value, DATE_FORMAT(start_date, '%D %M %Y') as start_date, DATE_FORMAT(end_date, '%D %M %Y') as end_date, description
                      FROM tbl_deals d, tbl_categories c
                      WHERE d.deal_id ='$deal_id' AND c.category_id = d.category_id";
                      
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result
				$result[] = $row;
                
            }
            // Convert result to json
            $this->response($this->json(array('dealDetail' => $result)), 200);
            
            
        }
        
        // Web service = your-website.com/your-folder/api/
        // Service     = deal_by_search_name?
        // Parameter   = keyword, start_index, items_per_page
        // Example     = http://your-website.com/your-folder/api/deal_by_search_name?keyword=gun&start_index=0&items_per_page=2
        // Response    = deal_id, title, end_date, after_discount_value, start_value, category_marker, image
        // Description = this function is used to search deal
        private function deal_by_search_name(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            $key_name = $_GET['keyword'];
            $start_index    = $_GET['start_index'];
            $items_per_page= $_GET['items_per_page'];
            
                    
    		// Get deals by keyword in deals table
            $query = "SELECT deal_id, title, DATE_FORMAT(end_date, '%D %M %Y') as end_date,
                      after_discount_value, start_value, category_marker, image
                      FROM tbl_categories c 
                      INNER JOIN tbl_deals d on d.category_id = c.category_id 
                      WHERE d.title LIKE '%$key_name%' AND CURDATE() < d.end_date
                      ORDER BY d.end_date ASC 
                      LIMIT $start_index, $items_per_page";
                    
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result
				$result[] = $row;
                
            }
            // Convert result to json
            $this->response($this->json(array('dealBySearchName' => $result)), 200);
				
        }
        
        // Web service = your-website/your-folder/api/
        // Service     = deal_around_you?
        // Parameter   = user_lat, user_lng
        // Example     = http://your-website/your-folder/api/deal_around_you?user_lat=-6.372325&user_lng=106.83294
        // Response    = deal_id, title, l.category_id, address, end_date, after_discount_value, start_value, category_marker, image, latitude, longitude
        // Description = this function is used to get deal around your location
        private function deal_around_you(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            
            $user_lat = $_GET['user_lat'];
            $user_lng = $_GET['user_lng'];
            
            // Get all deals data from deals table
            $query = "SELECT deal_id, title, address, DATE_FORMAT(end_date, '%D %M %Y') as end_date, after_discount_value, start_value, category_marker, image, latitude, longitude 
                      FROM tbl_deals d, tbl_categories c 
                      WHERE d.category_id = c.category_id AND CURDATE() < d.end_date
                      ORDER BY d.end_date ASC";
            
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Find the nearest deals around user location
                if(distance($user_lat, $user_lng, $row['latitude'], $row['longitude'])){
				    $result[] = $row;
                }
                
                
                
            }
            
            $result = bubbleSort($result);
            
            $sortedResult = array();
            if(count($result) < 20){
                $length = count($result);
            }else{
                $length = 20;
            }
            
            for($i = 0; $i < $length; $i++){
                $sortedResult[$i] = $result[$i];
            }
            
            // Convert result to json
            $this->response($this->json(array('dealAroundYou' => $sortedResult)), 200);
            	
        }
        
        
        
        // Web service = your-website.com/your-folder/api/
        // Service     = currency
        // Parameter   = -
        // Example     = http://your-website.com/your-folder/api/currency
        // Response    = currency
        // Description = this function is used to get currency
        private function currency(){
    		if($this->get_request_method() != "GET"){
    			$this->response('',406);
            }
            
            // Get currency data from currency table
            $query = "SELECT code FROM tbl_currency c, tbl_settings s
                    WHERE c.id = s.currency";
                    
            $sql = $this->db->query($query);
            $result=array();
            
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                // Include content to variabel array result
				$result[] = $row;
                
            }
            // Convert result to json
            $this->response($this->json(array('currency' => $result)), 200);
				
        }
        
                       
        private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
    }
    

    
    // Description = this fuction is used to get distance between deals location and user location
    function distance($lat1, $lon1, $lat2, $lon2) {
    
      $theta = $lon1 - $lon2;
      $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
      $dist = acos($dist);
      $dist = rad2deg($dist);
      $miles = $dist * 60 * 1.1515;
    
        $kilometer = $miles * 1.609344;
        
        // if radius between location and user position less than 10 km return true
        if($kilometer < 10.000){
            return true;
        }else{
            return false;
        }
      
    }
    
    
    // Description = this function is used to sort data by distance
    function bubbleSort(array $arr) {
        $sorted = false;
        while (false === $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($arr)-1; ++$i) {
                $current = $arr[$i];
                $next = $arr[$i+1];
                if ($next < $current) {
                    $arr[$i] = $next;
                    $arr[$i+1] = $current;
                    $sorted = false;
                }
            }
        }
        return $arr;
    }
    	
    	// Initiiate Library
    	
    $api = new API;
    $api->processApi();    
?>