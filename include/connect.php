<?php
	// Database parameters, change to reflect your own environment
	$db_host		= 'hostname'; 
	$db_user		= 'username';
	$db_pass		= 'password';
	$db_database	= 'database'; 

	// Open database connection
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
	if($link === false){
		die("Error: Could not connect. " . mysqli_connect_error());
	}
?>