<?php
include 'koneksi.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$query = "INSERT INTO drugs (name, description, price) VALUES ('$name', '$description', '$price')";

if ($conn->query($query) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>