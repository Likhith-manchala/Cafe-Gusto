<?php
include 'db.php';
$orders = $conn->query("SELECT * FROM orders ORDER BY order_time DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Live Orders</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 12px; border: 1px solid #ccc; text-align: center; }
        select { padding: 5px; }
    </style>
</head>
<body>
    <h2>Live Orders</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Dish</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $orders->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['dish_name'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td>₹<?= $row['price'] ?></td>
            <td><?= $row['order_time'] ?></td>
            <td>
                <form method="post" action="update_status.php">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>" />
                    <select name="status" onchange="this.form.submit()">
                        <?php foreach (['Preparing', 'Ready', 'Delivered'] as $status) { ?>
                            <option value="<?= $status ?>" <?= $row['status'] == $status ? 'selected' : '' ?>><?= $status ?></option>
                        <?php } ?>
                    </select>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
