<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
      <title>Mayhem</title>
  </head>
  <body>
    <div class="info">
    <a href="index.php">
      <img src="logo-green.svg" alt="Esedu">
    </a>
      <div class="container">
        <h1>Osallistujat</h1>
      </div>
      <div class="text-container">
        <?php
        require('db.php');

        $sql = "SELECT nimi, battletag FROM osallistujat";
        $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) {
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<li>" .$row["nimi"]. "|" .$row["battletag"]. "</li>" ;
            }
            echo "</ul>";
          }

         ?>
      </div>
      <a href="index.php">
        <button type="button" name="button">Takaisin aloitussivulle></button>
      </a>
    </div>
  </body>
</html>
