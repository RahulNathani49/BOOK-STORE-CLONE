<?php
session_start();
include("includes/db.php");
include("functions/functions.php");

if (isset($_POST['update']))
{
	if(isset($_SESSION['cart']))
	{
		if (isset($_GET['add_cart']))
		{		
			//global $con;
			
			$ip = getIp();
	
			$pro_id = $_GET['add_cart'];
			
			$check_pro = "select * from cart where Product_id='$pro_id'";
			
			$run_check =mysqli_query($con, $check_pro);
			
			if(mysqli_num_rows($run_check)>0)
			{
				echo "";
			}
			else
			{				
				$insert_pro= "insert into order_details (Product_id) values ('$pro_id')";
				
				$run_pro = mysqli_query($con,$insert_pro);
				
				echo "<script>window.open('thanks.php','_self')</script>";
			}
		}
	}	

}
?>