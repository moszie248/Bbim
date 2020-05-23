<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>เพิ่มข้อมูลสถานประกอบการ</title>
</head>

<body>
  <div class="wrapper">

    <?php include('../user-header.php') ?>   

    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">เพิ่มข้อมูลสถานประกอบการ</h1>
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
                <form class="forms-sample" action="Save_add_Province.php" name="frmAdd" method="post">

                <div class="form-group">
                    <label for="exampleInputEmail3">ชื่อสถานประกอบการ</label>
                    <input type="text" class="form-control" name ="name" 
                        placeholder="ชื่อสถานประกอบการ" aria-label="ชื่อสถานประกอบการ" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">  
                          <label>ชื่อเจ้าของสถานประกอบการ</label>
                          <select id="txtid_unit" name="txtid_unit" class="form-control">
                          <option value='none'> --- เลือกคำนำหน้าชื่อ --- </option>

                          <?php
                            ini_set('display_errors', 1);
                            error_reporting(~0); 
                            
                            $serverName = "localhost";
                            $userName = "root";
                            $userPassword = "";
                            $dbName = "document";

                            $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                            $sql = "SELECT * FROM titlename ORDER BY id ASC" ;
                            $query = mysqli_query($conn,$sql);
                            
                              ini_set('display_errors', 1);
                              error_reporting(~0);

                          while($rs = mysqli_fetch_array($query))
                          {
                          ?>
                          <option value='<?php echo $rs['id'];?>'><?php echo $rs['name'];?> </option>
                          <?php } ?>
                          </select>
                        </div>
                    <div class="form-group col-md-4">
                        <label><br></label>
                        <input type="text" class="form-control" name="first_name" placeholder="ชื่อ" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label><br></label>
                        <input type="text" class="form-control" name="last_name" placeholder="นามสกุล" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>เบอร์โทรศัพท์</label><label class="text-danger">*</label>
                    <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">ที่อยู่</label>
                    <input type="text" class="form-control" name ="name" 
                        placeholder="ที่อยู่" aria-label="ที่อยู่" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>จังหวัด</label>
                        <select class="form-control" required>
                        <option selected>--- เลือกจังหวัด ---</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>อำเภอ</label>
                        <select class="form-control" required>
                        <option selected>--- เลือกอำเภอ ---</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ตำบล</label>
                        <select class="form-control" required>
                        <option selected>--- เลือกตำบล ---</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail3">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name ="name" 
                            placeholder="รหัสไปรษณีย์" aria-label="รหัสไปรษณีย์" required>
                    </div>
                </div>

                </div>
                
                <button type="submit" class="btn btn-success">บันทึก</button>
                <a href="Business.php" class="btn btn-danger">ยกเลิก</a>

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