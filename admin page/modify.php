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

        if(isset($_GET['hq_id'])&& isset($_POST['editForm']))
        {
            $hq_id=$_GET['hq_id'];
            $hq_name=$_POST['hq_name'];
            $hq_pass=$_POST['hq_pass'];
            $hq_email=$_POST['hq_email'];
            $hq_city=$_POST['hq_city'];
            $sql="UPDATE `hqshow_data` SET
             `hq_id`='$hq_id',
             `hq_name`='$hq_name',
             `hq_email`='$hq_email',
             `hq_pass`='$hq_pass',
             `hq_city`='$hq_city' WHERE hq_id=$hq_id";
             if($conn->query($sql)===TRUE){
                echo "added to database";
             }else{
                echo "something went off";
             }
             

        }else{
            echo "invalid";
         }


                ?>