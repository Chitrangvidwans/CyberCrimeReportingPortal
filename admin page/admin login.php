<?php 
$host="localhost";
$user="root";
$password="";
$db="portal_db";

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,$db);
if(isset($_POST['Login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin_db WHERE username='".$username."'AND password='".$password."'";
    
    $result=mysqli_query($con,$sql);
   // $user = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header('location:headmanger_data.php');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login.css">
    <link rel="stylesheet" href="boxicons-master/css/boxicons.css">

    <title>Cybercrime reporting portal | Login</title>

</head>
<body>

   <div class="box">
    <div class="container">

        <div class="top">
            <span></span>
            <header>Admin Login</header>
        </div>
        <form method="post" action="#">
        <div class="input-field">
            <input type="text" name="username"class="input" placeholder="Username" id="">
            <i class="bx bx-user" ></i>
        </div><br>

        <div class="input-field">
            <input type="Password" name="password"class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div><br>
        

        <div class="input-field">
            <input type="submit" class="submit-btn" value="Login" id="" name="Login" >
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div></form>
    </div>
</div>  
</body>
</html>
