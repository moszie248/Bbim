<?php include('../../Database/server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>UPLOAD</title>
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

                    <div class="form-row justify-content-md-start">
                      <div class="col-2">
                        <button type="submit" class="btn btn-primary" name="up_file" data-toggle="modal" data-target="#add-modal">เพิ่มข้อมูลจังหวัด</button>


                      </div>
                    </div>

                    <div class="form-row justify-content-md-center mt-5">
                      <div class="col-10">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">จังหวัด</th>
                              <th scope="col">การจัดการ</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>
                                <a href="" data-toggle="modal" data-target="#edit-modal"><i class="fas fa-edit mr-3"></i></a>
                                <a href=""><i class="fas fa-trash text-danger"></i></a>
                              </td>
                            </tr>
                          </tbody>
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
        <div class="modal fade" id="add-modal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">เพิ่มข้อมูลจังหวัด</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-row justify-content-md-center mt-2">
                  <div class="col-2">
                  จังหวัด <label class="text-danger">*</label>
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder="จังหวัด" aria-label="จังหวัด" required>
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

      <!-- add modal-->
      <form action="" method="post">
        <div class="modal fade" id="edit-modal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">แก้ไขข้อมูลจังหวัด</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-row justify-content-md-center mt-2">
                  <div class="col-2">
                  จังหวัด <label class="text-danger">*</label>
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder="จังหวัด" aria-label="จังหวัด" required>
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