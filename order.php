<?php
header("Content-Type: application/json");
include("db.php");

// Read the raw JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Check if 'items' key exists
if (!isset($data["items"])) {
    echo json_encode(["success" => false, "message" => "No items received"]);
    exit();
}

$items = $data["items"];

// Loop through each item and insert into database
foreach ($items as $item) {
    $name = $conn->real_escape_string($item["name"]);
    $quantity = (int)$item["quantity"];
    $price = (float)$item["price"];
    $total = $quantity * $price;

    $sql = "INSERT INTO orders (dish_name, quantity, price, total_price) 
            VALUES ('$name', $quantity, $price, $total)";

    if (!$conn->query($sql)) {
        echo json_encode([
            "success" => false,
            "message" => "Database error: " . $conn->error
        ]);
        exit();
    }
}

// If everything succeeded
echo json_encode(["success" => true, "message" => "Order placed successfully"]);
?>
