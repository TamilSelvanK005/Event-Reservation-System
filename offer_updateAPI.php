<?php
require_once"db_con.php";
if(isset($_POST['update']))
{

		$oname=$_REQUEST["off_name"]; 
		$contant=$_REQUEST["off_contant"];
		
		$key=$_REQUEST["key"];

$sql="UPDATE  offers SET off_name='$oname',offer_content='$contant'  WHERE offer_id='$key'";

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