<!-- Jason Sneddon - snedd001
     Roger Delgado - delga051
     Kristina Nystrom - nystr001
     Zachary Go - goo06
     Michael Bobadilla - bobad05
     CIS 444 - Term Project
     register.php
-->
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
	   $query = "SELECT Email FROM USER WHERE Email='$email'";
	   $result = mysqli_query($query);
	   $count = mysqli_num_rows($result);
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

	   $query = "INSERT INTO USERS (FirstName,LastName,Username,Email, Password, Permissions, Company) VALUES ('Mike','BOB','005','$email','$password','Admin','$name')";

	   $res = mysqli_query($link, $query);
		 echo $query;
		 echo $res;

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

	 } else {
		 echo "there was an error";
		 echo $nameError;
		 echo $emailError;
		 echo $passError;
	 }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page Page</title>
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<div class="topDivider">
				 <?php require("nav.php"); ?>
		</div>

		<div class="content m-l-20">
			<?php
			if ( isset($errMSG) ) {echo $errMSG;}
			?>
			<h3>Create New User</h3>
			<div class="form-wrapper" class="login">
				<form class="form-row w-400" action="register.php" method="post">
					<div class="form-content">
						<label for="name">Name</label>
						<input type="text" name="name" value="">
						<label for="address">Address</label>
						<input type="text" name="address" value="">
						<label for="city">City</label>
						<input type="text" name="city" value="">
						<label for="state">State</label>
						<input type="text" name="state" value="">
						<label for="zip">Zip</label>
						<input type="text" name="zip" value="">
						<label for="company">Company</label>
						<input type="text" name="company" value="">
						<br>
						<div class="form-row w-300">
							<button type="reset" name="button">Reset</button>
							<button type="submit" name="btn-signup">Submit</button>
						</div>
					</div>
					<div class="form-content">
						<label for="email">Email</label>
						<input type="text" name="email" value="">
						<label for="pass">Password</label>
						<input type="password" name="pass" value="">

					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<?php ob_end_flush(); ?>
