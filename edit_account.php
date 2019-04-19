<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php

include("includes/db.php");
//include("functions/functions.php");
?>
<html>
<head>
<title>Online Book Store | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
 <script type="text/javascript" language="javascript">
		function validate()
		{
			//First Name Validation
			var fn=document.getElementById('fname').value;
		
			if(fn=="")
			{
				document.getElementById('msg1').innerHTML="Please Enter First Name";
				return false;
			}
			if (!/^[a-zA-Z]*$/g.test(document.fn.fn1.value)) 
			{
				//alert("Invalid characters");
				document.getElementById('msg1').innerHTML="Please enter alfabetic value Only";
				return false;
			}
			else
			{
				document.getElementById('msg1').innerHTML="";
			}
			
		//Last Name Validation
		
			var ln=document.getElementById('lname').value;
			
			if(ln=="")
			{
				document.getElementById('msg2').innerHTML="Please Enter last Name";
				return false;
			}
			if (!/^[a-zA-Z]*$/g.test(document.fn.fn2.value)) 
			{
				//alert("Invalid characters");
				document.getElementById('msg2').innerHTML="Please enter alfabetic value Only";
				return false;
			}
			else
			{
				document.getElementById('msg2').innerHTML="";
			}
		
		//IMG Validation
		
			var img=document.getElementById('img').value;
			if(img=="")
			{
				//alert("Please Enter Product Title");
				document.getElementById('msg3').innerHTML="Please choose img";
				return false;
			}
			else
			{
				document.getElementById('msg3').innerHTML="";
			}
		
		//Select Date Validation
		
			var valueDate = document.getElementById('Date').value;
			if ( valueDate== null || valueDate== '')
			{
				/*alert('Date is empty');*/
				document.getElementById('msg4').innerHTML="Date is empty";
				return false;
			}
			else
			{
				document.getElementById('msg4').innerHTML="";
			}
			
		//Address Validation
		
			var add=document.getElementById('add').value;
			
			if(add=="")
			{
				document.getElementById('msg5').innerHTML="Please Enter Address";
				return false;
			}
			else
			{
				document.getElementById('msg5').innerHTML="";
			}
		//Select City Validation
		
		
			if(document.fn.c_city.selectedIndex=="")
			{
				//alert ( "Please select Category!");
				document.getElementById('msg6').innerHTML="Please Select City";
				return false;
			}
			else
			{
				document.getElementById('msg6').innerHTML="";
			}
		
		//Select State Validation
		
			if(document.fn.c_state.selectedIndex=="")
			{
				//alert ( "Please select Category!");
				document.getElementById('msg7').innerHTML="Please Select State";
				return false;
			}
			else
			{
				document.getElementById('msg7').innerHTML="";
			}
		
		//Zip Validation
		
			var zip = document.getElementById('zip').value;
			if(zip=="")
			{
				document.getElementById('msg8').innerHTML="Please enter Zip code";
				return false;
			}
			else if(!Number(zip))
			{
				document.getElementById('msg8').innerHTML="Please Enter Numeric value only";
				return false;	
			}
			else
			{
				document.getElementById('msg8').innerHTML="";
			}
		
		//Mobile Validation
		
			 var mon = document.getElementById('mn')
			 
			 if(mon.value=="")
			 {
				/*alert("You didn't enter a phone number.");*/
				  document.getElementById('msg9').innerHTML="You didn't enter a Mobile number.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else if(isNaN(mon.value))
			 {
				/*alert("The phone number contains illegal characters.");*/
				document.getElementById('msg9').innerHTML="The Mobile number contains illegal characters.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else if(!(mon.value.length == 10))
			 {
				 /*alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");*/
				 document.getElementById('msg9').innerHTML="The Mobile number is the wrong length. \nPlease enter 10 digit mobile no.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else
			 {
				document.getElementById('msg9').innerHTML="";
			 }
		
			//Phone Validation
			   
			   var x = document.getElementById('pn').value;
				if(x=="")
				{
					document.getElementById('msg10').innerHTML="";
				}
				else if(!Number(x))
				{
					document.getElementById('msg10').innerHTML="Please Enter Numeric value only";
					return false;	
				}
				else
				{
					document.getElementById('msg10').innerHTML="";
				}
			   
			   /* var x = document.fn.pn.value;
        		if(isNaN(x)|| x.indexOf(" ")!=-1)
				{
              		alert("Enter numeric value");
					document.getElementById('msg10').innerHTML="Enter numeric value";
					return false; 
				}
        		if (x.length > 10 || x.length > 8 )
				{
                	alert("enter 10 or 8 characters"); 
					document.getElementById('msg10').innerHTML="enter 10 or 8 characters";
					return false;
           		}
        		if (x.charAt(0)!="9" || x.charAt(0)!="2")
				{
					alert("it should start with 9 or 2 ");
					document.getElementById('msg10').innerHTML="it should start with 9 or 2";
					return false;
           		}*/
				
			//Gender Validation
				/*var group = document.fn.c_gender;
				for (var i=0; i<group.length; i++) 
				{
					if (group[i].checked)
					break;
				}
				if (i==group.length)
				{
					document.getElementById('msg11').innerHTML="Please Select Gender Male or Female";
					return false;
				}
				else
				{
					document.getElementById('msg11').innerHTML="";
				}*/
			//Email Validation
		
		
					var x=document.getElementById('email').value;
		
					var atpos=x.indexOf("@");
		
					var dotpos=x.lastIndexOf(".");
		
					if (x=="")
			
					{
						/*alert("Not a valid e-mail address");*/
						document.getElementById('msg12').innerHTML="Plese enter Email ID";
						return false;
					}
					
					else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
					{
						document.getElementById('msg12').innerHTML="Not a valid e-mail address";
						return false;
					}
					else
					{
						document.getElementById('msg12').innerHTML="";
					}
			
			
			//Passored & Confirm Password
				if(document.fn.txtPassword.value == "")
				{
					/*alert('Please input Password');
					document.fn.txtPassword.focus();*/	
					document.getElementById('msg13').innerHTML="Please input Password";	
					return false;
				}	
				else
				{
					document.getElementById('msg13').innerHTML="";	
				}
				if(document.fn.txtConPassword.value == "")
				{
					/*alert('Please input Confirm Password');
					document.fn.txtConPassword.focus();		*/
					document.getElementById('msg14').innerHTML="Please input Confirm Password";
					return false;
				}	
				else
				{
					document.getElementById('msg14').innerHTML="";	
				}
				if(document.fn.txtPassword.value != document.fn.txtConPassword.value)
				{
					/*alert('Confirm Password Not Match');
					document.fn.txtConPassword.focus();	*/	
					document.getElementById('msg14').innerHTML="Password is Not Match";
					return false;
				}
		}
 </script>


<script type="text/javascript" language="javascript">
	 	function exiting()
	{
			//Email Validation
		
		
			var x=document.getElementById('em1').value;

   			var atpos=x.indexOf("@");

   			var dotpos=x.lastIndexOf(".");

			if (x=="")
	
			{
				/*alert("Not a valid e-mail address");*/
				document.getElementById('e1').innerHTML="Plese enter Email ID";
				return false;
			}
			
			else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
				document.getElementById('e1').innerHTML="Not a valid e-mail address";
				return false;
			}
			else
			{
				document.getElementById('e1').innerHTML="";
			}
			
			
			//Password validation
			
			if(document.fn1.pwd.value == "")
			{
				document.getElementById('pwd1').innerHTML="Please input Password";	
				return false;
			}	
			else
			{
				document.getElementById('pwd1').innerHTML="";	
			}
	}
 </script>  
 <script>
function myFunction() {
  //  alert("click");
        
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
			
			xmlhttp=new XMLHttpRequest();
			//alert(xmlhttp);
			
	}
	else
	{ //for only ie5 and ie6
			xmlhttp=new ActiveXobject('Microsoft.XMLHTTP');
	}
	var x = document.getElementById("slct1").value;
        
	
	
	xmlhttp.open('POST','fetch.php?uname='+x,true);
	
	xmlhttp.onreadystatechange=function()
  {
	 
 	 if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	
		//alert(xmlhttp.responseText);
		document.getElementById("slct2").innerHTML=xmlhttp.responseText;
	
    }
}
	xmlhttp.send();
   /* var x = document.getElementById("mySelect").value;
    document.getElementById("txt").value = "You selected: " + x;*/
}

