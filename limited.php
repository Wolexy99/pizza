<?php
include_once 'cargo.php';
if (isset($_POST['Save'])) {
  $email = $_POST['email']
  $pass_word = $_POST['pass_word'];

  $sql = "INSERT INTO base(email, pass_word) VALUES ('$email', '$pass_word')";

  if (mysqli_query($conn, $sql)) {
    echo "Connected Successfully";
  }

  else {
    echo "Connection Failed due to error" .$sql ."<br>" .mysqli_error($conn);
  }

  mysqli_close($conn)
}
 ?>
