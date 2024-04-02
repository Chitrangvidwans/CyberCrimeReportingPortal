<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin | Dashboard </title>
  <link rel="stylesheet" href="adminpage.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="showdata.php">


</head>

<body>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <br>
        <ul>
        <li><a href="headmanger_data.php" >Head Manager</a></li><br>
       <li> <a href="view complaint1.php" class="active">View complaints</a></li><br>
       <li> <a href="view feedback.php" >View Feeedback</a></li><br>
       <li> <a href="view laws.php" >View Laws</a></li><br>
       <li> <a href="Manage Laws.php">Manage Laws</a></li><br>
       <li> <a href="#"></a></li>
        </ul>
      </div>
    </nav>

    <div class="main-body">
      <div class="promo_card">
        <h1>View complaints</h1>
      </div>


      <div class="complaint-show" margin="50px">


        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portal_db";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM insertportal";
        $query_run = mysqli_query($conn, $query);
       

        ?>
        
        <table class="table" style="width:100%">

          <tr>
            <th> comp_ID </th>
            <th> Username </th>
            <th> password </th>
            <th> phoneno </th>
            <th> pincode </th>
            <th> date </th>
            <th> email </th>
            <th> city </th>
            <th> crime </th>
            <th> crimedesc </th>
            <th>action</th>

          </tr>

          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <tr>
                  <td>
                    <?php echo $row['comp_id']; ?>
                  </td>
                  <td>
                    <?php echo $row['username']; ?>
                  </td>
                  <td>
                    <?php echo $row['password']; ?>
                  </td>
                  <td>
                    <?php echo $row['phoneno']; ?>
                  </td>
                  <td>
                    <?php echo $row['pincode']; ?>
                  </td>
                  <td>
                    <?php echo $row['date']; ?>
                  </td>
                  <td>
                    <?php echo $row['email']; ?>
                  </td>
                  <td>
                    <?php echo $row['city']; ?>
                  </td>
                  <td>
                    <?php echo $row['crime']; ?>
                  </td>
                  <td>
                    <?php echo $row['crimedesc']; ?>
                  </td>

                  
                  <td>
                  <a class="btn btn-dark" href="editstatus.php?comp_id=<?=$row['comp_id'];?>"> UPDATE </a>

                  </td>

                </tr>
                <?php
              }
            } else {
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