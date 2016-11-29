<?php
	if (isset($_SESSION['email'])){
		header("Location: contact.php");
	}
	ob_start();
	include('includes/session.php');

	$error = false;

	if(isset($_POST['btn-signup'])){
		// clean user inputs to prevent sql injections
	  $name = trim($_POST['name']);
	  $name = strip_tags($name);
	  $name = htmlspecialchars($name);

	  $email = trim($_POST['email']);
	  $email = strip_tags($email);
	  $email = htmlspecialchars($email);

	  $pass = trim($_POST['pass']);
	  $pass = strip_tags($pass);
	  $pass = htmlspecialchars($pass);

	  // basic name validation
	  if (empty($name)) {
	   $error = true;
	   $nameError = "Please enter your full name.";
	  } else if (strlen($name) < 3) {
	   $error = true;
	   $nameError = "Name must have atleat 3 characters.";
	  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
	   $error = true;
	   $nameError = "Name must contain alphabets and space.";
	  }

	  //basic email validation
	  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
	   $error = true;
	   $emailError = "Please enter valid email address.";
	  } else {
	   // check email exist or not
	   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
	   $result = mysql_query($query);
	   $count = mysql_num_rows($result);
	   if($count!=0){
	    $error = true;
	    $emailError = "Provided Email is already in use.";
	   }
	  }
	  // password validation
	  if (empty($pass)){
	   $error = true;
	   $passError = "Please enter password.";
	  } else if(strlen($pass) < 6) {
	   $error = true;
	   $passError = "Password must have atleast 6 characters.";
	  }

	  // password encrypt using SHA256();
	  $password = hash('sha256', $pass);

	  // if there's no error, continue to signup
	  if( !$error ) {

	   $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
	   $res = mysql_query($query);

	   if ($res) {
	    $errTyp = "success";
	    $errMSG = "Successfully registered, you may login now";
	    unset($name);
	    unset($email);
	    unset($pass);
	   } else {
	    $errTyp = "danger";
	    $errMSG = "Something went wrong, try again later...";
	   }

	  }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
					<input type="text" name="login-username" value="">
					<label for="pass">Password</label>
					<input type="password" name="login-password" value="">
					<br>
					<div class="form-row">
						<button type="submit" name="button">Submit</button>
					</div>
				</form>
			</div>
			<br>
			<a href="register.php">If you dont have an account, click here to register</a>

		</div>
	</body>
</html>
<?php ob_end_flush(); ?>
