<?php
	DEFINE ('USER', 'root');
	DEFINE ('PASSWORD', 'root');
	DEFINE ('HOST', 'localhost');
	DEFINE ('DATABASE', 'mymedia');

	$mysqli = new MySQLi(HOST, USER, PASSWORD, DATABASE);

	if($mysqli->connect_error) {
		echo "<p class='error'>There was a problem connecting to the database</p>";
		echo $mysqli->connect_error;
		unset($mysqli);
		exit();
	} else {
		$mysqli->set_charset('utf8');
	}

?>