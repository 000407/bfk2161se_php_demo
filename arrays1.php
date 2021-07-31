<?php
	$arr = [80, "APIIT", true, new stdClass()]; # this is an array

	# Each element has an index, based on 0
	#       0    1        2     3
	$arr = [80, "APIIT", true, new stdClass()];

	echo($arr[1]."\n"); // Access elements in the array
	$arr[3] = 13.05; // Set/write elements in to the array

	echo($arr[3]."\n");

	echo("Lenght of \$arr is " . count($arr) . "\n");

	// Append (add new at the end)
	$arr[] = "A string at the end";

	echo("Lenght of \$arr is " . count($arr) . "\n");

	echo($arr[4]);

	echo("\n\n\n");

	// Remove elements: unset
	unset($arr[2]);

	echo("New array length: ".count($arr));

