<?php 
session_start();
include_once 'include/class.user.php';
$user = new User();


if (isset($_POST['af_submit'])){
        extract($_POST);
        $register = $user->food_add($food_name, $Product_id, $amount);
        if ($register) {
           $message1 = "Food added successfully.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}else{
			$message1 = "Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
    }

    if (isset($_POST['r_submit'])){
        extract($_POST);
        $register = $user->food_remove($r_code,$rf_name);
        if ($register) {
           $message1 = "Food removed successfully.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}else{
			$message1 = "Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
    }
    if (isset($_POST['u_submit'])){
        extract($_POST);
        $register = $user->food_update($u_name,$u_price);
        if ($register) {
           $message1 = "Food removed successfully.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}else{
			$message1 = "Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin inventory </title>
	<link rel="stylesheet" type="text/css" href="css/admin_page1.css">
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li > <a >Add Details</a>
					<ul>
						<li> <a class="tablink" onclick="openPage('Inventory Details', this, 'green')" ></a> 
						</li>
					    <li> <a class="tablink" onclick="openPage('Add Food', this, 'green')" id="defaultOpen">Add Food</a></li>
					</ul>
				</li>
				<li><a>Remove Foods</a>
					<ul>
						<li> <a class="tablink" onclick="openPage('Remove', this, 'green')">Remove</a></li>
					</ul>
				</li>
				<li> <a href="#">Update Inventory Details</a>
					<ul>
						<li> <a class="tablink" onclick="openPage('Update', this, 'green')">Update</a></li>
					</ul>
				</li>
				
				<li > <a href="#">Order Forecasting</a>
					<ul>
						<li> <a class="tablink" href="s_forecasting.php">Order Forecasting</a></li>
					</ul>
				</li>
				<li > <a href="admin_login.php">Logout</a></li>
			</ul>
			
		</div>
		
        <div id="Add Food" class="tabcontent"><br>
        	<form action="admin_page1.php" method="post" enctype="multipart/form-data">
			   <h1>	<center>Add Food Items</center> </h1><br><br>
			    <b>Food Name</b>
			    <input type="text" placeholder="Enter name" name="food_name" required>
			    <b>Food Code</b>
			    <input type="number" placeholder="Enter..." name="Product_id" required><br>
			    
				<b>Image</b>
			    <input type="file" name="fileToUpload"  id="fileToUpload" required><br>
			    <b>Price</b>
			    <input type="number" placeholder="Enter..." name="amount" required><br>
			    <button type="submit" name="af_submit" class="registerbtn" value="upload">Submit</button>
        </form>
        </div>

        	<div id="Remove" class="tabcontent"><br>
        		<form action="admin_page1.php" method="post" enctype="multipart/form-data">
					    <h1>	<center>Remove Food Items</center> </h1><br><br>
					   
					    <b>Code</b>
					    <input type="text" placeholder="Enter .." name="r_code" required>

					    <b>Food Name</b>
					    <input type="text" placeholder="Enter name" name="rf_name" required><br>

					    <button type="submit" name="r_submit" class="registerbtn">Submit</button>
			    </form>

        </div>
        </div>
        	<div id="Update" class="tabcontent"><br>
        		<form action="admin_page1.php" method="post" enctype="multipart/form-data">
					   <h1>	<center>Update Food Items</center> </h1><br><br>
					   
					    <b>Food Name</b>
					    <input type="text" placeholder="Enter name" name="u_name" required>

					    <b>Price</b>
					    <input type="number" placeholder="Enter..." name="u_price" required><br>

					    <button type="submit" name="u_submit" class="registerbtn">Submit</button>
			    </form>

        </div>
        
        </div>
         </div>
	</header>
	<script type="text/javascript" src="admin_page1.js"></script>

</body>
</html>
