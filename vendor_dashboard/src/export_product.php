<?php 
session_start();
include "conn.php";


$sql = "SELECT * FROM products_detail  where token = '" .  $_SESSION['token'] . "'";
$result = mysqli_query($conn, $sql);

mysqli_set_charset($conn, "utf8");

$filename = "yourfilename.csv";

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

$file = fopen('php://output', 'w');

$header = array('title', 'in_stock', 'image');
fputcsv($file, $header);

while ($row = mysqli_fetch_assoc($result)) {
    $data = array($row["title"], $row["in_stock"], $row["image"]);
    fputcsv($file, $data);
}

fclose($file);

mysqli_close($conn);

header('Location:Products_List.php');


?>