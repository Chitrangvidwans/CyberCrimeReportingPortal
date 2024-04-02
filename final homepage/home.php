<?php

session_start();


if(!isset($_SESSION['username'])) {

  header("Location: login.php");
  exit;
}


$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'portal_db';
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}


$username = $_SESSION['username'];


$query = "SELECT crime, status FROM insertportal WHERE username = '$username'";
$result = mysqli_query($conn, $query);


if (!$result) {
  die("Error executing query: " . mysqli_error($conn));
}


if (mysqli_num_rows($result) == 0) {
  echo "You have not filed any complaints.";
} else {
  
  echo "<table>";
  
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <link rel="stylesheet" href="stylelog.css">
    <form action="" method="POST">
      <br><br>
      <div class="container">
    <div class="title">complaint status</div>
    <div class="content">
      <div class="input-box">
       <span class="details">crime</span>                 
      <input type="text" name="crime" id="" value="<?=$row['crime']; ?>"><br>
      </div>
                        <div class="input-box">
                          <span class="details">Status</span>
                        <input type="text" name="status" id="" value="<?=$row['status']; ?>"><br>
                        </div>
      </div>
      </div>
    
                      </form>
                      
                        <?php
  }
}
    
  


mysqli_close($conn);
?>
