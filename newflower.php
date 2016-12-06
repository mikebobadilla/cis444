<?php
  include("includes/admin_check.php");



	if(isset($_POST['btn-signup'])){
		// clean user inputs to prevent sql injections
		$name = trim($_POST['flowername']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);

		$picture = trim($_POST['picture']);
		$picture = strip_tags($picture);
		$picture = htmlspecialchars($picture);

		$price = trim($_POST['price']);
		$price = strip_tags($price);
		$price = htmlspecialchars($price);

		$color = trim($_POST['color']);
		$color = strip_tags($color);
		$color = htmlspecialchars($color);

		$quantity = trim($_POST['quantity']);
		$quantity = strip_tags($quantity);
		$quantity = htmlspecialchars($quantity);

		$category = trim($_POST['category']);
		$category = strip_tags($category);
		$category = htmlspecialchars($category);

		$description = trim($_POST['description']);
		$description = strip_tags($description);
		$description = htmlspecialchars($description);

		$error = false;

		// basic name validation
		if (empty($name) || empty($picture) || empty($price) || empty($color) || empty($quantity) || empty($category) || empty($description)) {
		 $error = true;
		 $nameError = "Please enter all the details.";
	 	}

		if( !$error ) {

		$query = "INSERT INTO FLOWERS (FlowerName,CategoryID,Color,Quantity, Price, Picture, Description)
							VALUES ('$name', '$category', '$color' ,'$quantity','$price','$picture','$description')";

		$res = mysqli_query($link, $query);

		if ($res) {
			$errTyp = "success";
			$errMSG = "Successfully adding flower";
		 } else {
			$errTyp = "danger";
			$errMSG = "Something went wrong, try again later...";
		 }

	 }
	}





	$res = mysqli_query($link, "SELECT * FROM CATEGORY");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
  </head>
  <body>
    <div class="topDivider">
      <?php include("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <div class="info left">
					<?php
					if ( isset($errMSG) ) {echo $errMSG;}
					?>
					<div class="form-wrapper" class="login">
						<form class="form-row w-400" action="newflower.php" method="post">
							<div class="form-content">
								<label for="flowername">Flower Name</label>
								<input type="text" name="flowername" value="">
								<label for="picture">Flower Picture</label>
								<input type="text" name="picture" value="">
								<label for="price">Price</label>
								<input type="text" name="price" value="">
								<label for="color">Color</label>
								<input type="text" name="color" value="">
								<label for="Quantity">Quantity</label>
								<input type="text" name="quantity" value="">
								<label for="name">Category</label>
								<select class="" name="category">
									<?php
										while($row = mysqli_fetch_array($res)){
											$id = $row["CategoryID"];
											$name = $row["CategoryName"];
									?>

									<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

									<?php } ?>
								</select>
								<label for="address">Description</label>
								<textarea rows="10" name="description" value=""></textarea>
								<br>
								<div class="form-row w-300">
									<button type="reset" name="button">Reset</button>
									<button type="submit" name="btn-signup">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
