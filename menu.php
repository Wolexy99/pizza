<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "website";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
  die("Error Detected: " .mysqli_connect_error());
}
 ?>
