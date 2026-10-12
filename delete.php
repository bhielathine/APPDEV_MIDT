<?php
require 'dbconfig.php';

// Delete the record added by insert.php (matched by name and brand)
$stmt = $pdo->prepare('DELETE FROM grocery_items WHERE item_name = ? AND brand_name = ?');
$stmt->execute(['Mi Goreng Special', 'Indomie']);

// rowCount() = number of rows removed
echo $stmt->rowCount() . ' record(s) deleted.';
