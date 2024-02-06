<?php
include 'header.php';
error_reporting(0);
$id = $_GET['id'];
$eQuery = "SELECT * FROM `footer`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
if (isset($_POST['save'])) {

  $title =  mysqli_real_escape_string($conn,$_POST['title']);
  $des =  mysqli_real_escape_string($conn,$_POST['des']);
  $heading_1 = $_POST['heading_1'];
  $page_1_name = $_POST['page_1_name'];
  $page_1_link = $_POST['page_1_link'];
  $page_2_name = $_POST['page_2_name'];
  $page_2_link = $_POST['page_2_link'];
  $page_3_name = $_POST['page_3_name'];
  $page_3_link = $_POST['page_3_link'];
  $page_4_name = $_POST['page_4_name'];
  $page_4_link = $_POST['page_4_link'];
  $page_5_name = $_POST['page_5_name'];
  $page_5_link = $_POST['page_5_link'];
  $heading_2 = $_POST['heading_2'];
  $page2_1_name = $_POST['2page_1_name'];
  $page2_1_link = $_POST['2page_1_link'];
  $page2_2_name = $_POST['2page_2_name'];
  $page2_2_link = $_POST['2page_2_link'];
  $page2_3_name = $_POST['2page_3_name'];
  $page2_3_link = $_POST['2page_3_link'];
  $page2_4_name = $_POST['2page_4_name'];
  $page2_4_link = $_POST['2page_4_link'];
  $page2_5_name = $_POST['2page_5_name'];
  $page2_5_link = $_POST['2page_5_link'];
  $heading_3 = $_POST['heading_3'];
  $page3_1_name = $_POST['3page_1_name'];
  $page3_1_link = $_POST['3page_1_link'];
  $page3_2_name = $_POST['3page_2_name'];
  $page3_2_link = $_POST['3page_2_link'];
  $page3_3_name = $_POST['3page_3_name'];
  $page3_3_link = $_POST['3page_3_link'];
  $page3_4_name = $_POST['3page_4_name'];
  $page3_4_link = $_POST['3page_4_link'];
  $page3_5_name = $_POST['3page_5_name'];
  $page3_5_link = $_POST['3page_5_link'];
  $heading_4 = $_POST['heading_4'];
  $page4_1_name = $_POST['4page_1_name'];
  $page4_1_link = $_POST['4page_1_link'];
  $page4_2_name = $_POST['4page_2_name'];
  $page4_2_link = $_POST['4page_2_link'];
  $page4_3_name = $_POST['4page_3_name'];
  $page4_3_link = $_POST['4page_3_link'];
  $page4_4_name = $_POST['4page_4_name'];
  $page4_4_link = $_POST['4page_4_link'];
  $page4_5_name = $_POST['4page_5_name'];
  $page4_5_link = $_POST['4page_5_link'];
  
  $page4_6_name = $_POST['4page_6_name'];
  $page4_6_link = $_POST['4page_6_link'];
  $page4_7_name = $_POST['4page_7_name'];
  $page4_7_link = $_POST['4page_7_link'];
  $page4_8_name = $_POST['4page_8_name'];
  $page4_8_link = $_POST['4page_8_link'];
  $page4_9_name = $_POST['4page_9_name'];
  $page4_9_link = $_POST['4page_9_link'];
  $page4_10_name = $_POST['4page_10_name'];
  $page4_10_link = $_POST['4page_10_link'];
  $page4_11_name = $_POST['4page_11_name'];
  $page4_11_link = $_POST['4page_11_link'];
  $page4_12_name = $_POST['4page_12_name'];
  $page4_12_link = $_POST['4page_12_link'];
  
  $copyright = $_POST['copyright'];
  $icon_1_link = $_POST['icon_1_link'];
  $icon_2_link = $_POST['icon_2_link'];
  $icon_3_link = $_POST['icon_3_link'];
  $icon_4_link = $_POST['icon_4_link'];

  //   Icon Image 1 UPLOAD
  $image_1 = $_FILES['icon_img1']['tmp_name'];
  $imagename_1 = $_FILES['icon_img1']['name'];
  $icon_img1 = $imagename_1;
  move_uploaded_file($image_1, "front-store/uploads/" . $imagename_1);
  
    //   Icon Image 2 UPLOAD
  $image_2 = $_FILES['icon_img2']['tmp_name'];
  $imagename_2 = $_FILES['icon_img2']['name'];
  $icon_img2 = $imagename_2;
  move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);
  
     //   	Icon Image 3 UPLOAD
  $image_3 = $_FILES['icon_img3']['tmp_name'];
  $imagename_3 = $_FILES['icon_img3']['name'];
  $icon_img3 = $imagename_3;
  move_uploaded_file($image_3, "front-store/uploads/" . $imagename_3);
  
   //   	Icon Image 4 UPLOAD
  $image_4 = $_FILES['icon_img4']['tmp_name'];
  $imagename_4 = $_FILES['icon_img4']['name'];
  $icon_img4 = $imagename_4;
  move_uploaded_file($image_4, "front-store/uploads/" . $imagename_4);
  
    //   	Pay Image UPLOAD
  $image_5 = $_FILES['pay_img']['tmp_name'];
  $imagename_5 = $_FILES['pay_img']['name'];
  $pay_img = $imagename_5;
  move_uploaded_file($image_5, "front-store/uploads/" . $imagename_5);
  
