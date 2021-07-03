<?php 
session_start();
include_once 'include/class.user.php';
$user = new User();

if (isset($_POST['login'])) { 
		extract($_POST);   
	    $login = $user->check_login($lid, $lpassword);
	    if ($login) {
	        // Registration Success
	       header("location:user_page1.php");
	    } else {
	        // Registration Failed
	        $message1 = "Login Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
	    }
	}


	// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['submit'])){
        extract($_POST);
        $register = $user->reg_user($name, $id, $level, $dep,$phnno,$email,$password);
        if ($register) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
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
				<button name="submit" onclick="return(submitreg());" >Create</button> 				
				<p class="message" ><a href="#">Already Registered?  Login</a></p>
			</form>

			<form action="user_loginn.php" method="post" class="login-form">
				<p class="msg">User Login</p>
				<input type="number" name="lid" placeholder="Student id">
				<input type="password" name="lpassword" placeholder="password">
				<button name="login" onclick="return(submitlogin());">Log in</button>
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
	 <script>
      function submitlogin() {
        var form = document.login;
        if (form.emailusername.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.password.value == "") {
          alert("Enter password.");
          return false;
        }
      }

      function submitreg() {
        var form = document.reg;
        if (form.name.value == "") {
          alert("Enter name.");
          return false;
        } else if (form.uname.value == "") {
          alert("Enter username.");
          return false;
        } else if (form.upass.value == "") {
          alert("Enter password.");
          return false;
        } else if (form.uemail.value == "") {
          alert("Enter email.");
          return false;
        }
      }
    </script>

</body>
</html>