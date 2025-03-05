<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $barcode = $_POST["barcode"];
    $item_name = $_POST["item_name"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO inventory (barcode, item_name, quantity) VALUES ('$barcode', '$item_name', '$quantity')
            ON DUPLICATE KEY UPDATE quantity = quantity + $quantity";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>✅ Data saved successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>❌ Error: " . $conn->error . "</div>";
    }
}

$conn->close();
?>
