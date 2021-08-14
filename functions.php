<?php

/*
function <<name>> (<<parameter>>) {
	<<body>>
}
*/

function fn1($p, $c) { //$c will be a callback
	// printf("%s \n", $p);
	$c(); // Invoking the callback
}

fn1("Hello", function() { // Anonymous function, passed as a callback
	// printf("A callback invoked!");
});

$cb = fn() => printf("Another callback invoked!");

// fn1("Hi", $cb);


$strings = ["apple", "orange", "banana", "coconut"];

$lengths = array_map(
	fn($i) => strtoupper($i),
	$strings);

// print_r($lengths);

$nums = [10, 15, 7, 21];

$sum = array_reduce($nums, fn($a, $i) => $a += $i);

print_r($sum);
