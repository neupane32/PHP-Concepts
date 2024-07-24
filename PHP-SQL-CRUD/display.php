<?php
// Include the database connection file
include './databaseConnection.php';

//guery to display all the user data
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
        </tr>

        <?php
        if($data->num_rows > 0){
            foreach($data as $student){
                echo('
                <tr>
                 <td>'.$student["id"].'</td>
                 <td>'.$student["name"].'</td>
                 <td>'.$student["email"].'</td>
                 <td>'.$student["address"].'</td>
                 <td>'.$student["contact"].'</td>
                 <td>
                 </tr>
                 ');
            }
        }
        ?>
    </table>
 </body>
 </html>