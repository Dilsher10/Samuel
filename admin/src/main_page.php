<?php include 'header.php' ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container">
  <div class="page-title-container">
    <div class="row g-0">
      <!-- Title Start -->
      <div class="col-auto mb-3 mb-md-0 me-auto">
        <div>
          <button type="button" class="backBtn text-muted mt-3" onClick="history.go(-1)">Back</button>
          <h1 class="margin-cust mb-0 pb-0 display-4" id="title">Main Page</h1>
        </div>
      </div>
      <!-- Title End -->
      <!-- Top Buttons Start -->
      <!-- Top Buttons End -->
    </div>
  </div>
  <!-- Title and Top Buttons End -->
  <ul class="nav nav-pills mb-3 margin-cust-tabs" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active fnt-btn-cust" id="section-1-tab" data-bs-toggle="pill" data-bs-target="#section-1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Section-1</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-2-tab" data-bs-toggle="pill" data-bs-target="#section-2" type="button" role="tab" aria-controls="section-2" aria-selected="false">Section-2</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-3-tab" data-bs-toggle="pill" data-bs-target="#section-3" type="button" role="tab" aria-controls="section-3" aria-selected="false">Section-3</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-4-tab" data-bs-toggle="pill" data-bs-target="#section-4" type="button" role="tab" aria-controls="section-4" aria-selected="false">Section-4</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-5-tab" data-bs-toggle="pill" data-bs-target="#section-5" type="button" role="tab" aria-controls="section-5" aria-selected="false">Section-5</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-6-tab" data-bs-toggle="pill" data-bs-target="#section-6" type="button" role="tab" aria-controls="section-6" aria-selected="false">Section-6</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-7-tab" data-bs-toggle="pill" data-bs-target="#section-7" type="button" role="tab" aria-controls="section-7" aria-selected="false">Section-7</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-8-tab" data-bs-toggle="pill" data-bs-target="#section-8" type="button" role="tab" aria-controls="section-8" aria-selected="false">Section-8</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-9-tab" data-bs-toggle="pill" data-bs-target="#section-9" type="button" role="tab" aria-controls="section-9" aria-selected="false">Section-9</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-10-tab" data-bs-toggle="pill" data-bs-target="#section-10" type="button" role="tab" aria-controls="section-10" aria-selected="false">Section-10</button>
    </li>
        <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-11-tab" data-bs-toggle="pill" data-bs-target="#section-11" type="button" role="tab" aria-controls="section-11" aria-selected="false">Section-11</button>
    </li>
            <li class="nav-item" role="presentation">
      <button class="nav-link fnt-btn-cust" id="section-12-tab" data-bs-toggle="pill" data-bs-target="#section-12" type="button" role="tab" aria-controls="section-12" aria-selected="false">Section-12</button>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
        <!--SECTION 1 START-->
    <div class="tab-pane fade show active" id="section-1" role="tabpanel" aria-labelledby="section-1-tab" tabindex="0">
      <?php
      $eQuery_1 = "SELECT * FROM `section_1`";
      $eQuery_1 = mysqli_query($conn, $eQuery_1);
      $rows_1 = mysqli_fetch_array($eQuery_1);
      if (isset($_POST['save'])) {

        $slider_title_1 =  mysqli_real_escape_string($conn, $_POST['slider_title_1']);
        $slider_title_2 =  mysqli_real_escape_string($conn, $_POST['slider_title_2']);
        $slider_title_3 =  mysqli_real_escape_string($conn, $_POST['slider_title_3']);
        $slider_des_1 =  mysqli_real_escape_string($conn, $_POST['slider_des_1']);
        $slider_des_2 =  mysqli_real_escape_string($conn, $_POST['slider_des_2']);
        $slider_des_3 =  mysqli_real_escape_string($conn, $_POST['slider_des_3']);
        $slider_btn_1 = $_POST['slider_btn_1'];
        $slider_btn_2 = $_POST['slider_btn_2'];
        $slider_btn_3 = $_POST['slider_btn_3'];
        $slider_link_1 =  mysqli_real_escape_string($conn, $_POST['slider_link_1']);
        $slider_link_2 =  mysqli_real_escape_string($conn, $_POST['slider_link_2']);
        $slider_link_3 =  mysqli_real_escape_string($conn, $_POST['slider_link_3']);
        //   slider_img_1 UPLOAD
        $image_1 = $_FILES['slider_img_1']['tmp_name'];
        $imagename_1 = $_FILES['slider_img_1']['name'];
        $slider_img_1 = $imagename_1;
        move_uploaded_file($image_1, "front-store/uploads/" . $imagename_1);
        
         //   slider_back_img_1 UPLOAD
        $image_back_1 = $_FILES['slider_back_img_1']['tmp_name'];
        $imagenameback_1 = $_FILES['slider_back_img_1']['name'];
        $slider_back_img_1 = $imagenameback_1;
        move_uploaded_file($image_back_1, "front-store/uploads/" . $imagenameback_1);
        
                 //   slider_back_img_2 UPLOAD
        $image_back_2 = $_FILES['slider_back_img_2']['tmp_name'];
        $imagenameback_2 = $_FILES['slider_back_img_2']['name'];
        $slider_back_img_2 = $imagenameback_2;
        move_uploaded_file($image_back_2, "front-store/uploads/" . $imagenameback_2);

        //   slider_img_2 UPLOAD
        $image_2 = $_FILES['slider_img_2']['tmp_name'];
        $imagename_2 = $_FILES['slider_img_2']['name'];
        $slider_img_2 = $imagename_2;
        move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);

        //   slider_img_3 UPLOAD
        $image_3 = $_FILES['slider_img_3']['tmp_name'];
        $imagename_3 = $_FILES['slider_img_3']['name'];
        $slider_img_3 = $imagename_3;
        move_uploaded_file($image_3, "front-store/uploads/" . $imagename_3);
        
         //   slider_back_img_3 UPLOAD
        $image_back_3 = $_FILES['slider_back_img_3']['tmp_name'];
        $imagenameback_3 = $_FILES['slider_back_img_3']['name'];
        $slider_back_img_3 = $imagenameback_3;
        move_uploaded_file($image_back_3, "front-store/uploads/" . $imagenameback_3);
        
