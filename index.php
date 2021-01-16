
<?php 
  require_once('php/db-connector.php');

  $sql = "SELECT * FROM pets;";
  $result = $conn->query($sql);

  $pets = [];

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($pets, ["name"=>$row["name"], "type"=>$row["type"]]);
    }
  }

  $conn->close();

?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>My HTML Project</title>
    <meta name="description" content="The HTML5 Herald" />
    <meta name="author" content="SitePoint" />

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Fresh website <small>Best website ever</small></h1>
      </div>

      <div class="jumbotron">
        <h1>Hello and welcome</h1>
        <p>This is the greatest website you will ever see.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button" id="get-started-button">Get Started</a></p>
        <p hidden id="hidden-text">This is the answer to your problem.</p>
      </div>

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Pets and Stuff</div>

        <!-- Table -->
        <table class="table">
            <tr>
              <th>Name</th>
              <th>Type</th>
            </tr>
          <?php foreach($pets as $pet): ?>
            <tr>
              <td><?php echo $pet["name"] ?></td>
              <td><?php echo $pet["type"] ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
