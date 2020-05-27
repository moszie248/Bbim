
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

  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $title = $_POST["titlename"];
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $phone = $_POST["phone"];
  $permission = $_POST['permission'];
  $titleid = $title;
  // $strID = $_GET["user_id"];
  echo $titleid;

  $strID = null;
    if(isset($_GET["user_id"]))
    {
        $strID = $_GET["user_id"];
    }
    //$strSQL = "INSERT INTO user (,password,titlename_id,first_name,last_name,phone,permission) VALUES ('$user','$pass',$title,'$fname','$lname','$phone','$permission')";
	$sql = "UPDATE user SET 
          username = '".$_POST["user"]."', 
          password = '".$_POST["pass"]."', 
          titlename_id = '".$_POST["titlename"]."' , 
          first_name = '".$_POST["first_name"]."',
          last_name = '".$_POST["last_name"]."', 
          phone = '".$_POST["phone"]."', 
          permission = '".$_POST["permission"]."'
          WHERE user_id = '".$_GET["user_id"]."' ";



  $query = mysqli_query($conn,$sql);
 
    
  
    
	if($conn->query($sql) === TRUE) {
        // header("location:Manage.php");
        echo "<script>alert('แก้ไขข้อมูลเจ้าหน้าที่สำเร็จ');</script>";
        // location='\/DocumentStorage/page/admin/Manage.php';</script>";
  }
  else{
    echo "Error updating record: " . $conn->error;
    echo "<script type='text/javascript'>";
    
    echo "alert('ไม่สามารถแก้ไขข้อมูลเจ้าหน้าที่ได้');";

    // echo "window.location = 'Manage.php'; ";
    echo "</script>";
  }





	mysqli_close($conn);
?>