if(!empty($slider_img_1) && !empty($slider_back_img_1) && !empty($slider_img_2) && !empty($slider_back_img_2) && !empty($slider_img_3) && !empty($slider_back_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_back_img_3`='$slider_back_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_1) && !empty($slider_img_2) && !empty($slider_back_img_1) && !empty($slider_back_img_2) && !empty($slider_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_1) && !empty($slider_img_2) && !empty($slider_back_img_1) && !empty($slider_back_img_2)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_1) && !empty($slider_img_2) && !empty($slider_back_img_1)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_1) && !empty($slider_back_img_1)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_back_img_1`='$slider_back_img_1',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_1)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_1`='$slider_img_1',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_1) && !empty($slider_img_2) && !empty($slider_back_img_2) && !empty($slider_img_3) && !empty($slider_back_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_back_img_3`='$slider_back_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_1) && !empty($slider_img_2) && !empty($slider_back_img_2) && !empty($slider_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_1) && !empty($slider_img_2) && !empty($slider_back_img_2)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_1) && !empty($slider_img_2)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_1`='$slider_back_img_1',`slider_img_2`='$slider_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_1)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_1`='$slider_back_img_1,`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_2) && !empty($slider_back_img_2) && !empty($slider_img_3) && !empty($slider_back_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_back_img_3`='$slider_back_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_2) && !empty($slider_back_img_2) && !empty($slider_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_img_3`='$slider_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_2) && !empty($slider_back_img_2)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_2`='$slider_img_2',`slider_back_img_2`='$slider_back_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_2)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_2`='$slider_img_2',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_3) && !empty($slider_back_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_3`='$slider_img_3',`slider_back_img_3`='$slider_back_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_img_3`='$slider_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }elseif(!empty($slider_back_img_3)){
          $sql_1 = "UPDATE `section_1` SET `slider_back_img_3`='$slider_back_img_3',`slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
         }else {
          $sql_1 = "UPDATE `section_1` SET `slider_title_1`='$slider_title_1',`slider_title_2`='$slider_title_2',`slider_title_3`='$slider_title_3',`slider_des_1`='$slider_des_1',`slider_des_2`='$slider_des_2',`slider_des_3`='$slider_des_3',`slider_btn_1`='$slider_btn_1',`slider_btn_2`='$slider_btn_2',`slider_btn_3`='$slider_btn_3',`slider_link_1`='$slider_link_1',`slider_link_2`='$slider_link_2',`slider_link_3`='$slider_link_3'";
        }
        $query_1 = mysqli_query($conn, $sql_1);
        if ($query_1) {
          echo 'Update Successfully';
          echo "<script>
    window.location.href='main_page.php';
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
                    <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">

                    </a>
                    <h1 class="mb-0 pb-0 display-4" id="title">Home Slider</h1>
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
                  <h2 class="small-title">Slider Image 1</h2>
                  <div class="card">
                    <div class="card-body">
                    <div class="row">
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Back)</label>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_img_1']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_img_1" class="custom-file-input" id="chooseFile1">
                          <br><strong><label>(1903 X 520 px)</label></strong>
                        </div>
                          </div>
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Front)</label>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_back_img_1']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder2" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_back_img_1" class="custom-file-input" id="chooseFile2">
                          <br><strong><label>(474 X 397 px)</label></strong>
                        </div>
                          </div>
                        </div>
                      <br>
                      <label class="form-label">Slider Title 1</label>
                      <input type="text" name="slider_title_1" class="form-control mb-5" value="<?= $rows_1['slider_title_1'] ?>">
                      <label class="form-label">Slider Des 1</label>
                      <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" style="display:none" name="slider_des_1"></textarea>
                      <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="slider_des_1"><?= $rows_1['slider_des_1'] ?></textarea>
                      <label class="form-label">Slider Link 1</label>
                      <input type="text" name="slider_link_1" class="form-control mb-5" value="<?= $rows_1['slider_link_1'] ?>">
                      <div class="mb-5 w-100">
                        <label class="form-label">Slider Button 1</label>
                        <select class="select-single-no-search" name="slider_btn_1">
                          <option <?php if ($rows_1['slider_btn_1'] == 'Yes') echo 'Selected' ?>>Yes</option>
                          <option <?php if ($rows_1['slider_btn_1'] == 'No') echo 'Selected' ?>>No</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="mb-5 mt-5">
                    <h2 class="small-title">Slider Image 2</h2>
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Back)</label>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_img_2']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder3" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_img_2" class="custom-file-input" id="chooseFile3">
                         <br><strong><label>(1903 X 520 px)</label></strong>
                        </div>
                          </div>
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Front)</label>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_back_img_2']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder4" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_back_img_2" class="custom-file-input" id="chooseFile4">
                        <br><strong><label>(474 X 397 px)</label></strong>
                        </div>
                          </div>
                        </div>
                        <br>
                        <label class="form-label">Slider Title 2</label>
                        <input type="text" name="slider_title_2" class="form-control mb-5" value="<?= $rows_1['slider_title_2'] ?>">



                        <label class="form-label">Slider Des 2</label>
                        <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="slider_des_2"><?= $rows_1['slider_des_2'] ?></textarea>

                        <label class="form-label">Slider Link 2</label>
                        <input type="text" name="slider_link_2" class="form-control mb-5" value="<?= $rows_1['slider_link_2'] ?>">

                        <div class="mb-5 w-100">
                          <label class="form-label">Slider Button 2</label>
                          <select class="select-single-no-search" name="slider_btn_2">
                            <option <?php if ($rows_1['slider_btn_2'] == 'Yes') echo 'Selected' ?>>Yes</option>
                            <option <?php if ($rows_1['slider_btn_2'] == 'No') echo 'Selected' ?>>No</option>
                          </select>
                        </div>
                    </div>
                  </div>

                  <div class="mb-5 mt-5">
                    <h2 class="small-title">Slider Image 3</h3>
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Back)</label>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_img_3']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder5" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_img_3" class="custom-file-input" id="chooseFile5">
                         <br><strong><label>(1903 X 520 px)</label></strong>
                        </div>
                          </div>
                          <div class="col-6">
                          <div class="user-image mb-3 text-center">
                          <div>
                              <label class="form-label">Image(Front)</label>
                              <br>
                            <img src="<?= 'front-store/uploads/' . $rows_1['slider_back_img_3']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder6" alt="">
                          </div>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="slider_back_img_3" class="custom-file-input" id="chooseFile6">
                        <br><strong><label>(474 X 397 px)</label></strong>
                        </div>
                          </div>
                        </div>

                        <br>
                        <label class="form-label">Slider Title 3</label>
                        <input type="text" name="slider_title_3" class="form-control mb-5" value="<?= $rows_1['slider_title_3'] ?>">



                        <label class="form-label">Slider Des 3</label>
                        <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="slider_des_3"><?= $rows_1['slider_des_3'] ?></textarea>

                        <label class="form-label">Slider Link 3</label>
                        <input type="text" name="slider_link_3" class="form-control mb-5" value="<?= $rows_1['slider_link_3'] ?>">


                        <div class="mb-5 w-100">
                          <label class="form-label">Slider Button 3</label>
                          <select class="select-single-no-search" name="slider_btn_3">
                            <option <?php if ($rows_1['slider_btn_3'] == 'Yes') echo 'Selected' ?>>Yes</option>
                            <option <?php if ($rows_1['slider_btn_3'] == 'No') echo 'Selected' ?>>No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          </div>
        </main>
      </form>
    </div>
    <!--SECTION 1 END-->
    
    <!--SECTION 2 START-->
    <div class="tab-pane fade" id="section-2" role="tabpanel" aria-labelledby="section-2-tab" tabindex="0">
     <?php
