<?php
	/*
		Write a program that prints odd numbers between 1 and 20 (using while)
	*/
//       COUNTER;    GUARD COND;   CTR CHANGE;
	for ( $i = 1;     $i <= 20;       $i++       ) {
		if ($i % 2 == 1) {
			printf("$i\n");
		}
	}

/*

COUNTER;
(REPEAT UNTIL THE GUARD COND IS FALSE OR INTERNALLY TERMINATED){
	GUARD COND;
	BODY;
	CTR CHANGE;
}
*/