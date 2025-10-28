<?php
$host = "localhost"; // Usually "localhost"
$user = "root";      // Default for XAMPP/WAMP is "root"
$pass = "";          // Default password is empty
$db   = "user_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>