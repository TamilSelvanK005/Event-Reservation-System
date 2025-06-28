<?php
require_once"db_con.php";
if(isset($_POST['update']))
{

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
		$key=$_REQUEST["key"];

$sql="UPDATE  wedding_hall SET hall_name='$hname',hall_address='$haddress',no_of_seats='$no_seats',dinner_seats='$dinner',no_rooms='$no_room',ac_non_ac='$ac_non',restroom='$restroom',parking='$parking',lights='$light',cleaning_people='$people',songs='$song',dinner_veg='$dinner1',dinner_non='$dinner12'  WHERE wh_id='$key'";

	if ($link->query($sql) === TRUE) 
	{
		
				echo '<script type="text/javascript">
					   window.onload = function () { alert(" Successfully UPDATED!");
				  window.location.href="admin.php";} </script>';
		
	
	}
else 
{
	echo "database Error";
	}	
	
}
else
{
echo 'error';
}
?>