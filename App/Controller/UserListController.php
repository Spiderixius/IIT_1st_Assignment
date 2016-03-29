<?php

namespace App\Controller;

class UserListController {
	public function __construct(){
	}

	public  function showUsers(){
		$title = 'Users';

		require VIEW_DIR . '/pages/userlist.php';
	}
}