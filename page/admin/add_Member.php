<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>เพิ่มข้อมูลเจ้าหน้าที่</title>
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
              <h1 class="m-0 text-dark">เพิ่มข้อมูลเจ้าหน้าที่</h1>
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
                <form class="forms-sample" action="Save_add_Member.php" name="frmAdd" method="POST">
                    <div class="form-group">
                        <label>ชื่อผู้ใช้งาน</label><label class="text-danger">*</label>
                        <input type="text" class="form-control" name="user" placeholder="ชื่อผู้ใช้งาน" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">  
                          <label>คำนำหน้าชื่อ</label>
                          <select id="titlename" name="titlename" class="form-control">
                          <option value='none'> --- เลือกคำนำหน้าชื่อ --- </option>

                          <?php
                            ini_set('display_errors', 1);
                            error_reporting(~0); 
                            
                            $serverName = "localhost";
                            $userName = "root";
                            $userPassword = "";
                            $dbName = "document";

                            $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                            $sql = "SELECT * FROM titlename ORDER BY titlename_id ASC" ;
                            $query = mysqli_query($conn,$sql);
                            
                              ini_set('display_errors', 1);
                              error_reporting(~0);

                          while($rs = mysqli_fetch_array($query))
                          {
                          ?>
                          <option value='<?php echo $rs['titlename_id'];?>'><?php echo $rs['titlename_name'];?> </option>
                          <?php } ?>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>ชื่อ</label><label class="text-danger">*</label>
                            <input type="text" class="form-control" name="first_name" placeholder="ชื่อ" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label>นามสกุล</label><label class="text-danger">*</label>
                            <input type="text" class="form-control" name="last_name" placeholder="นามสกุล" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทรศัพท์</label><label class="text-danger">*</label>
                        <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required>
                    </div>
                    <div class="form-group">
                        <label>สิทธิ์ผู้ใช้งาน</label><label class="text-danger">*</label>
                    <div class="row"></div>
                    <!-- <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">ผู้ดูแลระบบ</label>
                    </div> -->
                    <div class="form-check-inline">
                        <input class="form-check-input" name="permission" type="radio" value="1">
                        <label class="form-check-label">
                        ผู้ดูแลระบบ
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" name="permission" type="radio" value="0" checked>
                        <label class="form-check-label">
                        เจ้าหน้าที่
                        </label>
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