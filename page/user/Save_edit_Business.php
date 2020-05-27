
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

  $bname = $_POST['business_name'];
  $title = $_POST["titlename"];
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $province = $_POST["address"];
  $district = $_POST["address"];
  $subdistrict = $_POST["address"];


  $strID = null;
    if(isset($_GET["business_id"]))
    {
        $strID = $_GET["business_id"];
    }
    //$strSQL = "INSERT INTO user (,password,titlename_id,first_name,last_name,phone,permission) VALUES ('$user','$pass',$title,'$fname','$lname','$phone','$permission')";
	$sql = "UPDATE business SET 
          business_name = '$bname','$title','$fname','$lname','$phone','$address'
          WHERE business_id = '".$strID."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
        // header("location:Manage.php");
        echo "<script>alert('แก้ไขข้อมูลสถานประกอบการสำเร็จ');location='\/DocumentStorage/page/user/Business.php';</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "alert('ไม่สามารถแก้ไขข้อมูลสถานประกอบการได้');";
    echo "window.location = 'Business.php'; ";
    echo "</script>";
  }

	mysqli_close($conn);
?>

