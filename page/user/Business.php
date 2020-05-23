<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM business";
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
  <title>ข้อมูลสถานประกอบการ</title>
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
              <h1 class="m-0 text-dark">ข้อมูลสถานประกอบการ</h1>
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

                    <div class="form-row justify-content-md-start">
                      <div class="col-2">
                        <a href="add_Business.php" class="btn btn-primary">เพิ่มข้อมูลสถานประกอบการ</a>
                        
                      </div>
                    </div>

                    <div class="form-row justify-content-md-center mt-5">
                      <div class="col-11">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">ชื่อสถานประกอบการ</th>
                              <th scope="col">ชื่อเจ้าของสถานประกอบการ</th>
                              <th scope="col">เบอร์โทรศัพท์</th>
                              <th scope="col">ที่อยู่</th>
                              <th scope="col">การจัดการ</th>
                            </tr>
                          </thead>
                          
                          

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
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">แก้ไขข้อมูลเอกสาร</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="form-group">
                    <label>รหัสเอกสาร(เลขที่รับ)</label>
                    <input type="text" class="form-control"  placeholder="รหัสเอกสาร"required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>ชื่อเอกสาร</label>
                      <input type="text" class="form-control" placeholder="ชื่อเอกสาร" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>ประเถทเอกสาร</label>
                      <select class="form-control" required>
                        <option value="" selected>โปรดเลือก</option>
                        <option value="1">222</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>สถานประกอบการ</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">ไฟล์เอกสาร</label>
                    <input type="file" class="form-control" require>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">ไฟล์หลักฐานแนบเอกสาร</label>
                    <input type="file" class="form-control" require>
                  </div>
                  <div class="form-row">

                    <div class="form-group col-md-4">
                      <label>ผู้บันทึกเอกสาร</label>
                      <select class="form-control">
                        <option selected>คำนำหน้าชื่อ</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4 mt-4">
                      <label></label>
                      <input type="text" class="form-control" placeholder="ชื่อ">
                    </div>
                    
                    <div class="form-group col-md-4 mt-4">
                    <label></label>
                      <input type="text" class="form-control" placeholder="นามสกุล">
                    </div>
                  </div>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="submit" class="btn btn-success">submit</button>
                <button type="reset" class="btn btn-danger">cancel</button>
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