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

        if(isset($_GET['comp_id'])&& isset($_POST['submit']))
        {
            $comp_id=$_GET['comp_id'];
            $status=$_POST['status'];

            $sql="UPDATE `insertportal` SET
             `comp_id`='$comp_id',
             `status`='$status', WHERE comp_id=$comp_id";
             if($conn->query($sql)===TRUE){
                echo "added to database";
             }else{
                echo "something went off";
             }
             

        }else{
            echo "invalid";
         }


                ?>