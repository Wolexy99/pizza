<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "name";

  $conn = mysqli_connect($servername, $username, $password, $db);
  if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
  }
 ?>
