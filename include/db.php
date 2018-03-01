<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db ="address-book";
	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error)
	  {
	  	echo "Failed to connect with database: " . $conn->connect_error;
	  }
?>