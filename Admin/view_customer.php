﻿<?php
	session_start();
	
	if(!isset($_SESSION['Admin_email']))
	{
		echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
	}
	else
	{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>view customer</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
</head>
<body>
   <style>
       th{
           padding: 10px 0;
       }
    </style>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-tasks"></i> Manage Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="insert_product.php">Insert New Product</a>
                            </li>
                            <li>
                                <a href="view_products.php">View All Product</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-tags"></i> Manage Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="insert_cat.php">Insert New Category</a>
                            </li>
                            <li>
                                <a href="view_cats.php">View All Category</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="active-menu" href="view_customer.php"><i class="fa fa-user"></i> Manage Customer</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> Manage Order<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a href="order_details.php">Manage Order Details</a>
							</li>
                            <li>
                                <a href="order_status.php">Manage Order Status</a>
                            </li>
                  		</ul>
                    </li>
                    
                    <li>
                        <a href="invoice.php"><i class="fa fa-envelope"></i> Manage Invoice</a>
                    </li>
					
                    <li>
                        <a href="view_payments.php"><i class="fa fa-credit-card"></i> Manage Payment Details</a>
                    </li>
					
					<li>
                        <a href="#"><i class="fa fa-flag"></i> Report Generation<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
                            <li>
                                <a href="Product_Report.php">Product Report</a></li>
                            </li>
                            <li>
                                <a href="Customer_Report.php">Customer Report</a>
                            </li>
                  		</ul>
                    </li>

					<li>
                        <a href="Feedback.php"><i class="fa fa-comments"></i> Manage Feedback</a>
                    </li>
					
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Manage Customer<small></small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				
			<div class="row">

			  <div class="col-md-12">
			<div class="panel panel-default">
							  
							<div class="panel-body"> 
								<table width="900px" align="center" bgcolor="pink">
                                    <tr align="center">
        								<td colspan="16" bgcolor="#3498db"><h2>View All Customer Here</h2><br /></td>
    								</tr>
    
   		 							<tr align="center" bgcolor="skyblue">
                                        <th>S.N</th>
                                        <th>F_Name</th>
                                        <th>L_Name</th>
                                        <th>Gender</th>
                                        <th>D.O.B</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Pincode</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Mobile_no</th>
                                        <th>Phone_no</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <!--<th>Edit</th>-->
                                        <th>Delete</th>
                                    </tr>
                                     <?php
										include("includes/db.php");
										$get_c = "select * from customer_registration";
										
										$run_c = mysqli_query($con,$get_c);
										
										$i=0;
										
										while($row_c=mysqli_fetch_array($run_c))
										{
										
												$c_id= $row_c['Cus_id'];
												$c_fname= $row_c['Cus_fname'];
												$c_lname= $row_c['Cus_lname'];						
												$c_gen= $row_c['Cus_gender'];
												$c_dob= $row_c['Cus_dob'];
												$c_img= $row_c['Cus_image'];
												$c_add= $row_c['Cus_Address'];
												$c_pin= $row_c['Cus_pincode'];
												$c_city= $row_c['City_id'];
												$c_state= $row_c['State_id'];
												$c_mono= $row_c['Cus_mono'];
												$c_phone= $row_c['Cus_phone'];
												$c_email= $row_c['Cus_email'];
												$c_pass= $row_c['Cus_password'];
												
												$i++;
										
									?>
									
                                   <tr align="center">
                                		<td><?php echo $i;?></td>
                                        <td><?php echo $c_fname;?></td>
                                        <td><?php echo $c_lname;?></td>
                                        <td><?php echo $c_gen;?></td>
                                        <td><?php echo $c_dob;?></td>
                                        <td><img src="../customer_images/<?php echo $c_img;?>" width="60" height="60" /></td>
                                        <td><?php echo $c_add;?></td>
                                        <td><?php echo $c_pin;?></td>
                                        <td><?php echo $c_city;?></td>
                                        <td><?php echo $c_state;?></td>
                                        <td><?php echo $c_mono;?></td>
                                        <td><?php echo $c_phone;?></td>
                                        <td><?php echo $c_email;?></td>
                                        <td><?php echo $c_pass;?></td>
                                      <!-- <td><a href="3">Edit</a></td>-->
                                        <td><a href="delete_cust.php?delete_cust=<?php echo $c_id;?>">Delete</a></td> 
                                    </tr>   
                                    <?php } ?> 	
                                </table>	
								<br><br>
                                <div>
                                    <button><a href="index.php" style="text-decoration:none; color:#000000;">Go to Home</a></button>
                                </div>								
								
							</div>
				</div>
			</div>						
				</div>								
									
				  				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 
</body>
</html>
<?php }?>