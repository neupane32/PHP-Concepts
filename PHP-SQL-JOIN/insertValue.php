<?php
require_once './config/DbConnection.php';

function Insert_Value($conn){
    // Define the SQL query for inserting users
    $sqlUsers = "INSERT INTO users (username, email) VALUES
    ('Aashish', 'aashish@gmail.com'),
    ('Bijay', 'bijay@gmail.com'),
    ('Prinsa', 'Prinsa@gmail.com')";
    
    // Execute the SQL query for inserting users
    if ($conn->query($sqlUsers) === TRUE) {
        echo "Values inserted into 'users' table successfully.<br>";
    } else {
        echo "Error inserting values into 'users': " . $conn->error . "<br>";
    }
}

// Call the function to insert values into the 'users' table
Insert_Value($conn);

// Insert values into orders table
$sqlOrders = "INSERT INTO orders (user_id, product, amount) VALUES
(1, 'Laptop', 1200.00),
(1, 'Mouse', 25.50),
(2, 'Keyboard', 75.00),
(3, 'Monitor', 300.00)";

// Execute the SQL query for inserting orders
if ($conn->query($sqlOrders) === TRUE) {
    echo "Values inserted into 'orders' table successfully.<br>";
} else {
    echo "Error inserting values into 'orders': " . $conn->error . "<br>";
}

//innerJoin queries
function innerJoinQuery($conn) {
    $sql = "SELECT users.username, orders.product, orders.amount
            FROM users
            INNER JOIN orders ON users.id = orders.user_id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"]. " - Product: " . $row["product"]. " - Amount: " . $row["amount"]. "<br>";
        }
    } else {
        echo "0 results<br>";
    }
}

// Function to perform a LEFT JOIN
function leftJoinQuery($conn) {
    $sql = "SELECT users.username, orders.product, orders.amount
            FROM users
            LEFT JOIN orders ON users.id = orders.user_id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"]. " - Product: " . $row["product"]. " - Amount: " . $row["amount"]. "<br>";
        }
    } else {
        echo "0 results<br>";
    }
}

//function to perform right join
function rightJoinQuery($conn) {
    $sql = "SELECT users.username, orders.product, orders.amount
            FROM users
            RIGHT JOIN orders ON users.id = orders.user_id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"]. " - Product: " . $row["product"]. " - Amount: " . $row["amount"]. "<br>";
        }
    } else {
        echo "0 results<br>";
    }
}

function fullJoinQuery($conn) {
    // Note: MySQL does not support FULL OUTER JOIN directly.
    // You can simulate it using a UNION of LEFT JOIN and RIGHT JOIN.

    $sql = "SELECT users.username, orders.product, orders.amount
            FROM users
            LEFT JOIN orders ON users.id = orders.user_id
            UNION
            SELECT users.username, orders.product, orders.amount
            FROM users
            RIGHT JOIN orders ON users.id = orders.user_id";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"]. " - Product: " . $row["product"]. " - Amount: " . $row["amount"]. "<br>";
        }
    } else {
        echo "0 results<br>";
    }
}

// Call the functions to perform the joins
innerJoinQuery($conn);
leftJoinQuery($conn);
rightJoinQuery($conn);
fullJoinQuery($conn);

// Close the connection
$conn->close();







?>
