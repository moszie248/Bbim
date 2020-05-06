<?php 
  include('server.php');

  $err = array();

  if(isset($_POST['up_file'])){
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $file = mysqli_real_escape_string($conn, $_POST['Files']);
    $type = mysqli_real_escape_string($conn, $_POST['Type']);
    $place = mysqli_real_escape_string($conn, $_POST['Place']);

    $sql = "INSERT INTO files (Name, doc, IDtype, IDplace ) VALUES ('$name', '$file', '$type', '$place')";
    mysqli_query($conn, $sql);
    header('location: ../page/index.php');

  }

?>