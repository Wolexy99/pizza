<?php
include_once 'user.php';
if(isset($_POST['save'])){
  $user_name = $_POST['user_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass_word = $_POST['pass_word'];

  $sql = "INSERT INTO record(user_name, phone, email, pass_word) VALUES('$user_name', '$phone', '$email', '$pass_word')";
  if(mysqli_query($conn, $sql)){
    echo "Data Inserted Successfully";
  }
  else {
    echo "Data failed to insert" .$sql ."<br>" .mysqli_error($conn);
  }
  mysqli_close($conn);
}
 ?>
