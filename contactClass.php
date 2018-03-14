<?php 
class UserInterface {

	private $host;
	private $user;
	private $pass;
	private $db;
	private $mysqli;

	public function __constructor(){
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->db = 'advpower';
		$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db) 
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}

	

	public function login() {
		$email = $this->mysqli->($this->db,$_POST['login']);
		$result = $this->mysqli->query("SELECT * FROM users WHERE email='$email'");

		if($result->num_rows == 0) {
			$_SESSION['message'] = 'User with that email doesnt exist';
			header("location: error.php");
		}
		else{
			$user = $result->fetch_assoc();
			if( password_verify($_POST['password'], $user['password'])){

				$_SESSION['email'] == $user['email'];
				$_SESSION['first_name'] == $user['first_name'];
				$_SESSION['last_name'] == $user['last_name'];
				$_SESSION['active'] == $user['active'];

				$_SESSION['logged_in'] = true;
				header("location: home.php");
			}
			else{
				$_SESSION['message'] = 'You have entere wrong password, try again';
				header("location: error.php");
			}
		}
	}
}

 ?>