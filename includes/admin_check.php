<?php
  if(!isset($_SESSION["role"])){
    header("location: index.php");
    exit();
  }

  if($_SESSION["role"] != "Admin"){
    header("location: index.php");
    exit();
  }
 ?>
