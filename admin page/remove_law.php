<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portal_db';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['law_id']) && !empty($_POST['law_id'])){
$id = $_POST['law_id'];

    
$sql = "DELETE FROM manage_law WHERE law_id = $id";
if ($conn->query($sql) === TRUE) {
echo "Law removed successfully.";
} else {
 echo "Error deleting law: " . $conn->error;
}
} else {
echo "No law id provided.";
}

$conn->close();
?>
