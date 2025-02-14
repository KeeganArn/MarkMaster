<?php
$host = 'localhost';
$dbname = 'markmaster';
$username = 'root'; // Default for XAMPP
$password = ''; // Default for XAMPP

// Create MySQLi connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>