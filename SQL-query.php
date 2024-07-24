<?php

//database connection file
include 'DbConnection.php';

//Create databse using SQL query
$sqlQuery = "CREATE DATABASE IF NOT EXISTS newDatabase1";
if ($connection->query($sqlQuery) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $connection->error . "<br>";
}

// Select the new database
$connection->select_db("newDatabase1");

//create table using SQL query
$sqlQuery = "CREATE TABLE IF NOT EXISTS person (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255)
)";
if ($connection->query($sqlQuery) === TRUE) {
    echo "person Table is created successfully. <br>";
} else {
    echo "Error occour while creating table: " . $connection->error . "<br>";
}

//Insert data into the database:person
$sqlQuery = "INSERT INTO person (firstname, lastname, email) VALUES ('Aashish', 'Neupane', 'aashishneupane63@gmail.com')";
if ($connection->query($sqlQuery) === TRUE) {
    echo "The record  is created successfully. <br>";
} else {
    echo "Error occour: " . $sqlQuery . "<br>" . $connection->error;
}

//Update table in the database:person
$sqlQuery = "UPDATE person SET lastname='khatri' WHERE id = 7";
if ($connection->query($sqlQuery) === TRUE) {
    echo "The record  is updated successfully. <br>";
} else {
    echo "Error occour while updating: " . $sqlQuery . "<br>" . $connection->error;
}

//delete table in the database
$sqlQuery = "DELETE FROM person WHERE id = 8";
if ($connection->query($sqlQuery) === TRUE) {
    echo "The record  is deleted successfully. <br>";
} else {
    echo "Error occour while deleting: " . $sqlQuery . "<br>" . $connection->error;
}

//selECT data from the database
$sqlQuery = "SELECT id, firstname, lastname, email FROM person";
$res = $connection->query($sqlQuery);

if($res->num_rows>0) {
    while($row = $res->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] . "Email: " . $row["email"]. "<br>";
    }
}


$connection->close();






?>