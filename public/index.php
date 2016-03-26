<?php

/********************
*	Configuration 	*
********************/

// Enable all error levels
error_reporting(-1);

// Output all errors to the browser (for debugging only, remove when ready for consumer)
ini_set('display_errors', 1);

// Global constants
define('VIEW_DIR', realpath(__DIR__ . '/../views'));



/********************
*	Initialization	*
********************/

// Handles the PHPSESSID cookie and populates the $_SESSION array with the user data
session_start();



/**************
*	Routing   *
**************/

// Conversion of uri "/derp%40herp?id=1" to "/derp@herp" much prettier, yes?
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Controller for the pages

switch ($uri) {
	case '/':
		require VIEW_DIR . '/pages/login.php';
		break;
	case '/upload':
		require VIEW_DIR . '/pages/upload.php';
		break;
	case '/addUser':
		require VIEW_DIR . '/pages/addUser.php';
		break;
	case '/contactform':
		require VIEW_DIR . '/pages/contactform.php';
		break;
	case '/gallery':
		require VIEW_DIR . '/pages/gallery.php';
		break;
	case '/userList':
		require VIEW_DIR . '/pages/userList.php';
		break;
	default:
		break;
}

