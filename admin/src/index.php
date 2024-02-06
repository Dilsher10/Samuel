<?php
session_start();
include 'conn.php';

if(!$_SESSION['admin']){
header('location: login.php'); 
}

if(isset($_SESSION['status'])){
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert">
<strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
</div>
    <?php
    
    unset($_SESSION['status']);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Html Admin Template</title>
    <script>
      document.location = 'Dashboard.php';
    </script>
  </head>

  <body></body>
</html>
