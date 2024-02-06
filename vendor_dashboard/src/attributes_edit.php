<?php include_once 'header.php';
if (isset($_POST['update'])) {
  $id =$_POST['id'];
  $name = $_POST['name'];
  $value = $_POST['tagsBasic2'];
 $sql = mysqli_query($conn,"UPDATE `attributes` SET `name`='$name', `value`='$value' where `id`='$id' "); 

print_r($sql);
 echo "<script>
                window.location.href = 'attributes.php' 
                </script>";
}
?>

    <main>
      <div class="container">
      <?php
        if (isset($_GET['id'])) {
        $id = $_GET ['id'];
         $update = mysqli_query($conn, "SELECT * FROM `attributes` where id = '".$id."'");
                    while ($rows = mysqli_fetch_array($update)) { ?>
                <form method="post" enctype="multipart/form-data">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
          <div class="row g-0">
            <!-- Title Start -->
            <div class="col-auto mb-3 mb-md-0 me-auto">
              <div class="w-auto sw-md-30">
                <h1 class="mb-0 pb-0 display-4" id="title">Edit Attributes</h1>
              </div>
            </div>
            <!-- Title End -->

            <!-- Top Buttons Start -->
            <div class="w-100 d-md-none"></div>
            <div class="col col-md-auto d-flex align-items-end justify-content-end">
              <div class="btn-group ms-1 w-100 w-md-auto">
                <button name="update" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                  <i data-acorn-icon="send"></i>
                  <span>Save</span>
                    </button>
              </div>
            </div>
            <!-- Top Buttons End -->
          </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
          <div class="col-xl-8">
            <!-- Product Info Start -->
            <div class="mb-5">
              <h2 class="small-title">Attributes Info</h2>
              <div class="card">
                <div class="card-body">
                  <input type="hidden" value="<?= $rows['id']; ?>" name="id" />
                      <div class="mb-5">
                      <label class="form-label">Attribute Name*</label>
                    <input type="text" name="name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['name'] ?>"/>
                      </div>
                        <div class="mb-5 w-100">
               <label class="form-label"> Values</label>
                    <div class="mb-n6 border-last-none">
                      <div class="mb-3 pb-3 border-bottom border-separator-light">
                        
                           <div class="col-md order-3">
                             <div class="mb-0">
                                                                    <?php $string_2 = $rows['value'];
                                                                    $new_str_2 = htmlspecialchars($string_2); ?>
                                                                    <input name="tagsBasic2" value="<?= $new_str_2; ?>" />
                                                                </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
            <!-- Product Info End -->
          </div>
            </form>
                <?php }  }?>
            <!-- Image End -->
          </div>
        </div>
      </div>
    </main>

  <?php include 'footer.php' ?>