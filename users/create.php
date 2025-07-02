<?php
require '../db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['name'], $data['email'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing name or email"]);
    exit;
}

$stmt = $mysqli->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $data['name'], $data['email']);

if ($stmt->execute()) {
    echo json_encode(["message" => "User created"]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Database error"]);
}
