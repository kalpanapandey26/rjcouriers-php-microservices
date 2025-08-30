<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sender   = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $address  = $_POST['address'];
    $status   = $_POST['status'];

    $sql = "INSERT INTO shipments (sender, receiver, address, status) 
            VALUES ('$sender', '$receiver', '$address', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Shipment added successfully!";
        echo "<br><a href='list_shipments.php'>View Shipments</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
