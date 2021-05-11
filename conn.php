<?php 
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'project';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(mysqli_connect_errno()){
	 	//connection failed
	 	echo 'failed to connect to MySQL '.mysqli_connect_errno();
	 }
?>