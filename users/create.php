<?php
require '../db.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $mysqli->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $data['name'], $data['email']);
$stmt->execute();
echo json_encode(["message" => "User created successfully"]);
