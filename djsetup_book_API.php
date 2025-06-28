<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{

		$key=$_REQUEST["key"];
		$hname=$_REQUEST["hall_name"];
		$customer=$_REQUEST["aname"];
		$cus_con=$_REQUEST["country"];
		$cus_city=$_REQUEST["city"]; 
		$number1=$_REQUEST["num1"];
		$email=$_REQUEST["mail"];
		$number2=$_REQUEST["num2"];
		$bride_name=$_REQUEST["spot"];
		$groom_name=$_REQUEST["spot1"];
		$day=$_REQUEST["date"];
		$catagory="dj_lights";
		$status="new";		
		
		
		$sql="INSERT INTO booking (hall_name,cus_name,cus_country,cus_city,cus_no1,cus_email,cus_no2,spot_location,date,catagory,status) values('$hname','$customer','$cus_con','$cus_city','$number1','$email','$number2','$bride_name','$day','$catagory','$status')";																										
		if(mysqli_query($link,$sql))
		{
			echo '<script type="text/javascript">
				   window.onload = function () { alert("Registration Successfully!");
			  window.location.href="time_MSG.php";} </script>';
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
