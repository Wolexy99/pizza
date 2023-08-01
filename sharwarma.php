<?php
  include_once 'chips.php';
  if(isset($_POST['save'])){
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];

    $sql = "INSERT INTO animate(user_name, pass_word) VALUES('$user_name', '$pass_word')";
    if (mysqli_query($conn, $sql)) {
      echo "Data saved into mysql";
    }
    else{
      echo "Data not saved into mysql" .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
  }
 ?>
