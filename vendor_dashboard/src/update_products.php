<?php
error_reporting(0);
include ('Product_Edit.php');
include('conn.php');
if (isset($_POST['update_btn'])) {
    $id = $_GET['id'];
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $description = mysqli_real_escape_string($conn,$_POST['content']);
    $in_stock = $_POST['in_stock'];
    $sku = $_POST['sku'];
    $regular_price = $_POST['regular_price'];
    $sale_price = $_POST['sale_price'];
    $attributes = $_POST['attributes'];
    $visible_on_product     = $_POST['visible_on_product'];
    $used_for_variations = $_POST['used_for_variations'];
    $name = $_POST['name'];
    $tagsbasic = $_POST['tagsBasic'];
    $small_sku = implode(',', $_POST['small_sku']);
    $small_regular_price = implode(',', $_POST['small_regular_price']);
    $small_sale_price = implode(',', $_POST['small_sale_price']);
    $small_stock = implode(',', $_POST['small_stock']);
    $small_description = mysqli_real_escape_string($conn,$_POST['small_description']);
    $details = mysqli_real_escape_string($conn,$_POST['details']);
    $category = $_POST['category'];
    $tagsbasic2 = $_POST['tagsBasic2'];
    $variation_name = implode(',', $_POST['variation_name']);
    $token = $_POST['saveToken'];
 if($visible_on_product == true ){
  $one = '1';
  }else{
      $one = '0';
  }
  if($used_for_variations == true){
      $one_2 ='1';
  }else{
        $one_2 ='0';
  }

  //   IMAGE UPLOAD

    $image = $_FILES['image']['tmp_name'];
    $imagename = $_FILES['image']['name'];
    $imagedes =$imagename;
    
     if(!empty($imagedes)){
     $img_1 = md5(rand()).$imagename;
     move_uploaded_file($image,"front-store/uploads/" . $img_1);
     $sql_img = "UPDATE `products_detail` SET `image`='$img_1' WHERE `id`='$id'";
     $query_img= mysqli_query($conn,$sql_img);
    }
    

    if(!empty($small_sku) || !empty($small_regular_price) || !empty($small_sale_price) || !empty($small_stock)){
     $sql = "UPDATE `products_detail` SET `title`='$title',`description`='$description',`details`='$details',`in_stock`='',`sku`='',`attributes`='$attributes',`regular_price`='',`sale_price`='',`visible_on_product`='$one',`used_for_variations`='$one_2',`name`='$name',`tagsBasic`='$tagsBasic',`tagsBasic2`='$tagsBasic2' WHERE `id`='$id' ";
        
    $sqlDeletePrevious = "DELETE FROM `variations` WHERE `product_name` = '$title' AND `token` = '$token'";
    $resultDeletePrevious = mysqli_query($conn, $sqlDeletePrevious);
        
    foreach ($_POST['small_sku'] as $key => $smallSku) {
        $smallSku = mysqli_real_escape_string($conn, $smallSku);
        $variation_name = mysqli_real_escape_string($conn, $_POST['variation_name'][$key]);
        $small_regular_price = mysqli_real_escape_string($conn, $_POST['small_regular_price'][$key]);
        $small_sale_price = mysqli_real_escape_string($conn, $_POST['small_sale_price'][$key]);
        $small_stock = mysqli_real_escape_string($conn, $_POST['small_stock'][$key]);
        $sqlInsertSku = "INSERT INTO `variations`(`product_name`, `variation_name`, `small_sku`, `small_regular_price`, `small_sale_price`, `small_stock`, `token`) VALUES ('$title','$variation_name','$smallSku','$small_regular_price','$small_sale_price','$small_stock','$token')";
        $resultSku = mysqli_query($conn, $sqlInsertSku);
       }
    }
    
    
    if(!empty($sku) || !empty($regular_price) || !empty($sale_price) || !empty($in_stock)){
        $sql = "UPDATE `products_detail` SET `title`='$title',`description`='$description',`details`='$details',`in_stock`='$in_stock',`sku`='$sku',`attributes`='$attributes',`regular_price`='$regular_price',`sale_price`='$sale_price',`visible_on_product`='$one',`used_for_variations`='$one_2',`name`='$name',`tagsBasic`='$tagsBasic',`tagsBasic2`='$tagsBasic2' WHERE `id`='$id' ";
        $sqlQuery = "UPDATE `variations` SET `product_name`='$title',`variation_name`='',`small_sku`='',`small_regular_price`='',`small_sale_price`='',`small_stock`='' WHERE product_name='$title' AND token = '$token'";
    }
    
    
    if(!empty($category)){
            $sql = "UPDATE `products_detail` SET `category`='$category',`title`='$title',`description`='$description',`details`='$details',`in_stock`='$in_stock',`sku`='$sku',`attributes`='$attributes',`regular_price`='$regular_price',`sale_price`='$sale_price',`visible_on_product`='$one',`used_for_variations`='$one_2',`name`='$name',`tagsBasic`='$tagsBasic',`tagsBasic2`='$tagsBasic2' WHERE `id`='$id' ";
   
    }else{
     $sql = "UPDATE `products_detail` SET `title`='$title',`description`='$description',`details`='$details',`in_stock`='$in_stock',`sku`='$sku',`attributes`='$attributes',`regular_price`='$regular_price',`sale_price`='$sale_price',`visible_on_product`='$one',`used_for_variations`='$one_2',`name`='$name',`tagsBasic`='$tagsBasic',`tagsBasic2`='$tagsBasic2' WHERE `id`='$id' ";
    }
    

    $query= mysqli_query($conn,$sql);
    $query_2= mysqli_query($conn,$sql_2);
    $query_3= mysqli_query($conn,$sqlQuery);

    session_start();
    if ($query) {
        $_SESSION['status'] = 'Updated Successfully';
      echo
      "<script>
    window.location.href='Products_List.php';
    </script>";
    }else{
        $_SESSION['status'] = 'something went wrong';
    }
     
}
  $output = '';  
  
  $image_id = $_POST['image_id'];
  
 if (isset($_FILES['files']) && is_array($_FILES['files']['name']) && count($_FILES['files']['name']) > 0) {
    foreach ($_FILES['files']['name'] as $name => $value) {
        $file_name = $_FILES['files']['name'][$name];
        $new_name = md5(rand()) . '.' . $file_name;
        $sourcePath = $_FILES['files']['tmp_name'][$name];
        $targetPath = "front-store/uploads/" . $new_name;

        if (move_uploaded_file($sourcePath, $targetPath)) {
            $sql_2 = "INSERT INTO tbl_images (images, title) VALUES ('{$targetPath}', '" . $title . "')";
            $image_2 = mysqli_query($conn, $sql_2);
            if ($image_2) {
                echo "<script>
                    alert('Successfully added');
                    window.location = 'Products_List.php';
                    </script>";
            } else {
                // Handle database insertion error
                echo "Database insertion failed.";
            }
        } else {
            // Handle file upload error
            echo "File upload failed.";
        }
    }
} else {
    // Handle empty files array
    echo "No files uploaded.";
}

?>






<?php

include('conn.php');

if(isset($_POST['updateAttr'])){
    
    $name = $_POST['content_txt'];
    $value = $_POST['attribute_value'];
    $token = $_POST['saveToken'];
    $title = $_POST['title'];
    $id = $_GET['id'];
    
    $sQuery = "INSERT INTO `save_attribute`(`name`, `value`, `token`, `product_name`) VALUES ('$name','$value','$token','$title')";
    $squery = mysqli_query($conn,$sQuery);
    
    if($squery){
        echo"
        <script>
        window.location.href = 'update_products.php?id=$id';
        </script>
        ";
    }
    
   
}

?>