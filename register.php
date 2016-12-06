
<?php
	// Jason Sneddon - snedd001
	// Roger Delgado - delga051
	// Kristina Nystrom - nystr001
	// Zachary Go - goo06
	// Michael Bobadilla - bobad05
	// CIS 444 - Term Project
	// register.php
	if (isset($_SESSION['email'])){
		header("Location: contact.php");
	}
	ob_start();
	include('includes/session.php');

	$error = false;

	if(isset($_POST['btn-signup'])){
		// clean user inputs to prevent sql injections
	  $email = trim($_POST['email']);
	  $email = strip_tags($email);
	  $email = htmlspecialchars($email);

	  $pass = trim($_POST['pass']);
	  $pass = strip_tags($pass);
	  $pass = htmlspecialchars($pass);

	  $firstName = trim($_POST['firstname']);
	  $firstName = strip_tags($firstName);
	  $firstName = htmlspecialchars($firstName);

	  $lastName = trim($_POST['lastname']);
	  $lastName = strip_tags($lastName);
	  $lastName = htmlspecialchars($lastName);

	  $street = trim($_POST['address']);
	  $street = strip_tags($street);
	  $street = htmlspecialchars($street);

	  $city = trim($_POST['city']);
	  $city = strip_tags($city);
	  $city = htmlspecialchars($city);

	  $state = trim($_POST['state']);
	  $state = strip_tags($state);
	  $state = htmlspecialchars($state);

	  $zip = trim($_POST['zip']);
	  $zip = strip_tags($zip);
	  $zip = htmlspecialchars($zip);

	  $company = trim($_POST['company']);
	  $company = strip_tags($company);
	  $company = htmlspecialchars($company);


	  // basic name validation
	  if (empty($firstName) || empty($lastName)) {
	   $error = true;
	   $nameError = "Please enter your full name.";
	 } else if (strlen($firstName) < 3 || strlen($lastName) < 3) {
	   $error = true;
	   $nameError = "Name must have atleat 3 characters.";
	 } else if (!preg_match("/^[a-zA-Z ]+$/",$firstName) || !preg_match("/^[a-zA-Z ]+$/",$lastName)) {
	   $error = true;
	   $nameError = "Name must contain alphabets and space.";
	  }

	  //basic email validation
	  if ( !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email) ) {
	   $error = true;
	   $emailError = "Please enter valid email address.";
	  } else {
	   // check email exist or not
	   $query = "SELECT Email FROM USERS WHERE Email='$email'";
	   $result = mysqli_query($link, $query);
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

	  $query = "INSERT INTO USERS (FirstName,LastName,Username,Email, Password, Permissions, Company, Street, City, State, Zipcode)
							VALUES ('$firstName', '$lastName', '$email' ,'$email','$password','User','$company', '$street', '$city', '$state', '$zip')";

	  $res = mysqli_query($link, $query);

	  if ($res) {
	    $errTyp = "success";
	    $errMSG = "Successfully registered, you may login now";
	    unset($firstName);
	    unset($lastName);
	    unset($company);
	    unset($street);
	    unset($city);
	    unset($state);
	    unset($zip);
	    unset($email);
	    unset($pass);
	   } else {
	    $errTyp = "danger";
	    $errMSG = "Something went wrong, try again later...";
	   }

	 } else {
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
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
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
						<label for="name">First Name</label>
						<input type="text" name="firstname" value="">
						<label for="name">Last Name</label>
						<input type="text" name="lastname" value="">
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
