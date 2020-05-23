<?php 
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "document";

  //connect
  $conn = mysqli_connect($servername, $username, $password, $dbname);



  //check
  if (!$conn) {
    die("Fail". mysqli_connect_error());
  } else {
    echo "Success";
  }
