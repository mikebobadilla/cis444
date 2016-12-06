<?php
 	$server = $_SERVER["SERVER_ADDR"];
	// checks if you are on a local machine or not
	// if so, use local db credentials
	// else use online db credentials
	if(in_array($server, array("127.0.0.1", "::1"))){
		define("DB_SERVER", "localhost");
		define("DB_USERNAME", "root");
		define("DB_PASSWORD", "root");
		define("DB_DATABASE", "team4");
		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	} else {
		define("DB_SERVER", "localhost");
		define("DB_USERNAME", "bobad005");
		define("DB_PASSWORD", "hello123");
		define("DB_DATABASE", "team4");
		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	}

?>
