<?php
	$page_title="Home";
	require 'include/header.inc.php';
	echo "<p>Testing Content</p>";
	$q = "SELECT * FROM user";
	
	if($result = $mysqli->query($q)) {
		echo $result->num_rows . " rows returned";
		while($row = $result->fetch_array(MYSQLI_ASSOC)) {
			foreach($row as $k => $v) {
				echo "<p>$k = $v</p>";
			}
		}
	}

	require 'include/footer.inc.php';
?>

