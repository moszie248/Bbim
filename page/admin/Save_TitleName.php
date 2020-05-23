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

$strSQL = "SELECT * FROM titlename WHERE name = '".trim($_POST['name'])."' ";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "<script>";
	echo "alert('! ไม่สามารถเพิ่มข้อมูลคำนำหน้าชื่อซ้ำกันได้ !');";
	echo "window.location='\/DocumentStorage/page/admin/add_titlename.php';";
	echo "</script>";
}else
{
	$strSQL = "INSERT INTO titlename (	name) VALUES ('".$_POST["name"]."')";
    $objQuery = mysqli_query($conn,$strSQL);
	header("location:\/localhost/DocumentStorage/page/admin/TitleName.php");
}

	
?>
</body>
</html>
