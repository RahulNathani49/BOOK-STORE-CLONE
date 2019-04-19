
<h2 style="text-align:center;">Change Your Password</h2>
<br>
<form action="" method="post" >
		
    	<div align="center">
            <b>Enter Current Password:</b>
            <input type="password"  id="txtPassword"name="current_pass" style="margin-left:35px;" placeholder="Enter Current Password" size="30" ><br /><br />   	
        
            <b>Enter New Password:</b>
            <input type="password" name="new_pass" style="margin-left:58px;" id="txtPassword" placeholder="Enter New Password" size="30" maxlength="6"/>
            <span id="msg1" style="color:red; font-weight:bold;"></span>
            <br /><br />
            
            <b>Enter New Password Again:</b>
         <input type="password" name="new_pass_again" style="margin-left:10px;"  id="txtConPassword" placeholder="Enter New Password Again" size="30" maxlength="6"/>
            <span id="msg2" style="color:red; font-weight:bold;"></span>
            <br /><br />
        
            <input type="submit" name="change_pass" value="Change Password" style="margin-left:110px;" onclick="return(validate());" />
   </div>
</form>
<?php

include("includes/db.php");

	if(isset($_POST['change_pass']))
	{
	
		$user = $_SESSION['Cus_email'];
		
	
		$current_pass = $_POST['current_pass'];
		$new_pass = $_POST['new_pass'];
		$new_again = $_POST['new_pass_again'];
				
		$sel_pass = "select * from customer_registration where Cus_password='$current_pass'";
		$run_pass = mysqli_query($con,$sel_pass);
		
		$check_pass = mysqli_num_rows($run_pass);
		
		if($check_pass==0)
		{
			echo "<script>alert('Enter The Current Password !')</script>";
			exit();		
		}
		else
		{
							
				$update_pass = "update customer_registration set Cus_password='$new_pass' where Cus_email='$user'";
				//echo $update_pass;
			
			$run_update = mysqli_query($con, $update_pass);
			
			echo "<script>alert('Your Password was Updated Successfully!')</script>";
			echo "<script>window.open('my_account.php','_self')</script>";
					
		}
		
	}

?>
