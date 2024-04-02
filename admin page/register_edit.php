
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="margin: 50px;">
    
                <table class="table">
                 
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
                    $hqq="SELECT * FROM hqshow_data WHERE hq_id='$hq_id'";
                    $hq_run=mysqli_query($conn, $hqq);
                    
                    if(mysqli_num_rows($hq_run) >0 )
                    {
                        $data=$hq_run->fetch_assoc();
                        //print_r($data);
                        {
                        ?>
                       
                    <tbody>
                    <form action="modify.php?hq_id=<?=$hq_id?>" method="POST">
                        Name <input type="text" name="hq_name" id="hq_name" value="<?=$data['hq_name']; ?>"><br>
                        Email<input type="text" name="hq_email" id="hq_email" value="<?=$data['hq_email']; ?>"><br>
                        City<input type="text" name="hq_city"  id="hq_city"value="<?=$data['hq_city']; ?>"><br>
                        Password<input type="text" name="hq_pass"   id="hq_pass"value="<?=$data['hq_pass']; ?>"><br>

                       <br> <input type="submit" name="editForm">
                        </form>
                        <?php
                        
                    }
                }
                    else
                    {
                        ?>
                        <h4>No Record</h4>
                <?php
            
                    }
                }
                ?>
                    </tbody>
                </table>
                </body>
</html>