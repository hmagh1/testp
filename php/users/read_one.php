<?php
$id = $_GET['id'];
$mysqli = new mysqli("mysql_sgbd", "user", "userpass", "testdb");

$stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
echo json_encode($result->fetch_assoc());
