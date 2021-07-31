<?php
	/* Write a program that display the following messages based on today's day of week
		- SAT - Weekend Being
		- SUN - Weekend End
		- MON - Week Being
		- FRI - Week End
		- ELSE- Weekday
	*/
	$dow = date("D");

	switch ($dow) {
		case 'Mon':
			echo ("Week Being");
			break;

		case 'Fri':
			echo ("Week End");
			break;

		case 'Sat':
			echo ("Weekend Being");
			break;

		case 'Sun':
			echo ("Weekend End");
			break;

		default:
			echo("Weekday");
	}