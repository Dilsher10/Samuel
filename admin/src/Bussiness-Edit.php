<?php 
include_once 'header.php';
$id = $_GET['id'];
echo $result = "UPDATE b_info SET best_seller ='YES' WHERE id = $id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='main_page.php';
      </script>
      ";
}

$id = $_GET['remove_id'];
echo $result = "UPDATE b_info SET best_seller ='' WHERE id = $id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='main_page.php';
      </script>
      ";
}

$show_client_id = $_GET['show_client_id'];
echo $result = "UPDATE b_info SET show_client ='YES' WHERE id = $show_client_id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='main_page.php';
      </script>
      ";
}

$show_client_id = $_GET['show_client_remove_id'];
echo $result = "UPDATE b_info SET show_client ='' WHERE id = $show_client_id";
$query = mysqli_query ($conn , $result);

if($query){

 echo "
      <script>
      window.location.href='main_page.php';
      </script>
      ";
}
