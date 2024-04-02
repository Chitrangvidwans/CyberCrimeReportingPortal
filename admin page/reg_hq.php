<?php
session_start();
$servername="localhost";
            $username= "root";
            $password="";
            $dbname="portal_db";
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            
if(isset($_POST["submit"])){
  $hq_name = $_POST["hq_name"];
  
  $hq_email = $_POST["hq_email"];
  
  $hq_pass= $_POST["hq_pass"];

  $hq_confirm_pass=$_POST["hq_confirm_pass"];
  $hq_city=$_POST["hq_city"];
  
  $duplicate = mysqli_query($conn, "SELECT * FROM hq_reg WHERE hq_name = '$hq_name' OR hq_email = '$hq_email'");
  
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($hq_pass == $hq_confirm_pass){
      $query = "INSERT INTO hq_reg(hq_name,hq_email,hq_pass,hq_city) VALUES('$hq_name','$hq_email','$hq_pass','$hq_city')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="stylelog.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title"> HQ Registration</div>
    <div class="content">
    <form class="" action="" method="post" autocomplete="off">
        <div class="user-details">
          <div class="input-box">
            <span class="details">HQ Name</span>
            <input type="text"name=hq_name placeholder="Enter name" required value="">
          </div>
          <div class="input-box">
            <span class="details">HQ Email</span>
            <input type="text" name="hq_email"placeholder="Enter email" required value="">
          </div>
          <div class="input-box">
            <span class="details">HQ Password</span>
            <input type="text" name="hq_pass"placeholder="Enter your password" required value="">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="hq_confirm_pass"placeholder="Confirm your password" required value="">
          </div>
          <div class="input-box">
            <span class="details">HQ City</span>
            <input type="text" name="hq_city"placeholder="Enter your city" required value="">
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">

    
        
        </div>
      </form>
    </div>
  </div>

</body>
</html>
