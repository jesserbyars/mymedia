<?php
	$page_title="Home";
	require 'include/header.inc.php';
	// Sample OOP Query
	// echo "<p>Testing Content</p>";
	// $q = "SELECT * FROM user";
	
	// if($result = $mysqli->query($q)) {
	// 	echo $result->num_rows . " rows returned";
	// 	while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	// 		foreach($row as $k => $v) {
	// 			echo "<p>$k = $v</p>";
	// 		}
	// 	}
	// }
?>

<p>Welcome to myMedia, where you can keep track of all your favorites!</p>
<p> <span class="create_account_link">Create an account</span> to get started, or <span class="login_link">Log in</span> to an existing account.</p>

<div class="create_account">
	<p>So, who are you?</p>
	<form method="post" action="process_create_ajax.php">
		<input type="text" placeholder="Username" name="username" maxlength="40">
		<input type="password" placeholder="Password" name="password1" maxlength="40">
		<input type="password" placeholder="Reenter Password" name="password2" maxlength="40">
		<input type="text" placeholder="First Name" name="firstname" maxlength="40">
		<input type="text" placeholder="Last Name" name="lastname" maxlength="40">
		<input type="email" placeholder="Email Address" name="email" maxlength="80">
		<input type="submit" value="Sign up" class="signup_submit">
	</form>
</div><!--/.create_account-->

<div class="log_in">
	<p>Log in to your account</p>
	<form method="post" action="process_login_ajax.php">
		<input type="text" placeholder="Username" name="username">
		<input type="password" placeholder="Password" name="password">
		<input type="submit" value="Log In" class="login_submit">
	</form>
</div>
<?php
	require 'include/footer.inc.php';
?>

