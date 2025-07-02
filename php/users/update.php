<?php
$id = $_GET['id'];
$data = json_decode(file_get_contents("php://input"), true);
$mysqli = new mysqli("mysql_sgbd", "user", "userpass", "testdb");

$stmt = $mysqli->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $data['name'], $data['email'], $id);
$stmt->execute();

echo json_encode(["message" => "User updated"]);
