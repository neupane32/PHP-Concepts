<?php
include('databaseConnection.php');

// Get data from form
$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["contact"];

// Query to insert data
$query = "INSERT INTO Users (name, email, address, contact) VALUES ('$name', '$email', '$address', '$contact')";

// Execute the query
if ($connection->query($query) === true) {
  if($connection->query($query) == true){
    //echo("Inserted successfully");
  header('location:display.php');
}else{
   echo("Failed to connect");
}
    // Check if the request is from Postman or a browser
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Postman') !== false) {
        $response = [
            'status' => 'success',
            'message' => 'Data inserted successfully'
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header('Location: display.php');
    }
} else {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Postman') !== false) {
        $response = [
            'status' => 'error',
            'message' => 'Failed to insert data'
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        echo "Failed to insert data";
    }
}
?>
