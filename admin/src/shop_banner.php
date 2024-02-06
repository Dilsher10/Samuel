<?php
include 'header.php';
error_reporting(0);
$eQuery = "SELECT * FROM `shop`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save'])) {

  //   image UPLOAD
  $image_1 = $_FILES['image']['tmp_name'];
  $imagename_1 = $_FILES['image']['name'];
  $image = $imagename_1;
  move_uploaded_file($image_1, "front-store/uploads/" . $imagename_1);

  $sql = "UPDATE `shop` SET `image`='$image' ";

  $query = mysqli_query($conn, $sql);

  if ($query) {
    echo "<script>
    window.location.href='shop_banner.php';
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
              <h1 class="mb-0 pb-0 display-4" id="title">Shop Banner Image</h1>
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
        <div class="col-xl-12 mb-n5">
          <div class="mb-5">
            <h2 class="small-title">Edit Banner Image</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows['image']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="chooseFile1">
                  <br><strong><label>(1349 X 180 px)</label></strong>
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
<?php include 'footer.php' ?>