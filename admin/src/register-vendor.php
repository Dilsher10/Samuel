<?php
include 'header.php';
error_reporting(0);
$id = $_GET['id'];
$eQuery = "SELECT * FROM `register_vendor`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save'])) {
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  
 //   Banner Image UPLOAD
  $image = $_FILES['img']['tmp_name'];
  $imagename = $_FILES['img']['name'];
  $img = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  
  if(!empty($img)){
    $sql = "UPDATE `register_vendor` SET `img`='$img', `content`='$content'";
  }else{
   $sql = "UPDATE `register_vendor` SET `content`='$content'";
  }
 
  $query = mysqli_query($conn, $sql);


  if ($query) {
    echo "<script>
    window.location.href='register-vendor.php';
    </script>";
  } else {
    echo mysqli_error($conn);
    echo 'something went wrong';
  }
}

?>

<form method="post" enctype="multipart/form-data">
  <main>
    <div class="container">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div>
              <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
              <h1 class="mb-0 pb-0 display-4" id="title">Edit Vendor</h1>
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
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-8">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <label class="form-label">Content</label>
                <textarea cols="80" rows="10" id="content" name="content"><?= $rows['content']?></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Info End -->
        <div class="col-xl-4 mb-n5">

          <!-- Image Start -->
          <div class="mb-5">
            <h2 class="small-title">Edit Image</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                  <div>
                   <img src="<?= 'front-store/uploads/' . $rows['img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img" class="custom-file-input" id="chooseFile1">
                  <br><strong><label>(1349 X 180 px)</label></strong>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image End -->

    </div>
    </div>

  </main>
</form>
<?php include 'footer.php'?>