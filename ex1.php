<?php
	/* Write a program that
		- if todays date is even, print "It's an even day"
		- if todays date is odd, print "It's an odd day"
	*/
	$date = date("d");

	if ($date % 2 == 0) {
		echo("It's an even day");
	}
	else {
		echo("It's an odd day");
	}