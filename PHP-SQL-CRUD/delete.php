<?php
// Include the database connection file
include('databaseConnection.php');

$id = $_GET['id'];

//query
$deleteQuery = "delete from Users where id='$id'";

//execute
if($connection->query($deleteQuery) == true){
//check wether the delete method work or not: echo('deleted successfully');
   header('location:display.php');
 }else{
     echo("Failed to delete");
 }
 
 
?>