<?php 

if (!isset($_GET['query'])|| empty($_GET['query']) ) {
	die;
}

$query = $_GET['query'];

require('DatabaseConnection.php');

$databaseConnection = new DatabaseConnection();

$sql = "SELECT * FROM myguests WHERE fullname LIKE '%".$query."%'";

$result = $databaseConnection->executeSelectQuery($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['fullname']."</td><td>".$row['email']."</td><td>".$row['activity']."</td></tr>";
}

 ?>