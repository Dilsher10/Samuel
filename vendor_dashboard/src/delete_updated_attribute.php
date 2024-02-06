<?php
$id = $_POST['savedId'];
$token = $_POST['savedToken'];
$s_id = $_POST['s_id'];

include 'conn.php';

$sqlQuery = "DELETE FROM `save_attribute` WHERE id = $id";
$query = mysqli_query($conn,$sqlQuery);

if($query){
    echo"
    <script>
    window.location.href = 'update_products.php?id=$s_id';
    </script>
    ";
}
?>