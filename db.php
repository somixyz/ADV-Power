<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'advpower';
	$mysqli = new mysqli($host,$user,$pass,$db) ;//or die($mysqli->error);//


	if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  echo "Connected successfully";
 ?>