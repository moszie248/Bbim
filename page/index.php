<?php include('../Database/server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../Style/Bootstrap/css/bootstrap.min.css" type="text/css">

  <title>UPLOAD</title>
</head>

<body>
  <div class="wrapper">

    <?php include('header.php') ?>

    <div class="content-wrapper">
      <div class="container">
        <!-- Content here -->
        <form action="../Database/file_db.php" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">ชื่อไฟล์</label>
              <input type="text" class="form-control" name="Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">เลือกไฟล์</label>
              <input type="file" class="form-control" name="Files" multiple required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">ประเภทไฟล์</label>
              <select class="custom-select my-1 mr-sm-2" name="Type" required>
                <option value="" selected>โปรดเลือก</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">สถานประกอบการ</label>
              <select class="custom-select my-1 mr-sm-2" name="Place" required>
                <option value="" selected>โปรดเลือก</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="form-row justify-content-md-center">
            <div class="col-1">
              <button type="submit" class="btn btn-primary" name="up_file">อัพโหลด</button>
            </div>
            <div class="col-1">
              <button type="reset" class="btn btn-danger">ยกเลิก</button>
            </div>
          </div>


        </form>
      </div>
      <div class="container">
        <!-- Content here -->
        <!-- <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  First radio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                  Second radio
                </label>
              </div>
              <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                <label class="form-check-label" for="gridRadios3">
                  Third disabled radio
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-2">Checkbox</div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck1">
              <label class="form-check-label" for="gridCheck1">
                Example checkbox
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form> -->
      </div>

    </div>
    
  </div>



</body>

</html>
<script src="../Style/Bootstrap/js/bootstrap.min.js"></script>