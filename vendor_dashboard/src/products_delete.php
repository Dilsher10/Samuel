<?php 
include_once 'header.php';
$id = $_GET['id'];

$sqlQuery = "SELECT * FROM `products_detail` WHERE id = $id";
$query = mysqli_query($conn,$sqlQuery);
$data = mysqli_fetch_array($query);
$product_name = $data['title'];
$token = $data['token'];

$result_1 = mysqli_query($conn, "DELETE FROM `save_attribute` WHERE product_name = '$product_name' AND token = '$token'");

$result_2 = mysqli_query($conn, "DELETE FROM `variations` WHERE product_name = '$product_name' AND token = '$token'");

$result_3 = mysqli_query($conn, "DELETE FROM products_detail WHERE id = $id");


 echo "
      <script>
      window.location.href='Products_List.php';
      </script>
      ";
?>