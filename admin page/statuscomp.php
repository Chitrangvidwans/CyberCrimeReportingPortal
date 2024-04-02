<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

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
                       
                        {
                        ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>edit status</h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php?comp_id=<?=$comp_id?>" method="POST">
                         <div class="from-group mb-3">
                                <label for="">status</label>
                                <select name="status" value="<?=$data['hq_name']; ?>">class="form-control">
                                    <option value="">--Select status--</option>
                                    <option value="resolved">RESOLVED</option>
                                    <option value="terminated">TERMINATED</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                            
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
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>