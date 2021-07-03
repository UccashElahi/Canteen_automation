<?php 
session_start();
include_once 'include/class.user.php';
$user = new User();

if (isset($_POST['login'])) { 
		extract($_POST);   
	    $login = $user->check_login2($lname, $lpassword);
	    if ($login) {
	        // Registration Success
	       header("Location:staff_page1.php");
	    } else {
	        // Registration Failed
	        $message1 = "Login Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
	    }
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">

</head>
<body>
	<div class="login-page">
		<div class="form">
			<form action="staff_login.php" method="post" class="login-form">
				<p class="msg">Staff Login</p>
				<input type="text" name="lname" placeholder="name">
				<input type="password" name="lpassword" placeholder="password">
				<button name="login">Log in</button>
			</form>
		</div>
	</div>
</body>
</html>