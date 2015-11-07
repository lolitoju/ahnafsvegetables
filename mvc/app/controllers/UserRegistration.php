<?php

class UserRegistration extends Controller{
	
	public function index(){
		$message = 'Please enter user data.';
		$user = $this->model('User');
		$DBConn = new DBConnection();
		if(isset($_POST['action']) && $_POST['action'] == 'Add user'){
			$user->fname = $_POST['fname'];
			$user->lname = $_POST['lname'];
			$user->email = $_POST['email'];

			if($user->isValid()){
				$stmt = $DBConn->connection->prepare('INSERT INTO users(fname, lname, email) VALUES (:fname, :lname, :email)');
				$stmt->execute((array)$user);
				$message = 'Good data!';
			}else{
				$message = 'Bad data!';
			}

		}

		$stmt = $DBConn->connection->prepare('SELECT ID, fname, lname, email FROM users');
		$stmt->execute();
		$stmt->setFetchMode (PDO::FETCH_CLASS , 'User');

		$results = [];
		while($record = $stmt->fetch()){
			$results[] = $record;
		}
		
		$this->view('UserRegistration/index',['message'=>$message, 'users'=>$results]);
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