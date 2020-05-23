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
$title = $_POST["txtid_unit"];
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$phone = $_POST["phone"];
$permission = $_POST["permission"];

echo "console.log($user,$pass,$title,$fname,$lname,$phone,$permission);";

$strSQL = "SELECT * FROM user WHERE username = '$user'";
$objQuery = mysqli_query($conn,$strSQL );
$objResult = mysqli_fetch_array($objQuery);
if($objResult){
	echo "check";
	echo "<script>";
	echo "alert('ข้อมูลซ้ำ กรุณาลองใหม่อีกครั้ง !');";
	//echo "window.location='\/DocumentStorage/page/admin/Manage.php';";
	echo "</script>";
}else
{
	echo "adda";
	$strSQL = "INSERT INTO user (username,password,titlename_id,first_name,last_name,phone,permission) VALUES ('$user','$pass',$title,'$fname','$lname','$phone','$permission')";
	$objQuery = mysqli_query($conn,$strSQL);
	echo "$objQuery";
	header("location:\/localhost/DocumentStorage/page/admin/Manage.php");

	
	// if ($conn->query($strSQL) === TRUE) {
	//   echo "New record created successfully";
	// } else {
	//   echo "Error: " . $strSQL . "<br>" . $conn->error;
	// }	

}

	
?>
</body>
</html>
