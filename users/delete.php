<?php
require '../db.php';
$id = $_GET['id'];
$stmt = $mysqli->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
echo json_encode(["message" => "User deleted successfully"]);
