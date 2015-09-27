 <?php
function getExtension($str)
{
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
}
$errors=0;
if(isset($_POST['sendfiles'])) 
{
  $uploaddir = "../media/gallery/".$_POST['guid'];
  mkdir($uploaddir);
  
  echo $uploaddir."\n<br>";
    foreach ($_FILES['photos']['name'] as $name => $value)
    {
	echo $value;
	$extension=getExtension($value);
	if(($extension=='jpg')OR($extension=='png')OR($extension=='gif')OR($extension=='jpeg')){
		if(filesize($_FILES['photos']['tmp_name'][$name])>2048){
			if(move_uploaded_file($_FILES['photos']['tmp_name'][$name],$uploaddir."/". $_FILES["photos"]["name"][$name])){echo "Success";}
			else{echo "FAIL";}
		}
		else{echo "M<br>";}
	}
	else{
		echo "Not Valid";
	}
    }
}
?>
	