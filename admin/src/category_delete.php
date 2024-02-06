<?php 
include_once 'conn.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM  categories WHERE id = $id");
  echo
      "<script>
    window.location.href='categories.php';
    </script>";
?>