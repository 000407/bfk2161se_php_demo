<?php
	error_reporting(E_ALL | E_STRICT);
	include_once("handle_resume_upload.php");

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
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$id = md5("$nic $name");
	
	foreach ($_POST['education'] as $edu) {
		$edu_chosen_opts[$edu] = 1;
	}

	$education = implode('', array_values($edu_chosen_opts));

	handle_resume('resume', $id);

	$db = fopen("db.csv", "a") or die("Unable to open file!");
	fwrite($db, "$id,$name,$nic,$age,$gender,$education");
	fclose($db);

	$success = true;
?>