<?php
$con = mysqli_connect("localhost","root","","hes1");
function  getcats()
{
	global $con;
	$get_cats = "select * from Category_mst";
	$run_cats = mysqli_query($con, $get_cats);
	while( $row_cats=mysqli_fetch_array($run_cats))
	{
		$Category_id = $row_cats['Category_id'];
		$Category_name=$row_cats['Category_name'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>
<?php
$con = mysqli_connect("localhost","root","","hes1");
function  getpro()
{
	global $con;
	$get_pro = "select * from product_mst";
	$run_pro = mysqli_query($con, $get_pro);
	while( $row_pro=mysqli_fetch_array($run_pro))
	{
		$Product_id = $row_pro['Product_id'];
		$Category_id=$row_pro['Category_id'];
		$Product_name=$row_pro'Category_id'];
		$Product_=$row_pro'Category_id'];
		$Category_id=$row_pro'Category_id'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>

<?php
	function getpro()
	{
		global $con;
		$con= mysqli_connect("localhost","root","hes1")
		$get_pro ="select *from product_mst order by RAND() LIMIT 0,6";
		$run_pro = mysqli_query($con,$get_pro);
		while ($row_pro= mysqli_fetch_array ($run_pro))
		{
			$pro_id = $run_pro['Product_id'];
			$pro_cat = $run_pro['Category_id'];
			$pro_name = $run_pro['Product_name'];
			$pro_partno = $run_pro['Product_partno'];
			$pro_image = $run_pro['Product_image'];
			$pro_size = $run_pro['Product_size'];
			$pro_desc = $run_pro['Product_desc'];
			$pro_price = $run_pro['Product_price'];
			
			echo " <div> <h3> $Pro_name <h3></div>";
		}
	}
?><?php
$con = mysqli_connect("localhost","root","","hes1");
function  getcats()
{
	global $con;
	$get_cats = "select * from Category_mst";
	$run_cats = mysqli_query($con, $get_cats);
	while( $row_cats=mysqli_fetch_array($run_cats))
	{
		$Category_id = $row_cats['Category_id'];
		$Category_name=$row_cats['Category_name'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>
<?php
$con = mysqli_connect("localhost","root","","hes1");
function  getpro()
{
	global $con;
	$get_pro = "select * from product_mst";
	$run_pro = mysqli_query($con, $get_pro);
	while( $row_pro=mysqli_fetch_array($run_pro))
	{
		$Product_id = $row_pro['Product_id'];
		$Category_id=$row_pro['Category_id'];
		$Product_name=$row_pro'Category_id'];
		$Product_=$row_pro'Category_id'];
		$Category_id=$row_pro'Category_id'];
		echo "<li> <a href='#'>$Category_name</a></li>";
		
	}

}

?>

<?php
	function getpro()
	{
		global $con;
		$con= mysqli_connect("localhost","root","hes1")
		$get_pro ="select *from product_mst order by RAND() LIMIT 0,6";
		$run_pro = mysqli_query($con,$get_pro);
		while ($row_pro= mysqli_fetch_array ($run_pro))
		{
			$pro_id = $run_pro['Product_id'];
			$pro_cat = $run_pro['Category_id'];
			$pro_name = $run_pro['Product_name'];
			$pro_partno = $run_pro['Product_partno'];
			$pro_image = $run_pro['Product_image'];
			$pro_size = $run_pro['Product_size'];
			$pro_desc = $run_pro['Product_desc'];
			$pro_price = $run_pro['Product_price'];
			
			echo " <div> <h3> $Pro_name <h3></div>";
		}
	}
?>