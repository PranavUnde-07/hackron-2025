<?php
include 'db_connect.php';

$sql = "SELECT * FROM inventory ORDER BY scanned_at DESC";
$result = $conn->query($sql);
<?php
include 'db_connect.php';

$sql = "SELECT barcode, item_name, quantity, timestamp FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><img src='generate_barcode.php?code=" . $row['barcode'] . "' alt='Barcode'></td>
                <td>" . $row['item_name'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['timestamp'] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}

$conn->close();
?>

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['barcode']}</td>
                <td>{$row['item_name']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['scanned_at']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}

$conn->close();
?>
