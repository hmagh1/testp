<?php
$mysqli = new mysqli("mysql_sgbd", "user", "userpass", "testdb");
if ($mysqli->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}
