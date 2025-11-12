<?php
session_start();
//error_reporting(0);
$dsn = "mysql:host=localhost;dbname=HB_WEBSITE;charset=utf8mb4";
$dbuser = "root";   // apna db username
$dbpass = "";       // apna db password

try {
    $conn = new PDO($dsn, $dbuser, $dbpass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // errors show karayega
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}


?>
