<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$strID = null;
if(isset($_GET["user_id"]))
{
   $strID = $_GET["user_id"];
}

// $sql = "SELECT * FROM user WHERE id = '".$strID."' ";

$sql = "SELECT user.user_id, user.username,user.password, user.first_name, user.last_name, user.phone, user.permission, titlename.titlename_name
as titlename_name FROM user user
INNER JOIN titlename titlename ON titlename.titlename_id = user.titlename_id WHERE user_id = '".$strID."' ";

$query = mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);

echo "<script>";
    
echo "console.log(JSON.stringify($result));";

echo "</script>";

$checked1 = '';
$checked2 = '';
if($result['permission']==1) $checked1 = 'checked';
if($result['permission']==0) $checked2 = 'checked';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>แก้ไขข้อมูลเจ้าหน้าที่</title>
</head>

<body>
  <div class="wrapper">

    <?php include('../header.php') ?>
    

    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">แก้ไขข้อมูลเจ้าหน้าที่</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li> -->
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-body">
                  <div class="tab-content p-0">
                <form class="forms-sample" action="Save_edit_Member.php?user_id=<?php echo "$strID" ;?>" name="frmAdd" method="post">

                <div class="form-group">
                    <label for="exampleInputEmail3">ชื่อผู้ใช้งาน</label>
                    <input class="form-control" type="text" name="user"
                        value="<?php echo $result["username"];?>"></td>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">รหัสผ่าน</label>
                    <input class="form-control" type="text" name="pass"
                        value="<?php echo $result["password"];?>"></td>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="exampleInputEmail3">คำนำหน้าชื่อ</label>
                      <select name="titlename" class="form-control">
                        <option value='<?php echo $result['titlename_id'];?>' selected> <?php echo $result['titlename_id'];?> </option>
                      </select>
                      
                  </div>
                  <div class="form-group col-md-4">
                      <label for="exampleInputEmail3">ชื่อ</label>
                      <input class="form-control" type="text" name="first_name"
                          value="<?php echo $result["first_name"];?>"></td>
                  </div>
                  <div class="form-group col-md-4">
                      <label for="exampleInputEmail3">นามสกุล</label>
                      <input class="form-control" type="text" name="last_name"
                          value="<?php echo $result["last_name"];?>"></td>
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">เบอร์โทรศัพท์</label>
                    <input class="form-control" type="text" name="phone"
                        value="<?php echo $result["phone"];?>"></td>
                </div>

                <div class="form-group">
                        <label>สิทธิ์ผู้ใช้งาน</label>
                    <div class="row"></div>
                    <div class="form-check-inline">
                        <input class="form-check-input" id="radio1" name="permission" type="radio" <?php echo $checked1;?> value="1">
                        <label class="form-check-label">
                        ผู้ดูแลระบบ
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" id="radio2" name="permission" type="radio" <?php echo $checked2;?> value="0">
                        <label class="form-check-label">
                        เจ้าหน้าที่
                        </label>
                    </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success">บันทึก</button>
                <a href="Manage.php" class="btn btn-danger">ยกเลิก</a>

                </form>



                  </div>
                </div>
              </div>
              <!-- /.card -->
            </section>


          </div>
          <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->
      </section>

    </div>

  </div>

  <!-- jQuery -->
  <script src="../../Style/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="../../Style/jquery-ui/jquery-ui.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <script src="../../Style/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <script src="../../Style/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
  <script src="../../Style/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="../../Style/dist/js/pages/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../../Style/dist/js/demo.js"></script> -->
  <script src="../../Style/Bootstrap/js/bootstrap.min.js"></script>

</body>

</html>