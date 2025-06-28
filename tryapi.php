<?php
require_once"db_con.php";
if(isset($_POST['submit']))
{

		$key=$_REQUEST["key"];
		$hname=$_REQUEST["hall_name"];
		$customer=$_REQUEST["aname"];
		$cus_con=$_REQUEST["country"];
		$cus_city=$_REQUEST["city"]; 
		$number1=$_REQUEST["num1"];
		$email=$_REQUEST["mail"];
		$number2=$_REQUEST["num2"];
		$bride_name=$_REQUEST["spot"];
		
		$day=$_REQUEST["date"];
		$catagory="catering";
		$status="new";		
	
    // Check if checkboxes are selected
    if(isset($_POST['checkboxes']))
	{
        // Loop through the selected checkboxes
       $selectedCheckboxes = isset($_POST['checkboxes']) ? $_POST['checkboxes'] : [];

	if (!empty($selectedCheckboxes)) 
	{
		$menu1 =implode(", ", $selectedCheckboxes);
	} else 
	{
		echo "No checkboxes selected.";
	}
			
			
			$sql="INSERT INTO booking (hall_name,cus_name,cus_country,cus_city,cus_no1,cus_email,cus_no2,spot_location,date,catagory,status,food_menu) values('$hname','$customer','$cus_con','$cus_city','$number1','$email','$number2','$bride_name','$day','$catagory','$status','$menu1')";																										
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
        echo "No checkboxes selected.";
    }
}
?>
