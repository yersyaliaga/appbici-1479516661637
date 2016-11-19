<?php
	$servername = "us-cdbr-iron-east-04.cleardb.net";
	$username = "bdf2d2dca7d3a1;
	$password = "88b74944";
	$dbname = "ad_f9d396f9a45be96";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	} else {
		//echo "ALL GOOD";
	}
?>