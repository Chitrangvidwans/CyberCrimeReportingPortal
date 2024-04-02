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
       <li> <a href="view feedback.php"  >View Feeedback</a></li><br>
       <li> <a href="view laws.php" >View Laws</a></li><br>
       <li> <a href="Manage Laws.php" class="active">Manage Laws</a></li><br>
       <li> <a href="#"></a></li>
      </ul>
      </div>
    </nav>

    <div class="main-body">
      <div class="promo_card">
        <h1>Manage Laws</h1>
      </div>
        <div class="complaint-show" margin="50px">
          

        <form method="post" action="add_law.php">
        <label for="law_id">Law ID:</label>
        <input type="text" name="law_id" id="law_id">
        <br>
        <label for="law_topic">Law Topic:</label>
        <input type="text" name="law_topic" id="law_topic">
        <br>
        <label for="law_description">Law Description:</label>
        <textarea name="law_description" id="law_description"></textarea>
        <br>
        <input type="submit" value="Add Law">
    </form>

    <h2>Remove Law</h2>
    <form method="post" action="remove_law.php">
        <label for="law_id">Law ID:</label>
        <input type="text" name="law_id" id="law_id">
        <input type="submit" name="remove_law" value="Remove">
    </form>
        </div>
      </div>

      </div>
    </div>

  </div>
</div>
</body>
</html>