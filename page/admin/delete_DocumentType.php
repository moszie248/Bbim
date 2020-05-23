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

			$strID = $_GET['id'];
			$cek = mysqli_query($conn, "SELECT * FROM documenttype WHERE id = '$strID'");
			if(mysqli_num_rows($cek) == 0){
			echo "<script type='text/javascript'>";
			echo "alert('ไม่พบข้อมูล');";
			echo "window.location = 'Document.php'; ";
			echo "</script>";
			}else{
			$delete = mysqli_query($conn, "DELETE FROM documenttype WHERE id ='$strID'");
			if($delete){
                    header("location:Document.php");
			}else{
					echo "<script type='text/javascript'>";
					echo "alert('ไม่สามารถลบข้อมูลได้');";
					echo "window.location = 'Document.php'; ";
					echo "</script>";
			}

			}




	mysqli_close($conn);
?>
</body>
</html>
