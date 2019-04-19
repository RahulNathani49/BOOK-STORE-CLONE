<?php
include("includes/db.php");
	if(isset($_POST['register']))
	{
	 $c_name = $_POST['fn1'];
	 $c_lname = $_POST['fn2'];
	 $c_dob = $_POST['c_dob'];
	 $c_add = $_POST['c_add'];
	 $c_city = $_POST['c_city'];
	 $c_state = $_POST['c_state'];
	 $c_pincode = $_POST['c_pincode'];
	 $c_gender = $_POST['c_gender'];
	 $c_mono = $_POST['c_mono'];
	 $c_phoneno = $_POST['c_phoneno'];
	 $c_email = $_POST['c_email'];
	 $c_pass	= $_POST['c_pass'];	
	 $c_images = $_FILES["c_images"]["name"];
	 $c_images_tmp = $_FILES["c_images"]["tmp_name"];
	move_uploaded_file($c_images_tmp,"customer_images/$c_images");
	
	 
	 $insert_c = "INSERT  INTO customer_registration(Cus_fname,Cus_lname,Cus_gender,Cus_dob,Cus_image,Cus_Address,Cus_pincode,City_id,State_id,Cus_mono,Cus_phone,Cus_email,Cus_password) values ('$c_name','$c_lname','$c_gender','$c_dob','$c_images','$c_add','$c_pincode','$c_city','$c_state','$c_mono','$c_phoneno','$c_email','$c_pass')";
$result = mysqli_query($con,$insert_c);
		 
		if ($result)
			{
				echo "<script> alert ('You Have Successfully Register!Thanks') </script> ";
				echo "<script> window.open('login.php','_self') </script>";
			}
}	


?>