$eQuery_2 = "SELECT * FROM `section_11`";
$equery_2 = mysqli_query($conn, $eQuery_2);
$rows_2 = mysqli_fetch_array($equery_2);
if (isset($_POST['save2'])) {
    
$title1 = $_POST['title1'];
$des1 = $_POST['des1'];
$title2 = $_POST['title2'];
$des2 = $_POST['des2'];
$title3 = $_POST['title3'];
$des3 = $_POST['des3'];
$title4 = $_POST['title4'];
$des4 = $_POST['des4'];

  //   slider_img_1 UPLOAD
  $image1 = $_FILES['img1']['tmp_name'];
  $imagename1= $_FILES['img1']['name'];
  $img1 = $imagename1;
  move_uploaded_file($image1, "front-store/uploads/" . $imagename1);

  //   slider_img_2 UPLOAD
  $image2 = $_FILES['img2']['tmp_name'];
  $imagename2= $_FILES['img2']['name'];
  $img2 = $imagename2;
  move_uploaded_file($image2, "front-store/uploads/" . $imagename2);

    //   slider_img_3 UPLOAD
    $image3 = $_FILES['img3']['tmp_name'];
    $imagename3= $_FILES['img3']['name'];
    $img3 = $imagename3;
    move_uploaded_file($image3, "front-store/uploads/" . $imagename3);

      //   slider_img_4 UPLOAD
  $image4 = $_FILES['img4']['tmp_name'];
  $imagename4= $_FILES['img4']['name'];
  $img4 = $imagename4;
  move_uploaded_file($image4, "front-store/uploads/" . $imagename4);
  
 if(!empty($img1) && !empty($img2) && !empty($img3) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`icon_img_2`='$img2',`icon_img_3`='$img3',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
 }elseif(!empty($img1) && !empty($img2) && !empty($img3)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`icon_img_2`='$img2',`icon_img_3`='$img3',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img1) && !empty($img2) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`icon_img_2`='$img2',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img1) && !empty($img3) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`icon_img_3`='$img3',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img1) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img2) && !empty($img3)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_2`='$img2',`icon_img_3`='$img3',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img2) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_2`='$img2',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img3) && !empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_3`='$img3',`icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img1)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_1`='$img1',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img2)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_2`='$img2',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img3)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_3`='$img3',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}elseif(!empty($img4)){
  $sql_2 = "UPDATE `section_11` SET `icon_img_4`='$img4',`title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
}else{
     $sql_2 = "UPDATE `section_11` SET `title_1`='$title1',`des_1`='$des1',`title_2`='$title2',`des_2`='$des2',`title_3`='$title3',`des_3`='$des3',`title_4`='$title4',`des_4`='$des4'";
 }
