<?php
// Database configuration
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'jwdb_project1';

// Create database connection
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
