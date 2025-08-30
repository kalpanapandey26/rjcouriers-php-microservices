<!DOCTYPE html>
<html>
<head>
  <title>Add Shipment</title>
</head>
<body>
  <h2>Add Shipment</h2>
  <form action="add_shipment.php" method="POST">
    Sender: <input type="text" name="sender" required><br>
    Receiver: <input type="text" name="receiver" required><br>
    Address: <input type="text" name="address" required><br>
    Status: <input type="text" name="status" required><br>
    <button type="submit">Save</button>
  </form>
</body>
</html>
