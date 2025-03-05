<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $barcode = $_POST['barcode'];
    $new_quantity = $_POST['new_quantity'];

    $sql = "UPDATE inventory SET quantity = '$new_quantity' WHERE barcode = '$barcode'";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>✅ Stock Updated!</div>";
    } else {
        echo "<div class='alert alert-danger'>❌ Error: " . $conn->error . "</div>";
    }
}

$result = $conn->query("SELECT * FROM inventory");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Inventory Management</h2>
    <form method="POST">
        <input type="text" name="barcode" placeholder="Enter Barcode" required>
        <input type="number" name="new_quantity" min="0" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>
