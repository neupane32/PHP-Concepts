<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password);

if($connection->connect_error) {
    die("connection failed:" . $connection->connect_error);
}
// echo"The database is connected successfully";
// echo"<br>";
?>

