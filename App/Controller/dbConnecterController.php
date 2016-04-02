<?php
namespace App\Controller;

use PDO;

$host = "localhost";
$user = "root";
$pass = "";
$pass = "toor";
//$dbname = "MyGalleryDb";
$dbname = "mygallerydb";


// Handle a bit of connection errors
try {
	// Connect to server via PHP Data Object
	$db = new PDO('mysql:host='.$host.';dbname=' . $dbname, $user, $pass);
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
