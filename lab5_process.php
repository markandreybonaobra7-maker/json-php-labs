<?php
// Lab Exercise 5: receives JSON from AJAX, responds in JSON
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$name = trim($data['name'] ?? '');

if ($name === '') {
    echo json_encode(["status" => "error", "message" => "Name is required."]);
    exit;
}

echo json_encode([
    "status"  => "success",
    "message" => "Welcome, " . htmlspecialchars($name) . "!"
]);
// Output: {"status":"success","message":"Welcome, Maria!"}
