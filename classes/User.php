<?php
include_once('DbConnection.php');
class User extends DbConnection {
	public function __construct() {
		parent::__construct();
	}
 // завка за проверка дали има такав потребител с такава парола
	public function check_login($username, $user_password) {
		$user_password = md5($user_password);
		$sql = "SELECT * FROM users WHERE username = '$username' AND user_password = '$user_password'";
		$query = $this->connection->query($sql);
		if($query->num_rows > 0) {
			$row = $query->fetch_array();
			return $row['user_id'];
		}
		else {
			return false;
		}
	}
 
	public function details($sql) {
		$query = $this->connection->query($sql);
		$row = $query->fetch_array();
		return $row;       
	}
 
	public function escape_string($value) { 
		return $this->connection->real_escape_string($value);
	}
}