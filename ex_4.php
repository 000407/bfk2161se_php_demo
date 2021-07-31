<?php
	/*
		Write a program that prints odd numbers between 1 and 20 (using do-while)
	*/

	$i = 1;

	do {
		if ($i % 2 == 1) {
			printf("$i\n");
		}
		$i++;
	} while ($i <= 20);