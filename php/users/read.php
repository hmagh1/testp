<?php
$mysqli = new mysqli("mysql_sgbd", "user", "userpass", "testdb");

$result = $mysqli->query("SELECT * FROM users");
$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
echo json_encode($users);
