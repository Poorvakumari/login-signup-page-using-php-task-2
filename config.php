<?php
$servername = "localhost";
$username = "root"; // Change if using another MySQL user
$password = ""; // Set your password if any
$dbname = "user_auth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
