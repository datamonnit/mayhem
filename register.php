<?php
  $errors = 0;

  if(!isset($_POST['submit'])) {
    $errors++;
  }



  if ($_POST['name'] !=="") {
    $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    if ($_POST['name'] == "") {
      $errors++;
    }
  } else {
    $errors++;
  }
    if (!empty($_POST['email'])) {
      $options = array("options"=>array("regexp"=>"/^([a-z0-9]{1,}.[a-z0-9]{1,})(@)(esedu.fi|esedulainen.fi)$/"));
      if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_REGEXP, $options)) {
        $errors++;
      }
    } else {
      $errors++;
    }
  if (!empty($_POST['battletag'])) {
    $options = array("options"=>array("regexp"=>"/^(\pL{1})([\pL\pN]{3,12})#([\pL\pN]{1,4})$/u"));
    if(!filter_input(INPUT_POST, "battletag", FILTER_VALIDATE_REGEXP, $options)) {
      $errors++;
    }
  }

if ($errors > 0) {
  header('Location: contestants.php');
  die();
}

require('db.php');
$nimi = $_POST['name'];
$mail = $_POST['email'];
$battletag = $_POST['battletag'];
  $sql = "INSERT INTO osallistujat (nimi, email, battletag)
  VALUES ('$nimi', '$mail', '$battletag')";

  if (mysqli_query($con, $sql)) {
    header ('Location: contestants.php');
  } else {
    header('Location: contestants.php?error=1');
  }
mysqli_close($con);

 ?>
