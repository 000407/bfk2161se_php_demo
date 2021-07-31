<?php

$response = array(
	"name" => "John Doe",
	"age" => 34,
	"qualified" => true
);

header("Content-Type: application/json");
echo(json_encode($response));