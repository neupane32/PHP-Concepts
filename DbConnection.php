<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "databaseconnection";

$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error) {
    die("connection failed:" . $connection->connect_error);
}
echo"The database is connected successfully";
?>