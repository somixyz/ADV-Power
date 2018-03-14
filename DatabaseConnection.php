<?php 

class DatabaseConnection {

	private $host;
	private $user;
	private $pass;
	private $db;
	private $mysqli;

	public function __construct() {
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->db = 'advpower';
		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
		if(mysqli_connect_error()) {
			die("Failed to conencto to MySQL:");
		}
	}

	public function executeSelectQuery($sql) {
		return $this->mysqli->query($sql);
	}

	public function executeQuery($sql) {
		return $this->mysqli->query($sql) === TRUE ? true : $this->mysqli->error;
	}

}