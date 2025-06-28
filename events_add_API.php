<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{


		$ename=$_REQUEST["event_name"]; 
		$pass=$_REQUEST["pass"]; 
		$cname=$_REQUEST["cus_name"]; 
		$cno=$_REQUEST["cus_no"]; 



$sql="INSERT INTO customer_login(cuid,pass,cus_name,phone_no) values('$ename','$pass','$cname','$cno')";																										
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
