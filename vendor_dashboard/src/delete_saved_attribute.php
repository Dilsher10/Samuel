<?php
$id = $_POST['savedId'];
$token = $_POST['savedToken'];

include 'conn.php';

$sqlQuery = "DELETE FROM `save_attribute` WHERE id = $id";
$query = mysqli_query($conn,$sqlQuery);

if($query){
    echo"
    <script>
    window.location.href = 'Products_add.php?token=$token';
    </script>
    ";
}
?>