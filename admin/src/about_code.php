<?php
include 'conn.php';

if (isset($_POST['save'])) {
    
    $sec_1_heading = mysqli_real_escape_string($conn, $_POST['sec_1_heading']);
    $sec_1_text = $_POST['sec_1_text'];
    $sec_2_heading = $_POST['sec_2_heading'];
    $sec_2_sub_heading = $_POST['sec_2_sub_heading'];
    $sec_2_text = $_POST['sec_2_text'];
    $sec_3_text_1 = $_POST['sec_3_text_1'];
    $sec_3_text_2 = $_POST['sec_3_text_2'];
    $sec_4_heading_1 = $_POST['sec_4_heading_1'];
    $sec_4_heading_2 = $_POST['sec_4_heading_2'];
    $sec_4_heading_3 = $_POST['sec_4_heading_3'];
    $sec_4_text_1 = $_POST['sec_4_text_1'];
    $sec_4_text_2 = $_POST['sec_4_text_2'];
    $sec_4_text_3 = $_POST['sec_4_text_3'];
    $sec_5_heading = $_POST['sec_5_heading'];
    $sec_5_text = $_POST['sec_5_text'];

    
    // Banner_img
  
    $banner_image = $_FILES['banner_image']['tmp_name'];
    $imageName = $_FILES['banner_image']['name'];
    $bannerImage = $imageName;
    move_uploaded_file($banner_image,"front-store/uploads/".$imageName);
    
    
    // Section 1 Image
  
    $sec_1_img = $_FILES['sec_1_img']['tmp_name'];
    $imageName1 = $_FILES['sec_1_img']['name'];
    $secImage1 = $imageName1;
    move_uploaded_file($sec_1_img,"front-store/uploads/".$imageName1);
    
    
    // Section 2 Image
  
    $sec_2_img = $_FILES['sec_2_img']['tmp_name'];
    $imageName2 = $_FILES['sec_2_img']['name'];
    $secImage2 = $imageName2;
    move_uploaded_file($sec_2_img,"front-store/uploads/".$imageName2);
    
    
    // Section 3 Image
  
    $sec_3_img_1 = $_FILES['sec_3_img_1']['tmp_name'];
    $image3Name1 = $_FILES['sec_3_img_1']['name'];
    $sec3Image1 = $image3Name1;
    move_uploaded_file($sec_3_img_1,"front-store/uploads/".$image3Name1);
    
    $sec_3_img_2 = $_FILES['sec_3_img_2']['tmp_name'];
    $image3Name2 = $_FILES['sec_3_img_2']['name'];
    $sec3Image2 = $image3Name2;
    move_uploaded_file($sec_3_img_2,"front-store/uploads/".$image3Name2);
    
    
    
    // Section 4 Image
  
    $sec_4_img = $_FILES['sec_4_img']['tmp_name'];
    $imageName4 = $_FILES['sec_4_img']['name'];
    $secImage4 = $imageName4;
    move_uploaded_file($sec_4_img,"front-store/uploads/".$imageName4);
    
    
    // Section 5 Image
  
    $sec_5_img = $_FILES['sec_5_img']['tmp_name'];
    $imageName5 = $_FILES['sec_5_img']['name'];
    $secImage5 = $imageName5;
    move_uploaded_file($sec_5_img,"front-store/uploads/".$imageName5);
    
    
    
    if((!($_FILES['banner_image']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
        $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `banner_image`='$bannerImage',`sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_1_img`='$secImage1',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
        $query = mysqli_query($conn,$sqlQuery);
    }
    
    
    
    if((!($_FILES['sec_1_img']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_1_img`='$secImage1',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    
    
    
    if((!($_FILES['sec_2_img']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_2_img`='$secImage2',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    
    
    if((!($_FILES['sec_3_img_1']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
        $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_img_1`='$sec3Image1',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
        $query = mysqli_query($conn,$sqlQuery);
    }
    
    
    
    if((!($_FILES['sec_3_img_2']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_img_2`='$sec3Image2',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }


    if((!($_FILES['sec_4_img']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_4_img`='$secImage4',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    
    
     if((!($_FILES['sec_5_img']['name']))){
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    else{
        $sqlQuery = "UPDATE `about_us` SET `sec_1_heading`='$sec_1_heading',`sec_1_text`='$sec_1_text',`sec_2_heading`='$sec_2_heading',`sec_2_sub_heading`='$sec_2_sub_heading',`sec_2_text`='$sec_2_text',`sec_3_text_1`='$sec_3_text_1',`sec_3_text_2`='$sec_3_text_2',`sec_4_heading_1`='$sec_4_heading_1',`sec_4_text_1`='$sec_4_text_1',`sec_4_heading_2`='$sec_4_heading_2',`sec_4_text_2`='$sec_4_text_2',`sec_4_heading_3`='$sec_4_heading_3',`sec_4_text_3`='$sec_4_text_3',`sec_5_heading`='$sec_5_heading',`sec_5_text`='$sec_5_text',`sec_5_img`='$secImage5'";
         $query = mysqli_query($conn,$sqlQuery);
    }
    
  
  session_start();
  if($query){
      $_SESSION['status'] = 'Updated Successfully';
      header('location:about_us.php');
  }
  else{
      $_SESSION['message'] = 'Something went wrong';
      header('location:about_us.php');
  }
}
?>
