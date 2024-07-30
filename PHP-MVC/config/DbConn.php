<?php
function getConnection() {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'test';

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connected successfully";
    }

    return $connection;
}

// Call the function to check the connection
getConnection();
?>
