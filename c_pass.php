<form action="" method="post" enctype="multipart/form-data">
		
    	<div align="center">
            <b>Enter Current Password:</b>
            <input type="password" name="opass" style="margin-left:35px;" placeholder="Enter Current Password" size="30"><br /><br />   	
        
            <b>Enter New Password:</b>
            <input type="password" name="npass" style="margin-left:58px;"  placeholder="Enter New Password" size="30" maxlength="10"/>
            <br /><br />
            
            <b>Enter New Password Again:</b>
            <input type="password" name="cpass" style="margin-left:10px;"  placeholder="Enter New Password Again" size="30" maxlength="10"/>
            <br /><br />
        
            <input type="submit" name="change_pass" value="Change Password" style="margin-left:110px;" />
   </div>
</form>
<?php
include(includes/db.php);
if(!isset($_SESSION['Cus_id']))
{
	header ("location:login.php");

}
if($_POST)
{
	$cus_id=$_SESSION['Cus_id'];
	$oldq=mysql_query("select * Cus_password from customer_registration where Cus_id='{$cus_id}' ")or die(mysql_error());
	$old=mysql_fetch_row($oldq);
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	if($opass[0]==$opass)
	{
		if($npass==$cpass)
		{
			if($npass==$opass)
			{
				echo "new password do not match";
			}
			else
			{
				mysql_query("update custmoer_registration set Cus_password='{$npass}' where Cus_id='{$cus_id}' ")or die(mysql_error());
				echo "password change";
				
			}
			}
		else
			{
				echo "confirm pass not match";
			}
			}
			else
			{
			
					echo"all password not match";
			}
		
	
}

?>