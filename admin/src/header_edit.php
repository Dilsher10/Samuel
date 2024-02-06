<?php
session_start();
?>


<?php
include 'header.php';
error_reporting(0);
$eQuery = "SELECT * FROM `header`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save'])) {

  //   image UPLOAD
  $image_1 = $_FILES['image']['tmp_name'];
  $imagename_1 = $_FILES['image']['name'];
  $image = $imagename_1;
  move_uploaded_file($image_1, "assets/images/" . $imagename_1);
  
  $phone_text = $_POST['phone_text'];
  $phone = $_POST['phone'];
  $width = $_POST['width'];
  $height = $_POST['height'];
  
  
  if(!empty($image)){
      $sql = "UPDATE `header` SET `logo`='$image',`phone_text`='$phone_text',`phone`='$phone',`width`='$width',`height`='$height'";
      $query = mysqli_query($conn, $sql);
  }
  else{
      $sql = "UPDATE `header` SET `phone_text`='$phone_text',`phone`='$phone',`width`='$width',`height`='$height'";
      $query = mysqli_query($conn, $sql);
  }

  

  session_start();
  if ($query) {
      $_SESSION['status'] = 'Updated successfully';
    echo "<script>
    window.location.href='header_edit.php';
    </script>";
  } else {
    echo mysqli_error($conn);
    echo 'something went wrong';
  }
}

?>



 <?php
    session_start();
    if(isset($_SESSION['status'])){
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert" style="background:green; color:#fff;">
          <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        </div>
    <?php
    unset($_SESSION['status']);
}

?>


<form method="post" enctype="multipart/form-data">
  <main>
    <div class="container">
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div>
             <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
              <h1 class="mb-0 pb-0 display-4" id="title">Header</h1>
            </div>
          </div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>


      <div class="row justify-content-between">
        <!--Logo  -->
        <div class="col-5 col-xl-5 mb-n5">
          <div class="mb-5">
            <h2 class="small-title">Logo</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-5">
                  <div>
                    <img src="<?= '../../assets/images/' . $rows['logo']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="logo" width="<?php echo $rows['width']; ?>" height="<?php echo $rows['height']; ?>">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="chooseFile1">
                </div>
              </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <label>Width</label>
                    <input type="text" class="form-control" name="width" value="<?php echo $rows['width']; ?>">
                </div>
                <div class="col-6">
                    <label>Height</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $rows['height']; ?>">
                </div>
            </div>
          </div>
        </div>
        <!-- Logo End -->
        
        <!--Number-->
        <div class="col-5 col-xl-5 mb-n5">
          <div class="mb-5">
            <h2 class="small-title">Phone Number</h2>
            <div class="card">
              <div class="card-body">
                      <div class="mb-3">
                          <label class="form-label">Text</label>
                          <input type="text" class="form-control" name="phone_text" value="<?php echo $rows['phone_text']; ?>">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Number</label>
                          <input type="text" class="form-control" name="phone" value="<?php echo $rows['phone']; ?>">
                      </div>
              </div>
            </div>
          </div>
        </div>
        <!--Number End-->
      </div>
    </div>
  </main>
</form>
<?php include 'footer.php' ?>