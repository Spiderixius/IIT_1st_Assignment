<?php 

namespace App\Model;
use PDO;

class AddUserModel {
	// Function to add users to the database
	public  function addUser(){

		try {

			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$password = $_POST['password'];

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

		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}


	// Function to display the users inside a table
	public function showUsers(){

		try{
			require CONTROLLER_DIR . '/dbConnecterController.php';

			$result = $db->query('SELECT id, username FROM users ORDER BY id');


			echo "<table border='1'>
				<tr>
				<th>ID</th>
				<th>Username</th>
				<th></th>
				<th></th>
				</tr>";
			// This will make it so admin is not displayed on the table
			$row = $result->fetchColumn();
			while($row = $result->fetch(PDO::FETCH_ASSOC)){
	 			echo "<tr>";
		        echo "<td>" . $row['id'] . "</td>";
		        echo "<td>" . $row['username'] . "</td>";
		        echo '<td> 
		        		<form method="GET" action="/showEditUserPage"> 
		        			<input type="hidden" name="id" value="' . $row['id'] . '"/>
			        		<input type="hidden" name="username" value="' . $row['username'] . '"/>
		        			<input type="submit" value="EDIT" name="showEditUserPage"/> 
		        		</form></td>';
		        echo '<td> 
		        		<form method="POST" action="/deleteUser"> 
			        		<input type="hidden" name="id" value="' . $row['id'] . '"/>
		        			<input type="submit" value="DELETE" name="deleteUser"/> 
		        		</form></td>';
		        echo "</tr>";
			}
			echo '</table>';

		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	// Function to delete users from the database
	public function deleteUser(){
		$id = $_POST["id"];
		try {
			require CONTROLLER_DIR . '/dbConnecterController.php';
			$result = $db->query('SELECT * FROM users WHERE id="'.$id.'"');

			$row = $result->fetchColumn();
				if(!$row == 0){
					$statement = $db->query('DELETE FROM users WHERE id="'.$id.'" ');
					$db = null;
					return true;
				} else {
					die("No data present.");
				}	

		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	// Function to update users
	public function editUser(){

		$username = filter_input(INPUT_POST, 'newusername', FILTER_SANITIZE_STRING);
		$id = $_POST["id"];
		try {
			require CONTROLLER_DIR . '/dbConnecterController.php';
			$result = $db->query('SELECT * FROM users WHERE id="'.$id.'"');

			$row = $result->fetchColumn();
				if(!$row == 0){
					$statement = $db->prepare("UPDATE users SET username=:username WHERE id=:id");
					$statement->bindParam(':username', $username, PDO::PARAM_STR);
					$statement->bindParam(':id', $id, PDO::PARAM_INT);
					$statement->execute();
					$db = null;
					return true;
				} else {
					die("No data present.");
				}	

		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}