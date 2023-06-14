<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'a';

$conn = mysqli_connect('localhost', 'root', '', 'a');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <form method="POST" action="process_checkout.php">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Email" required>
      
      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Address" required>
      
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO checkout (name, email, address) VALUES ('$name', '$email', '$address')";

if (mysqli_query($conn, $sql)) {
    echo


