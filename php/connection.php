<?php
// Database configuration (store these in environment variables!)
$servername = "34.116.201.50";
$username = "rsa-key-20250326";
$password = "chuj123123";
$dbname = "webserver";

try {
    $conn = new PDO(
        "pgsql:host=$servername;dbname=$dbname",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database error. Please try again later.");
}
?>