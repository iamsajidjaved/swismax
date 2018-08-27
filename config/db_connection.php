<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "baw_smismax";

// Creating connection
$conn = new mysqli($server_name, $user_name, $password, $database);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>