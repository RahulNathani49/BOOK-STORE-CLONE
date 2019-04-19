<?php
	session_start();
	
	if(!isset($_SESSION['Admin_email']))
	{
		echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
	}
	else
	{
?>

<?php
include("includes/db.php");
?>

<?php /*?><?php
include("includes/db.php");

if(isset($_GET['update_product']))
{
	$get_id = $_GET['edit_pro'];
	
	$get_pro = "select * from product_mst where Product_id='$get_id'";
										
										$run_pro = mysqli_query($con,$get_pro);
										
										$i=0;
										
										$row_pro=mysqli_fetch_array($run_pro);
										
										
												$Product_id= $row_pro['Product_id'];
												$Category_id = $row_pro['Category_id'];
												$Product_name=$row_pro['Product_name'];
												$Product_partno=$row_pro['Product_partno'];
												$Product_image=$row_pro['Product_image'];
												$Product_size=$row_pro['Product_size'];
												$Product_desc=$row_pro['Product_desc'];
												$Product_price=$row_pro['Product_price'];
												
										$get_cat = "select * from category_mst where Category_id='$Category_id'";
										
										$run_cat = mysqli_query($con, $get_cat);
										
										$row_cat = mysqli_fetch_array($run_cat);
										
										$category_title = $row_cat['Category_name'];

}
?><?php */?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inserting Product</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="style/style.css" rel="stylesheet" />
        <link href="style2/insert_css.css">
		<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>-->
        <link rel="stylesheet" href="style2/insert_css.css">
		<!--<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">-->
<style> 
.button
{
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active 
{
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<script type="text/javascript" language="javascript">
	function validate()
	{
		var title = document.getElementById('pt').value;
		
		//Prodcut Title validation
		
		if(title=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg1').innerHTML="Please Enter Product Title";
			return false;
		}
		/*if (!/^[a-zA-Z]*$/g.test(document.fn.pt.value)) 
		{
			//alert("Invalid characters");
			document.getElementById('msg1').innerHTML="Invalid Character";
			return false;
    	}*/
		else
		{
			document.getElementById('msg1').innerHTML="";
		}
		
		//Select Category validation
		
		if(document.fn.Product_cat.selectedIndex=="")
		{
			//alert ( "Please select Category!");
			document.getElementById('msg2').innerHTML="Please Select Category";
			return false;
		}
		else
		{
			document.getElementById('msg2').innerHTML="";
		}
		
		//size validation
		
		var  size= document.getElementById('ps').value;
		if(size=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg3').innerHTML="Please Enter Size";
			return false;
		}
		else
		{
			document.getElementById('msg3').innerHTML="";
		}
		
		//part_no validation
		
		var  part_no= document.getElementById('pn').value;
		if(part_no=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg4').innerHTML="Please Enter Part No";
			return false;
		}
		
		/*if(!Number(part_no))
		{
			document.getElementById('msg4').innerHTML="Please Enter Numeric value only";
			return false;	
		}*/
		
		else
		{
			document.getElementById('msg4').innerHTML="";
		}
		
		//image validation
		var img=document.getElementById('img').value;
		if(img=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg5').innerHTML="Please choose img";
			return false;
		}
		else
		{
			document.getElementById('msg5').innerHTML="";
		}
		
	   //Price validation
		var  price= document.getElementById('pr').value;
		if(price=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg6').innerHTML="Please Enter Price";
			return false;
		}
		if(!Number(price))
		{
			document.getElementById('msg6').innerHTML="Please Enter Numeric value only";
			return false;	
		}
		else
		{
			document.getElementById('msg6').innerHTML="";
		}
		
	  //description validation
		var  desc= document.getElementById('ds').value;
		if(desc=="")
		{
			//alert("Please Enter Product Title");
			document.getElementById('msg7').innerHTML="Please Enter Description";
			return false;
		}
		else
		{
			document.getElementById('msg7').innerHTML="";
		}
	}
</script>
</head>
<body>
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
                                <a class="active-menu" href="insert_product.php">Insert New Product</a>
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
                        <a href="view_customer.php"><i class="fa fa-user"></i> Manage Customer</a>
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
                                <a href="Product_Report.php">Product Report</a>
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
                            Manage Products<small>&nbsp;&nbsp;Update Product</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				
			<div class="row">

			  <div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				 Update Post Here
				</div>        
							  
							<div class="panel-body"> 
								<!--<div class="alert alert-success">
									<strong>Well done!</strong> You successfully read this important alert message.
								</div>
								<div class="alert alert-info">
									<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
								</div>
								<div class="alert alert-warning">
									<strong>Warning!</strong> Best check yo self, you're not looking too good.
								</div>
								<div class="alert alert-danger">
									<strong>Oh snap!</strong> Change a few things up and try submitting again.
								</div> -->
                                <?php
					 
							if(isset($_GET['edit_pro']))
							{
										$get_id = $_GET['edit_pro'];
										$get_pro = "select * from product_mst where Product_id='$get_id'";	
										$run_pro = mysqli_query($con, $get_pro);
									
												$i = 0;
											
												$row_pro=mysqli_fetch_array($run_pro);
											
												$product_id= $row_pro['Product_id'];
												$category_id = $row_pro['Category_id'];
												$product_name=$row_pro['Product_name'];
												$product_partno=$row_pro['Product_partno'];
												$product_image=$row_pro['Product_image'];
												$product_size=$row_pro['Product_size'];
												$product_desc=$row_pro['Product_desc'];
												$product_price=$row_pro['Product_price'];
												
												$get_cat= "select * from category_mst where Category_id	='$category_id'";
												$run_cat=mysqli_query($con, $get_cat);
												$row_cat= mysqli_fetch_array($run_cat);
												$cate_name = $row_cat['Category_name'];
									
										/* $get_pro = "select * from category_mst where Category_id='$cat_name'";
										$run_pro= mysqli_query($con,$get_pro);
										$row_pro= mysqli_fetch_array($run_pro);
										$cat_name= $row_pro['Category_name'];	 */
							} 
?>                           
                                
                                
                                
                                
                                
								<form action="" method="post" enctype="multipart/form-data" name="fn">
        	<table align="center" width="990px" height="645px" bgcolor="#E67E19">
            	<tr align="center">
                	<td colspan="7">
                    	<div id="box">
                    		<div class="box-top" id="text">Update Post Here</div>
                         </div>  
                   </td>
                </tr>
                
                <tr>
                	<td id="title"><b>Product Title:</b></td>
    			    <td> <input type="text" id="pt" name="Product_name" size="60px;" value=" <?php echo $product_name; ?>" />
                    	<span id="msg1" style="color:red; font-weight:bold;"></span>                    
                    </td>
                </tr>

				<tr>
                	<td id="title"><b>Product Category:</b></td>
                    <td>
                    	
                    	<select name="Product_cat" class="selectpicker">
                        	<option><?php echo $cate_name;?></option>
                            <?php
								$get_cats = "Select * from category_mst";
								$run_cats = mysqli_query($con,$get_cats);
							while ($row_cats=mysqli_fetch_array($run_cats))
							{
								$Category_id  = $row_cats['Category_id'];
								$Category_name= $row_cats['Category_name'];
								 echo "<option value='$Category_id'>$Category_name</option>";
							}
								
							?>
                        </select>
                        <span id="msg2" style="color:red; font-weight:bold;"></span>                    
                     </td>
                </tr>
				
                <tr>
                	<td id="title"><b>Product Size:</b></td>
                    <td>
                    	
						<input type="text" id="ps" name="Product_size" placeholder="Enter Product Size" value="<?php echo $product_size; ?>" />
                        <span id="msg3" style="color:red; font-weight:bold;"></span>                    </td>
                </tr>	

				<tr>
                	<td id="title"><b>Product Part No:</b></td>
             <td><input type="text" name="Product_partno" placeholder="Enter Product Part Number" id="pn"value="<?php echo $product_partno; ?>" />
                    <span id="msg4" style="color:red; font-weight:bold;"></span>                    </td>
                </tr>
				
                <tr>
                	<td id="title"><b>Product Image:</b></td>
                    <td><input type="file" name="Product_image" id="img" /><img src="product_images/<?php echo $product_image; ?>" width="70" height="70" >
                    	<span id="msg5" style="color:red; font-weight:bold;"></span>                    
                    	<!--<img src="product_images/ <?php echo $product_image;?>" width="60" height="60" />-->
                    </td>
                </tr>
				
                <tr>
                	<td id="title"><b>Product Price:</b></td>
                    <td><input type="text" name="Product_price" placeholder="Enter Product Price" id="pr" value="<?php echo $product_price; ?>" />
                    <span id="msg6" style="color:red; font-weight:bold;"></span>                    </td>
                </tr>
					
                <tr>
                	<td id="title"><b>Product Description:</b></td>
    <td><textarea name="Product_desc" cols="50" rows="10" placeholder="Write Here....." id="ds" ><?php echo $product_desc; ?></textarea>                   <span id="msg7" style="color:red; font-weight:bold;"></span>                    
    </td>
                </tr>
                
                <!--<tr>
                	<td id="title"><b>Product Keywords:</b></td>
                    <td><input type="text" name="product_keywords" size="50"  placeholder="Enter Product Keywords"  required/></td>
                </tr>-->
				                
                <tr align="center">
                       <td colspan="7">
                            <input type="submit" name="update_product" value="Update Product Now" class="button" onClick="return(validate());" />								 							
                               </td>
                </tr>
            </table>				
        </form>

								
								
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

                     
<?php 
	if (isset ($_POST['update_product']))
	{
		$update_id= $product_id;
		$Product_name= $_POST['Product_name'];
		$Product_cat = $_POST['Product_cat'];
		$Product_size= $_POST['Product_size'];
		$Product_partno= $_POST['Product_partno'];
		$Product_price= $_POST['Product_price'];
		$Product_desc= $_POST['Product_desc'];
		
		// getting for image from the field
		
		$Product_image= $_FILES['Product_image']['name'];
		$Product_image_tmp= $_FILES['Product_image']['tmp_name'];
		move_uploaded_file($Product_image_tmp,"product_images/$Product_image");
		
		 $sql = "update Product_mst set Category_id='$Product_cat',Product_name='$Product_name',Product_partno='$Product_partno',Product_image='$Product_image',Product_size='$Product_size',Product_desc='$Product_desc',Product_price='$Product_price' where Product_id='$update_id'";
		$result = mysqli_query($con,$sql);
		if ($result)
			{
				echo "<script> alert ('Product has been updated') </script> ";
				echo "<script> window.open('view_products.php','_self') </script>";
			}
	}		
?>
<?php }?>
