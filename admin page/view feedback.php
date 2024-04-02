<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin | Dashboard </title>
  <link rel="stylesheet" href="adminpage.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>

  <div class="container"> 
    <nav>
      <div class="side_navbar">
        <br>
        <ul>
        <li><a href="headmanger_data.php" >Head Manager</a></li><br>
       <li> <a href="view complaint1.php">View complaints</a></li><br>
       <li> <a href="view feedback.php" class="active" >View Feeedback</a></li><br>
       <li> <a href="view laws.php" >View Laws</a></li><br>
       <li> <a href="Manage Laws.php" >Manage Laws</a></li><br>
       <li> <a href="#"></a></li>
      </ul>
      </div>
    </nav>

    <div class="main-body">
      
      <div class="promo_card">
        <h1>View feedback</h1>
      </div>
        <div class="feedback-show">

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
    $query = "SELECT * FROM feedback";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="20%" cellspacing="0">
                 
                        <tr>
                            <th> ID </th>
                            <th> username </th>
                            <th> email </th>
                            <th> comment </th>
                           
                        </tr>
                    
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['fd_id']; ?></td>
                                <td><?php  echo $row['user_name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['ta_comment']; ?></td>

                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        


      </div>
    </div>

  </div>
</div>
</body>
</html>
