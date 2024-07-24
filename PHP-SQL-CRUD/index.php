<?php
// Include the database connection file
include('databaseConnection.php');

// Create database using SQL query
$query = "CREATE DATABASE IF NOT EXISTS `USER-CRUD`";
if ($connection->query($query) === TRUE) {
   // echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $connection->error . "<br>";
}


// Create a new connection to the newly created database
$connection = new mysqli($servername, $username, $password, "USER-CRUD");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
 // echo "Connected to USER-CRUD database successfully<br>";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Data</h1>
    <form action="insertData.php" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Address: <input type="text" name="address"><br>
        Contact: <input type="text" name="contact"><br>
        
        <button type="submit">Save</button>
    </form>
</body>
</html>
