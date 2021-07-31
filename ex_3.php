<?php
	/*
		Write a program that prints odd numbers between 1 and 20 (using while)
	*/

	$i = 1;

	/*while ($i <= 20) {
		if ($i % 2 == 1) {
			printf("$i\n");
		}
		$i++;
	}*/
	
	while ($i <= 20) {
		printf("$i\n");
		$i += 2;
	}