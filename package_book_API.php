<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{

		$hname=$_REQUEST["pack"];
		$customer=$_REQUEST["name"];
		$cus_con=$_REQUEST["mail"];
		$cus_city=$_REQUEST["num1"]; 
		$number1=$_REQUEST["num2"];
		$email=$_REQUEST["address"];
		$bride_name=$_REQUEST["sport"];
		$status="new";		
		
		
		$sql="INSERT INTO package_booking (pack_name,cus_name,mail_id,number1,number2,address,sport_location,status) values('$hname','$customer','$cus_con','$cus_city','$number1','$email','$bride_name','$status')";																										
		if(mysqli_query($link,$sql))
		{
			echo '<script type="text/javascript">
				   window.onload = function () { alert("Registration Successfully!");
			  window.location.href="index.php";} </script>';
		}
		else
		{
			echo 'error...';
		}
		
}

else
{
 echo 'error';
}
mysqli_close($link);
?>
