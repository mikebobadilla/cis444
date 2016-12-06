<?php
// Jason Sneddon - snedd001
// Roger Delgado - delga051
// Kristina Nystrom - nystr001
// Zachary Go - goo06
// Michael Bobadilla - bobad05
// CIS 444 - Term Project
// login.php

	include('includes/session.php');
		ob_start();

	if (isset($_SESSION["user"])){
		header("Location: index.php");
	}

	$error = false;

	if(isset($_POST['btn-signin'])){
	  $email = trim($_POST['email']);
	  $email = strip_tags($email);
	  $email = htmlspecialchars($email);

	  $pass = trim($_POST['pass']);
	  $pass = strip_tags($pass);
	  $pass = htmlspecialchars($pass);

	  //basic email validation
	  if ( !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email) ) {
	   $error = true;
	   $emailError = "Please enter valid email address.";
		 echo $emailError;
	  }
	  // password validation
	  if (empty($pass)){
	   $error = true;
	   $passError = "Please enter password.";
		 echo $passError;
	  } else if(strlen($pass) < 6) {
	   $error = true;
	   $passError = "Password must have atleast 6 characters.";
		 echo $passError;
	  }

	  // password encrypt using SHA256();
	  $password = hash('sha256', $pass);

	  // if there's no error, continue to signup
	  if( !$error ) {

			$res = mysqli_query($link, "SELECT UserID, Email, Password, Permissions FROM USERS WHERE Email='$email'");
    	$row=mysqli_fetch_array($res);
    	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

	    if( $count == 1 && $row['Password'] == $password ) {
	      $_SESSION['user'] = $row['Email'];
	      $_SESSION['role'] = $row['Permissions'];
	      header("Location: index.php");
	    } else {
	      $errMSG = "Incorrect Credentials, Try again...";
				echo $errMSG;
	    }

	  } else {
			echo "error";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
	</head>
	<body>
		<div class="topDivider">
				 <?php require("nav.php"); ?>
		</div>

		<div class="content m-l-20">
			<h3>Login</h3>
			<div class="form-wrapper" class="login">
				<form class="form-content" action="login.php" method="post">
					<label for="email">Email</label>
					<input type="text" name="email" value="">
					<label for="pass">Password</label>
					<input type="password" name="pass" value="">
					<br>
					<div class="form-row">
						<button type="submit" name="btn-signin">Submit</button>
					</div>
				</form>
			</div>
			<br>
			<a href="register.php">If you dont have an account, click here to register</a>

		</div>
	</body>
</html>
<?php ob_end_flush(); ?>
