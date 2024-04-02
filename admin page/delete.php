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
                if(isset($_GET['hq_id']))
                {
                    $hq_id=$_GET['hq_id'];
                    $sql="DELETE FROM `hqshow_data` WHERE hq_id=$hq_id";
                    
                    if($conn->query($sql)===TRUE){
                        echo "Deleted the data";
                     }else{
                        echo "something went off";
                     }

                }
            else{
                echo "invalid";
            }





?>