$query_2 = mysqli_query($conn, $sql_2);

 
  if ($query_2) {
    echo 'Update Successfully';
    echo "<script>
window.location.href='main_page.php';
</script>";
  }else{
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
              <h1 class="mb-0 pb-0 display-4" id="title">Shipping Information</h1>
            </div>
          </div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save2" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
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
   <div class="card">
     <div class="card-body">
                <h2 class="small-title">Edit Image </h2>
                <div class="user-image mb-3">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_2['icon_img_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder7" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img1" class="custom-file-input" id="chooseFile7">
                  <br><strong><label>(31 X 30 px)</strong></label>
                </div>
                <br>
                <label class="form-label mt-5">Title </label>
                <input type="text" name="title1" class="form-control mb-5" value="<?= $rows_2['title_1'] ?>">
                
               <label class="form-label">Description</label>
                <input type="text" name="des1" class="form-control mb-5" value="<?= $rows_2['des_1'] ?>">

              </div>
            </div>
          </div>

          <div class="mb-5">
   <div class="card">
     <div class="card-body">
                <h2 class="small-title">Edit Image </h2>
                <div class="user-image mb-3">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_2['icon_img_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder8" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img2" class="custom-file-input" id="chooseFile8">
                  <br><strong><label>(31 X 30 px)</strong></label>
                </div>
                <br>
                <label class="form-label mt-5">Title </label>
                <input type="text" name="title2" class="form-control mb-5" value="<?= $rows_2['title_2'] ?>">
                
               <label class="form-label">Description</label>
                <input type="text" name="des2" class="form-control mb-5" value="<?= $rows_2['des_2'] ?>">

              </div>
            </div>
          </div>

          <div class="mb-5">
   <div class="card">
     <div class="card-body">
                <h2 class="small-title">Edit Image </h2>
                <div class="user-image mb-3">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_2['icon_img_3'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder9" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img3" class="custom-file-input" id="chooseFile9">
                  <br><strong><label>(31 X 30 px)</strong></label>
                </div>
                <br>
                <label class="form-label mt-5">Title </label>
                <input type="text" name="title3" class="form-control mb-5" value="<?= $rows_2['title_3'] ?>">
                
               <label class="form-label">Description</label>
                <input type="text" name="des3" class="form-control mb-5" value="<?= $rows_2['des_3'] ?>">

              </div>
            </div>
          </div>

          <div class="mb-5">
   <div class="card">
     <div class="card-body">
                <h2 class="small-title">Edit Image </h2>
                <div class="user-image mb-3">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_2['icon_img_4'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder10" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img4" class="custom-file-input" id="chooseFile10">
                  <br><strong><label>(31 X 30 px)</strong></label>
                </div>
                <br>
                <label class="form-label mt-5">Title </label>
                <input type="text" name="title4" class="form-control mb-5" value="<?= $rows_2['title_4'] ?>">
                
               <label class="form-label">Description</label>
                <input type="text" name="des4" class="form-control mb-5" value="<?= $rows_2['des_4'] ?>">

              </div>
            </div>
          </div>
        </div>



    <!-- Image End -->

  </div>
  </div>
 
</main>

    </form>
    </div>
    <!--SECTION 2 END-->
    
    <!--SECTION 3 START-->
    <div class="tab-pane fade" id="section-3" role="tabpanel" aria-labelledby="section-3-tab" tabindex="0">
    <?php
$eQuery_3 = "SELECT * FROM `section_8`";
$equery_3 = mysqli_query($conn, $eQuery_3);
$rows_3 = mysqli_fetch_array($equery_3);
if (isset($_POST['save3'])) {
 $link_1 = $_POST['link_1'];
 $link_2 = $_POST['link_2'];

 //  Image 1 UPLOAD
  $image = $_FILES['img_1']['tmp_name'];
  $imagename = $_FILES['img_1']['name'];
  $img_1 = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  
  //  Image 2 UPLOAD
  $image_2 = $_FILES['img_2']['tmp_name'];
  $imagename_2 = $_FILES['img_2']['name'];
  $img_2 = $imagename_2;
  move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);
  
  if(!empty($img_1) && !empty($img_2)){
    $sql_3 = "UPDATE `section_8` SET `img_1`='$img_1',`img_2`='$img_2',`link_1`='$link_1',`link_2`='$link_2',`img_1`='$img_1'";
  }elseif(!empty($img_1)){
   $sql_3 = "UPDATE `section_8` SET `link_1`='$link_1',`link_2`='$link_2',`img_1`='$img_1'";
  }elseif(!empty($img_2)){
   $sql_3 = "UPDATE `section_8` SET `link_1`='$link_1',`link_2`='$link_2',`img_2`='$img_2'";
  }else{
   $sql_3 = "UPDATE `section_8` SET `link_1`='$link_1',`link_2`='$link_2'";
  }
  $query_3 = mysqli_query($conn, $sql_3);


  if ($query_3) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save3" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">


        <!-- Product Info End -->
        <div class="col-xl-12 mb-n5">
<div class="row">
    <div class="col-6">
        <div class="mb-5">
            <h2 class="small-title">Uplaod Image 1</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3">
                    <label class="form-label">URL</label>
                <input type="text" name="link_1" class="form-control mb-5" value="<?= $rows_3['link_1'] ?>">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_3['img_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder11" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img_1" class="custom-file-input" id="chooseFile11">
                  <br><strong><label>(392 X 129 px)</strong></label>
                </div>

              </div>
            </div>
          </div>
    </div>
    
        <div class="col-6">
         <div class="mb-5">
            <h2 class="small-title">Uplaod Image 2</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3">
                    <label class="form-label">URL</label>
                <input type="text" name="link_2" class="form-control mb-5" value="<?= $rows_3['link_2'] ?>">

                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_3['img_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder12" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img_2" class="custom-file-input" id="chooseFile12">
                  <br><strong><label>(392 X 129 px)</strong></label>
                </div>

              </div>
            </div>
          </div>
    </div>
</div>
          <!-- Image Start -->
          
          
         
        </div>
      </div>

      <!-- Image End -->

    </div>
  </main>
</form>
    </div>
    <!--SECTION 3 END-->
    
    <!--SECTION 4 START-->
    <div class="tab-pane fade" id="section-4" role="tabpanel" aria-labelledby="section-4-tab" tabindex="0">    <?php
    $eQuery_4 = "SELECT * FROM `section_6`";
    $equery_4 = mysqli_query($conn, $eQuery_4);
    $rows_4 = mysqli_fetch_array($equery_4);
    if (isset($_POST['save4'])) {
      $title = $_POST['title'];

      $sql_4 = "UPDATE `section_6` SET `title`='$title'";

      $query_4 = mysqli_query($conn, $sql_4);
      if ($query_4) {
        echo 'Update Successfully';
        echo "<script>
    window.location.href='main_page.php';
    </script>";
      } else {
        echo mysqli_error($conn);
        echo 'something went wrong';
      }
    }
    ?>

    
      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <form method="post" enctype="multipart/form-data">
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto"></div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <div class="col col-md-auto d-flex align-items-end justify-content-end">
                <button name="save4" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                  <i data-acorn-icon="send"></i>
                  <span>Save</span>
                </button>
              </div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->
            
                                        
          <div class="row">


            <!-- Product Info End -->
            <div class="col-xl-12 mb-n5">
              <div class="mb-5">

                <div class="card">
                  <div class="card-body">

                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control mb-5" value="<?= $rows_4['title'] ?>" maxlength="15">

                  </div>
                </div>
              </div>
            </div>
          </div>
</form>
          <!-- Image End -->
             <div class="box-body col-12">
<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Company Name</th>
                                      <th>Vendor Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                    <?php 
                                    $seller1_1 ="SELECT token FROM user_registration Where status = 'Approved' ";
                                             $s1 = mysqli_query($conn,$seller1_1); 
                                             $count = 1;
                                             while ($best_seller_product = mysqli_fetch_array($s1)){
                                                 $token_1 = $best_seller_product['token'];
                                                $query = "SELECT * FROM b_info where token = '$token_1' ";
                    $result = mysqli_query($conn, $query);
                  
                        
                        while ($row = mysqli_fetch_assoc($result)) {  
                                if($row['best_seller']=="") { 
                                ?><tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['comapny_name'] ?> </td>
                                <td><?= $row['incharge_name'] ?> </td>
                                <td><?= $row['incharge_email'] ?> </td>
                                <td><?= $row['incharge_mob'] ?> </td>
                                <td>
                                    <a href="Bussiness-Edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" ><i class="fa fa-edit"></i>Add</button></a>
                                </td>
                            </tr> 
                            <?php } elseif($row['best_seller']=="YES") { ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['comapny_name'] ?> </td>
                                <td><?= $row['incharge_name'] ?> </td>
                                <td><?= $row['incharge_email'] ?> </td>
                                <td><?= $row['incharge_mob'] ?> </td>
                                <td>
                                    <a href="Bussiness-Edit.php<?php echo '?remove_id=' . $row['id']; ?>" >
                                    <button class="btn btn-danger btn-sm edit btn-flat" ><i class="fa fa-edit"></i>Remove</button></a>
                                </td>
                            </tr> 
                            <?php } }}?> </tbody></table>
                   
        </div>
        </div>
      </main>
    </div>
    <!--SECTION 4 END-->
    
    <!--SECTION 5 START-->
    <div class="tab-pane fade" id="section-5" role="tabpanel" aria-labelledby="section-5-tab" tabindex="0"><?php
$eQuery_5 = "SELECT * FROM `section_10`";
$equery_5 = mysqli_query($conn, $eQuery_5);
$rows_5 = mysqli_fetch_array($equery_5);
if (isset($_POST['save5'])) {
  $title = $_POST['title'];
  $cat_1 = $_POST['cat_1'];
  $cat_2 = $_POST['cat_2'];
  $cat_3 = $_POST['cat_3'];
  $cat_4 = $_POST['cat_4'];
  $cat_5 = $_POST['cat_5'];
  $cat_6 = $_POST['cat_6'];

  //   img_1 UPLOAD
  $image1 = $_FILES['img1']['tmp_name'];
  $imagename1= $_FILES['img1']['name'];
  $img1 = $imagename1;
  move_uploaded_file($image1, "front-store/uploads/" . $imagename1);

  //   img_2 UPLOAD
  $image2 = $_FILES['img2']['tmp_name'];
  $imagename2= $_FILES['img2']['name'];
  $img2 = $imagename2;
  move_uploaded_file($image2, "front-store/uploads/" . $imagename2);

    //   img_3 UPLOAD
    $image3 = $_FILES['img3']['tmp_name'];
    $imagename3= $_FILES['img3']['name'];
    $img3 = $imagename3;
    move_uploaded_file($image3, "front-store/uploads/" . $imagename3);

      //   img_4 UPLOAD
  $image4 = $_FILES['img4']['tmp_name'];
  $imagename4= $_FILES['img4']['name'];
  $img4 = $imagename4;
  move_uploaded_file($image4, "front-store/uploads/" . $imagename4);
  
      //   img_5 UPLOAD
  $image5 = $_FILES['img5']['tmp_name'];
  $imagename5= $_FILES['img5']['name'];
  $img5 = $imagename5;
  move_uploaded_file($image5, "front-store/uploads/" . $imagename5);
  
    //   img_6 UPLOAD
  $image6 = $_FILES['img6']['tmp_name'];
  $imagename6= $_FILES['img6']['name'];
  $img6 = $imagename6;
  move_uploaded_file($image6, "front-store/uploads/" . $imagename6);
  

  if(!empty($img1) && !empty($img2) && !empty($img3) && !empty($img4) && !empty($img5) && !empty($img6)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`img_2`='$img2',`img_3`='$img3',`img_4`='$img4',`img_5`='$img5',`img_6`='$img6',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
   }elseif(!empty($img1) && !empty($img2) && !empty($img3)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`img_2`='$img2',`img_3`='$img3',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img1) && !empty($img2) && !empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`img_2`='$img2',`img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img1) && !empty($img3) && !empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`img_3`='$img3',`img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img1) && !empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img2) && !empty($img3)){
    $sql_5 = "UPDATE `section_10` SET `img_2`='$img2',`img_3`='$img3',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img2) && !empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_2`='$img2',`img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img3) && !empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_3`='$img3',`img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img5) && !empty($img6)){
    $sql_5 = "UPDATE `section_10` SET `img_5`='$img5',`img_6`='$img6',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img1)){
    $sql_5 = "UPDATE `section_10` SET `img_1`='$img1',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img2)){
    $sql_5 = "UPDATE `section_10` SET `img_2`='$img2',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img3)){
    $sql_5 = "UPDATE `section_10` SET `img_3`='$img3',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img4)){
    $sql_5 = "UPDATE `section_10` SET `img_4`='$img4',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img5)){
    $sql_5 = "UPDATE `section_10` SET `img_5`='$img5',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }elseif(!empty($img6)){
    $sql_5 = "UPDATE `section_10` SET `img_6`='$img6',`title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  }else{
       $sql_5 = "UPDATE `section_10` SET `title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
   }
  // $sql_5 = "UPDATE `section_10` SET `title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5',`cat_6`='$cat_6'";
  $query_5 = mysqli_query($conn, $sql_5);

  if ($query_5) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save5" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-12">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_5['title'] ?>" maxlength="27">
                 <br><strong><label>(190 X 184 px)</strong></label>
                </div>

</div>
</div>
                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder13" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img1" class="custom-file-input" id="chooseFile13">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 1</label>
                      <select class="select-single-no-search w-100" name="cat_1">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_1'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder14" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img2" class="custom-file-input" id="chooseFile14">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 2</label>
                      <select class="select-single-no-search w-100" name="cat_2">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_2'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>
               
                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_3'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder15" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img3" class="custom-file-input" id="chooseFile15">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 3</label>
                      <select class="select-single-no-search w-100" name="cat_3">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_3'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_4'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder16" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img4" class="custom-file-input" id="chooseFile16">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 4</label>
                      <select class="select-single-no-search w-100" name="cat_4">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_4'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_5'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder17" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img5" class="custom-file-input" id="chooseFile17">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 5</label>
                      <select class="select-single-no-search w-100" name="cat_5">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_5'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>

                <div class="mb-5">
                  <div class="card">
                    <div class="card-body">
                      <h2 class="small-title">Edit Image </h2>
                      <div class="user-image mb-3">
                        <div>
                          <img src="<?= 'front-store/uploads/' . $rows_5['img_6'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder18" alt="">

                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="img6" class="custom-file-input" id="chooseFile18">
                         <br><strong><label>(190 X 184 px)</strong></label>
                      </div>
                      <br>
                      <label class="form-label">category 6</label>
                      <select class="select-single-no-search w-100" name="cat_6">
                          <option value=" ">None</option>
                        <?php
                        $sql_5 = "SELECT * FROM categories";
                        $query_5 = $conn->query($sql_5);
                        while ($srow = $query_5->fetch_assoc()) { ?>
                          <optgroup label="<?= $srow['parent_cat'] ?>">
                            <option <?php if ($rows_5['cat_6'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                          </optgroup> ";
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>

             
        </div>
        <!-- Product Info End -->
      </div>
    </div>
  </main>
</form>
</div>
    <!--SECTION 5 END-->
    
    <!--SECTION 6 START-->
    <div class="tab-pane fade" id="section-6" role="tabpanel" aria-labelledby="section-6-tab" tabindex="0"><?php
$eQuery_6 = "SELECT * FROM `section_2`";
$equery_6 = mysqli_query($conn, $eQuery_6);
$rows_6 = mysqli_fetch_array($equery_6);
if (isset($_POST['save6'])) {
  $title = $_POST['title'];
  $cat_1 = $_POST['cat_1'];
  $cat_2 = $_POST['cat_2'];
  $cat_3 = $_POST['cat_3'];
  $cat_4 = $_POST['cat_4'];
  $cat_5 = $_POST['cat_5'];

  $sql_6 = "UPDATE `section_2` SET `title`='$title',`cat_1`='$cat_1',`cat_2`='$cat_2',`cat_3`='$cat_3',`cat_4`='$cat_4',`cat_5`='$cat_5'";
  $query_6 = mysqli_query($conn, $sql_6);

  if ($query_6) {
        echo 'Update Successfully';
        echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save6" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-12">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_6['title'] ?>">

                <div class="mb-5">
                  <label class="form-label">category 1</label>
                  <select class="select-single-no-search w-100" name="cat_1">
                    <?php
                    $sql_6 = "SELECT * FROM categories";
                    $query_6 = $conn->query($sql_6);
                    while ($srow = $query_6->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_6['cat_1'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php } ?>

                  </select>
                </div>

                <div class="mb-5">
                  <label class="form-label">category 2</label>
                  <select class="select-single-no-search w-100" name="cat_2">
                    <?php
                    $sql_6 = "SELECT * FROM categories";
                    $query_6 = $conn->query($sql_6);
                    while ($srow = $query_6->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_6['cat_2'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php } ?>

                  </select>
                </div>

                <div class="mb-5">
                  <label class="form-label">category 3</label>
                  <select class="select-single-no-search w-100" name="cat_3">
                    <option value="<?= $rows_6['cat_3'] ?>" selected hidden disabled><?= $rows_6['cat_1'] ?></option>
                    <?php
                    $sql_6 = "SELECT * FROM categories";
                    $query_6 = $conn->query($sql_6);
                    while ($srow = $query_6->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_6['cat_3'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php } ?>

                  </select>
                </div>

                <div class="mb-5">
                  <label class="form-label">category 4</label>
                  <select class="select-single-no-search w-100" name="cat_4">
                    <?php
                    $sql_6 = "SELECT * FROM categories";
                    $query_6 = $conn->query($sql_6);
                    while ($srow = $query_6->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_6['cat_4'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php } ?>

                  </select>
                </div>

                <div class="mb-5">
                  <label class="form-label">category 5</label>
                  <select class="select-single-no-search w-100" name="cat_5">
                    <?php
                    $sql_6 = "SELECT * FROM categories";
                    $query_6 = $conn->query($sql_6);
                    while ($srow = $query_6->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_6['cat_5'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php } ?>
                  </select>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Product Info End -->
      </div>
    </div>
  </main>
</form></div>
    <!--SECTION 6 END-->
    
    <!--SECTION 7 START-->
    <div class="tab-pane fade" id="section-7" role="tabpanel" aria-labelledby="section-7-tab" tabindex="0">
    <?php
$eQuery_7 = "SELECT * FROM `section_9`";
$equery_7 = mysqli_query($conn, $eQuery_7);
$rows_7 = mysqli_fetch_array($equery_7);
if (isset($_POST['save7'])) {
 $link_1 = $_POST['link_1'];
 $link_2 = $_POST['link_2'];

 //  Image 1 UPLOAD
  $image = $_FILES['img_1']['tmp_name'];
  $imagename = $_FILES['img_1']['name'];
  $img_1 = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  
  //  Image 2 UPLOAD
  $image_2 = $_FILES['img_2']['tmp_name'];
  $imagename_2 = $_FILES['img_2']['name'];
  $img_2 = $imagename_2;
  move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);
  
  if(!empty($img_1) && !empty($img_2)){
    $sql_7 = "UPDATE `section_9` SET `img_1`='$img_1',`img_2`='$img_2',`link_1`='$link_1',`link_2`='$link_2',`img_1`='$img_1'";
  }elseif(!empty($img_1)){
   $sql_7 = "UPDATE `section_9` SET `link_1`='$link_1',`link_2`='$link_2',`img_1`='$img_1'";
  }elseif(!empty($img_2)){
   $sql_7 = "UPDATE `section_9` SET `link_1`='$link_1',`link_2`='$link_2',`img_2`='$img_2'";
  }else{
   $sql_7 = "UPDATE `section_9` SET `link_1`='$link_1',`link_2`='$link_2'";
  }
  $query_7 = mysqli_query($conn, $sql_7);


  if ($query_7) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save7" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">


        <!-- Product Info End -->
        <div class="col-xl-12 mb-n5">
<div class="row">
    <div class="col-6">
        <div class="mb-5">
            <h2 class="small-title">uplaod Image 1</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3">
                    <label class="form-label">URL</label>
                <input type="text" name="link_1" class="form-control mb-5" value="<?= $rows_7['link_1'] ?>">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_7['img_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder19" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img_1" class="custom-file-input" id="chooseFile19">
                  <br><strong><label>(392 X 129 px)</strong></label>
                </div>

              </div>
            </div>
          </div>
    </div>
    
        <div class="col-6">
         <div class="mb-5">
            <h2 class="small-title">uplaod Image 2</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3">
                    <label class="form-label">URL</label>
                <input type="text" name="link_2" class="form-control mb-5" value="<?= $rows_7['link_2'] ?>">

                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_7['img_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder20" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img_2" class="custom-file-input" id="chooseFile20">
                  <br><strong><label>(392 X 129 px)</strong></label>
                </div>

              </div>
            </div>
          </div>
    </div>
</div>
          <!-- Image Start -->
          
          
         
        </div>
      </div>

      <!-- Image End -->

    </div>
  </main>
</form>
    </div>
    <!--SECTION 7 END-->
    
    <!--SECTION 8 START-->
    <div class="tab-pane fade" id="section-8" role="tabpanel" aria-labelledby="section-8-tab" tabindex="0">
     <?php
$eQuery_7 = "SELECT * FROM `section_3`";
$equery_7 = mysqli_query($conn, $eQuery_7);
$rows_7 = mysqli_fetch_array($equery_7);
if (isset($_POST['save8'])) {
  $title = $_POST['title'];
  $cat_1 = $_POST['cat_1'];

  //   Banner Image UPLOAD
  $image = $_FILES['ban_img']['tmp_name'];
  $imagename = $_FILES['ban_img']['name'];
  $ban_img = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);

  if (!empty($ban_img)) {
    $sql_7 = "UPDATE `section_3` SET `title`='$title',`ban_img`='$ban_img',`cat_1`='$cat_1'";
  } else {
    $sql_7 = "UPDATE `section_3` SET `title`='$title',`cat_1`='$cat_1'";
  }
  $query_7 = mysqli_query($conn, $sql_7);

  if ($query_7) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->
          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save8" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
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

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_7['title'] ?>" maxlength="25">

                <div class="mb-5">
                  <label class="form-label">category</label>
                  <select class="select-single-no-search w-100" name="cat_1">
                    <option value="<?= $rows_7['cat_1'] ?>" selected hidden disabled><?= $rows_7['cat_1'] ?></option>
                    <?php
                    $sql_7 = "SELECT * FROM categories";
                    $query_7 = $conn->query($sql_7);
                    while ($srow = $query_7->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_7['cat_1'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php }
                    ?>
                  </select>
                    </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 mb-n5">

          <!-- Image Start -->
          <div class="mb-5">
            <div class="card">
              <div class="card-body">
            <label class="form-label">Edit Image</label>
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_7['ban_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder21" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="ban_img" class="custom-file-input" id="chooseFile21">
                   <br><strong><label>(231 X 190 px)</strong></label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Info End -->
      </div>
    </div>
  </main>
</form>
    </div>
    <!--SECTION 8 END-->
    
    <!--SECTION 9 START-->
    <div class="tab-pane fade" id="section-9" role="tabpanel" aria-labelledby="section-9-tab" tabindex="0"><?php
$eQuery_7 = "SELECT * FROM `section_5`";
$equery_7 = mysqli_query($conn, $eQuery_7);
$rows_7 = mysqli_fetch_array($equery_7);
if (isset($_POST['save9'])) {
  $title = $_POST['title'];
  $cat_1 = $_POST['cat_1'];
  
  //   Banner Image UPLOAD
  $image = $_FILES['ban_img']['tmp_name'];
  $imagename = $_FILES['ban_img']['name'];
  $ban_img = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);

  if (!empty($ban_img)) {
    $sql_7 = "UPDATE `section_5` SET `title`='$title',`ban_img`='$ban_img',`cat_1`='$cat_1'";
  } else {
    $sql_7 = "UPDATE `section_5` SET `title`='$title',`cat_1`='$cat_1'";
  }
  $query_7 = mysqli_query($conn, $sql_7);

  if ($query_7) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save9" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
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

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_7['title'] ?>" maxlength="25">

                <div class="mb-5">
                  <label class="form-label">category</label>
                  <select class="select-single-no-search w-100" name="cat_1">
                    <option value="<?= $rows_7['cat_1'] ?>" selected hidden disabled><?= $rows_7['cat_1'] ?></option>
                    <?php
                    $sql_7 = "SELECT * FROM categories";
                    $query_7 = $conn->query($sql_7);
                    while ($srow = $query_7->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_7['cat_1'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php }
                    ?>
                  </select>
                </div>
              </div>
              <!-- <input type="file" name="file"> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 mb-n5">

          <!-- Image Start -->
          <div class="mb-5">
            <div class="card">
              <div class="card-body">
                  <label class="form-label">Edit Image</label>
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_7['ban_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder22" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="ban_img" class="custom-file-input" id="chooseFile22">
                   <br><strong><label>(295 X 673 px)</strong></label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Info End -->
      </div>
      <!-- Image End -->
    </div>
  </main>
</form></div>
    <!--SECTION 9 END-->
    
    
    <!--SECTION 10 START-->
    <div class="tab-pane fade" id="section-10" role="tabpanel" aria-labelledby="section-10-tab" tabindex="0"><?php
$eQuery = "SELECT * FROM `section_4`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save10'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
  $des = mysqli_real_escape_string($conn,$_POST['des']);
  $btn = mysqli_real_escape_string($conn,$_POST['btn']);
  $link = mysqli_real_escape_string($conn,$_POST['link']);

 //   Banner Image UPLOAD
  $image = $_FILES['img']['tmp_name'];
  $imagename = $_FILES['img']['name'];
  $img = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  
  if(!empty($img)){
    $sql = "UPDATE `section_4` SET `img`='$img',`title`='$title',`des`='$des',`link`='$link',`btn`='$btn'";
  }else{
   $sql = "UPDATE `section_4` SET `title`='$title',`des`='$des',`link`='$link',`btn`='$btn'";
  }
  $query = mysqli_query($conn, $sql);

  if ($query) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save10" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Publish</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-12 mb-n5">
          <!-- Image Start -->
          <div class="mb-5">
            <div class="card">
              <div class="card-body">
                  <label class="form-label">Edit Image</label>
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows['img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder23" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="img" class="custom-file-input" id="chooseFile23">
                  <br><strong><label>(1240 X 198 px)</strong></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</form></div>
    <!--SECTION 10 END-->
    
    
        <!--SECTION 11 START-->
    <div class="tab-pane fade" id="section-11" role="tabpanel" aria-labelledby="section-11-tab" tabindex="0"><?php
$eQuery_11 = "SELECT * FROM `section_7`";
$equery_11 = mysqli_query($conn, $eQuery_11);
$rows_11 = mysqli_fetch_array($equery_11);
if (isset($_POST['save11'])) {
  $title = $_POST['title'];
  $cat_1 = $_POST['cat_1'];
 
  //   Banner Image UPLOAD
  $image = $_FILES['ban_img']['tmp_name'];
  $imagename = $_FILES['ban_img']['name'];
  $ban_img = $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagename);
  if (!empty($ban_img)) {
    $sql_11 = "UPDATE `section_7` SET `title`='$title',`ban_img`='$ban_img',`cat_1`='$cat_1'";
  } else {
    $sql_11 = "UPDATE `section_7` SET `title`='$title',`cat_1`='$cat_1'";
  }
  $query_11 = mysqli_query($conn, $sql_11);

  if ($query_11) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
    </script>";
  } else {
    echo mysqli_error($conn);
    echo 'something went wrong';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save11" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
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

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_11['title'] ?>" maxlength="25">
                <div class="mb-5">
                  <label class="form-label">category 1</label>
                  <select class="select-single-no-search w-100" name="cat_1">
                    <option value="<?= $rows_11['cat_1'] ?>" selected hidden disabled><?= $rows_11['cat_1'] ?></option>
                    <?php
                    $sql_11 = "SELECT * FROM categories";
                    $query_11 = $conn->query($sql_11);
                    while ($srow = $query_11->fetch_assoc()) { ?>
                      <optgroup label="<?= $srow['parent_cat'] ?>">
                        <option <?php if ($rows_11['cat_1'] == $srow['category']) echo 'selected'; ?>><?= $srow['category'] ?></option>
                      </optgroup> ";
                    <?php }
                    ?>
                  </select>
                </div>
              </div>
              <!-- <input type="file" name="file"> -->
            </div>
          </div>
        </div>
        <div class="col-xl-4 mb-n5">

          <!-- Image Start -->
          <div class="mb-5">
            <div class="card">
              <div class="card-body">
                 <label class="form-label">Edit Image</label>
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows_11['ban_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder24" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="ban_img" class="custom-file-input" id="chooseFile24">
                  <br><strong><label>(295 X 673 px)</strong></label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product Info End -->
      </div>
      <!-- Image End -->
    </div>
  </main>
</form>
</div>
    <!--SECTION 11 END-->
    
        <!--SECTION 12 START-->
    <div class="tab-pane fade" id="section-12" role="tabpanel" aria-labelledby="section-12-tab" tabindex="0">
        <?php
$eQuery_12 = "SELECT * FROM `client`";
$equery_12 = mysqli_query($conn, $eQuery_12);
$rows_12 = mysqli_fetch_array($equery_12);
if (isset($_POST['save12'])) {
  $title = $_POST['title'];

    $sql_12 = "UPDATE `client` SET `title`='$title'";

  $query_12 = mysqli_query($conn, $sql_12);

  if ($query_12) {
    echo 'Update Successfully';
    echo "<script>
    window.location.href='main_page.php';
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
          <div class="col-auto mb-3 mb-md-0 me-auto"></div>
          <!-- Title End -->
          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="save12" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-12">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows_12['title'] ?>" maxlength="11">

                
              </div>
            </div>
          </div>
        </div>

        <!-- Product Info End -->
      </div>
      </form>
      <div class="box-body col-12">
<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Company Name</th>
                                      <th>Company Logo</th>
                                      <th>Vendor Name</th>
                                      <th>Vendor Email</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                    <?php 
                                    
                                    $seller1_1 ="SELECT token FROM user_registration Where status = 'Approved' ";
                                             $s1 = mysqli_query($conn,$seller1_1); 
                                              $count = 1;
                                             while ($best_seller_product = mysqli_fetch_array($s1)){
                                                 $token_1 = $best_seller_product['token'];
                                                $query = "SELECT * FROM b_info where token = '$token_1' ";
                                      
                                            
                    
                    $result = mysqli_query($conn, $query);
                    
                       
                        while ($row = mysqli_fetch_assoc($result)) {  
                                
                                $token = $row['token'];
                                $sqlQuery = "SELECT * FROM `user_registration` WHERE token = '$token'";
                                $squery = mysqli_query($conn,$sqlQuery);
                                $data = mysqli_fetch_array($squery);
                                
                                if($row['show_client']=="") { 
                                ?><tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['comapny_name'] ?> </td>
                                <td><img src="<?= 'front-store/uploads/' . $row['company_logo'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder24" alt=""></td>
                                <td><?= $data['username'] ?> </td>
                                <td><?= $data['email_address'] ?> </td>
                                <td>
                                    <button class="btn btn-success btn-sm edit btn-flat" ><i class="fa fa-edit"></i><a href="Bussiness-Edit.php<?php echo '?show_client_id=' . $row['id']; ?>" style="text-decoration:none; color:white;">Add</a></button>
                                </td>
                            </tr> 
                            <?php } elseif($row['show_client']=="YES") { ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['comapny_name'] ?> </td>
                                <td><img src="<?= 'front-store/uploads/' . $row['company_logo'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder24" alt=""></td>
                                <td><?= $data['username'] ?> </td>
                                <td><?= $data['email_address'] ?> </td>
                                <td>
                                    
                                    <button class="btn btn-danger btn-sm edit btn-flat" ><i class="fa fa-edit"></i><a href="Bussiness-Edit.php<?php echo '?show_client_remove_id='.$row['id']; ?>" style="text-decoration:none; color:white;">Remove</a></button>
                                </td>
                            </tr> 
                            <?php }} }?> </tbody></table>
                  
        </div>
    </div>
  </main>

</div>
    <!--SECTION 12 END-->
  </div>
</div>
<style>
  ul#pills-tab .nav-link.active {
    color: #3ea713;
    background-color: transparent;
    border-bottom: 1px solid;
    border-radius: 0;
  }

  ul#pills-tab .nav-link {
    color: black;
    margin: 0 1px;
  }
  
  /*tabs-font-sizes*/

.fnt-btn-cust{
    font-size: 13px !important;
    font-weight: 500 !important;
    
}

/*tabs-font-sizes*/



  .tab-content {
    width: 100% !important;
  }
  body{
          background: #f2f3f7 !important;
  }
  .btn-outline-primary {
      border-color: #36d90d !important;
  }
  .btn:hover {
      background-color:#36d90d !important;
  }
  .display-4 {
    font-family: "Montserrat", sans-serif !important;
    font-size: 1.85em !important;
    line-height: 1.2 !important;
    font-weight: 300 !important;
}
/*heading-left-margin*/

@media only screen and (max-width:1100px){
   .margin-cust{
    margin-left: 3rem !important;
} 
   .margin-cust-tabs{
    margin-left: 3rem !important;
} 
}

@media only screen and (max-width:991px){
    .margin-cust{
        margin-left: 0rem !important;
        margin-top: 5rem !important;
}

.margin-cust-tabs{
        margin-left: 0rem !important;
        margin-top: 2rem !important;
}
.fnt-btn-cust {
    font-size: 14px !important;
}
}


/*heading-left-margin*/

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php include 'footer.php' ?>