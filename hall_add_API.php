<?php
require_once"db_con.php";

		$hname=$_REQUEST["hall_name"]; 
		$haddress=$_REQUEST["hall_add"];
		$no_seats=$_REQUEST["no_seats"];
		$dinner=$_REQUEST["dinner"];
		$no_room =$_REQUEST["no_room"];
		$ac_non=$_REQUEST["AC"];
		$restroom =$_REQUEST["restroom"];
		$parking =$_REQUEST["parking"];
		$light=$_REQUEST["light"];
		$people=$_REQUEST["people"];
		$song=$_REQUEST["song"];
		$dinner1=$_REQUEST["dinner1"];
		$dinner12=$_REQUEST["dinner2"];

if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "img/".$filename;
	

$sql="INSERT INTO wedding_hall(hall_name,hall_address,no_of_seats,dinner_seats,no_rooms,ac_non_ac,restroom,parking	,lights	,cleaning_people,songs,hall_image,dinner_veg,dinner_non) values('$hname','$haddress','$no_seats','$dinner','$no_room','$ac_non','$restroom','$parking','$light','$people','$song','$filename','$dinner1','$dinner12')";

if ($link->query($sql) === TRUE) 
{
	 if (move_uploaded_file($tempname, $folder)) 
	 {
			header("location:admin.php");

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