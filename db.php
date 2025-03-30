<?php
$host = "localhost"; // Database host
$user = ""; // Database username
$pass = ""; // Database password
$db = ""; // Database name

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
