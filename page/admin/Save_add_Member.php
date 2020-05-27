<html>
<head>
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "document";

$conn = mysqli_connect( $hostname, $username, $password );

if (!$conn) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysqli_select_db ( $conn,$dbname  )or die ( "ไม่สามารถเลือกฐานข้อมูลได้" );
mysqli_set_charset($conn,"utf8");

$user = $_POST['user'];
$pass = $_POST['phone'];
$title = $_POST["titlename"];
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$phone = $_POST["phone"];
$permission = $_POST["permission"];

$strSQL = "SELECT * FROM user WHERE username = '$user'";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
	if($objResult){
		echo "<script>";
		echo "alert('! ไม่สามารถเพิ่มข้อมูลเจ้าหน้าที่ซ้ำกันได้ !');";
		echo "window.location='\/DocumentStorage/page/admin/add_Member.php';";
		echo "</script>";
	}else
	{
		$strSQL = "INSERT INTO user (username,password,titlename_id,first_name,last_name,phone,permission) 
		VALUES ('$user','$pass',$title,'$fname','$lname','$phone','$permission')";
		$objQuery = mysqli_query($conn,$strSQL);
		// header("location:\/localhost/DocumentStorage/page/admin/Manage.php");
		echo "<script>alert('เพิ่มข้อมูลเจ้าหน้าที่สำเร็จ');location='\/DocumentStorage/page/admin/Manage.php';</script>";	

	}

	
?>
</body>
</html>
