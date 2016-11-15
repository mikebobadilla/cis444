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
				<form class="form-content" action="#" method="post">
					<label for="login-username">Username</label>
					<input type="text" name="login-username" value="">
					<label for="login-password">Password</label>
					<input type="password" name="login-password" value="">
				</form>
			</div>

			<h3>Create New User</h3>
			<div class="form-wrapper" class="login">
				<form class="form-row w-400" action="#" method="post">
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
							<button type="submit" name="button">Submit</button>
						</div>
					</div>
					<div class="form-content">
						<label for="username">Username</label>
						<input type="text" name="username" value="">
						<label for="password">Password</label>
						<input type="password" name="password" value="">

					</div>
				</form>
			</div>
		</div>
	</body>
</html>
