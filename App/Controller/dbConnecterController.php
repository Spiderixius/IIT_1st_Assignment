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
			$row = $result->fetch();
			echo $row[0];
		
		
	}
}

?>

