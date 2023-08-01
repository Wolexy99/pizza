<?php
include_once 'ludiflex_database.php';
if (isset($_POST['Register'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

$sql = "INSERT INTO gradient (firstname, lastname, email, password) VALUES ('$firstname', 'lastname', 'email', 'password')";

if (mysqli_query ($conn, $sql)) {
  echo "DATA INSERTED SUCCESSFULLY :";
}
else {
  echo "ERROR:" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
 ?>
