<?php

namespace App\Controller;

require MODEL_DIR . '/AddUserModel.php';


class UserListController {

	private $showUser;

	public function __construct(\App\Model\AddUserModel $showUser){
		$this->showUser = $showUser;
	}

	public  function showUsers(){
		$title = 'Users';

		require VIEW_DIR . '/pages/userlist.php';
		$this->updateUserList();
	}

	public function updateUserList(){
		$this->showUser->showUsers();
	}
}