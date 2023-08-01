<?php
include_once 'page.php';
if(isset($_POST['save'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO login(name, email, password) VALUES ('$name', '$email', '$password')";

  if(mysqli_query($conn, $sql)){
    echo "New record created successfully:";
  }
  else{
    echo "Error Detected: " .$sql ."<br>" .mysqli_error($conn);
  }
  mysqli_close($conn);
}
 ?>
