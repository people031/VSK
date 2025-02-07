<?php
$host = "localhost";
$user = "root"; // Default user for XAMPP
$pass = ""; // Default password is empty
$db = "user_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
