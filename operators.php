<?php

#	Arithmetic	- {+, -, *, /, %}
$a = 10.5;
$b = 12; // Assignment: Happens from right to left
// echo(($a + $b));

#	Relational	- {==, !=, <, >, <=, >=, ===, !==}
if ('10' === 10) {
	echo("Yay!");
}

#	php is a loosely typed language

#	Logical 	- {&&, ||, !}; these are working with boolean (1, null)

#	Assignment	- {=, +=, -=, *=, /=, %=}
$a = 7;
$b = 10;
$b %= $a; // As same as $b = $b % $a;
// echo($b);

#	Unary 		- {++, --}
$a = 7;
$b = 10;
echo($a++ + ++$b - ++$a);

#	Bitwise 	- {&, |, ~, <<, >>, >>>}
// echo(1 & 2);
// echo(1 | 2);
echo(~2);


# Ternary/conditional operator (condition ? value_if_true : value_if_false)
# Used in CONDITIONALLY assigning a value
$var = "A" == "B" ? "TRUE" : "FALSE";