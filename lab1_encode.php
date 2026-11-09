<?php
// Lab Exercise 1: Basic JSON Encoding
$person = [
    "name"   => "Maria",
    "age"    => 21,
    "course" => "IT"
];

$json = json_encode($person);

echo $json;
// Output: {"name":"Maria","age":21,"course":"IT"}
