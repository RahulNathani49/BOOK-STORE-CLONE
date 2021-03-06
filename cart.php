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
			<title>Online Book Store</title>
				<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
					<!-- jQuery (necessary JavaScript plugins) -->
					<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
						<!-- Custom Theme files -->
						<link href="css/style.css" rel='stylesheet' type='text/css' />
                        <!-- Custom Theme files -->
                        <!--//theme-style-->
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                            <meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates,	 							 Andriod Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, 		 							 SonyErricsson, Motorola web design" />
					<script type="application/x-javascript"> 
						addEventListener("load", function() 
						{ 
							setTimeout(hideURLbar, 0); 
						}, false); 
						function hideURLbar()
						{ 
							window.scrollTo(0,1); 
						}
                   </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>
	$(document).ready(function()
	{
		$(".megamenu").megamenu();
	});
</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () 
	{
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
					<li class="top_link"><b>Email:</b>
                    	<a href="mailto:someone@example.com?Subject=Hello%20again"><b>onlinebookstore@gmail.com</b></a>
                     </li>|
					<li class="top_link">
                    	<a href="checklogin.php"><b>My Account</b></a>
                    </li>|					
				</ul>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/" target="_blank"><i class="facebook"></i></a></li>
						<li><a href="https://twitter.com/login?lang=en" target="_blank" ><i class="twitter"></i></a></li>
						<li><a href="https://dribbble.com/session/new" target="_blank"><i class="dribble"></i></a></li>	
						<li><a href="https://plus.google.com/" target="_blank"><i class="google"></i></a></li>										
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
           <br>   <?php 
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
				 
			 		<span class="style1"></span>
              </div>
              
              <script>
			  function empty()
			  {
			  	document.getElementById("empty").innerHTML="";
			  }
			  </script>
              
			<div class="cart box_1">
            
            		<?php cart();?>
                <a href="cart.php">
					<h3>
                    	 <!--<span class="simpleCart_total">$0.00</span> --><span id="empty"><?php total_price();?>
                         (<!--<span id="simpleCart_quantity" class="simpleCart_quantity">--><?php totle_items();?><!--</span>-->items)</span>
                         <img src="images/bag.png" alt="">
                    </h3>
				</a>	
				<p><a href="javascript:empty()">Empty cart</a></p>
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
		 <div class="menu_sec"style="display:flex;align-items:center;">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.php">Home</a></li>
             <li><a class="color8" href="profile.php">Profile</a>
			<?php /*?> <li class="grid"><a class="color2" href="#">Product</a><?php */?>
				<div class="megapanel">
					<div class="row">
						<!--<div class="col1">
							<!--<div class="h_nav">
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
			   <div class="search">
				 <form style="margin:0;padding:10px 10px;">
					<input type="text" name="user_query" value="" placeholder="Search...">
					<input type="submit" name="search" value="" >
				</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
	    </div>
<!--<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/imgs/banner01.jpg" alt=""></li>
				  <li><img src="images/imgs/banner02.jpg" alt=""></li>
				  <li><img src="images/imgs/banner03.jpg" alt=""></li>
                  <li><img src="images/imgs/banner04.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>-->
	
<!---->

<!--<div class="bottom_content">
	 <div class="container">
		 <div class="sofas">
			 <div class="col-md-6 sofa-grid">
				
			  </div>
		 </div>
	 </div>
</div>
-->
<!---->
<div class="new">
	 <div class="container">
		<div class="new-products">
<!--			 <div class="item1">-->
					
					<form action="" method="post" enctype="multipart/form-data">
                    	<table align="center" width="700" bgcolor="skyblue"> 
                        <!--	<tr align="center">
                            	<td colspan="5"><h2>Update your cart or checkout</h2></td>
                            </tr>-->
                            
                            <tr align="center">
                            	<th>Remove</th>
                              	<th>Products</1th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            
                            <?php
								
								$total=0;

								global $con;
								
								$ip = getIp();
								
								$sel_price = "select * from cart where C_id='$ip'";
								
								$run_price = mysqli_query($con, $sel_price);
								
								while($p_price=mysqli_fetch_array($run_price))
								{
									$pro_id = $p_price['Product_id'];
									
									$pro_price = "select * from product_mst where Product_id='$pro_id'";
									
									$run_pro_price = mysqli_query($con, $pro_price);
									
									while($pp_price = mysqli_fetch_array($run_pro_price))
									{
										$Product_price = array($pp_price['Product_price']);
										
										$Product_name  = $pp_price['Product_name'];
										
										$Product_image = $pp_price['Product_image'];
										
										$single_price  = $pp_price['Product_price'];
										
										$values = array_sum($Product_price);
										
										$total	+= $values;	
										
							?>
                            
                            <tr align="center">
                            <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
                                <td><?php echo $Product_name;?><br>
                                	<img src="Admin/product_images/<?php echo $Product_image;?>" width="60" height="60"/>                                </td>
                                <td><input type="text" size="4" name="qty" value="" /></td>
                            <?php
							
								if(isset($_POST['update_cart']))
								{
									$qty = $_POST['qty'];
									
									$update_qty = "update cart set qty='$qty'";
									
									$run_qty = mysqli_query($con, $update_qty);
											
									$_SESSION['qty']=$qty;
									
										$total = $total* $qty;
								}
								
								?>
                                
                                <td><?php echo "Rs." . $single_price;?></td>
                            </tr>
                            
                            
                          <?php } 	}?>
                      </form>    
                      
                         
                          <tr align="right">
                            	<td colspan="5"><b>Sub Total:</b><?php echo "Rs.". $total;?></td>
                            </tr>
                                                     	
                            <tr>
                            	<td><input type="submit" name="update_cart" value="Update Cart" /></td>
                               
                                <td><input type="submit" name="continue" value="Continue Shopping"></td>
                                <td><button><a href="placeorder.php" style="text-decoration:none; color:#000000;">Checkout</a></button></td>
                            </tr>
                        </table>
    			
                   	
                    <?php
							
					
					function updatecart()
					{
						global $con;
						if(isset($_POST['update_cart']))
						{
							foreach($_POST['remove'] as $remove_id)
							{
								$delete_product = "delete from cart where Product_id='$remove_id' AND C_id='$ip'";
								
								$run_delete = mysqli_query($con,$delete_product);
								
								if($run_delete)
								{
									echo "<script>window.open('cart.php','_self')</script>";
								}
							}
						}						
					}						
				
					if(isset($_POST['continue']))
						{
							echo "<script>window.open('index.php','_self')</script>";
						}
				
						echo @$up_cart = updatecart();
				
					?>
                     
				  </div>
			</div>			
    </div>	
			 <!--<div class="item4">
				 <a href="products.php"><img src="images/imgs/Dozer Hydraulic Cylinder/dozerblade17-new.jpg" alt=""/></a>
				  <div class="item-info4">
					 <h4><a href="products.php">Dozer Cylinder</a></h4>
					 <span>Price:-</span>
                     <span>Part no:-</span>
                     <span>Size:-</span>
					 <a href="single.php">Buy Now</a>
				 </div>			 
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">			 
				 <div class="item-info2">
					 <h4><a href="products.php">Hydraulic Cylinder</a></h4>
					 <span>Price:-</span>
                     <span>Part No:-</span>
                     <span>Size:-</span>
					<a href="single.php">Buy Now</a>
				 </div>
			<a href="products.php"><img src="images/imgs/Loader Hydraulic Cylinder/loader-hydraulic-cylinders-200-bar-250x250.jpg" alt=""/></a>
			 </div>
			 <div class="item5">	
				 <a href="products.php"><img src="images/imgs/Excavator Hydraulic Cylinder/1970771.png" height="170px" alt=""/></a>
				 <div class="item-info5">
					 <h4><a href="products.php">Excavator Cylinder</a></h4>
					 <span>Price:-</span>
                     <span>Part No:-</span>
                     <span>Size:-</span>
					 <a href="single.php">Buy Now</a>
				 </div>	
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item3">	
				 <a href="products.php"><img src="images/imgs/Dozer Hydraulic Cylinder/B1133764372.jpg" alt="" height="260px"/></a>
   <div class="item-info3">
					 <h4><a href="products.php">Dozer Cylinder</a></h4>
					 <span>Price:-</span>
                     <span>Part No:-</span>
    <span>Size:-</span>
					 <a href="single.php">Buy Now</a>
				 </div>			 
			 </div>
<div class="item6">	
				 <a href="products.php"><img src="images/imgs/Hydraulic Cylinders/9d66253f0228093585209ad3c2fc50ab.jpg" height="200" alt=""/></a>
				 <div class="item-info6">
					 <h4><a href="products.php">Hydraulic Cylinders</a></h4>
					 <span>Price:-</span>
                     <span>Part No:-</span>
                 <span>Size:-</span>
					 <a href="single.php">Buy Now</a>
				 </div>
				 				 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>
-->

 <!---->
<!--<div class="top-sellers">
	 <div class="container">
		 <h3>TOP - SELLERS</h3>
		 <div class="seller-grids">
			 <div class="col-md-3 seller-grid">
				 <a href="products.php">
                 	<img src="images/imgs/Hydraulic Cylinders/65482-2370527.jpg" alt=""/>
                 </a>
				 <h4><a href="products.php">Excavator Hydraulic Cylinder</a></h4>
				 <span>Part No:-</span>
				 <p>Rs. 25000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.php">
                 <img src="images/imgs/Hydraulic Cylinders/dozer-hydraulic-cylinder-250x250.jpg" height="135px" alt=""/>
                 </a>
				 <h4><a href="products.php">Loader Hydraulic Cylinder</a></h4>
				 <span>Part No:-</span>
				 <p>Rs. 5000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.php">
                 	<img src="images/imgs/Hydraulic Cylinders/Hydraulic-Cylinder-3.jpg" height="135px" alt=""/>
                 </a>
				 <h4><a href="products.php">Hydraulic Cylinders</a></h4>
				 <span>Part No:-</span>
				 <p>Rs. 45000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.php">
                 	<img src="images/imgs/Excavator Hydraulic Cylinder/engineering-assemblies_clip_image002_0018.jpg"height="135px" alt=""/>
                 </a>
				 <h4><a href="products.php">Dozer Hydraulic Cylinder </a></h4>
				 <span>Part No:-</span>
				 <p>Rs. 18000/-</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<!---->
<!--<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECOMMENDATIONS FOR YOU</h3>
		 </div>
-->		 <!--<div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="products.php"><img src="images/imgs/Hydraulic Cylinders/central-blade-dozer-250x250.jpg" alt=""/></a>	
					 <h4><a href="products.php">Dozer Cylinder</a></h4>	
					 <p>Part No:</p>
				 </li>
				 <li>
					 <a href="products.php"><img src="images/imgs/Hydraulic Cylinders/DSC1618.jpg" height="108" alt=""/></a>	
					 <h4><a href="products.php">Hydraulic Cylinder</a></h4>	
					 <p>Part No:</p>
				 </li>
				 <li>
					 <a href="products.php"><img src="images/imgs/Hydraulic Cylinders/Hydraulic Cylinders.jpg" alt=""/></a>
					 <h4><a href="products.php">Hydraulic Cylinder</a></h4>	
					 <p>Part No:</p>
				 </li>
				 <li>
					 <a href="products.php"><img src="images/imgs/Loader Hydraulic Cylinder/loader-hydraulic-cylinder-250x250.png" alt=""/></a>
					 <h4><a href="products.php">Loader Hydraulic Cylinder</a></h4>	
					 <p>Part No:</p>
				 </li>
				 <li>
			<a href="products.php"><img src="images/imgs/Excavator Hydraulic Cylinder/mill-duty-hydraulic-cylinder-1608088.jpg" alt=""/></a>	
					 <h4><a href="products.php">Hydraulic Cylinder</a></h4>	
					 <p>Part No:</p>					 
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div>
	 </div>
</div>
-->
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