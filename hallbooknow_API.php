<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{

		$key=$_REQUEST["key"];
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
		$session=$_REQUEST["guru"];
		$catagory="hall";
		$status="new";		
		
		
		 $sql="SELECT * FROM booking WHERE hall_name= '".$hname."' AND date= '".$day."' ";
		 $guru = mysqli_query($link,$sql);
										
		if(mysqli_num_rows($guru)>0)
		{
			echo '<script type="text/javascript">
				   window.onload = function () { alert("Date Already Booked!");
			  window.location.href="index.php";} </script>';
		}
		else
		{
			
			$sql="INSERT INTO booking (hall_id,hall_name,cus_name,cus_country,cus_city,cus_no1,cus_email,cus_no2,Bride_name,groom_name,date,session,catagory,status) values('$key','$hname','$customer','$cus_con','$cus_city','$number1','$email','$number2','$bride_name','$groom_name','$day','$session','$catagory','$status')";	
			if($link->query($sql)==TRUE)
			{
				echo '<script type="text/javascript">
				   window.onload = function () { alert("Successfully Booked!");
			  window.location.href="time_MSG.php";} </script>';
			
			}
			else
			{
				echo "error new if";
			}
			
			
		}
		
}
mysqli_close($link);

?>
