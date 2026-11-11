<?php

$host = "sql306.infinityfree.com";
$username = "if0_42613900";
$password = "kiki1234riksi";
$database = "if0_42613900_arnold";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>