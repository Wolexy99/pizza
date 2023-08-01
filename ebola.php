<?php
  include_once 'corona.php';
  if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];

    $sql = "INSERT INTO hard(user_name, pass_word) VALUES('$user_name', '$pass_word')";
    if (mysqli_query($conn, $sql)) {
      echo "Connected Successfully";
    }
    else {
      echo "Connection failed" .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
  }
 ?>
