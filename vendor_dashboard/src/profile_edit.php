<?php include 'header.php';
error_reporting(0);
$eQuery = "SELECT * FROM `seller_account` WHERE token = '" .  $_SESSION['token'] . "' ";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save'])) {
  
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  //   IMAGE UPLOAD
  $image = $_FILES['file']['tmp_name'];
  $imagename = $_FILES['file']['name'];
  $imagedes = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  
  if(!empty($imagedes)){
    $sql = "UPDATE `seller_account` SET `first_name`='$f_name',`last_name`='$l_name',`email`='$email',`phone`='$phone',`user_img`='$imagedes' WHERE token = '" .  $_SESSION['token'] . "' " ;

  }else{
          $sql = "UPDATE `seller_account` SET `first_name`='$f_name',`last_name`='$l_name',`email`='$email',`phone`='$phone' WHERE token = '" .  $_SESSION['token'] . "' ";

  }

    if (mysqli_query($conn, $sql)) {
      echo  "<script>
                window.location.href = 'profile_edit.php?token=".$_SESSION['token']."'
            </script>";
    }
}
?>

    <main>
      <div class="container">
        <form method="post" enctype="multipart/form-data" id="form">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <input type="button" class="muted-link pb-1 d-inline-block breadcrumb-back backBtn" value="Back" onClick="history.go(-1);">
                  <h1 class="mb-0 pb-0 display-4" id="title">Edit Profile Information</h1>
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
                <h2 class="small-title">Seller Account</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        <label class="form-label">First Name<span class="requiredField">*</span></label>
                    <input type="text" name="f_name" class="form-control mb-5" maxlength="30" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['first_name'] ?>" required>
                        </div>
                        <div class="col-6">
                        <label class="form-label">Last Name<span class="requiredField">*</span></label>
                    <input type="text" name="l_name" class="form-control mb-5" maxlength="40" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['last_name'] ?>" required>
                        </div>
                    </div>
                    <label class="form-label">Contact Email Address<span class="requiredField">*</span></label>
                    <input class="form-control mb-5" type="email" name="email" value="<?= htmlspecialchars($rows['email']) ?>" pattern="^[^ ]+@[^ ]+\.[a-z]{2,3}$" required>
                    <span id="text"></span>
                    <label class="form-label">Contact Number<span class="requiredField">*</span></label>
                    <input class="form-control mb-5" type="tel" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $rows['phone'] ?>" maxlength="17" required>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
            <div class="col-xl-4 mb-n5">
              <!-- Image Start -->
              <div class="mb-5">
                <h2 class="small-title">Upload Image</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img src="<?= 'front-store/uploads/' . $rows['user_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">
                      </div>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="chooseFile1">
                    </div>
                  </div>
                </div>
              </div>
        </form>
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>

  <?php include 'footer.php' ?>
  