<?php 

session_start();

if (!isset($_POST['firstname']) || !isset($_POST['lastname'])
 || !isset($_POST['email']) || !isset($_POST['subject'])
  || empty($_POST['firstname']) || empty($_POST['lastname']) 
  || empty($_POST['email']) || empty($_POST['subject'])) {
	$_SESSION['message'] = 'Missing required paramaters in form!!!';
	header("location: error.php");
	die;
}


$firstname	=$_POST['firstname'];
$lastname	=$_POST['lastname'];
$email		=$_POST['email'];
$subject	=$_POST['subject'];

require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();

$sql = sprintf("INSERT INTO `contact`(`id`, `firstname`, `lastname`, `email`, `subject`) VALUES (NULL, '%s', '%s','%s', '%s')", $firstname, $lastname, $email, $subject);

$result = $databaseConnection->executeQuery($sql);


if ($result !== true) {
	$_SESSION['message'] = $result;
	header("location: error.php");
	die;
}


 header("location: home.php");
 die;
 ?>