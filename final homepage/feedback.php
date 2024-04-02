<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="portal_db";
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$ta_comment=$_POST['ta_comment'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback(user_name,email,ta_comment)values('$user_name','$email','$ta_comment')";

if(mysqli_query($conn,$sql))
 {
  echo "New record created successfully";
 }
 else 
 {
  echo "Error ". mysqli_error($conn);
 }
 mysqli_close($conn);
?>

