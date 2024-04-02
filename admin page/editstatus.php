
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
                if(isset($_GET['comp_id']))
                {
                    $comp_id=$_GET['comp_id']; 
                    $hqq="SELECT * FROM insertportal WHERE comp_id='$comp_id'";
                    $hq_run=mysqli_query($conn, $hqq);
                    
                    if(mysqli_num_rows($hq_run) >0 )
                    {
                        $data=$hq_run->fetch_assoc();
                        //print_r($data);
                        {
                        ?>
                       
                    <tbody>
                    <form action="modify_status.php?comp_id=<?=$comp_id?>" method="POST">
                        Name <input type="text" name="username" id="username" value="<?=$data['username']; ?>"><br>
                      Status<input type="text" name="status" id="status" value="<?=$data['status']; ?>"><br>

                       <br> <input type="submit" name="editform">
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