<?php
require_once"db_con.php";

		$pname=$_REQUEST["pack_name"]; 
		$haddress=$_REQUEST["ser_1"];
		$no_seats=$_REQUEST["ser_2"];
		$dinner=$_REQUEST["ser_3"];
		$no_room =$_REQUEST["ser_4"];
		$ac_non=$_REQUEST["ser_5"];
		$restroom =$_REQUEST["ser_6"];
		

if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/" . $filename;

$sql="INSERT INTO package_type(pack_name,service_1,service_2,service_3,service_4,service_5,service_6,image) values('$pname','$haddress','$no_seats','$dinner','$no_room','$ac_non','$restroom','$filename')";

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
