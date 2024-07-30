<?php

// Include the database connection file
include 'databaseConnection.php';

$id = $_GET['id'];

// Update query
$updateQuery = "SELECT * FROM Users WHERE id='$id'";
$data = $connection->query($updateQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update User Data</h1>
    <?php
        if($data->num_rows > 0){
            $row = $data->fetch_assoc();
    ?>
    <form action="updateDetails.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
        Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br>
        <button type="submit">Save</button>
    </form>
    <?php
        } else {
            echo "<p>No student found with the provided ID.</p>";
        }
    ?>
</body>
</html>