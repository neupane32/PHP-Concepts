<?php
include('index.php');
include('databaseConnection.php');

//get data
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["contact"];

//query to insert data 
$query = "INSERT INTO Users (name,email, address, contact) VALUES ('$name','$email', '$address', '$contact')";

//execute
if($connection->query($query) == true){
     //echo("Inserted successfully");
   header('location:display.php');
}else{
    echo("Failed to connect");
}


?>