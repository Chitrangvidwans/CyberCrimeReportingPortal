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
        <li><a href="headmanger_data.php" class="active" >Head Manager</a></li><br>
       <li> <a href="view complaint1.php">View complaints</a></li><br>
       <li> <a href="view feedback.php"  >View Feeedback</a></li><br>
       <li> <a href="view laws.php" >View Laws</a></li><br>
       <li> <a href="Manage Laws.php" >Manage Laws</a></li><br>
       <li> <a href="#"></a></li>
      </ul>
      </div>
    </nav>

    <div class="main-body">
      
      <div class="promo_card">
        <h1>Head Manager</h1>

        <button class="button button1" ><a href="reg_hq.php">ADD</a></button>
      </div>

    <div class="hmshow_data">

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
    $query = "SELECT * FROM hqshow_data";
                $query_run = mysqli_query($conn, $query);
            ?>
                <table class="table">
                 
                        <tr>
                            <th> ID </th>
                            <th> name </th>
                            <th> password </th>
                            <th> city </th>
                            <th>action</th>
                        </tr>
                    
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['hq_id']; ?></td>
                                <td><?php  echo $row['hq_name']; ?></td>
                                <td><?php  echo $row['hq_pass']; ?></td>
                                <td><?php  echo $row['hq_city']; ?></td>
                            <td> 
                            <a class="btn btn-dark" href="register_edit.php?hq_id=<?=$row['hq_id'];?>"> UPDATE </a>
                            <a class="btn btn-dark" href="delete.php?hq_id=<?=$row['hq_id'];?>"> DELETE </a>
                            </td>


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