</script>

</head>
<body>

			 <div class="registration_form">
			 <!-- Form -->
           <?php
	
			if(isset($_GET['edit_account']))
			{	
             $user = $_SESSION['Cus_email'];
			
			$get_cst = "select * from customer_registration where Cus_email='$user'";
			
			$run_cst = mysqli_query($con,$get_cst);
			
			$i=0;
			
			$row_cst = mysqli_fetch_array($run_cst);
			$cid  =	$row_cst['Cus_id'];
			$fname = $row_cst['Cus_fname'];
			$lname = $row_cst['Cus_lname'];
			$gender = $row_cst['Cus_gender'];
			$dob = $row_cst['Cus_dob'];
			$img = $row_cst['Cus_image'];
			$add = $row_cst['Cus_Address'];
			$pin = $row_cst['Cus_pincode'];
			$city = $row_cst['City_id'];
			$state = $row_cst['State_id'];
			$mono = $row_cst['Cus_mono'];
			$phone = $row_cst['Cus_phone'];
			$email = $row_cst['Cus_email'];
			$pass = $row_cst['Cus_password'];
			//city
			$get_cst= "select * from city_mst where City_id='$city'";
			$run_cst=mysqli_query($con, $get_cst);
			$row_cst= mysqli_fetch_array($run_cst);
			$city_name = $row_cst['City_name'];
			//state
			$get_st= "select * from state_mst where State_id='$state'";
			$run_st=mysqli_query($con, $get_st);
			$row_st= mysqli_fetch_array($run_st);
			$state_name = $row_st['State_name'];							
												
			 }           
			?>
	
		<form id="registration_form" action="" method="post" enctype="multipart/form-data" name="fn" style="margin-left:120px;">
					<table align="center">
                    <div>
						<label>
							<input placeholder="First name" type="text" tabindex="1" id="Fname" name="fn1" value="<?php echo $fname; ?>" style="width:500;">
                            <span id="msg1" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
					<div>
						<label>
				<input placeholder="Last name" type="text" tabindex="2" id="Lname" name="fn2" value="<?php echo $lname; ?>" style="width:500;">
                            <span id="msg2" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
                    <div>
                    
                        	<input type="file" name="c_images" id="img" tabindex="3"><img src="customer_images/<?php echo $img; ?>" width="70" height="70" >
                            <span id="msg3" style="color:red; font-weight:bold;"></span>
                        
                    </div>
                    <div>
                    	<label>
                        	<input type="date" tabindex="4" id="Date" name="c_dob" value="<?php  echo $dob;?>">
                            <span id="msg4" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                   <div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="c_gender" value="male" tabindex="5"><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="c_gender" value="female" tabindex="6"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
                    <div>
                    	<label>
  <textarea name="c_add" cols="50" rows="5" placeholder="Write Address Here....."  id="add" tabindex="7" ><?php echo  $add; ?></textarea>
                         <span id="msg5" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                    <div>
                    	<label>
                        	State: <select name="c_state" id="slct1" tabindex="8" onChange="myFunction();" >
                            	<option> <?php echo $state_name; ?> </option>
                                <?php
								$get_state = " Select * from state_mst ";
								$run_state = mysqli_query($con,$get_state);
								while ($row_state=mysqli_fetch_array($run_state))
							{
								$State_id = $row_state['State_id'];
								$State_name = $row_state['State_name'];
								 echo "<option value ='$State_id'> $State_name </option>";
							}
								?>                            
                                </select>
                            <span id="msg7" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                     <div>
                    	<label>
                        	City:&nbsp;&nbsp;&nbsp; <select name="c_city" tabindex="9" id="slct2" >
                            	<option > <?php echo $city_name; ?> </option>
                            	<?php
								/*$get_city = "Select * from city_mst";
								$run_city = mysqli_query($con,$get_city);
								while ($row_city=mysqli_fetch_array($run_city))
							{
								$City_id  = $row_city['City_id'];
								$City_name= $row_city['City_name'];
								 echo "<option value='$City_id'>$City_name</option>";
							}*/
								?>
                            </select>
                            <span id="msg6" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
					<div>
						<label>
							<input placeholder="Zip Code" type="text" tabindex="9" id="zip" name="c_pincode" value="<?php echo $pin;?>" style="width:500;">
                            <span id="msg8" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Mobile Number" type="text" tabindex="10" id="mn" name="c_mono" value="<?php echo $mono;?>" style="width:500;">
                            <span id="msg9" style="color:red; font-weight:bold;"></span>
						</label>
					</div>	
                    <div>
						<label>
							<input placeholder="Phone Number" type="text" tabindex="11" id="pn" name="c_phoneno" value="<?php echo $phone;?>" style="width:500;">
                            <span id="msg10" style="color:red; font-weight:bold;"></span>
						</label>
					</div>					
					
                    <div>
						<label>
							<input placeholder="Email Address" type="text" tabindex="12" name="c_email" id="email" value="<?php echo $email;?>" style="width:500;">
                            <span id="msg12" style="color:red; font-weight:bold;"></span>
						</label>
					</div>						
					<!--<div>
						<label>
							<input placeholder="password" type="password" tabindex="13" name="c_pass"id="txtPassword" maxlength="10">
                            <span id="msg13" style="color:red; font-weight:bold;"></span>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="retype password" type="password" tabindex="14" id="txtConPassword" maxlength="10">
                            <span id="msg14" style="color:red; font-weight:bold;"></span>
						</label>
					</div>	-->
                 
	
					<div>
			<input type="submit" value="Update Account" id="register-submit" onClick="return(validate());" name="update" tabindex="15">
         
					</div>
