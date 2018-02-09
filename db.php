<?php
$con = mysqli_connect("localhost","mayhem_user","h3@rtst0n3!","mayhem");

  if (mysqli_connect_errno()) {
    echo "Yhdistäminen epäonnistui: " . mysqli_connect_error();
  }
?>
