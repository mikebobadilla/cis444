<?php
	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "root");
	define("DB_DATABASE", "team4");
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  // if($link){
  //   echo "connected \n";
  //   $result = mysqli_query("SELECT * FROM USER");
  //   $row = mysqli_fetch_array($result);
  //   print_r($result);
  // }
?>
