<?php 
$host="localhost";
$user="root";
$password="";
$db="portal_db";

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,$db);
if(isset($_POST['submit'])){
    
    $first_name=$_POST['first_name'];
    $user_pass=$_POST['user_pass'];
    
    $sql="select * from user_reg WHERE first_name='".$first_name."'AND user_pass='".$user_pass."'";
    
    $result=mysqli_query($con,$sql);
   $user = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header('location:file.html');
        exit();
    }
    else{
        echo
        "<script> alert('You Have Entered Incorrect Password or not Register User'); </script>";
      
        
    }
        
}
?>
