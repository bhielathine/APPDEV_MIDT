<?php
require 'dbconfig.php'; // bring in the $pdo connection

// Run a query with no user input, so query() is fine
$stmt = $pdo->query('SELECT * FROM grocery_items');

// fetchAll() returns EVERY row as an array of arrays
$items = $stmt->fetchAll();

// <pre> keeps print_r() output readable in the browser
echo '<pre>';
print_r($items);
echo '</pre>';
