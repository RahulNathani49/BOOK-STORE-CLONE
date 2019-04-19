	<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
session_start();
 include("functions/functions.php");
include("includes/db.php");

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
		function populate(s1,s2)
		{
			var s1=document.getElementById(s1);
			var s2=document.getElementById(s2);
			s2.innerHTML =""
			if(s1.value=="")
			{
				var optionArray =["|",""]
			}
		
		}
		  
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
</head>
<body>
<!-- header -->
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.php">Contact</a></li>|
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto@example.com">info(at)Mobilya.com</a></li>|
					<li class="top_link"><a href="login.php">My Account</a></li>|					
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
			 <div class="logo" style="padding:0 20px;">
		 		<a href="index.php"><img src="images/imgs/bookstorenew.jpg" style="width:150px;height:150px;" /></a>			 
		 </div>
         <div>
         	<h3 style="padding:20px;">ONLINE BOOK STORE</h3> 
        </div>
	<?php /*?>	 <div class="header_right">	
			 <div class="login">
				 <a href="login.php">LOGIN</a>
			 </div>
			 <div class="cart box_1">
				<a href="cart.php">
					<h3> <span class="simpleCart_total">Rs0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p><?php */?>
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec" style="padding:20px;">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.php">Home</a></li>
             <li><a class="color8" href="profile.php">Profile</a>
			 <li class="grid"><a class="color2" href="#">Product</a>
				<div class="megapanel">
					<div class="row">
						<!--<div class="col1">
							<div class="h_nav">
								<h4><b>Hydraulic Cylinders</b></h4>
								<ul>
									<li><a href="products.php">All Sofas</a></li>
									<li><a href="products.php">Fabric Sofas</a></li>
									<li><a href="products.php">Leather Sofas</a></li>
									<li><a href="products.php">L-shaped Sofas</a></li>
									<li><a href="products.php">Love Seats</a></li>									
									<li><a href="products.php">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div> -->
						<div class="col1">
							<div class="h_nav">
								<h4><b>Excavator Hydraulic Cylinder</b></h4>
								<ul>
									<li><a href="products.php"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><b>Loader Hydraulic Cylinder</b></h4>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><b>Dumper Hydraulic Cylinder</b></h4>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><b>Dozer Hydraulic Cylinder</b></h4>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>	
							</div>
						</div>
					</div>
                    
                	<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				</li>			 
				<li><a class="color5" href="facilities.php">facilities</a></li>
				<li><a class="color6" href="inquery.php">Inquiry</a></li>				
				<li><a class="color7" href="contact.php">Contact Us</a></li>				
			</ul> 	
		  </ul> 
			 <?php /*?>  <div class="search">
				 <form>
					<input type="text" value="" placeholder="Search...">
					<input type="submit" value="">
					</form>
			 </div><?php */?>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="config.php" method="post" enctype="multipart/form-data" name="fn">
					<div>
						<label>
							<input placeholder="first name" type="text" tabindex="1" id="fname" name="fn1">
                            <span id="msg1" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="last name" type="text" tabindex="2" id="lname" name="fn2">
                            <span id="msg2" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
                    <div>
                    
                        	<input type="file" name="c_images" id="img" tabindex="3" value="image">
                            <span id="msg3" style="color:red; font-weight:bold;"></span>
                        
                    </div>
                    <div>
                    	<label>
                        	<input type="date" tabindex="4" id="Date" name="c_dob">
                            <span id="msg4" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                    <div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="c_gender"value="male" tabindex="5"><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="c_gender" value="female" tabindex="6"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
                    <div>
                    	<label>
                        <textarea name="c_add" cols="50" rows="5" placeholder="Write Address Here....." id="add" tabindex="7"></textarea>
                         <span id="msg5" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                    <div>
                    
                           <label>
                        	State: <select name="c_state" tabindex="8" id="slct1" onChange="myFunction();">
                            	<option value="Select State..." selected>Select State...</option>
                                <?php
								$get_state = "Select * from state_mst";
								$run_state = mysqli_query($con,$get_state);
								while ($row_state=mysqli_fetch_array($run_state))
							{
								$State_id = $row_state['State_id'];
								$State_name = $row_state['State_name'];
								 echo "<option value='$State_id'>$State_name</option>";
							}
								?>                         
                                  </select>
                            <span id="msg7" style="color:red; font-weight:bold;"></span>
                        </label>
                    </div>
                     <div>
                    	<label>
                        	City:&nbsp;&nbsp;&nbsp;<select name="c_city" tabindex="9" id="slct2" >
                            	<option value="Select City..." >Select City...</option>
                            	<?php
								/*$get_city = "Select * from city_mst";
								$run_city = mysqli_query($con,$get_city);
								while ($row_city = mysqli_fetch_array($run_city))
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
							<input placeholder="Zip Code" type="text" tabindex="9" id="zip" name="c_pincode" maxlength="6">
                            <span id="msg8" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Mobile Number" type="text" tabindex="10" id="mn" name="c_mono" maxlength="10">
                            <span id="msg9" style="color:red; font-weight:bold;"></span>
						</label>
					</div>	
                    <div>
						<label>
							<input placeholder="Phone Number" type="text" tabindex="11" id="pn" name="c_phoneno" maxlength="10">
                            <span id="msg10" style="color:red; font-weight:bold;"></span>
						</label>
					</div>					
					
                    <div>
						<label>
							<input placeholder="Email Address" type="text" tabindex="12" name="c_email" id="email">
                            <span id="msg12" style="color:red; font-weight:bold;"></span>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="13" name="c_pass"id="txtPassword" maxlength="6">
                            <span id="msg13" style="color:red; font-weight:bold;"></span>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="retype password" type="password" tabindex="14" id="txtConPassword" maxlength="6">
                            <span id="msg14" style="color:red; font-weight:bold;"></span>
						</label>
					</div>	
                   <?php /*?> <div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to mobilya.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div><?php */?>
	
					<div>
			<input type="submit" value="create an account" id="register-submit" onClick="return(validate());" name="register" tabindex="15" />
			<input type="reset" value="Reset" id="register-submit"  name="reset" tabindex="16"/>
            		</div>
                  
                  </form>
				<!-- /Form -->
			 </div>
		 </div>
		 <?php /*?><div class="registration_left">
			 <h2>existing user</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="login.php" method="post" name="fn1">
					<div>
						<label>
							<input placeholder="email" type="text" tabindex="16"  id="em1">
                            <span id="e1" style="color:red; font-weight:bold;"></span>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="17" maxlength="10" name="pwd">
                            <span id="pwd1" style="color:red; font-weight:bold;"></span>
						</label>
					</div>						
					<div>
						<input type="submit" value="sign in" id="register-submit"  onClick="return(exiting());" tabindex="18">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
<?php */?>		

 <div class="clearfix"></div>
	 </div>
</div>
<!-- end registration -->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="">Who We Are</a></li>
					 <li><a href="contact.php">Contact Us</a></li>
					<!-- <li><a href="#">Our Sites</a></li>-->
					 <!--<li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>				 
                     <li><a href="#">Carrers</a></li>-->					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="feedback.php">FAQ</a></li>
					 <!--<li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>-->
                    <!-- <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>-->					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="checklogin.php">Your Account</a></li>
					<!-- <li><a href="#">Personal Information</a></li>-->
					 <li><a href="contact.php">Addresses</a></li>
					 <!--<li><a href="#">Discount</a></li> -->
					<!-- <li><a href="#">Track your order</a></li>-->				 					 
				 </ul>
			 </div>

			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					<?php getCats(); ?>	  		 
				 </ul>
			 </div> 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="copywrite">
			 <p>Copyright © 2015. HES hydraulic cylinder All Rights Reserved | Design by :Sumit Patel , Akash Kadia , Jayesh  Khatik </p>
       </div>			 
		 </div>
	 </div>
</div>
<!---->
</body>
</html>
