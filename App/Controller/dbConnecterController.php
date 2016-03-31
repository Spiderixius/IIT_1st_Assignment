<?php
namespace App\Controller;
use PDO;

class dbConnecterController {
	public function __construct(){
	}

	public  function validate(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$host = "localhost";
		$user = "root";
		$pass = "";
		//$pass = "toor";
		$dbname = "MyGalleryDb";
		//$dbname = "mygallerydb";


		// Handle a bit of connection errors
		try {
			// Connect to server via PHP Data Object
			$dbconnection = new PDO('mysql:host='.$host.';dbname=' . $dbname, $user, $pass);



		} catch (PDOException $e) {
			echo htmlentities($e);
			die();
			echo "FAIL!";
		}

			$result = $dbconnection->query('SELECT * FROM users WHERE username="'.$username.'" && password ="'.$password.'";');
			$result->setFetchMode(PDO::FETCH_ASSOC);
			//$row = $result->fetch();

			if ($username && $password) {
				$row = $result->fetchColumn();
				if($row != 0){
					while ($info = $result->fetch(PDO::FETCH_ASSOC)) {
						$usernameDb = $info['username'];
						$passwordDb = $info['password'];

						if ($username == $usernameDb && $password == $passwordDb) {
							//header('Location: VIEW_DIR . /pages/login.php');
							//header(sprintf('Location: %s/pages/gallery.php', VIEW_DIR));
							require VIEW_DIR . '/pages/gallery.php';
							$_SESSION['username'] = $usernameDb;
						} else {
							die("You messed up maaan... Check your username or password.");
						}
					} 
				} else {
					die("Username not in the DB, talk with the owner to add you!");
				}
			}
		}
	}
?>