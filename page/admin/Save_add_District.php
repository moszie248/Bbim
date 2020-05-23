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


$name = $_POST['name'];
$id_province = $_POST["txtid_province"];


$strSQL = "SELECT * FROM district WHERE name = '$name' ";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "<script>";
	echo "alert('ข้อมูลซ้ำ กรุณาลองใหม่อีกครั้ง !');";
	echo "window.location='\/DocumentStorage/page/admin/add_District.php';";
	echo "</script>";
}else
{
	$strSQL = "INSERT INTO district (name,province_id) VALUES ('$name',$id_province)";
    $objQuery = mysqli_query($conn,$strSQL);
    //header("location:\/localhost/DocumentStorage/page/admin/District.php");
    echo "<script>alert('บันทึกเรียบร้อย');location='\/DocumentStorage/page/admin/District.php';</script>";
}

	
?>
</body>
</html>


