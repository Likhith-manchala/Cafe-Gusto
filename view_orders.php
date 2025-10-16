<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Orders - Cafe Gusto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #fff;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #ffcc00;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #444;
        }
        th {
            background-color: #222;
            color: #ffcc00;
        }
        tr:hover {
            background-color: #333;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #ffcc00;
            color: #111;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
        .back-btn:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>

<h1>🧾 All Orders - Cafe Gusto</h1>

<table>
    <tr>
        <th>Order ID</th>
        <th>Dish Name</th>
        <th>Quantity</th>
        <th>Price (₹)</th>
        <th>Total Price (₹)</th>
        <th>Order Time</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM orders ORDER BY order_time DESC");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['dish_name']}</td>
                    <td>{$row['quantity']}</td>
                    <td>₹{$row['price']}</td>
                    <td>₹{$row['total_price']}</td>
                    <td>{$row['order_time']}</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No orders found.</td></tr>";
    }
    ?>
</table>

<a href="admin.php" class="back-btn">← Back to Admin</a>

</body>
</html>
