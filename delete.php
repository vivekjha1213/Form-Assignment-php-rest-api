<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "form";


$mysqli = new mysqli($host, $username, $password, $database);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $query = "DELETE FROM users WHERE id = $id";1

 
    if ($mysqli->query($query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
} else {
    echo "ID parameter not found.";
}


$mysqli->close();
?>
