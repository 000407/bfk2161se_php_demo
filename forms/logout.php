<?php
	session_start();
	session_unset();
	unset($_SESSION["user"]);
	session_destroy();
	session_write_close();

	header("Location: home.php");