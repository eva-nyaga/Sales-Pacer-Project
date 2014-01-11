<?php
session_start();
//error_reporting(0);

require 'config.php';
require 'general.php';
require 'users.php';

if (logged_in() === true) {
	$session_id = $_SESSION['id'];
	$user_data = user_data($session_user_id, 'id', 'username', 'password', 'fname', 'lname', 'contact');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
}

$errors = array();
?>
