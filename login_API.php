<?php
session_start();
if(!isset($_SESSION["admin"])&& $_SESSION["admin"]===true)
{
	header("location:admin.php");
	exit;
}
else if(!isset($_SESSION["user"])&& $_SESSION["user"]===true)
{
	header("location:index.php");
	exit;
}
else if(!isset($_SESSION["customer"])&& $_SESSION["customer"]===true)
{
	header("location:gallery.php");
	exit;
}

require_once"db_con.php";

$username=$_REQUEST["username"];
$password=$_REQUEST["password"];

$result=mysqli_query($link,"SELECT * FROM admin_login WHERE username='".$username."' AND password='".$password."'");
if(mysqli_num_rows($result)>0)
	{
	
		while($row = mysqli_fetch_array($result))
			{			
			
			
				session_start();
				$_SESSION["admin"] = true;
			    $_SESSION["username"] = $row['username'];
				
				header("location:admin.php");
			}
		
	}
	
else
	{
		$guru=mysqli_query($link,"SELECT * FROM user_login WHERE mail_id='".$username."' AND pass='".$password."'");
		if(mysqli_num_rows($guru)>0)
		{
			while($row = mysqli_fetch_array($guru))
				{
				
				
				session_start();
				$_SESSION["user"] = true;
			    $_SESSION["mail_id"] = $row['mail_id'];
				$_SESSION["user_name"] = $row['user_name'];
				$_SESSION["number"] = $row['phone'];
				$_SESSION["country"] = $row['country'];
				$_SESSION["city"] = $row['city'];
				$_SESSION["add"] = $row['address'];
					
					
					
					  header("location:index.php");
				}
			
			
		}
		else
		{
			$guru=mysqli_query($link,"SELECT * FROM customer_login WHERE cuid='".$username."' AND pass='".$password."'");
			if(mysqli_num_rows($guru)>0)
			{
				while($row = mysqli_fetch_array($guru))
					{
					
				session_start();
				$_SESSION["customer"] = true;
			    $_SESSION["id"] = $row['cuid'];
					
						
						
						
						   header("location:gallery.php");
					}
				
				
			}
			else
			{
				echo '<script type="text/javascript">
							   window.onload = function () { alert("fail!");
						  window.location.href="login.html";} </script>';
			}
		}
	}
	


?>