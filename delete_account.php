
<html>
<head></head>
<body>
<br>
<h2 style="text-align:center;">Do you really want to DELETE your acccount?</h2>
</br>
<form action="" method="post" style="text-align:center;">


<input type="submit" name="yes" value="yes I want"   />
<input type="submit" name="no" value=" No " />

</form>

<?php

include("includes/db.php");
$user = $_SESSION['Cus_email'];

if( isset($_POST['yes']))
{
	session_destroy();
	

	//$delete_id = $_GET['delete_account'];
	$delete_c = "delete from customer_registration where Cus_email='$user'";
	
	$run_c = mysqli_query($con, $delete_c);
	
	echo "<script> alert ('We are really sorry, your account has been deleted!')</script>";
	echo "<script> window.open ('index.php','_self')</script>";
}

if(isset($_POST['no']))
{
	echo "<script>window.open('my_account.php','_self')</script>";
}

?>
</body>
</html>
