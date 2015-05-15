<?php
	require 'include/connect.inc.php';
	require 'include/functions.inc.php';
	$username = isset($_POST['username']) ? sanitize($_POST['username'], $mysqli) : NULL;
	$password = isset($_POST['password']) ? sanitize($_POST['password'], $mysqli) : NULL;


		$q = "SELECT * FROM user WHERE (username = '$username' AND pass = SHA1('$password'))";
		
		$result = $mysqli->query($q); 
		if($result->num_rows==0) { //if the username and password don't match
			echo "FAILED";
		} else { //if the username and password are valid
			echo "LOGGED IN!";
		}
?>