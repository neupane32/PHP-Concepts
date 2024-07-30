<?php
include_once "../config/DbConn.php";

function getAllUsers(){
    $connection = getConnection();
    $query = "select * from Users";
    $result = $connection->query($query);
    $users = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    $connection->close();
    return $users;
}

function getUserByID($id){
    $connection = getConnection();
    $query = "select * from Users where id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $stmt->close();
    $connection->close();
    return $user;
}

function createUser($name, $email, $address, $contact) {
    $connection = getConnection();
    $query = "INSERT INTO Users (name, email, address, contact) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $address, $contact);
    $success = $stmt->execute();

    $stmt->close();
    $connection->close();
    return $success;
}

?>