<?php 
include 'header.php';
$eQuery = "SELECT * FROM `user` WHERE token = '" . $_SESSION['token'] . "'";
$equery = mysqli_query($conn, $eQuery);
$row = mysqli_fetch_array($equery);

if (isset($_POST['save'])) {
  
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `user` SET `username`='$name',`phone_number`='$phone',`password`='$password',`c_password`='$password' WHERE token = '" .  $_SESSION['token'] . "'";

    if (mysqli_query($conn, $sql)) {
      echo  "<script>
                window.location.href = 'profile.php';
            </script>";
    }
}

?>
  
  
  
  
  
  <main>
      <div class="container">
        <form method="post" enctype="multipart/form-data">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">My Profile</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <div class="col col-md-auto d-flex align-items-end justify-content-end">
                <button name="save" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                  <i data-acorn-icon="send"></i>
                  <span>Publish</span>
                </button>
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-10">
              <!-- Product Info Start -->
              <div class="mb-5">
                <h2 class="small-title">PROFILE INFO</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <label class="form-label">Name*</label>
                         <input type="text" name="name" class="form-control mb-5" value="<?= $row['username'];?>" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required/>
                        </div>
                    </div>
                    <label class="form-label">Email Address*</label>
                    <input class="form-control mb-5" type="email" name="email" value="<?= $row['email_address'];?>" required readonly />
                    <label class="form-label">Contact Number*</label>
                    <input class="form-control mb-5" type="tel" name="phone" value="<?= $row['phone_number'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/>
                     <div class="col-12">
                    <label class="form-label" for="password1">Password</label>
                    <input type="text" placeholder="Enter password" value="<?= $row['password'];?>" class="form-control" name="password" oninput="validatePasswords()" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" title="Password must meet the following requirements:
              - At least 8 characters long
              - Contains at least one lowercase letter
              - Contains at least one uppercase letter
              - Contains at least one number
              - Contains at least one special character (@ $ ! % * # ? &)" required/>
                  </div>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
            <div class="col-xl-4 mb-n5">
        </form>
      </div>
  </div>
  </div>
  </main>
  
  
  <?php include 'footer.php'; ?>