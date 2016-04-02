<?php
namespace App\Controller;

require MODEL_DIR . '/AddUserModel.php';

class AddUserController {

	private $addUser;

	public function __construct(\App\Model\AddUserModel $addUser){
		$this->addUser = $addUser;
	}

	public function showAddUserPage(){
		$title = 'Add User';

		require VIEW_DIR . '/pages/adduser.php';
	}

	public  function addUser(){
		
		$info = $this->addUser->addUser();

		if ($info) {
			echo "User added";
			echo "<br><a href='/userlist'> Go back to user list";
		} else {
			echo "Username taken";
			echo "<br><a href='/userlist'> Go back to user list";
		}
	}

	public function deleteUser(){
		$info = $this->addUser->deleteUser();

		if ($info) {
			echo "User deleted";
			echo "<br><a href='/userlist'> Go back to user list";
		} else {
			echo "User not delete";
			echo "<br><a href='/userlist'> Go back to user list";
		}
	}

}