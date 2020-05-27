<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "document";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

$strID = null;
if(isset($_GET["business_id"]))
{
   $strID = $_GET["business_id"];
}

// $sql = "SELECT * FROM subdistrict WHERE id = '".$strID."' ";


$sql = "SELECT b.business_id, b.business_name,b.first_name,b.last_name,b.phone,b.address,t.titlename_name,s.subdistrict_name, d.district_name, p.province_name 
FROM business b
INNER JOIN titlename t ON t.titlename_id = b.titlename_id
INNER JOIN subdistrict s ON s.subdistrict_id = b.subdistrict_id
INNER JOIN district d ON d.district_id = b.district_id 
INNER JOIN province p ON p.province_id = b.province_id WHERE business_id = '".$strID."' ";

$query = mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Style/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../Style/Bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../../Style/dist/css/adminlte.min.css">
  <title>แก้ไขข้อมูลสถานประกอบการ</title>
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
              <h1 class="m-0 text-dark">แก้ไขข้อมูลสถานประกอบการ</h1>
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
                
                <form class="forms-sample" action="Save_edit_Business.php?business_id=<?php echo "$strID" ;?>" name="frmAdd" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail3">ชื่อสถานประกอบการ</label>
                        <input type="text" class="form-control" name ="business_name" 
                            placeholder="ชื่อสถานประกอบการ" aria-label="ชื่อสถานประกอบการ" required 
                            value="<?php echo $result["business_name"];?>" ></td>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">  
                            <label>ชื่อเจ้าของสถานประกอบการ</label>
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
                            <label><br></label>
                            <input type="text" class="form-control" name="first_name"
                            value="<?php echo $result["first_name"];?>" ></td>
                        </div>
                        <div class="form-group col-md-4">
                            <label><br></label>
                            <input type="text" class="form-control" name="last_name"
                            value="<?php echo $result["last_name"];?>" ></td>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทรศัพท์</label><label class="text-danger">*</label>
                        <input type="text" class="form-control" name="phone"
                        value="<?php echo $result["phone"];?>" ></td>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">ที่อยู่</label>
                        <input type="text" class="form-control" name ="address" 
                            value="<?php echo $result["address"];?>" ></td>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">

                            <label for="province">จังหวัด</label>
                            <select name="id_province" id="province" class="form-control">
                            <option value='none'> --- เลือกจังหวัด --- </option>

                            <?php
                                ini_set('display_errors', 1);
                                error_reporting(~0); 
                                
                                $serverName = "localhost";
                                $userName = "root";
                                $userPassword = "";
                                $dbName = "document";

                                $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                                $sql = "SELECT * FROM province ORDER BY province_id ASC" ;
                                $query = mysqli_query($conn,$sql);
                                
                                ini_set('display_errors', 1);
                                error_reporting(~0);

                            while($rs = mysqli_fetch_array($query))
                            {
                            ?>
                            <option value='<?php echo $rs['province_id'];?>'><?php echo $rs['province_name'];?> </option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="district">อำเภอ</label>
                            <select name="id_district" id="district" class="form-control">
                            <!-- <option value='none'> --- เลือกอำเภอ --- </option> -->

                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="subdistrict">ตำบล</label>
                            <select name="id_subdistrict" id="subdistrict" class="form-control">
                            <!-- <option selected> --- เลือกตำบล --- </option> -->
                            
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail3">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" id="ZipCode" name ="zipcode" >
                           
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