<?php
require 'dbconfig.php';

// Prepared statement: ? is a placeholder that is filled in safely
$stmt = $pdo->prepare('SELECT * FROM grocery_items WHERE item_id = ?');
$stmt->execute([1]); // look for item with id 1

// fetch() returns only ONE row (or false if nothing matched)
$item = $stmt->fetch();

echo '<pre>';
print_r($item);
echo '</pre>';
