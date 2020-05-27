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

$strSQL = "SELECT * FROM documenttype WHERE documenttype_name = '".trim($_POST['name'])."' ";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "<script>";
	echo "alert('! ไม่สามารถเพิ่มข้อมูลประเภทเอกสารซ้ำกันได้ !');";
	echo "window.location='\/DocumentStorage/page/admin/add_DocumentType.php';";
	echo "</script>";
}else
{
	$strSQL = "INSERT INTO documenttype (documenttype_name) VALUES ('".$_POST["name"]."')";
    $objQuery = mysqli_query($conn,$strSQL);
	// header("location:\/localhost/DocumentStorage/page/admin/Document.php");
	echo "<script>alert('เพิ่มข้อมูลประเภทเอกสารสำเร็จ');location='\/DocumentStorage/page/admin/Document.php';</script>";
}

	
?>
</body>
</html>
