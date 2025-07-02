<?php
require '../db.php';
$result = $mysqli->query("SELECT * FROM users");
$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
echo json_encode($users);
