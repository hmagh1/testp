<?php
$id = $_GET['id'];
$mysqli = new mysqli("mysql_sgbd", "user", "userpass", "testdb");

$stmt = $mysqli->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(["message" => "User deleted"]);
