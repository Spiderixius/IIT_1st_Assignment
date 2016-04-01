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
		
		$info = $this->loginModel->validate();
		
		
		if ($info) {
			require VIEW_DIR . '/pages/gallery.php';
		} else {
			die("404: No such page. <br><a href='/'> Go back to Login");
		}
		
	}

	public function logout(){
		$_SESSION["loggedIn"] = false;
		header ('Location: /login');
	}
}
