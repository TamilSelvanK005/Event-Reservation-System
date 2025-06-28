<?php
require_once"db_con.php";
if(isset($_POST['update']))
{

		$ename=$_REQUEST["events_name"]; 
		$id=$_REQUEST["id"];
		$pass=$_REQUEST["pass"];
		$key=$_REQUEST["key"];
		

$sql="UPDATE  customer_login SET cuid='$id',cus_name='$ename',pass='$pass' WHERE id='$key'";

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