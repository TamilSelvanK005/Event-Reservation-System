<?php
require_once"db_con.php";

		$hname=$_REQUEST["off_name"]; 
		$haddress=$_REQUEST["off_con"];
		

if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/" . $filename;

$sql="INSERT INTO offers(off_name,offer_content,offer_image) values('$hname','$haddress','$filename')";

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