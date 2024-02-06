<?php
session_start();
include 'header.php';

$sqlQuery = "SELECT * FROM about_us";
$query = mysqli_query($conn,$sqlQuery);
$data = mysqli_fetch_array($query);

?>
  
  
<?php
if(isset($_SESSION['status'])){
   ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert" style="background:green; color:#fff;">
      <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
   </div>
  <?php
  unset($_SESSION['status']);
}
?>


<?php
if(isset($_SESSION['message'])){
   ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert" style="background:red; color:#fff;">
      <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>
   </div>
  <?php
  unset($_SESSION['message']);
}
?>
  


<form method="post" action="about_code.php" enctype="multipart/form-data">
        <main>
          <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
              <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div>
                    <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
                    <h1 class="mb-0 pb-0 display-4" id="title">About Us</h1>
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
            <div class="col-xl-12">

              <div class="mb-5">
                <!--<h2 class="small-title">Banner Image 1</h2>-->
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3">
                      <div>
                        <label class="form-label">Banner Image</label>
                        <img src="<?= 'front-store/uploads/' . $data['banner_image']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="banner_image" class="custom-file-input" id="chooseFile3">
                      <br><strong><label>(1349 X 180 px)</label></strong>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <!--Section 1-->

              <div class="mb-5">
                  <h2 class="small-title">Section 1</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3">
                      <div>
                        <label class="form-label">Image</label>
                        <img src="<?= 'front-store/uploads/' . $data['sec_1_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="sec_1_img" class="custom-file-input" id="chooseFile">
                      <br><strong><label>(1240 X 540 px)</label></strong>
                    </div>
                    </br>
                    <label class="form-label">Title</label>
                     <textarea rows="2" name="sec_1_heading">
                         <?= $data['sec_1_heading'] ?>
                     </textarea>
                    <br>
                    <label class="form-label">Description </label>
                    <textarea rows="2" name="sec_1_text">
                         <?= $data['sec_1_text'] ?>
                    </textarea>
                  </div>
                </div>
              </div>
              
              
              
              <!--Section 2-->

              <div class="mb-5">
                  <h2 class="small-title">Section 2</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <label class="form-label">Title</label>
                        <textarea name="sec_2_heading">
                         <?= $data['sec_2_heading'] ?>
                        </textarea>
                        <br>
                         <label class="form-label">Sub Heading</label>
                         <textarea name="sec_2_sub_heading">
                         <?= $data['sec_2_sub_heading'] ?>
                         </textarea>
                        <br>
                        <label class="form-label">Description</label>
                        <textarea name="sec_2_text">
                         <?= $data['sec_2_text'] ?>
                        </textarea>
                      </div>
                      <div class="col-4">
                        <div class="user-image mb-3">
                          <div>
                            <label class="form-label">Image</label>
                            <img src="<?= 'front-store/uploads/' . $data['sec_2_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="sec_2_img" class="custom-file-input" id="chooseFile">
                          <br><strong><label>(610 X 500 px)</label></strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              <!--Section 3-->

              <div class="mb-5">
                  <h2 class="small-title">Section 3</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-5">
                             <div class="user-image mb-3">
                          <div>
                            <label class="form-label">Image 1</label>
                            <img src="<?= 'front-store/uploads/' . $data['sec_3_img_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="sec_3_img_1" class="custom-file-input" id="chooseFile">
                          <br><strong><label>(610 X 500 px)</label></strong>
                        </div>
                        
                        </div>
                        <div class="col-6 mb-5">
                            <div class="user-image mb-3">
                          <div>
                            <label class="form-label">Image 2</label>
                            <img src="<?= 'front-store/uploads/' . $data['sec_3_img_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="sec_3_img_2" class="custom-file-input" id="chooseFile">
                          <br><strong><label>(610 X 500 px)</label></strong>
                        </div>
                        </div>
        
                        <div class="col-10 mt-5">
                            <label class="form-label">Description 1</label>
                            <textarea name="sec_3_text_1">
                               <?= $data['sec_3_text_1'] ?>
                            </textarea>
                        <br>
                        <label class="form-label">Description 2</label>
                        <textarea name="sec_3_text_2">
                         <?= $data['sec_3_text_2'] ?>
                        </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              
              <!--Section 4-->
              
              <div class="mb-5">
                  <h2 class="small-title">Section 4</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <label class="form-label">Heading 1</label>
                        <textarea name="sec_4_heading_1">
                             <?= $data['sec_4_heading_1'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Description 1 </label>
                        <textarea name="sec_4_text_1">
                             <?= $data['sec_4_text_1'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Heading 2</label>
                        <textarea name="sec_4_heading_2">
                             <?= $data['sec_4_heading_2'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Description 2</label>
                        <textarea name="sec_4_text_2">
                             <?= $data['sec_4_text_2'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Heading 3</label>
                        <input type="text" name="sec_4_heading_3" class="form-control mb-3" value="<?= $data['sec_4_heading_3'] ?>">
                        <textarea name="sec_4_heading_3">
                             <?= $data['sec_4_heading_3'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Description 3</label>
                        <textarea name="sec_4_text_3">
                             <?= $data['sec_4_text_3'] ?>
                        </textarea>
                      </div>
                      <div class="col-4">
                        <div class="user-image mb-3">
                          <div>
                            <label class="form-label">Image</label>
                            <img src="<?= 'front-store/uploads/' . $data['sec_4_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="sec_4_img" class="custom-file-input" id="chooseFile">
                          <br><strong><label>(610 X 500 px)</label></strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              



             <!--Section 5-->
             
              <div class="mb-5">
                  <h2 class="small-title">Section 5</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <div class="user-image mb-3">
                          <div>
                            <label class="form-label">Image</label>
                            <img src="<?= 'front-store/uploads/' . $data['sec_5_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="sec_5_img" class="custom-file-input" id="chooseFile">
                          <br><strong><label>(610X 450 px)</label></strong>
                        </div>
                      </div>
                      <div class="col-8">
                        <label class="form-label">Heading</label>
                        <textarea name="sec_5_heading">
                             <?= $data['sec_5_heading'] ?>
                        </textarea>
                        <br>
                        <label class="form-label">Description </label>
                        <textarea name="sec_5_text">
                             <?= $data['sec_5_text'] ?>
                        </textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </main>
    </form>
<?php include 'footer.php' ?>