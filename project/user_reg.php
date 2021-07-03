<?php
    session_start();
	$db = new mysqli("localhost","root","","shopping_cart");

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$id1 = $_POST['id'];
		$level = $_POST['level'];
		$dep = $_POST['dep'];
		$phnno = $_POST['phnno'];

		$query = "INSERT INTO user_information(name, password,email,id, level,dep,phnno) VALUES ('$name' , '$password', '$email', '$id1', '$level','$dep','$phnno')";
		$run = mysqli_query($db, $query);

		if($run){
			echo "Registration successful.!";
		}else{
			echo "error".mysql_error($db);
		}
	}
	if(isset($_POST['login'])){

		$lid = $_POST['lid'];
		$password = $_POST['lpassword'];
		$_SESSION['lid'] = $_POST['lid'];

		$mysqli = new mysqli("localhost","root","","shopping_cart");
		$result = $mysqli->query("SELECT * FROM user_information WHERE id = '$lid' AND password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['id'] == $lid && $row['password'] == $password && !empty($lid) && !empty($password)){
			header("Location:user_page1.php");
        exit();
		}
		else{
			$message1 = "Login Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="user_loginn.php" method="post" class="register-form">	
			    <p class="msg">User Registration</p>
			    <input type="text" placeholder="Enter Name" name="name" required>
			    <input type="number" placeholder="Enter ID" name="id" required>
			    <input type="text" placeholder="L-T" name="level" required>
			    <input type="text" placeholder="Enter DEP" name="dep" required>
			    <input type="number" placeholder="Enter phone number" name="phnno" required>
			    <input type="text" name="email" placeholder="Enter email" required>
			    <input type="password" placeholder="Enter Password" name="password" required>
			    <button type="reset" value="Reset Data">Reset Data</button><br> <br>
				<button name="submit">Create</button> 				
				<p class="message"><a href="#">Already Registered?  Login</a></p>
			</form>

			<form action="user_loginn.php" method="post" class="login-form">
				<p class="msg">User Login</p>
				<input type="number" name="lid" placeholder="Student id">
				<input type="password" name="lpassword" placeholder="password">
				<button name="login">Log in</button>
				<p class="message"><a href="#">Not Registered?  Register</a></p>
			</form>
		</div>
	</div>

	<script src='http://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstarp.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle",opacity: "toggle"}, "slow");
		});
	</script>

</body>
</html>