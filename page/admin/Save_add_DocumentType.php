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

$strSQL = "SELECT * FROM documenttype WHERE name = '".trim($_POST['name'])."' ";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "<script>";
	echo "alert('ข้อมูลซ้ำ กรุณาลองใหม่อีกครั้ง !');";
	echo "window.location='\/DocumentStorage/page/admin/Document.php';";
	echo "</script>";
}else
{
	$strSQL = "INSERT INTO documenttype (	name) VALUES ('".$_POST["name"]."')";
    $objQuery = mysqli_query($conn,$strSQL);
	header("location:\/localhost/DocumentStorage/page/admin/Document.php");
}

	
?>
</body>
</html>
