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
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))


