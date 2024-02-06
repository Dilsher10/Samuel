<?php 
    session_start();

     if(!isset($_SESSION['confirm_order']) || empty($_SESSION['confirm_order']))
     {
         header('location:index.php');
         exit();
     }

    require_once('inc/config.php');    
    require_once('inc/helpers.php');  

    include('header.php');
?>
<div class="row">
    <div class="col-md-12 mt-5 mb-5" style="text-align:center;margin: 5rem 0rem 10rem;">
    <strong><h1>Thank you!</h1></strong>
    <strong><p>
            Your order has been placed.
            <?php unset($_SESSION['confirm_order']);?>
        </p></strong>
    </div>
</div>
<?php include('footer.php'); ?>    