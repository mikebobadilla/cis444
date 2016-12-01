<!-- Jason Sneddon - snedd001
     Roger Delgado - delga051
     Kristina Nystrom - nystr001
     Zachary Go - goo06
     Michael Bobadilla - bobad05
     CIS 444 - Term Project
     logout.php
-->
<?php
	session_start();

	if (!isset($_SESSION['user'])) {
  	header("Location: index.php");
 	} else if(isset($_SESSION['user'])!="") {
  	header("Location: index.php");
 	}

 	if (isset($_GET['logout'])) {
	  unset($_SESSION['user']);
	  session_unset();
	  session_destroy();
	  header("Location: index.php");
	  exit;
	}
?>
