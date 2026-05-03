<?php
// Database connection — credentials loaded from environment or local config
$host = getenv('DB_HOST') ?: "localhost";
$user = getenv('DB_USER') ?: "root";
$pass = getenv('DB_PASS') ?: "";
$dbname = getenv('DB_NAME') ?: "advanced_web";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}
?>
