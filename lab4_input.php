<?php
// Lab Exercise 4: Handling JSON Input
// Test with Postman (POST, Body > raw > JSON):
//   {"username":"admin","password":"1234"}
// Or with curl:
//   curl -X POST http://localhost/lab4_input.php -H "Content-Type: application/json" -d "{\"username\":\"admin\",\"password\":\"1234\"}"

header('Content-Type: text/plain');

$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

if (!$data) {
    echo "No valid JSON received.\n";
    echo "Send a POST request with a JSON body, e.g.:\n";
    echo '{"username":"admin","password":"1234"}';
    exit;
}

echo "Username: " . ($data['username'] ?? 'N/A') . "\n";
echo "Password: " . ($data['password'] ?? 'N/A') . "\n";
