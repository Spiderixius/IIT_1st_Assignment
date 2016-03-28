<?php


$serverhost = "localhost:8000";
$user = "root";
$pass = "toor";
$dbname = "MyGalleryDb";


// Handle a bit of connection errors
try {
	$dbconnection = new PDO("mysql:host=$serverhost;dbname=$dbname",$user,$pass);
} catch (PDOException $e) {
	echo htmlentities($e);
	die();
}

