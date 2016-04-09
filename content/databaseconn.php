<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "cloud");
	define("DB_PASS", "cloud");
	define("DB_NAME", "cloud");

	$conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(mysqli_connect_errno())
	{
		die("database connection failed".mysqli_connect_error());
	}
?>