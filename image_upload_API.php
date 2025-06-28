<?php
require_once"db_con.php";

		$cid=$_REQUEST["cus_id"]; 
		

if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/" . $filename;

$sql="INSERT INTO gallery(cuid,image) values('$cid','$filename')";

if ($link->query($sql) === TRUE) 
{
	 if (move_uploaded_file($tempname, $folder)) 
	 {
			echo '<script type="text/javascript">
				   window.onload = function () { alert("Registration Successfully!");
			  window.location.href="admin.php";} </script>';
	} 
	else 
	{
		
	echo "file errorError";
	}

}
else 
{
	echo "database Error";
	}	
	
}
?>