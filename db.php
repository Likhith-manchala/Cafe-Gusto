<?php
$conn = new mysqli("localhost", "root", "", "cafe_gusto");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
