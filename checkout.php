<?php
  include("includes/session.php");
  var_dump($_COOKIE);
  var_dump($_POST);
  if(isset($_POST["btn-checkout"])){
    $id = $_POST["flowerID"];
    if(empty($_COOKIE["items"])){
      $cookie = array($id);
      $cookie = serialize($cookie);
      setcookie("items", $cookie, 86400 * 10);
      setcookie("count", 1, 86400 * 10);
    } else {
      $count = $_COOKIE["count"] + 1;
      $cookie = $_COOKIE["items"];
      $cookie = unserialize($cookie);
      array_push($cookie, $id);
      $cookie = serialize($cookie);
      setcookie("items", $cookie, 86400 * 10);
      setcookie("count", $count, 86400 * 10);
    }
  }

  if(isset($_COOKIE["items"])){
    $cookie = $_COOKIE["items"];
    $cookie = unserialize($cookie);
    echo "+++++++";
    $res = mysqli_query($link, "SELECT * FROM FLOWERS WHERE FlowerID IN ". implode(", ", $cookie));
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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

    </div>
  </body>
</html>
