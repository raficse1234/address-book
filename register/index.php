<?php
	include('../include/db.php');
	$fn = trim($_POST['fn']);
	$ln = trim($_POST['ln']);		
	$username = trim($_POST['username']);		
	$password = md5(trim($_POST['password']));
	if(strlen($fn) > 0 && strlen($ln) > 0 && strlen($username) > 0 && strlen(trim($_POST['password'])) > 0){
		//if user is already registerd

		$sql = "SELECT * FROM users WHERE Username='$username'";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			echo '<p style="color: #9F6000;font-weight: bold;">Username is already taken. Try Different One.</p>';
		}
		else{

			$sql = "INSERT INTO users(First_Name,Last_Name,Username,Password) VALUES('$fn','$ln','$username','$password')";

			if($conn->query($sql)===TRUE){
				echo '<p style="color: #4F8A10;font-weight: bold;">Registration Successful!</p>';
			}
			else{
				echo '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
			}
		}	
	}
	else{
		echo '<p style="color: #D8000C;font-weight: bold;">Please Fill All The Details.</p>';
	}

	$conn->close();			
?>