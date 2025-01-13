<?php
$host = getenv('sql12.freesqldatabase.com');
$user = getenv('sql12757417');
$password = getenv('t8vhnWCTIy');
$dbname = getenv('sql12757417');

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
