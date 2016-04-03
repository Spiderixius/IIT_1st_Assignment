<?php
namespace App\Model;
use PDO;

class LoginModel {
	public  function validate($username, $password){


		try{

			//$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			//$password = $_POST['password'];

			//$password = hash('sha256', $password);

			require CONTROLLER_DIR . '/dbConnecterController.php';
			$result = $db->query('SELECT * FROM users WHERE username="'.$username.'" AND password ="'.$password.'";');
			$result->setFetchMode(PDO::FETCH_ASSOC);

			//if ($username && $password) {

				$usernameDb=null;
				while ($info = $result->fetch(PDO::FETCH_ASSOC)) {
					$usernameDb = $info['username'];
					$_SESSION['username'] = $usernameDb;
				} 
				if ($usernameDb != null) {

					return true;				
				} else {
					return false;
				}

		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}
