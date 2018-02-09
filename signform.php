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
        <h1>Turnaukseen ilmoittautuminen</h1>
      </div>
      <div class="text-container">
        <p>Ilmoittaudu tällä lomakkeella (Ilmoittautuminen tapahtuu "esedulainen.fi" sähköpostilla!)</p>
      </div>
      <form id="myform" method="post" action="register.php">
            <input name="name" type="text" class="input" autocomplete="off" placeholder="Etunimi ja sukunimi" required /> <br></br>
            <input name="email" type="email" class="input" placeholder="Sähköposti" required /> <br></br>
            <input name="battletag" type="text" class="input" placeholder="Battletag#1234" required/> <br></br>
      </form>
      <button form="myform" class="sign-button" type="submit" name="submit" value="ilmoittaudu!"/>Ilmoittaudu> </button>
      <a href="index.php">
        <button type="button" name="button">Takaisin aloitussivulle></button>
      </a>
      <?php
          if(isset($_GET['error'])) {
            if ($_GET['error'] == '1') {
              echo '<p class="errormessages">Virhe lomakkeen lähetyksessä!</p>';
            }
            if ($_GET['error'] == '2') {
              echo '<p class="errormessages">Virheellinen sähköposti</p>';
            }
          }
        ?>
    </div>
  </body>
</html>