</table>                    
</form>
<?php

if(isset($_POST['update']))
{
			$c_id = $cid;
			$fname = $_POST['fn1'];
			$lname = $_POST['fn2'];
			$gender = $_POST['c_gender'];
			$dob = $_POST['c_dob'];
			$add = $_POST['c_add'];
			$pin = $_POST['c_pincode'];
			$city = $_POST['c_city'];
			$state = $_POST['c_state'];
			$mono = $_POST['c_mono'];
			$phone = $_POST['c_phoneno'];
			$email = $_POST['c_email'];
			
			$image=	$_FILES['c_images']['name'];
			$image_tmp=$_FILES['c_images']['tmp_name'];
			
			move_uploaded_file($image_tmp,"customer_images/$image");
			
			
			echo $update_c ="update customer_registration set Cus_fname='$fname',Cus_lname='$lname',Cus_gender='$gender',Cus_dob='$dob',Cus_image='$image', Cus_Address='$add',Cus_pincode='$pin',City_id='$city',	State_id='$state',Cus_mono='$mono',Cus_phone='$phone',Cus_email='$email' where Cus_id='$c_id'";
			
	$run_update = mysqli_query($con, $update_c);
			
			if($run_update)
			{
				echo "<script>alert('Your account successfully Updeted')</script>";
				echo "<script>window.open('my_account.php','_self')</script>";
			}

}
?>

	