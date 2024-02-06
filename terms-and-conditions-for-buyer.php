<?php include 'header.php'; 
$Query = "SELECT * FROM `terms_buyer`";
$query = mysqli_query($conn, $Query);
$rows = mysqli_fetch_array($query);
?>

<style>
    .title-section p {
    font-size: 1.7rem;
}
</style>

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container-fluid" style="padding:0">
                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['img'] ?>" style="width:100%; height: 180px;">
                    <!--<h1 class="page-title">Shipping</h1>-->
              
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li><a href="terms-and-conditions-for-buyer.php">Terms and Conditions for Buyers</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <section class="title-section mb-8 show-code-action">
                        <p>  <?= $rows['content'] ?></p>
                    </section>
                    <!-- End of Element Section -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
<?php @include('footer.php'); ?>