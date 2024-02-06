<?php include 'header.php'; 
$Query = "SELECT * FROM `cookies`";
$query = mysqli_query($conn, $Query);
$rows = mysqli_fetch_array($query);
?>

<style>
    .title-section p {
    font-size: 1.7rem;
}
</style>

        <main class="main">
            <div class="page-header">
                <div class="container-fluid" style="padding:0">
                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['img'] ?>" style="width:100%; height: 180px;">
                </div>
            </div>
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li><a href="cookies.php">Cookies</a></li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <section class="title-section mb-8 show-code-action">
                        <p>  <?= $rows['content'] ?></p>
                    </section>
                </div>
            </div>
        </main>
<?php @include('footer.php'); ?>