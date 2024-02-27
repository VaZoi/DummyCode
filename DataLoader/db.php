<?php

$host = 'localhost';
$dbname = 'DataLoader';
$user = 'root';
$password = '';
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

