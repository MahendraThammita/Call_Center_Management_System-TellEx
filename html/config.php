<?php

	$severname = "localhost";
	$passwors = "";
	$username = "root";
	$dbname = "call center";

	$conn = mysqli_connect($severname , $username , $passwors , $dbname);
	
	date_default_timezone_set("Asia/Colombo");

	if($conn -> connect_error)
	{
		die("Connection error : " . $conn -> connect_error);
	}

	else
		echo "<p style = 'Display : none;'>Successfully connected</p>";
		session_start();

?>