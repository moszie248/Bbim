<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
// $sql = "SELECT * FROM user";

$sql = "SELECT user.user_id, user.username, user.first_name, user.last_name, user.phone, user.permission, titlename.titlename_name
as titlename_name FROM user user
INNER JOIN titlename titlename ON titlename.titlename_id = user.titlename_id ";

$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>ข้อมูลเจ้าหน้าที่</title>
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
              <h1 class="m-0 text-dark">ข้อมูลเจ้าหน้าที่</h1>
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

                    <div class="form-row justify-content-md-end">
                      <div class="col-2">
                        <a href="add_Member.php" class="btn btn-primary">
                        <i class='fas fa-plus-circle'></i> เพิ่มข้อมูล</a>
                      </div>
                    </div>

                    <div class="form-row justify-content-md-center mt-5">
                      <div class="col-10">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr style="background-color:#AED6F1">
                              <th scope="col">#</th>
                              <th scope="col">ชื่อผู้ใช้งาน</th>
                              <th scope="col">ชื่อ-นามสกุล</th>
                              <th scope="col">เบอร์โทรศัพท์</th>
                              <th scope="col">สิทธิ์ผู้ใช้งาน</th>
                              <th scope="col">การจัดการ</th>
                            </tr>
                          </thead>
                          
                          <?php
                          while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                          ?>
                          <tbody>
                            <tr>
                              <td>
                                <div align="center" >
                                    <?php echo $result["user_id"];?>
                                  </div>
                              </td>
                              <td>
                                <div >
                                  <?php echo $result["username"];?>
                                </div>
                              </td>
                              <td>
                                <div >
                                  <span><?php echo $result["titlename_name"];?></span>
                                  <span><?php echo $result["first_name"];?></span>
                                  <span><?php echo $result["last_name"];?></span>
                                 
                                </div>
                              </td>
                              <td>
                                <div >
                                  <?php echo $result["phone"];?>
                                </div>
                              </td>
                              <td>
                                <div >
                                <?php
                                  if($result["permission"] == 0){
                                    echo "เจ้าหน้าที่";
                                  }
                                  else if($result["permission"] == 1){
                                    echo "ผู้ดูแลระบบ";
                                  }else{
                                    echo "ไม่มีในระบบ";
                                  }
                                ?>
                                  
                                </div>
                              </td>
                              

                              <td align="center">

                                <!-- แก้ไข-->
                                <a href="edit_member.php?user_id=<?php echo $result["user_id"];?>">
                                    <i class="fas fa-edit text-warning mr-3"></i>
                                  </a>

                                <!-- ลบ -->
                                <a href="JavaScript:if(confirm('คุณต้องการลบข้อมูลเจ้าหน้าที่ใช่หรือไม่ ?')==true){window.location='delete_Member.php?user_id=
                                <?php echo $result["user_id"];?>';}">
                                <button class="btn btn-xs" type="button" >
                                      <i class="fas fa-trash text-danger"></i>
                                </button>
                                </a>

                              </td>
                            </tr>
                          </tbody>
                          <?php
                          }
                          ?>

                        </table>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
              <!-- /.card -->
            </section>


          </div>
          <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->
      </section>

      <!-- add modal-->
      <form action="" method="post">
        <div class="modal fade" id="edit-modal">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">แก้ไขข้อมูลเจ้าหน้าที่</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>ชื่อผู้ใช้งาน</label><label class="text-danger">*</label>
                  <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" required>
                </div>
                <div class="form-group">
                  <label>รหัสผ่าน</label><label class="text-danger">*</label>
                  <input type="text" class="form-control" placeholder="รหัสผ่าน" required>
                </div>
                <div class="form-group">
                  <label>ยืนยันรหัสผ่าน</label><label class="text-danger">*</label>
                  <input type="text" class="form-control" placeholder="รหัสผ่าน" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>คำนำหน้าชื่อ</label><label class="text-danger">*</label>
                    <select class="form-control" required>
                      <option selected>คำนำหน้าชื่อ</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>ชื่อ</label><label class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="ชื่อ" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>นามสกุล</label><label class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="นามสกุล" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>เบอร์โทรศัพท์</label><label class="text-danger">*</label>
                  <input type="text" class="form-control" placeholder="รหัสเอกสาร" required>
                </div>
                <div class="form-group">
                  <label>สิทธิืผู้ใช้งาน</label><label class="text-danger">*</label>
                  <div class="row"></div>
                  <!-- <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">ผู้ดูแลระบบ</label>
                  </div> -->
                  <div class="form-check-inline">
                    <input class="form-check-input" name="radio" type="radio" value="option1">
                    <label class="form-check-label">
                      ผู้ดูแลระบบ
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" name="radio" type="radio" value="option2" checked>
                    <label class="form-check-label">
                      เจ้าหน้าที่
                    </label>
                  </div>
                </div>

              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-success">บันทึก</button>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
      </form>



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