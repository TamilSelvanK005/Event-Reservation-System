<?php
require_once"db_con.php";
if(isset($_POST['update']))
{

		$pname=$_REQUEST["pack_name"]; 
		$key=$_REQUEST["key"];
		$service_01=$_REQUEST["ser_1"];
		$service_02=$_REQUEST["ser_2"];
		$service_03=$_REQUEST["ser_3"];
		$service_04=$_REQUEST["ser_4"];
		$service_05=$_REQUEST["ser_5"];
		$service_06=$_REQUEST["ser_6"];
		
		 


$sql="UPDATE  package_type SET pack_name='$pname',service_1='$service_01',service_2='$service_02',service_3='$service_03',service_4='$service_04',service_5='$service_05',service_6='$service_06' WHERE pack_id='$key'";

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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
