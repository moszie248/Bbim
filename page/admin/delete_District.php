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

			$strID = $_GET['district_id'];
			$cek = mysqli_query($conn, "SELECT * FROM district WHERE district_id = '$strID'");
			if(mysqli_num_rows($cek) == 0){
			echo "<script type='text/javascript'>";
			echo "alert('ไม่พบข้อมูลอำเภอ');";
			echo "window.location = 'District.php'; ";
			echo "</script>";
			}else{
			$delete = mysqli_query($conn, "DELETE FROM district WHERE district_id ='$strID'");
			if($delete){
					// header("location:District.php");
					echo "<script>alert('ลบข้อมูลอำเภอสำเร็จ');location='\/DocumentStorage/page/admin/District.php';</script>";
			}else{
					echo "<script type='text/javascript'>";
					echo "alert('ไม่สามารถลบข้อมูลอำเภอได้');";
					echo "window.location = 'District.php'; ";
					echo "</script>";
			}

			}




	mysqli_close($conn);
?>
</body>
</html>
