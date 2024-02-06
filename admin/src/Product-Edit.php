<?php 
include_once 'header.php';
$id = $_GET['id'];
echo $result = "UPDATE products_detail SET deals_status ='YES' WHERE id = $id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='Products-List.php';
      </script>
      ";
}

$id = $_GET['remove_id'];
echo $result = "UPDATE products_detail SET deals_status ='' WHERE id = $id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='Products-List.php';
      </script>
      ";
}
