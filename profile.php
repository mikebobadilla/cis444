<?php include("includes/user_check.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/content.css" />
  </head>
  <body>
    <div class="topDivider">
         <?php require("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <div class="info">
          <h4>User Information</h4>
          <p>First Name: <?php echo $row["FirstName"]; ?></p>
          <p>Last Name: <?php echo $row["LastName"]; ?></p>
          <p>Username: <?php echo $row["Username"]; ?></p>
          <p>Email: <?php echo $row["Email"]; ?></p>
          <h4>Address</h4>
          <p>Street: <?php echo $row["Street"]; ?></p>
          <p>City: <?php echo $row["City"]; ?></p>
          <p>State: <?php echo $row["State"]; ?></p>
          <p>Zip: <?php echo $row["Zipcode"]; ?></p>
        </div>
    </div>
    </div>
  </body>
</html>
