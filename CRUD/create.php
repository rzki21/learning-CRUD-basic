<?php
#pada file ini kalian bisa melakukan penambahan data ke database
#kalian bisa menambahkan data ke database dengan menggunakan form yang sudah disediakan
include 'config.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (createUser($conn, $name, $email)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <form action="create.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
