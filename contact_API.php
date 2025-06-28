<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{


		$ename=$_REQUEST["name"]; 
		$mail=$_REQUEST["email"]; 
		$sub=$_REQUEST["subject"]; 
		$message=$_REQUEST["message"]; 



$sql="INSERT INTO enquery(cus_name,email,subject,message) values('$ename','$mail','$sub','$message')";																										
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
