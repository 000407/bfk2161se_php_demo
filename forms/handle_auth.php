<?php
	error_reporting(E_ALL | E_STRICT);

	include_once("user_entity.php");

	$nic = $_POST['nic'];
	$passwd = sha1($_POST['password']);

	$user = new UserEntity;

	$user->nic = $nic;
	$user->passwd = $passwd;

	$user->autheticate();

	// if($user->autheticate()) {
	// 	$success = true;
	// }
	// else {
	// 	$success = false;
	// 	$message = "Unknown error occurred while trying to save user data!";
	// }
?>