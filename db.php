<?php
$servername = "127.0.0.1:3307";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "library_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
