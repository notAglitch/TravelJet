<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Air_lines";

$conn = mysqli_connect ($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die('Database error :'.$conn->connect_error);
	}
	else {
		echo "Connection Successful";
	}
?>