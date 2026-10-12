<?php
require 'dbconfig.php';

// Query result set: items sorted by brand then name
$stmt  = $pdo->query('SELECT item_id, item_name, brand_name, category, unit_size, price, stock_quantity
                      FROM grocery_items ORDER BY brand_name, item_name');
$items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #999; padding: 6px 10px; }
        th { background: #eee; }
    </style>
</head>
<body>
<h2>Grocery Items (Indonesia)</h2>
<table>
    <tr>
        <th>ID</th><th>Item</th><th>Brand</th><th>Category</th>
        <th>Size</th><th>Price (IDR)</th><th>Stock</th>
    </tr>
    <?php foreach ($items as $row): ?>
    <tr>
        <!-- htmlspecialchars() prevents HTML injection from DB data -->
        <td><?= htmlspecialchars($row['item_id']) ?></td>
        <td><?= htmlspecialchars($row['item_name']) ?></td>
        <td><?= htmlspecialchars($row['brand_name']) ?></td>
        <td><?= htmlspecialchars($row['category']) ?></td>
        <td><?= htmlspecialchars($row['unit_size']) ?></td>
        <td><?= number_format($row['price'], 0, ',', '.') ?></td>
        <td><?= htmlspecialchars($row['stock_quantity']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
