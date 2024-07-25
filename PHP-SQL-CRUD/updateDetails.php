<?php
// Include the database connection file
include('databaseConnection.php');

//get data
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["contact"];

$id = $_POST['id'];


//update Query

$updateQuery = "update Users set name='$name', email='$email', address='$address', contact='$contact' where id='$id'";

//execute the query
if($connection->query($query) == true){
    //echo("Updated successfully");
  header('location:display.php');
}else{
   echo("Failed to connect");
}

?>