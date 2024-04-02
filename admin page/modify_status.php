<?php
                $servername="localhost";
                $username= "root";
                $password="";
                $dbname="portal_db";
                $conn=mysqli_connect($servername,$username,$password,$dbname);
                if (!$conn) 
                {
                  die("Connection failed: " . mysqli_connect_error());
                }

        if(isset($_GET['comp_id'])&& isset($_POST['editform']))
        {
            $comp_id=$_GET['comp_id'];
            $username=$_POST['username'];
            $status=$_POST['status'];
            $sql="UPDATE `insertportal` SET
             `comp_id`='$comp_id',
             `username`='$username',
             `status`='$status' WHERE comp_id=$comp_id";
             if($conn->query($sql)===TRUE){
                echo "added to database";
             }else{
                echo "something went off";
             }
             

        }else{
            echo "invalid";
         }


                ?>