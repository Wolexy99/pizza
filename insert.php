<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Store Data</title>
  </head>
  <body>
    <center>
      <?php
      //servername => localhost
      //username => root
      //password => empty
      //database => name

      $conn = mysqli_connect("localhost", "root", "", "name");

      //Check connection
      if ($conn === false) {
        die("Error: Could not connect. "
        . mysqli_connect_error());
      }

      //Taking all 5 values from the form data(input)
      $first_name = $_REQUEST["first_name"];
      $last_name = $_REQUEST["last_name"];
      $gender = $_REQUEST["gender"];
      $address = $_REQUEST["address"];
      $email = $_REQUEST["email"];


      //Performing insert query
      //here our table name is avl
      $sql = "INSERT INTO avl VALUES ('$id','$first_name', '$last_name', '$gender', '$address', '$email' )";

      if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . "Please browse your localhost php my admin "
            . "to view the updated data</h3>";

        echo ("\n$first_name\n $last_name\n "
        . "$gender\n $address\n $email" ) ;
      }
      else{
        echo "Error: Hush! Sorry $sql. "
              . mysqli_error($conn);
      }

      //close connection
      mysqli_close($conn);
       ?>
    </center>
  </body>
</html>
