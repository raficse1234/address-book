<?php
	include('../../../include/db.php');
	$email = $_POST['email'];
	$sql= "SELECT * FROM persons WHERE Email='$email' ";
	$result = $conn->query($sql);

	$array = $result->fetch_array();

	echo json_encode($array);

	$conn->close();
?>