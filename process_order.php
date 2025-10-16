<?php
header('Content-Type: application/json');
include 'db.php';

// Get the raw POST data
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$customer_name = $data['customer_name'] ?? '';
$table_number = $data['table_number'] ?? '';
$items = $data['items'] ?? [];

if (empty($customer_name) || empty($table_number) || empty($items)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

// Start transaction
$conn->begin_transaction();

try {
    // Create necessary tables if not exists
    $create_customer_logins_sql = "CREATE TABLE IF NOT EXISTS customer_logins (
        customer_id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($create_customer_logins_sql);

    $create_dishes_table_sql = "CREATE TABLE IF NOT EXISTS dishes (
        dish_id INT AUTO_INCREMENT PRIMARY KEY,
        dish_name VARCHAR(255) NOT NULL UNIQUE
    )";
    $conn->query($create_dishes_table_sql);

    $create_menu_cart_sql = "CREATE TABLE IF NOT EXISTS menu_cart (
        cart_id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id INT NOT NULL,
        dish_id INT NOT NULL,
        quantity INT NOT NULL,
        added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (customer_id) REFERENCES customer_logins(customer_id),
        FOREIGN KEY (dish_id) REFERENCES dishes(dish_id)
    )";
    $conn->query($create_menu_cart_sql);

    $create_table_numbers_sql = "CREATE TABLE IF NOT EXISTS table_numbers (
        table_id INT AUTO_INCREMENT PRIMARY KEY,
        table_number INT NOT NULL UNIQUE,
        status VARCHAR(20) DEFAULT 'available',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($create_table_numbers_sql);

    // Check if customer exists
    $stmt = $conn->prepare("SELECT customer_id FROM customer_logins WHERE username = ?");
    $stmt->bind_param("s", $customer_name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($customer_id);
        $stmt->fetch();
    } else {
        // Insert new customer with dummy password and email (can be updated later)
        $password_hash = password_hash('defaultpassword', PASSWORD_DEFAULT);
        $email = $customer_name . '@example.com';
        $insert_stmt = $conn->prepare("INSERT INTO customer_logins (username, password_hash, email) VALUES (?, ?, ?)");
        $insert_stmt->bind_param("sss", $customer_name, $password_hash, $email);
        $insert_stmt->execute();
        $customer_id = $insert_stmt->insert_id;
        $insert_stmt->close();
    }
    $stmt->close();

    // Prepare insert statement for menu_cart
    $insert_cart_stmt = $conn->prepare("INSERT INTO menu_cart (customer_id, dish_id, quantity) VALUES (?, ?, ?)");

    foreach ($items as $item) {
        $dish_name = $item['dish_name'];

        // Check if dish exists in dishes table
        $dish_stmt = $conn->prepare("SELECT dish_id FROM dishes WHERE dish_name = ?");
        $dish_stmt->bind_param("s", $dish_name);
        $dish_stmt->execute();
        $dish_stmt->store_result();

        if ($dish_stmt->num_rows > 0) {
            $dish_stmt->bind_result($dish_id);
            $dish_stmt->fetch();
        } else {
            // Insert new dish
            $insert_dish_stmt = $conn->prepare("INSERT INTO dishes (dish_name) VALUES (?)");
            $insert_dish_stmt->bind_param("s", $dish_name);
            $insert_dish_stmt->execute();
            $dish_id = $insert_dish_stmt->insert_id;
            $insert_dish_stmt->close();
        }
        $dish_stmt->close();

        $quantity = $item['quantity'];
        $insert_cart_stmt->bind_param("iii", $customer_id, $dish_id, $quantity);
        $insert_cart_stmt->execute();
    }
    $insert_cart_stmt->close();

    // Update table_numbers status to 'occupied'
    $update_table_stmt = $conn->prepare("UPDATE table_numbers SET status = 'occupied' WHERE table_number = ?");
    $update_table_stmt->bind_param("i", $table_number);
    $update_table_stmt->execute();
    $update_table_stmt->close();

    // Commit transaction
    $conn->commit();

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    $conn->rollback();
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

$conn->close();
?>
