<?php
	require 'include/connect.inc.php';
	require 'include/functions.inc.php';
	$username = isset($_POST['username']) ? sanitize($_POST['username'], $mysqli) : NULL;
	$password1 = isset($_POST['password1']) ? sanitize($_POST['password1'], $mysqli) : NULL;
	$password2 = isset($_POST['password2']) ? sanitize($_POST['password2'], $mysqli) : NULL;
	$firstname = isset($_POST['firstname']) ? sanitize($_POST['firstname'], $mysqli) : NULL;
	$lastname = isset($_POST['lastname']) ? sanitize($_POST['lastname'], $mysqli) : NULL;
	$email = isset($_POST['email']) ? sanitize($_POST['email'], $mysqli) : NULL;

	if($password1 != $password2) { //make sure the passwords are the same
		echo "MISMATCH";
	} else {
		$q = "SELECT * FROM user WHERE username = '$username'";
		
		$result = $mysqli->query($q); 
		if($result->num_rows!=0) { //if the username is taken
			echo "TAKEN";
		} else { //if the username is available
			$q = "INSERT INTO user (username, pass, first_name, last_name, email, role_id) VALUES ('$username', SHA1('$password1'), '$firstname', '$lastname', '$email', 2)";
			if($mysqli->query($q)) { //if the query runs
				if($mysqli->affected_rows == 1) {
					echo "SUCCESS";
				} else {
					echo "FAILURE";
				}	
			} else {
				echo "FAILURE";
			}
		}
	}
?>