<?php
require_once"db_con.php";
if(isset($_POST['delete']))
{
	$key=$_REQUEST["key"];

$sql="DELETE FROM  offers WHERE offer_id='$key'";

	if ($link->query($sql) === TRUE) 
	{
		
				echo '<script type="text/javascript">
					   window.onload = function () { alert("Successfully DELETED!");
				  window.location.href="admin.php";} </script>';
	}
else 
{
	echo "database Error";
	}	
}
?>