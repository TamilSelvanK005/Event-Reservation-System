<?php
require_once"db_con.php";
$key=$_REQUEST["key"];
if(isset($_POST['accept']))
{

		$pname="accept"; 

$sql="UPDATE  booking SET status='$pname'WHERE book_id='$key'";

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

elseif(isset($_POST['reject']))
{

		$pname="reject"; 

$sql="UPDATE  booking SET status='$pname' WHERE book_id='$key'";


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


elseif(isset($_POST['process']))
{

		
		$pname="process"; 

$sql="UPDATE  booking SET status='$pname' WHERE book_id='$key'";


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
