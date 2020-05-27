
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
    if(isset($_GET["province_id"]))
    {
        $strID = $_GET["province_id"];
    }

	$sql = "UPDATE province SET
			province_name = '".$_POST["province_name"]."'
			WHERE province_id = '".$strID."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
        // header("location:Province.php");
        echo "<script>alert('แก้ไขข้อมูลจังหวัดสำเร็จ');location='\/DocumentStorage/page/admin/Province.php';</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สามารถแก้ไขข้อมูลจังหวัดได้');";
    echo "window.location = 'Province.php'; ";
    echo "</script>";
  }

	mysqli_close($conn);
?>

