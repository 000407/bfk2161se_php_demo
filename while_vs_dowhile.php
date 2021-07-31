<?php
	/*
		Difference between while and do-while
	*/

	$i = 1;
	printf("BEFORE WHILE\n");
	while ($i < 1) {
		printf("$i\n");
		$i++;
	}
	printf("AFTER WHILE\n");




	$i = 1;
	printf("BEFORE DO-WHILE\n");
	do {
		printf("$i\n");
		$i++;
	} while ($i < 1);
	printf("AFTER DO-WHILE\n");