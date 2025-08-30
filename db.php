<?php
$host = "localhost";
$user = "root";  // default XAMPP username
$pass = "";      // default XAMPP password blank hota hai
$db   = "rjcouriers_micro_php"; // database ka naam

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
