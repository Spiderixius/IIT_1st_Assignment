<?php
namespace App\Model;
use PDO;

class LoginModel {
	public function __construct(){
	}

	public  function validate(){
		//$username = $_POST['username'];
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		//$password = $_POST['password'];

		$password = hash('sha256', $password);


		require CONTROLLER_DIR . '/dbConnecterController.php';
		$result = $db->query('SELECT * FROM users WHERE username="'.$username.'" && password ="'.$password.'";');
		$result->setFetchMode(PDO::FETCH_ASSOC);

		if ($username && $password) {
			$row = $result->fetchColumn();
			if($row != 0){
				while ($info = $result->fetch(PDO::FETCH_ASSOC)) {
					$usernameDb = $info['username'];
					$_SESSION['username'] = $usernameDb;
				} 
			} else {
				//require VIEW_DIR . '/pages/gallery.php';
				die("Username not in the DB, talk with the owner to add you!");
			}
			require VIEW_DIR . '/pages/gallery.php';
			
		}
	}
}
