<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "college";

// Create database connection
$db = new mysqli('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
