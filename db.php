<?php
	$servername = "us-cdbr-iron-east-04.cleardb.net";
	$username = "b207514370152f";
	$password = "4cbd8a50";
	$dbname = "ad_a261e53a087dc9c";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	} else {
		//echo "ALL GOOD";
	}
?>