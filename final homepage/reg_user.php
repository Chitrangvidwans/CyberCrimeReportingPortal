<?php
session_start();
$servername="localhost";
            $username= "root";
            $password="";
            $dbname="portal_db";
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            
if(isset($_POST["submit"])){
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $user_pass= $_POST["user_pass"];
$city=$_POST["city"];
  $confirm_pass = $_POST["confirm_pass"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user_reg WHERE first_name = '$first_name' OR email = '$email'");
  
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($user_pass == $confirm_pass){
      $query = "INSERT INTO user_reg(first_name,last_name,email,user_pass,city) VALUES('$first_name','$last_name','$email','$user_pass','$city')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header('location:user_login.html');
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>