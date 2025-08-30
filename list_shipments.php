<?php
include 'db.php';

$result = $conn->query("SELECT * FROM shipments");

echo "<h2>Shipments</h2>";
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['sender'] . " → " . $row['receiver'] . " | " . $row['status'] . "<br>";
}
?>
