<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "portal_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM insertportal WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: home.php');
       
    } else {
        echo
        "<script> alert('Wrong Username or password'); </script>";
    }
}

$conn->close();
?>