<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$sql = "SELECT * FROM province";
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
  <title>ข้อมูลจังหวัด</title>
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
              <h1 class="m-0 text-dark">ข้อมูลจังหวัด</h1>
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
                        <a href="add_Province.php" class="btn btn-primary">
                        <i class='fas fa-plus-circle'></i> เพิ่มข้อมูล</a>
                      </div>
                      <div class="col-2">
                        <a href="city.php" class="btn btn-secondary">ย้อนกลับ</a>
                      </div>
                    </div>

                    <div class="form-row justify-content-md-center mt-5">
                      <div class="col-10">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr style="background-color:#AED6F1">
                              <th scope="col">#</th>
                              <th scope="col">จังหวัด</th>
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
                                    <?php echo $result["province_id"];?>
                                  </div>
                              </td>
                              <td>
                                <div >
                                  <?php echo $result["province_name"];?>
                                </div>

                              </td>
                              <td align="center">
                                <!-- แก้ไข-->
                                <a href="edit_Province.php?province_id=<?php echo $result["province_id"];?>">
                                    <i class="fas fa-edit text-warning mr-3"></i>
                                  </a>
                                <!-- ลบ -->
                                <a href="JavaScript:if(confirm('คุณต้องการลบข้อมูลจังหวัดใช่หรือไม่ ?')==true){window.location='delete_Province.php?province_id=
                                <?php echo $result["province_id"];?>';}">
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