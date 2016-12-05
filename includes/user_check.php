<?php
  if(!isset($_SESSION["user"])){
    header("location: index.php");
    exit();
  }

  include("config.php");
  $email = $_SESSION["user"];

  $res = mysqli_query($link, "SELECT Username, FirstName, LastName, Company, Street, City, State, Zipcode, Email, Password FROM users WHERE Email='$email'");
  $row = mysqli_fetch_array($res);
  $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

  if( $count == 1 ) {
    $_SESSION['user'] = $row['Email'];
  } else {
    header("location: index.php");
    exit();
  }
?>
