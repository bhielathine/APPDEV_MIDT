<?php
// dbconfig.php - shared database connection file.
// Other scripts load it with: require 'dbconfig.php';

$host     = 'localhost';     // database server (XAMPP default)
$db       = 'grocery_db';    // the database you created in phpMyAdmin
$user     = 'root';          // XAMPP default username
$pass     = '';              // XAMPP default has no password
$charset  = 'utf8mb4';       // supports all characters

// Data Source Name: tells PDO which driver, server and database to use
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // throw errors as exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // rows come back as associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // use real prepared statements
];

try {
    // $pdo is the connection object used by every other file
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    // stop the script if the connection fails
    die('Database connection failed: ' . $e->getMessage());
}
