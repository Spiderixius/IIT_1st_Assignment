<?php

namespace App\Controller;

class LoginController {

	public function __construct(){
	}

	public function login(){
		$this->ShowLogin();
		echo  "Hello World!";
	}

	public function showLogin(){
		$title = 'Login';
		
		require VIEW_DIR . '/pages/login.php';
	}

	public function logout(){
		$_SESSION["loggedIn"] = false;
		header ('Location: /login');
	}
}
