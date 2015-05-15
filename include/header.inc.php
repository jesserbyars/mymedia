<?php
	require 'include/connect.inc.php';
	require 'include/functions.inc.php';
	$site_title = "MyMedia";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title><?php echo "$site_title - $page_title" ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/mymedia.js"></script>
</head>
<body>

	<div class="system-message"></div>

	<div class="screen-dim"><div class="loader">Loading</div></div>

	<div class="wrapper">

		<header>
			<div class="logo">
				<p>myMedia</p>
			</div>
			<nav class="main_navigation">

			</nav>
		</header>

		<section class="main_content">