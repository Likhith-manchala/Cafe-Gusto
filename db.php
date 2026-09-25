<?php
if (!function_exists('mysqli_report')) {
    http_response_code(503);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'The PHP mysqli extension is not enabled. Start the project with XAMPP or enable mysqli in php.ini.']);
    exit;
}

mysqli_report(MYSQLI_REPORT_OFF);
$conn = @new mysqli("localhost", "root", "", "cafe_gusto");
if ($conn->connect_error) {
    http_response_code(503);
    if (strpos($_SERVER['REQUEST_URI'] ?? '', 'process_order.php') !== false || strpos($_SERVER['REQUEST_URI'] ?? '', 'order.php') !== false) {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Database is unavailable. Start MySQL and try again.']);
    } else {
        die("Database is unavailable. Start MySQL and try again.");
    }
    exit;
}
?>
