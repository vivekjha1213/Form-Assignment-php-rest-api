<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "form";


$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
$result = $mysqli->query($query);

// Che
if ($result) {
    $row = $result->fetch_assoc();
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Edit User</h1>
        <form action="Index.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $row['username'] ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="<?= $row['password'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $row['email'] ?>">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="Male" <?= $row['gender'] == 'Male' ? ' selected' : '' ?>>Male</option>
                    <option value="Female" <?= $row['gender'] == 'Female' ? ' selected' : '' ?>>Female</option>
                    <option value="Other" <?= $row['gender'] == 'Other' ? ' selected' : '' ?>>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="languages">Languages</label>
                <input type="text" name="languages" id="languages" class="form-control" value="<?= $row['languages'] ?>">
                <div class="form-group">
    <button type="submit" class="btn btn-primary">Edit User</button>
</div>