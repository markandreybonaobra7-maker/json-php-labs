<?php
// Lab Exercise 2: Decoding JSON
$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// Decode as PHP object
$obj = json_decode($json);

// Decode as PHP associative array
$arr = json_decode($json, true);

echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr['email'] . "<br>";

// Extra: show all values from both formats
echo "<hr>";
echo "Object -> name: {$obj->name}, email: {$obj->email}<br>";
echo "Array -> name: {$arr['name']}, email: {$arr['email']}<br>";
