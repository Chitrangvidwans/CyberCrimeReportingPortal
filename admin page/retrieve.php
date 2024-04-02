<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'portal_db';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM manage_law";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
    while ($row = $result->fetch_assoc()) {
       
        echo "Law Title: " . $row["law_topic"] . "<br>";
        echo "Law Description: " . $row["law_description"] . "<br>";
        
        echo "<br>";
    }
} else {
    echo "no laws found";
}

$conn->close();
?>
