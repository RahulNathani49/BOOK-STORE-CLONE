<?php /*?><?php
	include("includes/db.php");
	$uid=$_POST['Cus_email'];
	$pass=$_POST['Cus_password'];
	$check= "select * from customer_registration where Cus_email='$user' and Cus_password='$pass'";
	$run = mysqli_query($con,$check);
	//$row= mysqli_fetch_array($run);
	if($run==1)
	{
		session_start();
		header("location:my_account.php");
	}
	else
	{
		header("location:login.php");
	}
?><?php */?>
 <?php
 	include("includes/db.php");
	session_start();
		 			if(!isset($_SESSION['Cus_email']))
					{
					
						header("location:login.php");
					}
					else
					{
						header("location:my_account.php");
					}
		 
		 ?>