<?php




$host = "localhost";
$username = "root";
$password = "";
$dbname = "form";


$conn = mysqli_connect($host, $username, $password, $dbname);



$username=$_POST['username'];
$password =$_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$languages = $_POST['languages'];
$languages_str = implode(',', $languages);

// echo $username;
//  die();




$sql = "INSERT INTO users (username, password, email, gender, languages) 
        VALUES ('$username', '$password', '$email', '$gender', '$languages_str')";

// echo $sql;
// die();


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
