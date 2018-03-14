<?php 

session_start();

if (!isset($_POST['uname']) || !isset($_POST['activites'])
 || !isset($_POST['email']) || empty($_POST['activites'])
  || empty($_POST['uname']) || empty($_POST['email']) ) {
	$_SESSION['message'] = 'Missing required paramaters in form!!!';
	header("location: error.php");
	die;
}


$uname	=$_POST['uname'];
$activity	=$_POST['activites'];
$email		=$_POST['email'];

require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();

$sql = sprintf("INSERT INTO `myguests`(`id`, `fullname`, `activity`, `email`) VALUES (NULL, '%s','%s','%s')", $uname, $activity, $email);

$result = $databaseConnection->executeQuery($sql);


if ($result !== true) {
	$_SESSION['message'] = $result;
	header("location: error.php");
	die;
}


 header("location: home.php");
 die;
 ?>s