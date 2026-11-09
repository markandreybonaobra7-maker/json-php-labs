<?php
// Lab Exercise 3: JSON Response API Simulation
header('Content-Type: application/json');

$user = [
    "id"     => 1,
    "name"   => "Maria",
    "email"  => "maria@example.com",
    "status" => "active"
];

echo json_encode($user);
// Output: {"id":1,"name":"Maria","email":"maria@example.com","status":"active"}
