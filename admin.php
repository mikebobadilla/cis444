<?php
  include("includes/admin_check.php");
  $editUser = $_GET["user"];
  $editFlower = $_GET["flower"];
  $res = mysqli_query($link, "SELECT * FROM users");
  $users = mysqli_fetch_array($res);
  $res = mysqli_query($link, "SELECT * FROM flowers");
  $flowers = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <style media="screen">
      .wrapper {
        margin: auto;
        width: 90%;
        max-width: 1000px;
        background: #163f5a;
        position: relative;
        padding: 10px;
      }

      .content {
        display: flex;
        justify-content: space-between;
      }

      .info {
        display: flex;
        width: 50%;
      }

      .left {
        align-self: flex-start;
      }
    </style>
  </head>
  <body>
    <div class="topDivider">
      <?php include("nav.php"); ?>
    </div>
    <div class="wrapper">
      <div class="content">
        <div class="info left">
          <h4>Flowers</h4>

        </div>
        <div class="info left">
          <h4>Users</h4>

        </div>

      </div>
    </div>
  </body>
</html>
