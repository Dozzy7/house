<?php
$servername = "localhost";
$username = "app";
$password = "1234";
$dbname = "house";

// Create connection
$conn = mysqli_connect($conn, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqli = "UPDATE house SET description, price, listing, street, city WHERE houseID=$house;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>