<html>
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

			$strID = $_GET['titlename_id'];
			$cek = mysqli_query($conn, "SELECT * FROM titlename WHERE titlename_id = '$strID'");
			if(mysqli_num_rows($cek) == 0){
			echo "<script type='text/javascript'>";
			echo "alert('ไม่พบข้อมูล');";
			echo "window.location = 'TitleName.php'; ";
			echo "</script>";
			}else{
			$delete = mysqli_query($conn, "DELETE FROM titlename WHERE titlename_id ='$strID'");
			if($delete){
					// header("location:TitleName.php");
					echo "<script>alert('ลบข้อมูลคำนำหน้าชื่อสำเร็จ');location='\/DocumentStorage/page/admin/TitleName.php';</script>";
			}else{
					echo "<script type='text/javascript'>";
					echo "alert('ไม่สามารถลบข้อมูลคำนำหน้าชื่อได้');";
					echo "window.location = 'TitleName.php'; ";
					echo "</script>";
			}

			}




	mysqli_close($conn);
?>
</body>
</html>
