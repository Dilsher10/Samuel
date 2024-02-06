<?php
include 'header.php';
error_reporting(0);

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $value = $_POST['tagsBasic2'];

    $sql = "INSERT INTO attributes (name, value, token) VALUES ('" . $name . "','" . $value . "','" . $_SESSION['token'] . "')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            window.location.href = 'attributes.php';
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
                <div class="w-auto sw-md-30">
                  <h1 class="mb-0 pb-0 display-4" id="title">Add Attributes</h1>
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
                        <label class="form-label">Attribute Name<span class="requiredField">*</span></label>
                        <input type="text" name="name" class="form-control mb-1" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required/>
                        <p class="text-muted">Name for the attribute (shown on the front-end).</p>
                        <div class="mb-5 w-100">
               <label class="form-label">Add Values<span class="requiredField">*</span></label>
                    <div class="mb-n6 border-last-none">
                      <div class="mb-3 pb-3 border-separator-light">
                          <div class="col-md order-3">
                            <div class="mb-0">
                              <input type="text" name="tagsBasic2" required />
                            </div>
                          </div>
                          <p class="text-muted mt-1">Press enter to seprate values.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
        </form>
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>

  <?php include 'footer.php' ?>