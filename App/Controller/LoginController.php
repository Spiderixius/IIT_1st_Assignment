<?php
namespace App\Controller;

class LoginController {
	public function showLogin(){
		$title = 'Login';
		
		require VIEW_DIR . '/pages/login.php';
	}
}
