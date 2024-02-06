<?php
session_start();
include('conn.php');
 

if (isset($_POST['save_btn'])) {
    
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $description = mysqli_real_escape_string($conn,$_POST['content']);
  $in_stock = $_POST['in_stock'];
  $sku = $_POST['sku'];
  $regular_price = $_POST['regular_price'];
  $sale_price = $_POST['sale_price'];
  $attributes = $_POST['content_txt'];
  $visible_on_product	 = $_POST['visible_on_product'];
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
  $attribute_value = $_POST['attribute_value'];
  $token_value = $_SESSION['token'];

 //   IMAGE UPLOAD
  $image = $_FILES['image']['tmp_name'];
  $imagename = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $imagedes =  md5(rand()) . '.' . $imagename;
  move_uploaded_file($image, "front-store/uploads/" . $imagedes);
  
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

$eQuery = "SELECT * FROM `user_registration` WHERE token = '" .  $_SESSION['token'] . "' ";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
$token = $rows['status'];
if ($file_size < 1000000 && $token =='Approved' ) {
$sql = "INSERT INTO `products_detail`( `title`, `description`, `details`, `category`, `in_stock`, `image`, `sku`, `attributes`, `regular_price`, `sale_price`, `visible_on_product`, `used_for_variations`, `name`, `tagsBasic`, `tagsBasic2`,`token`,`status`,`deals_status`,`attribute_value`) VALUES ('$title','$description','$details ','$category','$in_stock','$imagedes','$sku','$attributes','$regular_price','$sale_price','$one','$one_2','$name','$tagsbasic','$tagsbasic2 ','" .  $_SESSION['token'] . "','Approved','','$arrtibute_value')";
foreach ($_POST['small_sku'] as $key => $smallSku) {
        $smallSku = mysqli_real_escape_string($conn, $smallSku);
        $variation_name = mysqli_real_escape_string($conn, $_POST['variation_name'][$key]);
        $small_regular_price = mysqli_real_escape_string($conn, $_POST['small_regular_price'][$key]);
        $small_sale_price = mysqli_real_escape_string($conn, $_POST['small_sale_price'][$key]);
        $small_stock = mysqli_real_escape_string($conn, $_POST['small_stock'][$key]);
        $sqlInsertSku = "INSERT INTO `variations`(`product_name`, `variation_name`, `small_sku`, `small_regular_price`, `small_sale_price`, `small_stock`, `token`) VALUES ('$title','$variation_name','$smallSku','$small_regular_price','$small_sale_price','$small_stock','$token_value')";
        $resultSku = mysqli_query($conn, $sqlInsertSku);
       }
}elseif($file_size < 1000000){
$sql = "INSERT INTO `products_detail`( `title`, `description`, `details`, `category`, `in_stock`, `image`, `sku`, `attributes`, `regular_price`, `sale_price`, `visible_on_product`, `used_for_variations`, `name`, `tagsBasic`, `tagsBasic2`,`token`,`status`,`deals_status`,`attribute_value`) VALUES ('$title','$description','$details ','$category','$in_stock','$imagedes','$sku','$attributes','$regular_price','$sale_price','$one','$one_2','$name','$tagsbasic', '$tagsbasic2 ','" .  $_SESSION['token'] . "','','','$arrtibute_value')";
foreach ($_POST['small_sku'] as $key => $smallSku) {
        $smallSku = mysqli_real_escape_string($conn, $smallSku);
        $variation_name = mysqli_real_escape_string($conn, $_POST['variation_name'][$key]);
        $small_regular_price = mysqli_real_escape_string($conn, $_POST['small_regular_price'][$key]);
        $small_sale_price = mysqli_real_escape_string($conn, $_POST['small_sale_price'][$key]);
        $small_stock = mysqli_real_escape_string($conn, $_POST['small_stock'][$key]);
        $sqlInsertSku = "INSERT INTO `variations`(`product_name`, `variation_name`, `small_sku`, `small_regular_price`, `small_sale_price`, `small_stock`, `token`) VALUES ('$title','$variation_name','$smallSku','$small_regular_price','$small_sale_price','$small_stock','$token_value')";
        $resultSku = mysqli_query($conn, $sqlInsertSku);
       }
}else{
echo
"<script>
alert('Image size exceeds 1MB')
window.location.href='Products_add.php';
</script>"; 
}

$query= mysqli_query($conn,$sql);


if ($query) {
    $_SESSION['status'] = 'Added Successfully';
echo
"<script>
window.location.href='Products_List.php';
</script>";
}else{
    $_SESSION['status'] = 'something went wrong';
echo
"<script>
window.location.href='Products_add.php?token=$token_value';
</script>";
}
}
//insert.php


 $output = '';  
 if(is_array($_FILES))   
 {  
      foreach ($_FILES['files']['name'] as $name => $value)  
      {    
              $file_name = $_FILES['files']['name'];
 
        //   {  
                $new_name = md5(rand()) . '.' . $file_name[1];  
                $sourcePath = $_FILES['files']['tmp_name'][$name];  
                $targetPath = "front-store/uploads/".$new_name; 
                $sql_2 = "INSERT INTO tbl_images (images,title) VALUES ('{$targetPath}','" . $title . "')";
                $image_2 = mysqli_query($conn,$sql_2);
                if(move_uploaded_file($sourcePath, $targetPath))  
                {  
                    echo "<script>
                    alert ('Successfully added')
                    window.location = 'Products_List.php'
                    
                    </script>";
                // }                 
           }            
      }  

 } 
 
 if(isset($_POST["content_txt"]) && strlen($_POST["content_txt"])>0 && isset($_POST["tagsBasic"])) 
{	
	$contentToSave = filter_var($_POST["content_txt"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); 
    $contentToSave2 = $_POST["tagsBasic"];
 if (mysqli_query($conn,"INSERT INTO attributes (`name`,`value`,`token`) VALUES('$contentToSave','$contentToSave2','". $_SESSION['token']."')"));
{
		  $my_id = mysqli_insert_id($conn);
		  $res = str_replace(array('[', ']', '"', ':', '{', '}', 'value'), ' ', $contentToSave2);
    $arr = str_replace(array(',','"', 'value'), ' ',  $res);
    $array =  str_replace(' ',"\n",$arr);
          echo '<option value="1">';
		  echo $array.'</option>';
 
	}
}
?>








<?php

include('conn.php');

if(isset($_POST['saveAttr'])){
    
    $name = $_POST['content_txt'];
    $value = $_POST['attribute_value'];
    $token = $_POST['saveToken'];
    $product_name = $_POST['product_name'];
    
    $sQuery = "INSERT INTO `save_attribute`(`name`, `value`, `token`, `product_name`) VALUES ('$name','$value','$token','$product_name')";
    $squery = mysqli_query($conn,$sQuery);
    
    if($squery){
        echo"
        <script>
        window.location.href = 'Products_add.php?token=$token';
        </script>
        ";
    }
    
   
}

?>