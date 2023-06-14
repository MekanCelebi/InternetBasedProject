<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['adress'];

// Create a connection
$conn = new mysqli('localhost', 'root', '','a');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract customer information from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert customer information into the database
    $sql = "INSERT INTO customers (name, email, address) VALUES ('$name', '$email', '$address')";

    if ($conn->query($sql) === true) {
        echo "Customer information has been stored successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
