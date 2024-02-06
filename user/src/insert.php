<?php

include 'conn.php';

if(isset($_POST['save_address'])){
    
    include 'conn.php';
    
    $name = $_POST['name']; 
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $city = $_POST['city'];
    $token = $_POST['token'];
    
    $sqlQuery = "UPDATE `address_book` SET `name`='$name',`phone`='$phone',`province`='$province',`state`='$state',`address`='$address',`landmark`='$landmark',`city`='$city',`token`='$token'";
    $query = mysqli_query($conn,$sqlQuery);
    
    session_start();
    if($query){
        $_SESSION['status'] = 'Added Successfully';
        header('location:address_book.php');
    }
    else{
        $_SESSION['status'] = 'Something went wrong';
        header('location:address_book.php');
    }
}

?>