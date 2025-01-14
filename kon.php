<?php
// Database configuration
$host = 'sql12.freesqldatabase.com';
$username = 'sql12757417';
$password = ' t8vhnWCTIy'; // Masukkan password sesuai email Anda
$database = 'sql12757417';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
