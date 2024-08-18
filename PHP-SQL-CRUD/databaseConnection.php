<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "USER_CRUD";

$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error) {
    die("connection failed:" . $connection->connect_error);
}


// Create table
$query = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(50),
    contact VARCHAR(15)
)";
if ($connection->query($query) === TRUE) {
    echo "Table Users created successfully<br>";
} else {
    echo "Error creating table: " . $connection->error . "<br>";
}
?>

