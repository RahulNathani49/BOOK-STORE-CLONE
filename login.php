<?php	
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Online Book Store | Login :: w3layouts</title>
<script type="text/javascript">
	 	function customer()
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
			
			
			//Password validation
			
			if(document.fn.password.value == "")
			{
				document.getElementById('msg2').innerHTML="Please input Password";	
				return false;
			}	
			else
			{
				document.getElementById('msg2').innerHTML="";	
			}
	}
/*
function validateEmail(email)
{
var reg = /^\w+([-+.']\ w+)*@\w+([-. ]\w+)*\.\w+([-. ]\w+)*$/
if (reg. test(email)){
return true; }
else{
return false; }
}
*/</script>
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
					<li class="top_link">Email:<a href="mailto@example.com"> onlinebookstore@gmail.com</a></li>|
					<li class="top_link"><a href="checklogin.php">My Account</a></li>|					
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
<br><br>
		 <?php /*?><div class="header_right">	
			 <div class="login">
				 <a href="login.php">LOGIN</a>
			 </div><?php */?>
             <?php /*?><script>
			  function empty()
			  {
			  	document.getElementById("empty").innerHTML="";
			  }
			  </script>
              
			<div class="cart box_1" >
            		<?php cart();?>
                <a href="cart.php">
						<h3>
                    	 <span id="empty" ><?php total_price();?> 
                         (<!--<span id="simpleCart_quantity" class="simpleCart_quantity">--><?php totle_items();?><!--</span>-->items)</span>
                         <img src="images/bag.png" alt="">
                    </h3>
				</a>	
				<p><a href="javascript:empty()">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>	
<?php */?>         
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
			  <?php /*?> <div class="search">
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
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form method="post"  action="login.php" enctype="multipart/form-data" name="fn">
					 <h5>Email id:</h5>	
					 <input type="text" placeholder="Email Id" value="" name="email"  id="em1">
                    <span id="msg1" style="color:red; font-weight:bold;"></span>
		
        			 <h5>Password:</h5>
					 <input type="password" placeholder="Password" value="" name="password" maxlength="10">		
                    	<span id="msg2" style="color:red; font-weight:bold;"></span>		
		
        			 <input type="submit"  value="Login" name="login" onClick="return(customer());">
					  <a href="#">Forgot Password ?</a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="account.php">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
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


</body>
</html>
<?php

	if(isset($_POST['login']))
	{
		$c_email = $_POST['email'];
		$c_pass = $_POST['password'];
		
		$sel_user = "select * from customer_registration where  Cus_password='$c_pass'  AND Cus_email='$c_email' ";
		
		$run_user = mysqli_query($con,$sel_user);
	 
		$check_user = mysqli_num_rows($run_user);
		if($check_user==0)
		{
			echo "<script>alert('Password or Eamil is wrong, try again!')</script>";	
		}
		$ip= getIp();
		$sel_cart = "select *from cart where C_id='$ip'";
		$run_cart = mysqli_query($con, $sel_cart);
		$check_cart =mysqli_num_rows($run_cart);
		
		if($check_user>0)
		{
			$_SESSION['Cus_email']=$c_email;
		
				echo "<script>alert ('you have successfully loggedin')</script>";				
				echo "<script>window.open('my_account.php','_self') </script>";	
							
			
		}
		elseif($check_user>0)
		{
			$_SESSION['Cus_email']=$c_email;
			$_SESSION['Cus_id']=$id;
				echo "<script>alert ('you have successfully loggedin')</script>";				
				echo "<script>window.open('checkout.php','_self') </script>";			
		} 
	}

?>