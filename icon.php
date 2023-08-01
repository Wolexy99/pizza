<?php
include_once 'menu.php';
if(isset($_POST['save'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO internet(name, email, message) VALUES ('$name', '$email', '$message')";

  if(mysqli_query($conn, $sql)){
    echo "New record created successfully:";
  }
  else{
    echo "Error Detected: " .$sql ."<br>" .mysqli_error($conn);
  }
  mysqli_close($conn);
}
 ?>
