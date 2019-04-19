<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
session_start();
include('includes/db.php');
include("functions/functions.php");
?>
<html>
<head>
<title>Online Book Store | Feedback :: w3layouts</title>
<script type="text/javascript">
function validateEmail(email)
{
var reg = /^\w+([-+.']\ w+)*@\w+([-. ]\w+)*\.\w+([-. ]\w+)*$/
if (reg. test(email)){
return true; }
else{
return false; }
}
</script>
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
<script>
	function feedback()
	{
			//Email Validation
		
		
			var x=document.getElementById('em1').value;

   			var atpos=x.indexOf("@");

   			var dotpos=x.lastIndexOf(".");

			if (x=="")
	
			{
				/*alert("Not a valid e-mail address");*/
				document.getElementById('msg1').innerHTML="Plese enter Email ID";
				return false;
			}
			
			else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
				document.getElementById('msg1').innerHTML="Not a valid e-mail address";
				return false;
			}
			else
			{
				document.getElementById('msg1').innerHTML="";
			}
			//  feedback message validation
			var y=document.getElementById('msg').value
			if (y=="")
	
			{
				/*alert("Not a valid e-mail address");*/
				document.getElementById('msg2').innerHTML="Plese enter your feedback";
				return false;
			}
			else
			{
				document.getElementById('msg2').innerHTML="";
			}
			
		//	Mobile Validation
		<?php /*?>
			 var mon = document.getElementById('mn')
			 
			 if(mon.value=="")
			 {
				alert("You didn't enter a phone number.");
				  document.getElementById('msg2').innerHTML="You didn't enter a Mobile number.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else if(isNaN(mon.value))
			 {
				alert("The phone number contains illegal characters.");
				document.getElementById('msg2').innerHTML="The Mobile number contains illegal characters.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else if(!(mon.value.length == 10))
			 {
				 alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
				 document.getElementById('msg2').innerHTML="The Mobile number is the wrong length. \nPlease enter 10 digit mobile no.";
				  mon.value = "";
				  mon.focus();
				  return false;
			 }
			 else
			 {
				document.getElementById('msg2').innerHTML="";
			 }
			
			<?php */?>
		//Feedback Validation
		
		<?php /*?>	var add=document.getElementById('add').value;
			
			if(add=="")
			{
				document.getElementById('msg3').innerHTML="Please Enter Feedback";
				return false;
			}
			else
			{
				document.getElementById('msg3').innerHTML="";
			}<?php */?>
			
		//Experiance Our Website Validation
			var group = document.fn.radio;
			for (var i=0; i<group.length; i++) 
			{
				if (group[i].checked)
				break;
			}
			if (i==group.length)
			{
				/*alert("No radio button is checked");
				alert("Radio Button " + (i+1) + " is checked.");*/
				document.getElementById('msg4').innerHTML="No radio button is checked";
				return false;
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
					<li><a href="contact.php">Contact</a></li>
					<!--<li><a href="login.php">Track Order</a></li>-->
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto@example.com"> onlinebookstore@gmail.com</a></li>|
					<li class="top_link"> <a href="checklogin.php"><b>My Account</b></a>|					
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
        </div><br><br>
			  <?php 
		 		if(isset($_SESSION['Cus_email']))
				{
				
					echo "<b>welcome:</b>" . $_SESSION['Cus_email'];
				}
				else
				{
					echo "<b>Welcome Guest</b>";
				}
		 
		 
		 ?>
		 <div class="header_right">	
			 <div class="login">
				 <?php
		 			if(!isset($_SESSION['Cus_email']))
					{
					
						echo "<div class='login'>
				 <a href='login.php'><b>LOGIN</b></a>
			 		<span class='style1'></span>
              </div>";
					}
					else
					{
						echo "<div class='login'><a href='logout.php'><b>Logout<b></a><span class='style1'></span></div>";
					}
		 
		 ?>
            <script>
			  function empty()
			  {
			  	document.getElementById("empty").innerHTML="";
			  }
			  </script>

			 </div>
			 <div class="cart box_1">
				<a href="cart.php">
					<h3>
                     <span id="empty" ><?php total_price();?> 
                         (<!--<span id="simpleCart_quantity" class="simpleCart_quantity">--><?php totle_items();?><!--</span>-->items)</span>
                         <img src="images/bag.png" alt="">
                    </h3>
				</a>	
				<p><a href="javascript:empty()" class="simpleCart_empty">Empty cart</a></p>
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
			 <?php /*?><li class="grid"><a class="color2" href="#">Product</a><?php */?>
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
			   <?php /*?><div class="search">
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
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Feedback</li>
		 </ol>
		 <h2>Feedback</h2>
		 <div class="col-md-6 log">			 
				<!-- <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Lo
				   <input type="text" value="">
			     gin with us, <span>click here</span></p>-->
				 <form action="feedback.php" method="post" name="fn">
                 	<h5>Email id </h5>
                	<input type="text" value="" placeholder="Email Address" name="un" id="em1" tabindex="1">
                    <span id="msg1" style="color:red; font-weight:bold; font-size:12px;"></span>
                   	<br>
                    
                    <!--<tr>
                    	<td>
                        	<h5>Contact No</h5>
                            <input type="text" value="" placeholder="Mobile Number" name="cn" id="mn" tabindex="2"><br>
                    		<span id="msg2" style="color:red; font-weight:bold; font-size:12px;"></span>
                        </td>
                    </tr>           -->        
				   <h5>Feedback message</h5>	
                   <textarea name="msg" rows="5" cols="50" placeholder="Write Feedback here..." tabindex="3" id="msg"></textarea>
                   <span id="msg2" style="color:red; font-weight:bold; font-size:12px;"></span>
                   
                   
					 <br><br>
                     <h5> How to Grade Our Website </h5>
                     <tr>
            			<td> 
                        	<label class="radio left"><input type="radio" name="radio" value="excellent" tabindex="4"><l></i>Excellent</label>
                            <label class="radio left"><input type="radio" name="radio" value="Very Good" tabindex="5"><l></i>Very Good</label>
                			<label class="radio left"><input type="radio" name="radio" value="Good" tabindex="6"><l></i>Good</label>
                    		<label class="radio left"><input type="radio" name="radio" value="Poor" tabindex="7"><l></i>Poor</label>
                    		<label class="radio left"><input type="radio" name="radio" value="Very Poor" tabindex="8"><l></i>Very Poor</label>
                        </td>
                        <span id="msg4" style="color:red; font-weight:bold; font-size:12px;"></span>
             		</tr>
                    <br><br>
             <tr>
           	   <td><input type="submit" name="submit" value="Submit" onClick="return(feedback());" tabindex="9"></td>
             </tr>
                
           		
					 <!-- <a href="#">Forgot Password ?</a>-->
		   </form>	
             
       <?php
			if (isset ($_POST['submit']))
			{
				$c_email = $_POST['un'];
				$sel_user = "select * from customer_registration where Cus_email='$c_email'";
				$run_user = mysqli_query($con,$sel_user);
		
				$check_user = mysqli_num_rows($run_user);
		
					if(!$check_user)
					{	
						$_SESSION['Cus_email']=$c_email;			
						echo "<script>alert('Please enter correct Email Id')</script>";
					}
					
					if ($check_user==1)
					{	
						$Username= $_POST['un'];
						$Feedback_message= $_POST['msg'];
						$choose= $_POST['radio'];
						$sel_user = "select * from customer_registration where Cus_email='$c_email'";
					 	$sql = "INSERT INTO feedback_mst (Cus_email,Feedback_message,experience)VALUES('$Username','$Feedback_message','$choose')";
	
						$result = mysqli_query($con,$sql);
							if ($result)
							{
							
								echo "<script>alert('Feedback Has been Submitted Successfully!')</script> ";
							}
					}	
				}	
		   ?>			 
		 </div>
		  
          <div class="col-md-6 login-right">
			  	<!--<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="account.php">Create an Account</a>
-->		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!----><div class="footer-content">
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
