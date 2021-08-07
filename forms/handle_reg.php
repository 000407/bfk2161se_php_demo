<?php
	error_reporting(E_ALL | E_STRICT);
	include_once("handle_resume_upload.php");
	include_once("user_entity.php");

	$edu_chosen_opts = [
		'ol' => 0,
		'al' => 0,
		'd' => 0,
		'hd' => 0,
		'b' => 0,
		'pg' => 0
	];

	$name = $_POST['name'];
	$nic = $_POST['nic'];
	$passwd = sha1($_POST['passwd']);
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$id = md5("$nic $name");
	
	foreach ($_POST['education'] as $edu) {
		$edu_chosen_opts[$edu] = 1;
	}

	$education = implode('', array_values($edu_chosen_opts));

	handle_resume('resume', $id);

	$user = new UserEntity;

	$user->user_id = $id;
	$user->name = $name;
	$user->nic = $nic;
	$user->passwd = $passwd;
	$user->age = $age;
	$user->gender = $gender;
	$user->education = $education;

	if($user->save()) {
		$success = true;
	}
	else {
		$success = false;
		$message = "Unknown error occurred while trying to save user data!";
	}
?>