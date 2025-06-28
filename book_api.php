<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{


		$key=$_REQUEST["key"];
		echo $key;
		$hname=$_REQUEST["hall_name"];
		$customer=$_REQUEST["cname"];
		$cus_con=$_REQUEST["country"];
		$cus_city=$_REQUEST["city"];
		$number1=$_REQUEST["num1"];
		$email=$_REQUEST["mail"];
		$number2=$_REQUEST["num2"];
		$bride_name=$_REQUEST["bride"];
		$groom_name=$_REQUEST["groom"];
		$day=$_REQUEST["date"];
		echo $day;
		$session=$_REQUEST["guru"];
		echo $session;
		 

$sql="INSERT INTO booking(hall_id,hall_name,cus_country,cus_city,cus_no1,cus_email,cus_no2,Bride_name,groom_name,date,session) values('$key','$hname','$customer','$cus_con','$cus_city','$number1','$email','$number2','$bride_name','$groom_name','$day','$session')";																									
		if(mysqli_query($link,$sql))
		{
			echo '<script type="text/javascript">
				   window.onload = function () { alert("Registration Successfully!");
			  window.location.href="admin.php";} </script>';
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
