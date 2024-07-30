<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form action="./create.php?action=create" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Address: <input type="text" name="address"><br>
        Contact: <input type="text" name="contact"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
