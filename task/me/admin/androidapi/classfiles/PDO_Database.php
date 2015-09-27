<?php
/**
 * PDO_Database.php
 * The PDO Database class contains method to Create, Read, Update and Delete DB records.
 * All function names are self-explanatory.
**/
class PDO_Database
{

	private $con = "";
	function __construct()
	{
		$this->con = $this->pdo_connection();
	}

	function pdo_connection()
	{

		try {
		        $db_link = new PDO(DSN,USERNAME,PASSWORD);
		        $db_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $db_link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		    }
		    catch(PDOException $exception) 
		    {
			$this->LogError($exception->getMessage());
		    }

		return $db_link;
	}

	function Execute($query,$param_len,$param_values)
	{
		try
		{
			$sql = $this->con->prepare($query);
			if($param_len > 0)
			{
				for($i = 0;$i< $param_len;$i++)
				{
					$sql->bindParam($i+1,$param_values[$i]);
				}
			}
			if(!$sql->execute())
				return -1;
			else
			{
				return $sql->rowCount();
			}
		}
		catch(PDOException $exception)
		{
			$this->LogError($exception->getMessage());
			return -1;
		}
			
		
			
	}	

	function MultiInsert($query,$id,$arr)
	{
		try
		{
			$this->con->beginTransaction();
			$sql = $this->con->prepare($query);
			if(count($arr) > 0)
			{
				$i = 1;$rowindex = 1;
				foreach($arr as $item)
				{
					$sql->bindParam($i++,$id);
					$sql->bindParam($i++,$item->key1);
					$sql->bindParam($i++,$item->key2);
					//$rowindex = $rowindex + 1;
				}
			}
			$sql->execute();
			$this->con->commit();
			
		}
		catch(PDOException $exception)
		{
			$this->con->rollBack();
			$this->LogError($exception->getMessage());
			return -1;
			
		}

	}	



	function TransExecute($query,$param_len,$col,$param_values,$firstrun = 0,$tbl_name = null,$app_id = '')
	{
		
		try
		{
			$this->con->beginTransaction();
			if($firstrun == 1)
			{

				$delete_query = "DELETE FROM ".$tbl_name." WHERE app_id = '$app_id' ";
				$sql = $this->con->prepare($delete_query);
				$sql->execute();
				//$this->con->commit();
			}
			$sql = $this->con->prepare($query);
			if($param_len > 0)
			{
				$i=1;
				for($rowindex = 0;$rowindex< $param_len;$rowindex++)
				{
					for($colindex=0;$colindex < $col;$colindex++)
						$sql->bindParam($i++,$param_values[$rowindex][$colindex]);
					/*$sql->bindParam($i++,$param_values[$rowindex][1]);
					$sql->bindParam($i++,$param_values[$rowindex][2]);
					$sql->bindParam($i++,$param_values[$rowindex][3]);
					$sql->bindParam($i++,$param_values[$rowindex][4]);*/
				}
			}
			$sql->execute();
			$this->con->commit();
			return 1;
			
		}
		catch(PDOException $exception)
		{
			$this->con->rollBack();
			$this->LogError("$action failed for the Category&nbsp;&nbsp;".$param_values[0][0]." in the table ".$tbl_name."<br/><br/>".$exception->getMessage());
			return -1;
			
		}

	}


	
	function Fetch($query,$param_len,$param_values)
	{
		try
		{
			$sql = $this->con->prepare($query);
			if($param_len > 0)
			{
				for($i = 0;$i< $param_len;$i++)
				{
					$sql->bindParam($i+1,$param_values[$i]);
				}
			}
			if(!$sql->execute())
			{
				return -1;
			}
			if($sql->rowCount() > 0)
			{
				$arr_result = array();
				while($row = $sql->fetch())
					array_push($arr_result,$row);

				//print_r($arr_result);
				return $arr_result;
			}
			else
				return 0;
		}
		catch(PDOException $exception)
		{
			$this->LogError($exception->getMessage());
			return -1;
		}
		
			
	}


	function TransUpdate($query,$param_len,$col,$param_values,$firstrun = 0,$tbl_name = null,$action = 'Update')
	{
		
		try
		{
			$this->con->beginTransaction();
			$sql = $this->con->prepare($query);
			if($param_len > 0)
			{
				$i=1;
				for($rowindex = 0;$rowindex< $param_len;$rowindex++)
				{
					for($colindex=0;$colindex < $col;$colindex++)
						$sql->bindParam($i++,$param_values[$rowindex][$colindex]);
					$sql->execute();
				}
			}
			
			$this->con->commit();
			return 1;
			
		}
		catch(PDOException $exception)
		{
			$this->con->rollBack();
			$this->LogError("$action failed for the Category&nbsp;&nbsp;".$param_values[0][0]." in the table ".$tbl_name."<br/><br/>".$exception->getMessage());
			return -1;
			
		}

	}

	function LogError($errmsg)
	{
		/*$dt = date('Y-m-d H:i:s (T)');  
		$err = "<errorentry>\n";  
		$err .= "\t<datetime>" .$dt. "</datetime>\n";  
		$err .= "\t<errormsg>" .$errmsg. "</errormsg>\n";  
		$err .= "</errorentry>\n\n";

		
		error_log($err,3,BASE_PATH."/Log/error_log.txt");  */

		 // timestamp for the error entry  
		$dt = date('Y-m-d H:i:s (T)');  
		$err = "<errorentry>\n";  
		$err .= "\t<datetime>" .$dt. "</datetime>\n";  
		$err .= "\t<errormsg>" .$errmsg. "</errormsg>\n";  
		$err .= "</errorentry>\n\n";  

		// save to the error log file, and e-mail me if there is a critical user error.
		$log_file = BASE_PATH."/Log/error_log.txt";
		 if (!file_exists($log_file))
		 {
		 		$handle = fopen($log_file,"w");
				if (fwrite($handle, $err) === FALSE) {
					echo "Cannot write to file";
					exit;
				}
				fclose($handle);
		 }
		 elseif (file_exists($log_file))
		 {
		 	if (filesize($log_file) >= 2097152)
		 	{ 
		 		unlink($log_file);
		 		$handle = fopen($log_file,"w");
				if (fwrite($handle, $err) === FALSE) 
				{
					echo "Cannot write to file";
					exit;
				}
				fclose($handle);
		 	}
		 	
		 	if (is_writable($log_file)) {
				$handle = fopen($log_file,"a") or die("EError");
				if (fwrite($handle, $err) === FALSE) {
					echo "Cannot write to file";
					exit;
				}
			} 
			else {
				echo "The file error_log.txt is not writable";
			}		
			fclose($handle);
		 }
	}	


	function __destruct()
	{
		$this->con = null;
	}


}
?>
