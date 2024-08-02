<?php
require_once './config/DbConnection.php';

    function createTables($conn) {
        // SQL query to create first table
        $sql1 = "CREATE TABLE IF NOT EXISTS users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL
        )";
        
        // SQL to create second table
        $sql2 = "CREATE TABLE IF NOT EXISTS orders (
            order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_id INT(6) UNSIGNED,
            product VARCHAR(50) NOT NULL,
            amount DECIMAL(10, 2) NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id)
        )";
        

    // Execute the queries
    if ($conn->query($sql1) === TRUE) {
        echo "Table 'users' created successfully.<br>";
    } else {
        echo "Error creating table 'users': " . $conn->error . "<br>";
    }
    
    if ($conn->query($sql2) === TRUE) {
        echo "Table 'orders' created successfully.<br>";
    } else {
        echo "Error creating table 'orders': " . $conn->error . "<br>";
    }
}
// Call the function to create tables
createTables($conn);

// Close the connection
$conn->close();

?>

