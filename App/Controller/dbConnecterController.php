<?php

$serverhost = "localhost:8000";
$user = "root";
$pass = "toor";
$dbname = "mygallerydb";


// Handle a bit of connection errors
try {
	$dbconnection = new PDO('mysql:host='.$serverhost.';dbname=' . $dbname, $user, $pass);
} catch (PDOException $e) {
	echo htmlentities($e);
	die();
}

$result = $connection->query('SELECT username, password FROM users WHERE username="'.$name.'" && password ="'.$pw.'";');
$result->setFetchMode(PDO::FETCH_ASSOC);
if(!empty($row)){
		$_SESSION["loggedIn"] = true;
		$_SESSION["userid"] = $row['id'];
		echo json_encode(array('value' => true));
}

