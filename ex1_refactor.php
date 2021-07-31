<?php
	/* Write a program that
		- if todays date is even, print "It's an even day"
		- if todays date is odd, print "It's an odd day"
	*/
	$date = date("d");

	$name =  isset($_GET["name"]) ? $_GET["name"] : "earthling";
	
	$message = ($date % 2 == 0) ? "It's an even day" : "It's an odd day";

	printf("%s, %s!", $message, $name);