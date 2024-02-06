<?php
include 'header.php';
$eQuery_1 = "SELECT * FROM `contact_us_page`";
$equery_1 = mysqli_query($conn, $eQuery_1);
$rows = mysqli_fetch_array($equery_1);
if (isset($_POST['save'])) {

  $title_1 = $_POST['title_1'];
  $des_1 = $_POST['des_1'];
  $icon_title_1 = $_POST['icon_title_1'];
  $icon_des_1 = $_POST['icon_des_1'];
  $icon_title_2 = $_POST['icon_title_2'];
  $icon_des_2 = $_POST['icon_des_2'];
  $icon_title_3 = $_POST['icon_title_3'];
  $icon_des_3 = $_POST['icon_des_3'];
  $icon_title_4 = $_POST['icon_title_4'];
  $icon_des_4 = $_POST['icon_des_4'];
  $faqs = $_POST['faqs'];
  $faqs_title_1 = $_POST['faqs_title_1'];
  $faqs_des_1 = $_POST['faqs_des_1'];
  $faqs_title_2 = $_POST['faqs_title_2'];
  $faqs_des_2 = $_POST['faqs_des_2'];
  $faqs_title_3 = $_POST['faqs_title_3'];
  $faqs_des_3 = $_POST['faqs_des_3'];
  $faqs_title_4 = $_POST['faqs_title_4'];
  $faqs_des_4 = $_POST['faqs_des_4'];
  $faqs_title_5 = $_POST['faqs_title_5'];
  $faqs_des_5 = $_POST['faqs_des_5'];



  //   Banner_img_1 
  $image1 = $_FILES['image_1']['tmp_name'];
  $imagename1 = $_FILES['image_1']['name'];
  $image_1 = $imagename1;
  move_uploaded_file($image1, "front-store/uploads/" . $imagename1);

  //   Icon_Image_1 
  $iconimage1 = $_FILES['icon_image_1']['tmp_name'];
  $iconimagename1 = $_FILES['icon_image_1']['name'];
  $icon_image_1 = $iconimagename1;
  move_uploaded_file($iconimage1, "front-store/uploads/" . $iconimagename1);


  //   Icon_Image_2 
  $iconimage2 = $_FILES['icon_image_2']['tmp_name'];
  $iconimagename2 = $_FILES['icon_image_2']['name'];
  $icon_image_2 = $iconimagename2;
  move_uploaded_file($iconimage2, "front-store/uploads/" . $iconimagename2);

  //   Icon_Image_3
  $iconimage3 = $_FILES['icon_image_3']['tmp_name'];
  $iconimagename3 = $_FILES['icon_image_3']['name'];
  $icon_image_3 = $iconimagename3;
  move_uploaded_file($iconimage3, "front-store/uploads/" . $iconimagename3);

  //   Icon_Image_4
  $iconimage4 = $_FILES['icon_image_4']['tmp_name'];
  $iconimagename4 = $_FILES['icon_image_4']['name'];
  $icon_image_4 = $iconimagename4;
  move_uploaded_file($iconimage4, "front-store/uploads/" . $iconimagename4);

  if (!empty($image_1) && !empty($icon_image_1) && !empty($icon_image_2) && !empty($icon_image_3) && !empty($icon_image_4)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `image_1`='$image_1',`title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_image_4`='$icon_image_4',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  } elseif (!empty($image_1) && !empty($icon_image_1) && !empty($icon_image_2) && !empty($icon_image_3)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `image_1`='$image_1',`title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  } elseif (!empty($image_1) && !empty($icon_image_1) && !empty($icon_image_2)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `image_1`='$image_1',`title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  } elseif (!empty($image_1) && !empty($icon_image_1)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `image_1`='$image_1',`title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  } elseif (!empty($image_1)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `image_1`='$image_1',`title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  } elseif (!empty($icon_image_1) && !empty($icon_image_2) && !empty($icon_image_3) && !empty($icon_image_4)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_image_4`='$icon_image_4',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_1) && !empty($icon_image_2) && !empty($icon_image_3)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_1) && !empty($icon_image_2)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_1)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_image_1`='$icon_image_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_2) && !empty($icon_image_3) && !empty($icon_image_4)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_image_4`='$icon_image_4',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_2) && !empty($icon_image_3)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_2)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_image_2`='$icon_image_2',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_3) && !empty($icon_image_4)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_image_4`='$icon_image_4',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_3)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_image_3`='$icon_image_3',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }elseif (!empty($icon_image_4)) {
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_image_4`='$icon_image_4',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }else{
    $sql = mysqli_query($conn, "UPDATE `contact_us_page` SET `title_1`='$title_1',`des_1`='$des_1',`icon_title_1`='$icon_title_1',`icon_des_1`='$icon_des_1',`icon_title_2`='$icon_title_2',`icon_des_2`='$icon_des_2',`icon_title_3`='$icon_title_3',`icon_des_3`='$icon_des_3',`icon_title_4`='$icon_title_4',`icon_des_4`='$icon_des_4',`faqs`='$faqs',`faqs_title_1`='$faqs_title_1',`faqs_des_1`='$faqs_des_1',`faqs_title_2`='$faqs_title_2',`faqs_des_2`='$faqs_des_2',`faqs_title_3`='$faqs_title_3',`faqs_des_3`='$faqs_des_3',`faqs_title_4`='$faqs_title_4',`faqs_des_4`='$faqs_des_4',`faqs_title_5`='$faqs_title_5',`faqs_des_5`='$faqs_des_5'");
  }

  if ($sql) {
    echo "<script>
         window.location = contact_us.php;
        </script> ";
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
              <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
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
          <h2 class="small-title">Banner Image 1</h2>
          <div class="card">
            <div class="card-body">
              <div class="user-image mb-3">
                <div>
                  <label class="form-label">Image</label>
                  <img src="<?= 'front-store/uploads/' . $rows['image_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                </div>
              </div>
              <div class="custom-file">
                <input type="file" name="image_1" class="custom-file-input" id="chooseFile3">
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <div class="card">
            <div class="card-body">
              <label class="form-label">Title </label>
              <textarea name="title_1">
                    <?= $rows['title_1'] ?>
              </textarea>
              <br>
              <label class="form-label">Description </label>
              <textarea name="des_1">
                    <?= $rows['des_1'] ?>
              </textarea>
              <div class="row">
                <div class="col-3">
                  <div class="user-image mb-3">
                    <div>
                      <h2 class="small-title">Icon Image 1</h2>
                      <img src="<?= 'front-store/uploads/' . $rows['icon_image_1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                    </div>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="icon_image_1" class="custom-file-input" id="chooseFile">
                    <br><strong><label>(1349 X 180 px)</label></strong>
                  </div>
                  <br>
                  <label class="form-label">Icon Title 1</label>
                  <input type="text" name="icon_title_1" class="form-control mb-5" value="<?= $rows['icon_title_1'] ?>">
                  <label class="form-label">Icon Description 1</label>
                  <input type="text" name="icon_des_1" class="form-control mb-5" value="<?= $rows['icon_des_1'] ?>">
                </div>
                <div class="col-3">
                  <div class="user-image mb-3">
                    <div>
                      <h2 class="small-title">Icon Image 2</h2>
                      <img src="<?= 'front-store/uploads/' . $rows['icon_image_2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                    </div>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="icon_image_2" class="custom-file-input" id="chooseFile">
                  </div>
                  <br>
                  <label class="form-label">Icon Title 2</label>
                  <input type="text" name="icon_title_2" class="form-control mb-5" value="<?= $rows['icon_title_2'] ?>">
                  <label class="form-label">Icon Description 2</label>
                  <input type="text" name="icon_des_2" class="form-control mb-5" value="<?= $rows['icon_des_2'] ?>">
                </div>
                <div class="col-3">
                  <div class="user-image mb-3">
                    <div>
                      <h2 class="small-title">Icon Image 3</h2>
                      <img src="<?= 'front-store/uploads/' . $rows['icon_image_3'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                    </div>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="icon_image_3" class="custom-file-input" id="chooseFile">
                  </div>
                  <br>
                  <label class="form-label">Icon Title 3</label>
                  <input type="text" name="icon_title_3" class="form-control mb-5" value="<?= $rows['icon_title_3'] ?>">
                  <label class="form-label">Icon Description 3</label>
                  <input type="text" name="icon_des_3" class="form-control mb-5" value="<?= $rows['icon_des_3'] ?>">
                </div>
                <div class="col-3">
                  <div class="user-image mb-3">
                    <div>
                      <h2 class="small-title">Icon Image 4</h2>
                      <img src="<?= 'front-store/uploads/' . $rows['icon_image_4'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                    </div>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="icon_image_4" class="custom-file-input" id="chooseFile">
                  </div>
                  <br>
                  <label class="form-label">Icon Title 4</label>
                  <input type="text" name="icon_title_4" class="form-control mb-5" value="<?= $rows['icon_title_4'] ?>">
                  <label class="form-label">Icon Description 4</label>
                  <input type="text" name="icon_des_4" class="form-control mb-5" value="<?= $rows['icon_des_4'] ?>">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <div class="card">
            <div class="card-body">
              <label class="form-label">FAQs</label>
              <textarea name="faqs">
                    <?= $rows['faqs'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Title 1</label>
              <textarea name="faqs_title_1">
                    <?= $rows['faqs_title_1'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Description 1</label>
               <textarea name="faqs_des_1">
                    <?= $rows['faqs_des_1'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Title 2</label>
              <textarea name="faqs_title_2">
                    <?= $rows['faqs_title_2'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Description 2</label>
              <textarea name="faqs_des_2">
                    <?= $rows['faqs_des_2'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Title 3</label>
              <textarea name="faqs_title_3">
                    <?= $rows['faqs_title_3'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Description 3</label>
              <textarea name="faqs_des_3">
                    <?= $rows['faqs_des_3'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Title 4</label>
              <textarea name="faqs_title_4">
                    <?= $rows['faqs_title_4'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Description 4</label>
              <textarea name="faqs_des_4">
                    <?= $rows['faqs_des_4'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Title 5</label>
              <textarea name="faqs_title_5">
                    <?= $rows['faqs_title_5'] ?>
              </textarea>
              <br>
              <label class="form-label">FAQs Description 5</label>
              <textarea name="faqs_des_5">
                    <?= $rows['faqs_des_5'] ?>
              </textarea>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
</form>
<?php include 'footer.php' ?>