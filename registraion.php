<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{


		$name=$_REQUEST["name"];
		$mail=$_REQUEST["email"];
		$password=$_REQUEST["pass"];
		$repassword=$_REQUEST["pass1"];
		$contry=$_REQUEST["contry"];
		$city=$_REQUEST["city"];
		$addres=$_REQUEST["add"];
		$phone=$_REQUEST["phone"]; 

$sql="INSERT INTO user_login(user_name,pass,mail_id,phone,country,city,address) values('$name','$password','$mail','$phone','$contry','$city','$addres')";																										
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
