<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqljoin";

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("connection Failed : " . $conn->connect_error);
}
else{
    echo "connected successfully";
}
//

?>