<?php

function handle_resume($fname, $tname) {
	if (isset($_FILES[$fname])) {
		$upload = $_FILES[$fname];

		$target_dir = "uploads/";
		$ext = pathinfo($upload["name"], PATHINFO_EXTENSION);

		$target_file = "$target_dir$tname.$ext";

		//TODO: File type and size validations to be added

		move_uploaded_file($upload["tmp_name"], $target_file);
	}
}