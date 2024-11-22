<?php
// Note: This assumes that you have the MySQLi extension enabled in your PHP configuration.
// If you're using MySQLi, it's recommended to use prepared statements to prevent SQL injection.

$host = "localhost";
$user = "root";
$password = "";
$database = "ttipr_old";

// Create connection
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your database connection is established if you reach this point.
?>
