<?php 

namespace App\Model;
use PDO;

class AddUserModel {
	public function __construct(){
	}

	public  function addUser(){

		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

		$password = hash('sha256', $password);


		require CONTROLLER_DIR . '/dbConnecterController.php';

		$result = $db->query('SELECT * FROM users WHERE username="'.$username.'"');

		if ($username && $password) {

			$row = $result->fetchColumn();
			if($row == 0){
				$statement = $db->query("INSERT INTO users (username,password) VALUES ('$username', '$password')" );
				$db = null;
				return true;
			} else {
				die("Username already taken, pick something else! <br><a href='/userlist'> Go back to user list");
			}	
		}
	}


	public function showUsers(){


		require CONTROLLER_DIR . '/dbConnecterController.php';

		$result = $db->query('SELECT id, username FROM users');

		$row = $result->fetchColumn();
		echo "<table border='1'>
			<tr>
			<th>ID</th>
			<th>Username</th>
			</tr>";

		while($row = $result->fetch(PDO::FETCH_ASSOC)){
 			echo "<tr>";
	        echo "<td>" . $row['id'] . "</td>";
	        echo "<td>" . $row['username'] . "</td>";
	        echo "</tr>";

		}
		echo '</table>';
	}
}