<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portal_db';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$law_topic = $_POST['law_topic'];
$law_description = $_POST['law_description'];


$sql = "INSERT INTO manage_law (law_id, law_topic, law_description) VALUES (null, '$law_topic', '$law_description')";

if ($conn->query($sql) === TRUE) {
echo "Law added successfully.";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
