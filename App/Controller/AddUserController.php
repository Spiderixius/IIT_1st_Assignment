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
		if (isset($_SESSION['username'])) {
			require VIEW_DIR . '/pages/adduser.php';
		} else{
			header ('Location: /');
		}
	}

	public function showEditUserPage(){
		$title = 'Edit User';

		if (isset($_SESSION['username'])) {
			require VIEW_DIR . '/pages/editUser.php';
		} else{
			header ('Location: /');
		}
	}

	public  function addUser(){
		
		$info = $this->addUser->addUser();

		if ($info) {
			header ('Location: /userlist');
			echo "User added";
			echo "<br><a href='/userlist'> Go back to user list";
		} else {
			echo "User not added";
			echo "<br><a href='/userlist'> Go back to user list";
		}
	}

	public function deleteUser(){
		$info = $this->addUser->deleteUser();

		if ($info) {
			header ('Location: /userlist');
		} else {
			echo "User not deleted";
			echo "<br><a href='/userlist'> Go back to user list";
		}
	}

	public function editUser(){
		$info = $this->addUser->editUser();
		if ($info) {
			header ('Location: /userlist');
		} else {
			echo "User not edited";
			echo "<br><a href='/userlist'> Go back to user list";
		}
	}

}