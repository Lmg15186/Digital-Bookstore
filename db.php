<?php
// Database connection
// Credentials are loaded from environment variables or fall back to local XAMPP defaults.
// See .env.example for the variables expected.

$host = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') ?: "";
$dbname = getenv('DB_NAME') ?: "advanced_web";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}
?>
