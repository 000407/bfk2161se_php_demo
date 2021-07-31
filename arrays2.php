<?php
	# Associative arrays
	# As same as dictionaries
	# key => value pairs

	$arrAssoc = [
		"au" => "Sydney",
		"lk" => [
			"ws" => "Colombo",
			"cn" => "Kandy",
			"so" => "Galle",
			"ea" => "Ampara",
			"nw" => "Kurunegala"
		],
		"in" => "New Delhi"
	];


	# Enhanced for loop
	foreach ($arrAssoc["lk"] as $k => $v) {
		printf("%s => %s\n", $k, $v);
	}