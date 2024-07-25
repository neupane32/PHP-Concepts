<?php
// Include the database connection file
include './databaseConnection.php';

//query to display all the user data
$getQuery =  "select * from Users";
$data = $connection->query($getQuery);

?>

<!-- making a form that is used to display the user details.. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action-Button</th>
        </tr>

        <?php
        if($data->num_rows > 0){
            foreach($data as $user){
                echo('
                <tr>
                 <td>'.$user["id"].'</td>
                 <td>'.$user["name"].'</td>
                 <td>'.$user["email"].'</td>
                 <td>'.$user["address"].'</td>
                 <td>'.$user["contact"].'</td>
                 <td>
                 <a href= "edit.php?id='.$user['id'].'">Edit</a> 
                 <a href= "delete.php?id='.$user['id'].'">Delete</a></td>
                 </tr>
                 ');
            }
        }

        ?>
    </table>
 </body>
 </html>