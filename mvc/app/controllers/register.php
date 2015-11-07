<?php

class register extends Controller {
	
	public function index() {
		$message = '';
		$connection = DBConnection::getInstance()->getConnection();
		if(isset($_POST['action']) && $_POST['action'] == 'Submit') {
			if($_POST["password"] == $_POST["passwordCheck"]) {
				unset($_POST["action"]);
				unset($_POST["passwordCheck"]);
				$_POST["newsletter"] = isset($_POST["newsletter"])? "YES": "NO";
				$_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
				$stmt = $connection->prepare("INSERT INTO users(username, password, fname, lname, email, phone, address, postal_code, city, province, newsletter) " .
																		 "VALUES(:username, :password, :fname, :lname, :email, :phone, :streetAddress, :postalCode, :city, :province, :newsletter)");
				$stmt->execute((array)$_POST);
				header('location: home');
			} else $message = "Passwords do not match!";
		}
		/*
		$stmt->setFetchMode (PDO::FETCH_CLASS , 'User');

		$results = [];
		while($record = $stmt->fetch()){
			$results[] = $record;
		}*/
		
		$this->view('register/index', ["message" => $message]);
	}


	public function delete(){
		$message = 'Please enter user data.';

		if(isset($_POST['action']) && $_POST['action'] == 'Delete'){
			$DBConn = new DBConnection();
			$ID = $_POST['ID'];
			$stmt = $DBConn->connection->prepare('DELETE FROM users WHERE ID = ?');
			$stmt->execute(array($ID));
		}

		header('Refresh');
	}



}

?>