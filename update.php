<?php
require 'dbconfig.php';

$id       = 1;     // which record to change
$newPrice = 3800;  // new price in IDR
$newStock = 120;   // new stock quantity

// Only the row matching item_id is updated
$stmt = $pdo->prepare('UPDATE grocery_items
                       SET price = :price, stock_quantity = :stock
                       WHERE item_id = :id');
$stmt->execute([
    ':price' => $newPrice,
    ':stock' => $newStock,
    ':id'    => $id,
]);

echo $stmt->rowCount() . ' record(s) updated.';
