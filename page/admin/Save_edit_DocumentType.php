
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
    if(isset($_GET["documenttype_id"]))
    {
        $strID = $_GET["documenttype_id"];
    }

	$sql = "UPDATE documenttype SET
			documenttype_name = '".$_POST["name"]."'
			WHERE documenttype_id = '".$strID."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
        // header("location:Document.php");
        echo "<script>alert('แก้ไขข้อมูลประเภทเอกสารสำเร็จ');location='\/DocumentStorage/page/admin/Document.php';</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สามารถแก้ไขข้อมูลประเภทเอกสารได้');";
    echo "window.location = 'Document.php'; ";
    echo "</script>";
  }

	mysqli_close($conn);
?>

