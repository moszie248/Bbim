
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "document";

  $conn = mysqli_connect( $hostname, $username, $password );

  if (!$conn) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
  mysqli_select_db ( $conn,$dbname  )or die ( "ไม่สามารถเลือกฐานข้อมูลได้" );
  mysqli_set_charset($conn,"utf8");

  $strID = null;
    if(isset($_GET["id"]))
    {
        $strID = $_GET["id"];
    }

	$sql = "UPDATE province SET
			name = '".$_POST["name"]."'
			WHERE id = '".$strID."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
        header("location:Province.php");
	}

	mysqli_close($conn);
?>