if(!empty($icon_img1) && !empty($icon_img2) && !empty($icon_img3) && !empty($icon_img4)){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img1`='$icon_img1',`icon_img2`='$icon_img2',`icon_img3`='$icon_img3',`icon_img4`='$icon_img4',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img1) && !empty($icon_img2)){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img1`='$icon_img1',`icon_img2`='$icon_img2',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img1) && !empty($icon_img3) ){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img1`='$icon_img1',`icon_img3`='$icon_img3',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img1) && !empty($icon_img4)){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img1`='$icon_img1',`icon_img4`='$icon_img4',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img2) && !empty($icon_img3) ){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img2`='$icon_img2',`icon_img3`='$icon_img3',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img2) && !empty($icon_img4)){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img2`='$icon_img2',`icon_img4`='$icon_img4',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img3) && !empty($icon_img4)){ 
 $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img3`='$icon_img3',`icon_img4`='$icon_img4',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img1)){
  $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img1`='$icon_img1',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img2)){
  $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img2`='$icon_img2',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img3)){
  $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img3`='$icon_img3',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($icon_img4)){
  $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_img4`='$icon_img4',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}elseif(!empty($pay_img)){
  $sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright',`pay_img`='$pay_img' ";
}else{
$sql = "UPDATE `footer` SET `title`='$title',`des`='$des',`icon_link_1`='$icon_1_link',`icon_link_2`='$icon_2_link',`icon_link_3`='$icon_3_link',`icon_link_4`='$icon_4_link',`heading_1`='$heading_1',`page_1_name`='$page_1_name',`page_1_link`='$page_1_link',`page_2_name`='$page_2_name',`page_2_link`='$page_2_link',`page_3_name`='$page_3_name',`page_3_link`='$page_3_link',`page_4_name`='$page_4_name',`page_4_link`='$page_4_link',`page_5_name`='$page_5_name',`page_5_link`='$page_5_link',`heading_2`='$heading_2',`2page_1_name`='$page2_1_name',`2page_1_link`='$page2_1_link',`2page_2_name`='$page2_2_name',`2page_2_link`='$page2_2_link',`2page_3_name`='$page2_3_name',`2page_3_link`='$page2_3_link',`2page_4_name`='$page2_4_name',`2page_4_link`='$page2_4_link',`2page_5_name`='$page2_5_name',`2page_5_link`='$page2_5_link',`heading_3`='$heading_3',`3page_1_name`='$page3_1_name',`3page_1_link`='$page3_1_link',`3page_2_name`='$page3_2_name',`3page_2_link`='$page3_2_link',`3page_3_name`='$page3_3_name',`3page_3_link`='$page3_3_link',`3page_4_name`='$page3_4_name',`3page_4_link`='$page3_4_link',`3page_5_name`='$page3_5_name',`3page_5_link`='$page3_5_link',`heading_4`='$heading_4',`4page_1_name`='$page4_1_name',`4page_1_link`='$page4_1_link',`4page_2_name`='$page4_2_name',`4page_2_link`='$page4_2_link',`4page_3_name`='$page4_3_name',`4page_3_link`='$page4_3_link',`4page_4_name`='$page4_4_name',`4page_4_link`='$page4_4_link',`4page_5_name`='$page4_5_name',`4page_5_link`='$page4_5_link',`4page_6_name`='$page4_6_name',`4page_6_link`='$page4_6_link',`4page_7_name`='$page4_7_name',`4page_7_link`='$page4_7_link',`4page_8_name`='$page4_8_name',`4page_8_link`='$page4_8_link',`4page_9_name`='$page4_9_name',`4page_9_link`='$page4_9_link',`4page_10_name`='$page4_10_name',`4page_10_link`='$page4_10_link',`4page_11_name`='$page4_11_name',`4page_11_link`='$page4_11_link',`4page_12_name`='$page4_12_name',`4page_12_link`='$page4_12_link',`copyright`='$copyright'";
}
$query = mysqli_query($conn, $sql);

  if ($query) {
      echo "<script>
    window.location.href='section_12_edit.php';
    </script>";
  }else{
        echo mysqli_error($conn);
        echo 'something went wrong';
    }
}

?>

<form method="post" enctype="multipart/form-data">
<!-- NEWSLETTER CONTENT -->
<main>
  <div class="container">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div>
              <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
              <h1 class="mb-0 pb-0 display-4" id="title">Newsletter Content</h1>
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
        <div class="col-xl-12">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control mb-5" value="<?= $rows['title'] ?>" maxlength="23">
                
                <label class="form-label">Description</label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="des" style="display:none"></textarea>
               <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="des" maxlength="35"><?= $rows['des'] ?></textarea>

                <!-- <input type="file" name="file"> -->
              </div>
            </div>
          </div>

          <!-- Product Info End -->
        </div>

        <div class="col-xl-3 mb-n5">


          <div class="mb-5">
            <h2 class="small-title">Icon Image 1</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
               <label class="form-label">URL</label>
                <input type="text" name="icon_1_link" class="form-control mb-5" value="<?= $rows['icon_link_1'] ?>"/>
                 <label class="form-label">Edit Icon</label>
                  <div>
                   <img src="<?= 'front-store/uploads/' . $rows['icon_img1'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">

                  </div>
                </div>
                
                <div class="custom-file">
                  <input type="file" name="icon_img1" class="custom-file-input" id="chooseFile1">
                </div>

              </div>
            </div>
          </div>
          
        </div>
    <div class="col-xl-3 mb-n5">

           <div class="mb-5">
            <h2 class="small-title">Icon Image 2</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                     <label class="form-label">URL</label>
                <input type="text" name="icon_2_link" class="form-control mb-5" value="<?= $rows['icon_link_2'] ?>"/>
                 <label class="form-label">Edit Icon</label>
                 <div>
                   <img src="<?= 'front-store/uploads/' . $rows['icon_img2'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder2" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="icon_img2" class="custom-file-input" id="chooseFile2">
                </div>
              </div>
            </div>
          </div>
    </div>
        <div class="col-xl-3 mb-n5">
          <div class="mb-5">
            <h2 class="small-title">Icon Image 3</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                     <label class="form-label">URL</label>
                <input type="text" name="icon_3_link" class="form-control mb-5" value="<?= $rows['icon_link_3'] ?>"/>
                 <label class="form-label">Edit Icon</label>
                 <div>
                   <img src="<?= 'front-store/uploads/' . $rows['icon_img3'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder3" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="icon_img3" class="custom-file-input" id="chooseFile3">
                </div>
              </div>
            </div>
          </div>
        </div>
                <div class="col-xl-3 mb-n5">
                    <div class="mb-5">
            <h2 class="small-title">Icon Image 4</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                     <label class="form-label">URL</label>
                <input type="text" name="icon_4_link" class="form-control mb-5" value="<?= $rows['icon_link_4'] ?>"/>
                 <label class="form-label">Edit Icon</label>
                 <div>
                   <img src="<?= 'front-store/uploads/' . $rows['icon_img4'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder4" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="icon_img4" class="custom-file-input" id="chooseFile4">
                </div>
              </div>
            </div>
          </div>
                  </div>






    <!-- Image End -->

  </div>
  </div>

</main>

<!-- FOOTER MENU -->
<main>
  <div class="container">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div>
              <h1 class="mb-0 pb-0 display-4" id="title">Footer Menu</h1>
            </div>
          </div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-12">
          <!-- Product Info Start -->
          <div class="mb-5">

            <div class="card">
              <div class="card-body">

                <strong><label class="form-label mb-4">Title</label></strong> 
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="page_1_name"  pattern="^[\p{L}]${1,25}"><?= $rows['page_1_name'] ?></textarea>
                <label class="form-label">Phone </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="page_2_name"  pattern="^[\p{L}]${1,25}"><?= $rows['page_2_name'] ?></textarea>
                <label class="form-label">Icon Description</label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" maxlength="120" id="quillEditorBubble" type="text" name="page_3_name"  pattern="^[\p{L}]${1,25}"><?= $rows['page_3_name'] ?></textarea>
                <br>
                <strong><label class="form-label mb-4" >Heading 2 </label></strong>
                <input type="text" name="heading_2" class="form-control mb-5" value="<?= $rows['heading_2'] ?>"/>
                
                <label class="form-label">Page_1 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="2page_1_name"  pattern="^[\p{L}]${1,25}"><?= $rows['2page_1_name'] ?></textarea>
                <label class="form-label">Page_1 Link</label>
                <input type="text" name="2page_1_link" class="form-control mb-5" value="<?= $rows['2page_1_link'] ?>">
               
                <label class="form-label">Page_2 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="2page_2_name"  pattern="^[\p{L}]${1,25}"><?= $rows['2page_2_name'] ?></textarea>
                <label class="form-label">Page_2 Link</label>
                <input type="text" name="2page_2_link" class="form-control mb-5" value="<?= $rows['2page_2_link'] ?>" >
                
                <label class="form-label">Page_3 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="2page_3_name"  pattern="^[\p{L}]${1,25}"><?= $rows['2page_3_name'] ?></textarea>
                <label class="form-label">Page_3 Link</label>
                <input type="text" name="2page_3_link" class="form-control mb-5" value="<?= $rows['2page_3_link'] ?>">
                
                <br>
                <strong><label class="form-label mb-4">Heading 3 </label></strong>
                <input type="text" name="heading_3" class="form-control mb-5" value="<?= $rows['heading_3'] ?>" />
                
                <label class="form-label">Page_1 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="3page_1_name"  pattern="^[\p{L}]${1,25}"><?= $rows['3page_1_name'] ?></textarea>
                <label class="form-label">Page_1 Link</label>
                <input type="text" name="3page_1_link" class="form-control mb-5" value="<?= $rows['3page_1_link'] ?>">
               
                <label class="form-label">Page_2 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="3page_2_name"  pattern="^[\p{L}]${1,25}"><?= $rows['3page_2_name'] ?></textarea>
                <label class="form-label">Page_2 Link</label>
                <input type="text" name="3page_2_link" class="form-control mb-5" value="<?= $rows['3page_2_link'] ?>">
                
                <label class="form-label">Page_3 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="3page_3_name"  pattern="^[\p{L}]${1,25}"><?= $rows['3page_3_name'] ?></textarea>
                <label class="form-label">Page_3 Link</label>
                <input type="text" name="3page_3_link" class="form-control mb-5" value="<?= $rows['3page_3_link'] ?>">
                
                <label class="form-label">Page_4 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="3page_4_name"  pattern="^[\p{L}]${1,25}"><?= $rows['3page_4_name'] ?></textarea>
                <label class="form-label">Page_4 Link</label>
                <input type="text" name="3page_4_link" class="form-control mb-5" value="<?= $rows['3page_4_link'] ?>">
                
                <label class="form-label">Page_5 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="3page_5_name"  pattern="^[\p{L}]${1,25}"><?= $rows['3page_5_name'] ?></textarea>
                <label class="form-label">Page_5 Link</label>
                <input type="text" name="3page_5_link" class="form-control mb-5" value="<?= $rows['3page_5_link'] ?>">
                
                <br>
                <strong><label class="form-label mb-4">Heading 4 </label></strong>
                <input type="text" name="heading_4" class="form-control mb-5" value="<?= $rows['heading_4'] ?>" >
                
                <label class="form-label">Page_1 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_1_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_1_name'] ?></textarea>
                <label class="form-label">Page_1 Link</label>
                <input type="text" name="4page_1_link" class="form-control mb-5" value="<?= $rows['4page_1_link'] ?>">
               
                <label class="form-label">Page_2 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_2_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_2_name'] ?></textarea>
                <label class="form-label">Page_2 Link</label>
                <input type="text" name="4page_2_link" class="form-control mb-5" value="<?= $rows['4page_2_link'] ?>">
                
                <label class="form-label">Page_3 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_3_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_3_name'] ?></textarea>
                <label class="form-label">Page_3 Link</label>
                <input type="text" name="4page_3_link" class="form-control mb-5" value="<?= $rows['4page_3_link'] ?>">
                
                <label class="form-label">Page_4 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_4_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_4_name'] ?></textarea>
                <label class="form-label">Page_4 Link</label>
                <input type="text" name="4page_4_link" class="form-control mb-5" value="<?= $rows['4page_4_link'] ?>">
                
                <label class="form-label">Page_5 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_5_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_5_name'] ?></textarea>
                <label class="form-label">Page_5 Link</label>
                <input type="text" name="4page_5_link" class="form-control mb-5" value="<?= $rows['4page_5_link'] ?>">
                
                <label class="form-label">Page_6 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_6_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_6_name'] ?></textarea>
                <label class="form-label">Page_6 Link</label>
                <input type="text" name="4page_6_link" class="form-control mb-5" value="<?= $rows['4page_6_link'] ?>">
                
                <label class="form-label">Page_7 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_7_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_7_name'] ?></textarea>
                <label class="form-label">Page_7 Link</label>
                <input type="text" name="4page_7_link" class="form-control mb-5" value="<?= $rows['4page_7_link'] ?>">
                
                <label class="form-label">Page_8 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_8_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_8_name'] ?></textarea>
                <label class="form-label">Page_8 Link</label>
                <input type="text" name="4page_8_link" class="form-control mb-5" value="<?= $rows['4page_8_link'] ?>">
                
                <label class="form-label">Page_9 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_9_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_9_name'] ?></textarea>
                <label class="form-label">Page_9 Link</label>
                <input type="text" name="4page_9_link" class="form-control mb-5" value="<?= $rows['4page_9_link'] ?>">
                
                <label class="form-label">Page_10 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_10_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_10_name'] ?></textarea>
                <label class="form-label">Page_10 Link</label>
                <input type="text" name="4page_10_link" class="form-control mb-5" value="<?= $rows['4page_10_link'] ?>">
                
                <label class="form-label">Page_11 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_11_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_11_name'] ?></textarea>
                <label class="form-label">Page_11 Link</label>
                <input type="text" name="4page_11_link" class="form-control mb-5" value="<?= $rows['4page_11_link'] ?>">
                
                <label class="form-label">Page_12 Name </label>
                <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble" type="text" name="4page_12_name"  pattern="^[\p{L}]${1,25}"><?= $rows['4page_12_name'] ?></textarea>
                <label class="form-label">Page_12 Link</label>
                <input type="text" name="4page_12_link" class="form-control mb-5" value="<?= $rows['4page_12_link'] ?>">
              </div>
            </div>
          </div>
          <!-- Product Info End -->
        </div>


  </div>
  </div>
 
</main>

<!-- COPYRIGHT -->
<main>
  <div class="container">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div>
              <h1 class="mb-0 pb-0 display-4" id="title">Copyright</h1>
            </div>
          </div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <div class="col-xl-8">
          <!-- Product Info Start -->
          <div class="mb-5">
            <div class="card mt-5">
              <div class="card-body">
                <strong><label class="form-label mb-4">Copyright </label></strong>
                <input type="text" name="copyright" class="form-control mb-5" value="<?= $rows['copyright'] ?>">
              </div>
            </div>
          </div>
          <!-- Product Info End -->
        </div>
        <div class="col-xl-4 mb-n5">
          <div class="mb-5">
            <h2 class="small-title">Edit payment Image</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $rows['pay_img'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder7" alt="">

                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="pay_img" class="custom-file-input" id="chooseFile7">
                </div>
                <br>
                 <label class="form-label">Please choose square image of 255px to 20px</label>
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