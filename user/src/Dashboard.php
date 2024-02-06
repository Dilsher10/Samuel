<?php
session_start();
?>

<?php 
 include'header.php';
 include 'conn.php' ;
 $token = $_SESSION['token'];
 $sqlQuery = "SELECT * FROM `user` WHERE token = '$token'";
 $query = mysqli_query($conn, $sqlQuery);
 $row = mysqli_fetch_array($query);
?>



      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
         <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-10">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4 fw-bold" id="title">Welcome,<?= $_SESSION['username']?>!</h1>
              </div>
              <div class="col-12 col-md-2">
                <a href="logout.php" class="btn btn-primary btn-flat pull-right ">Sign out</a>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column">
                        <div class="row">
                            <div class="col-8 mb-4">
                               <h4 style="color:#000;">Personal Profile</h4>
                            </div>
                            <div class="col-4 mb-4">
                               <a href="profile.php" class="text-primary">Edit</a>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center text-alternate lh-1-25">
                            <?= $row['username'] ?>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate lh-1-25">
                            <?= $row['email_address'] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column">
                        <div class="row">
                            <div class="col-8 mb-4">
                               <h4 style="color:#000;">Address Book</h4>
                            </div>
                            <div class="col-4 mb-4">
                               <a href="address_book.php" class="text-primary">Add</a>
                            </div>
                        </div>
                        <div class="mb-3 d-flex align-items-center text-alternate lh-1-25">
                            Save your shipping address here.
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate lh-1-25">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column">
                        <div class="mb-3 mt-5 d-flex align-items-center text-alternate lh-1-25">
                            Save your billing address here.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Stats End -->
        </div>
      </main>
    </div>

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="icon/acorn-icons.js"></script>
    <script src="icon/acorn-icons-interface.js"></script>
    <script src="icon/acorn-icons-commerce.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>

    <!-- Template Base Scripts Start -->
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
