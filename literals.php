<?php
	//	Single line comment
	#	Single line commeny
	/*
	Multiline
	comment
	*/

	// Rules for variable naming
	/*
		- Always begins with $
		- First char after $ should be alpha or _
		- Rest can be alphanumeric and _
		- No spaces of other special characters
	*/

	$aString = "Hello";
	$world = 'world!';

	// Variables can be used inside double quote enclosed strings
	$aString = "$aString, $world <br />";
	echo($aString);

	echo("Character P in OCTAL - \\120 \120 <br />");
	echo("Character P in HEX - \\x50 \x50 <br />");
	echo("Character P in UNICODE - \\u{50} \u{50} <br />");
?>