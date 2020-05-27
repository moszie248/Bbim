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


$name = $_POST['business_name'];
// $postcode = $_POST['postcode'];
// $id_district = $_POST["txtid_district"];
$id_titlename = $_POST['titlename'];
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id_province = $_POST["id_province"];
$id_district = $_POST["id_district"];
$id_subdistrict = $_POST["id_subdistrict"];

$strSQL = "SELECT * FROM business WHERE business_name = '$name' ";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "<script>";
	echo "alert('! ไม่สามารถเพิ่มข้อมูลสถานประกอบการซ้ำกันได้ !');";
	echo "window.location='\/DocumentStorage/page/user/add_Business.php';";
	echo "</script>";
}else
{
	$strSQL = "INSERT INTO business (business_name,titlename_id,first_name,last_name,phone,address,province_id,district_id,subdistrict_id)
    VALUES ('$name',$id_titlename,'$f_name','$l_name','$phone','$address',$id_province,$id_district,$id_subdistrict)";
    $objQuery = mysqli_query($conn,$strSQL);
    //header("location:\/localhost/DocumentStorage/page/admin/District.php");
	echo "<script>alert('เพิ่มข้อมูลสถานประกอบการสำเร็จ');location='\/DocumentStorage/page/user/Business.php';</script>";



}

	
?>
</body>
</html>


