<?php

namespace App\Controller;

require MODEL_DIR . '/LoginModel.php';

class LoginController {

private $loginModel;

	public function __construct(\App\Model\LoginModel $loginModel){
		$this->loginModel = $loginModel;
	}

	public function showLoginPage(){
		$title = 'Login';
		require VIEW_DIR . '/pages/login.php';
	}

	public function login(){
		$input = file_get_contents('php://input');
		$data = json_decode($input, true);
		
		$username = $data["username"];
		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$password = $data["password"];
		$password = hash('sha256', $password);

		$info = $this->loginModel->validate($username, $password);
		
		if ($info) {
			echo json_encode(array('value' => true));
		} else {
			echo json_encode(array('value' => false));
		}
		
	}

	public function logout(){
		//$_SESSION["loggedIn"] = false;
		session_unset();
		session_destroy();
		header ('Location: /');
	}
}
