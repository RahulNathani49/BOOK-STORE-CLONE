<?php
if(isset($_POST['update']))
{
			$c_id = $cid;
			$fname = $_POST['Cus_fname'];
			$lname = $_POST['Cus_lname'];
			$gender = $_POST['Cus_gender'];
			$dob = $_POST['Cus_dob'];
			$img = $_FILES['Cus_image']['name'];
			$img_tmp = $_FILES['Cus_image']['tmp_name'];
			$add = $_POST['Cus_Address'];
			$pin = $_POST['Cus_pincode'];
			$city = $_POST['City_id'];
			$state = $_POST['State_id'];
			$mono = $_POST['Cus_mono'];
			$phone = $_POST['Cus_phone'];
			$email = $_POST['Cus_email'];
			
			move_uploaded_file($img_tmp, "../customer_images/$img");
			
			
	
	echo $update_c ="update customer_registration set Cus_fname='$fname',Cus_lname='$lname',Cus_gender='$gender',Cus_dob='$dob',Cus_image='$img',Cus_Address='$add',Cus_pincode='$pin',City_id='$city',State_id='$state',Cus_mono='$mono',Cus_phone='$phone',Cus_email='$email' where Cus_id='$c_id'";
		 
		/*if ($result)
			{
				echo "<script> alert ('You Have Successfully Register!Thanks') </script> ";
				echo "<script> window.open('login.php','_self') </script>";
			}*/
}	


?>