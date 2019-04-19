<?php
include("includes/db.php");
$city=$_REQUEST['uname'];

								$get_city = "Select * from city_mst where State_id='$city'";
								$run_city = mysqli_query($con,$get_city);
								while ($row_city = mysqli_fetch_array($run_city))
							{
								$City_id  = $row_city['City_id'];
								$City_name= $row_city['City_name'];
								 echo "<option value='$City_id'>$City_name</option>";
							}
								?>