<?php
class DBConnection {
	private static $instance;
	private $connection;

	private $_DBUser = 'root';
	private $_DBPass = '';
	private $_DBName = 'casestudy';

	static function getInstance() {
		if(!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	function getConnection(){
		if(!$this->connection) {
			$this->connection = new PDO('mysql:host=localhost;dbname=' . $this->_DBName, $this->_DBUser, $this->_DBPass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return $this->connection;
	}
}

?>