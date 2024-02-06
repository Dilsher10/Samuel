<?php 
include_once 'conn.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM `user_registration` WHERE id = $id");

echo "<script>
    window.location.href='users.php';
    </script>";
?>