<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="portal_db";
$userid=$_POST['userid'];
$pass=$_POST['pass'];
$phoneno=$_POST['phoneno'];
$pincode=$_POST['pincode'];
$datetime=$_POST['datetime'];
$email=$_POST['email'];
$city=$_POST['city'];
$crimetype=$_POST['crime'];
$crimedesc=$_POST['crimedesc'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO insertportal(username,password,phoneno,pincode,date,email,city,crime,crimedesc)values('$userid','$pass','$phoneno',$pincode,'$datetime','$email','$city','$crimetype','$crimedesc')";

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
