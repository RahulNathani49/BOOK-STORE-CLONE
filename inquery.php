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
<title>Online Book Store | Inquiry :: w3layouts</title>
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
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>

</head>
<body>
<!-- header -->
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#"><b>help</b></a></li>|
					<li><a href="contact.php"><b>Contact</b></a></li>|
					<li><a href="feedback.php"><b>Feedback</b></a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link"><b>Email:</b><a href="mailto@example.com"><b>onlinebookstore@gmail.com</b></a></li>|
					<li class="top_link"><a href="checklogin.php"><b>My Account</b></a></li>|					
				</ul>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/" target="_blank"><i class="facebook"></i></a></li>
						<li><a href="https://twitter.com/login?lang=en" target="_blank"><i class="twitter"></i></a></li>
						<li><a href="https://dribbble.com/session/new" target="_blank"><i class="dribble"></i></a></li>	
						<li><a href="https://plus.google.com/" target="_blank"	><i class="google"></i></a></li>										
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

		 <div class="header_right">	
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
			 </div>		 </div>
</div><br>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec" style="padding:15px 0;">
		 <!-- start header menu -->
		<ul class="megamenu skyblue">
			 <li><a class="color1" href="index.php">Home</a></li>
             <li><a class="color8" href="profile.php">Profile</a>
			<?php /*?> <li class="grid"><a class="color2" href="#">Product</a><?php */?>
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
				<li class="active grid"><a class="color6" href="inquery.php">Inquiry</a></li>				
				<li><a class="color7" href="contact.php">Contact Us</a></li>					
			</ul> 

			   <div class="search">
				 
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="contact">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Inquiry</li>
		 </ol>
		 <div class="contact-head">
		 	 <h2>Inquiry</h2>
			  		<div class="content">
	 					<div class="container">
		 					<div class="slider">
								<ul class="rslides" id="slider1">
                                  <li><img src="images/imgs/inquiry-banner.jpg" alt=""></li>
                                </ul>
		 					</div>
	 					</div>
					</div>
   		   <div>
           <script type="text/javascript" language="javascript">
				function facility()
				{
					//Company Validation
					
					var cn=document.getElementById('cn').value;
					
						if(cn=="")
						{
							document.getElementById('msg1').innerHTML="Please Enter Company Name";
							return false;
						}
						if (!/^[a-zA-Z]*$/g.test(document.fn.cn1.value)) 
						{
							//alert("Invalid characters");
							document.getElementById('msg1').innerHTML="Please enter alfabetic value Only";
							return false;
						}
						else
						{
							document.getElementById('msg1').innerHTML="";
						}
						
						//Address Validation
					
					var add=document.getElementById('add').value;
					
						if(add=="")
						{
							document.getElementById('msg2').innerHTML="Please Enter Company Name";
							return false;
						}
						
						else
						{
							document.getElementById('msg2').innerHTML="";
						}
						
				//Country Validation
					
					var cou=document.getElementById('cou').value;
					
						if(cou=="")
						{
							document.getElementById('msg3').innerHTML="Please Enter Country Name";
							return false;
						}
						if (!/^[a-zA-Z]*$/g.test(document.fn.cou1.value)) 
						{
							//alert("Invalid characters");
							document.getElementById('msg3').innerHTML="Please enter alfabetic value Only";
							return false;
						}
						else
						{
							document.getElementById('msg3').innerHTML="";
						}
						
				//Email Validation
		
		
					var x=document.getElementById('email').value;
		
					var atpos=x.indexOf("@");
		
					var dotpos=x.lastIndexOf(".");
		
					if (x=="")
			
					{
						/*alert("Not a valid e-mail address");*/
						document.getElementById('msg4').innerHTML="Plese enter Email ID";
						return false;
					}
					
					else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
					{
						document.getElementById('msg4').innerHTML="Please enter '@' or '.com' sign";
						return false;
					}
					else
					{
						document.getElementById('msg4').innerHTML="";
					}
					
				//Person Validation
					
					var fn=document.getElementById('fn').value;
					
						if(fn=="")
						{
							document.getElementById('msg5').innerHTML="Please Enter Person Name";
							return false;
						}
						if (!/^[a-zA-Z]*$/g.test(document.fn.fn1.value)) 
						{
							//alert("Invalid characters");
							document.getElementById('msg5').innerHTML="Please enter alfabetic value Only";
							return false;
						}
						else
						{
							document.getElementById('msg5').innerHTML="";
						}
						
						
					//City Validation
					
					var city=document.getElementById('city').value;
					
						if(city=="")
						{
							document.getElementById('msg6').innerHTML="Please Enter City Name";
							return false;
						}
						if (!/^[a-zA-Z]*$/g.test(document.fn.city1.value)) 
						{
							//alert("Invalid characters");
							document.getElementById('msg6').innerHTML="Please enter alfabetic value Only";
							return false;
						}
						else
						{
							document.getElementById('msg6').innerHTML="";
						}
						
					//Mobile Validation
				
					 var mon = document.getElementById('mn')
					 
					 if(mon.value=="")
					 {
						/*alert("You didn't enter a phone number.");*/
						  document.getElementById('msg7').innerHTML="You didn't enter a Mobile number.";
						  mon.value = "";
						  mon.focus();
						  return false;
					 }
					 else if(isNaN(mon.value))
					 {
						/*alert("The phone number contains illegal characters.");*/
						document.getElementById('msg7').innerHTML="The Mobile number contains illegal characters.";
						  mon.value = "";
						  mon.focus();
						  return false;
					 }
					 else if(!(mon.value.length == 10))
					 {
						 /*alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");*/
						 document.getElementById('msg7').innerHTML="The Mobile number is the wrong length. \nPlease enter 10 digit mobile no.";
						  mon.value = "";
						  mon.focus();
						  return false;
					 }
					 else
					 {
						document.getElementById('msg7').innerHTML="";
					 }		
					
				//Insert Message Validation
					
					var msg=document.getElementById('skpatel').value;
					
						if(msg=="")
						{
							document.getElementById('msg8').innerHTML="Please Enter Inquiry Message";
							return false;
						}
						else
						{
							document.getElementById('msg8').innerHTML="";
						}
				}
			</script>
           	 <h2>Inquiry</h2>
             <span class="style1">
          	        <marquee style="font-size:10px;"><b>Please Fillup This Form For Inquiry</b></marquee>     
                    <div>
                             <form name="fn">
				  				<div class="col-md-6 contact-left">
                                    <input type="text" placeholder="Company Name" id="cn" name="cn1">
                                    	<span id="msg1" style="color:red; font-weight:bold;"></span>
                                    </input>
                                    
                            <textarea name="textarea"  cols="66" placeholder="Write Address here..." id="add" ></textarea>
                            	<span id="msg2" style="color:red; font-weight:bold;"></span>
                            <br><br>
                                    
                                    <input type="text" placeholder="Country" id="cou" name="cou1"/>
                                    <span id="msg3" style="color:red; font-weight:bold;"></span>
                                    
                                    <input type="text" placeholder="Email" id="email"/>
                                    <span id="msg4" style="color:red; font-weight:bold;"></span>
                                    
                                 </div>
                                 <div class="col-md-6 contact-right">
                                         <input type="text" placeholder="Person Name" name="fn1" id="fn" />
                                         <span id="msg5" style="color:red; font-weight:bold;"></span>
                                         
                                         <input type="text" placeholder="City" name="city1" id="city"/>
                                         <span id="msg6" style="color:red; font-weight:bold;"></span>
                                         
                                         <input type="text" placeholder="Mobile Number" id="mn" />
                        				 <span id="msg7" style="color:red; font-weight:bold;"></span>
                                			
                                <textarea name="textarea"  cols="66" placeholder="Write Interest Field  here..."  id="skpatel" ></textarea>
                                <span id="msg8" style="color:red; font-weight:bold;"></span>
                                <br><br>
                        				
                                         <input type="submit" value="SEND"  onClick="return(facility());"/>
                                         
                                 </div>
                                 <div class="clearfix"></div>
						 </form>
                    </div>     
             </span>
		 </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">				 
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>Ahmedabad</h4>
							 <p>330,Shree Krushna Ind.,S.P.Ring Road,</p>
                             <p>Opp.Palm Hotel,Odhav,</p>
                             <p>Ahmedabad-382415</p>
							 <p>Mo. +91- 7574805090</p>
							 <p>Mail: <a href="mailto:info@example.com">onlinebookstore@gmail.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>	
						 </div>
					 </li>				
				  </ul>	
			 </div>			 
		 </div>
		 <div class="contact-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> 
                 </iframe>
	     </div>
	 </div>
</div>
<!---->
<<div class="footer-content">
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
					<?php getCats();?>	 
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