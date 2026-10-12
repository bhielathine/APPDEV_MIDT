<?php
require 'dbconfig.php';

// Named placeholders (:name) keep user data separate from the SQL (prevents SQL injection)
$sql = 'INSERT INTO grocery_items
        (item_name, brand_name, category, unit_size, price, stock_quantity, expiry_date)
        VALUES (:item_name, :brand_name, :category, :unit_size, :price, :stock_quantity, :expiry_date)';
$stmt = $pdo->prepare($sql);

// Run the insert with the values for the new record
$stmt->execute([
    ':item_name'      => 'Mi Goreng Special',
    ':brand_name'     => 'Indomie',
    ':category'       => 'Instant Noodles',
    ':unit_size'      => '85 g',
    ':price'          => 3600,
    ':stock_quantity' => 50,
    ':expiry_date'    => '2027-12-31',
]);

// lastInsertId() gives the auto-generated item_id of the new row
echo 'Record inserted. New item_id: ' . $pdo->lastInsertId();
