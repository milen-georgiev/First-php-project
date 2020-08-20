<?php
class DbConnection {
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'netit'; 
	protected $connection;
// връзка с базата с данни
	public function __construct() {
		if (!isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			if (!$this->connection) {
				echo 'Грешка при свързването с базата данни! Моля, опитайте отново по-късно!';
				exit;
			}            
		}  
		$this->connection->set_charset("utf8");
		return $this->connection;
	}

	public function query($sql)
    {
        return $this->connection->query($sql);
    }
}