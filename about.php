<? $page="about";?>
<?php
include 'header.php'; 
$eQuery_1 = "SELECT * FROM `about_us`";
$equery_1 = mysqli_query($conn, $eQuery_1);
$rows = mysqli_fetch_array($equery_1);
?>
  

        <main class="main">
            
            <!--Banner-->
            
            <div class="page-header">
                <div class="container-fluid" style="padding:0">
                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['banner_image'] ?>" style="width:100%; height: 180px;">
                </div>
            </div>
            <nav class="breadcrumb-nav mb-10 pb-8">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </nav>
            
            
            
            
            <div class="page-content">
                <div class="container">
                    
                    <!--Section 1-->
                    
                    <?= $rows['sec_1_heading'] ?>
                    <?= $rows['sec_1_text'] ?>
                    
                    <section class="introduce mb-10 pb-10">
                        <figure class="br-lg">
                            <img src="<?= '././admin/src/front-store/uploads/' . $rows['sec_1_img'] ?>" alt="Banner" 
                                width="1240" height="540" style="background-color: #D0C1AE;" />
                        </figure>
                    </section>
                    
                    
                    <!--Section 2-->

                    <section class="customer-service mb-7">
                        <div class="row align-items-center">
                             <h3 class="text-center"><?= $rows['sec_2_heading'] ?></h3>
                            <div class="col-md-6 pr-lg-8 mb-8">
                                <h4><?= $rows['sec_2_sub_heading'] ?></h4>
                                <p><?= $rows['sec_2_text'] ?></p>
                            </div>
                            <div class="col-md-6 mb-8">
                                <figure class="br-lg">
                                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['sec_2_img'] ?>" alt="Banner"
                                        width="610" height="500" style="background-color: #CECECC;" />
                                </figure>
                            </div>
                        </div>
                    </section>
                    
                    
                    
                    <!--Section 3-->

                    <section class="count-section mb-10 pb-5">
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'slidesPerView': 1,
                            'breakpoints': {
                                '768': {
                                    'slidesPerView': 2
                                },
                                '992': {
                                    'slidesPerView': 2
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-2 cols-1">
                                <div class="swiper-slide counter-wrap">
                                    <div class="counter text-center">
                                        <img src="<?= '././admin/src/front-store/uploads/' . $rows['sec_3_img_1'] ?>" class="counterImg" alt="Member" />
                                        <p><?= $rows['sec_3_text_1'] ?></p>
                                    </div>
                                </div>
                                <div class="swiper-slide counter-wrap">
                                    <div class="counter text-center">
                                       <img src="<?= '././admin/src/front-store/uploads/' . $rows['sec_3_img_2'] ?>" class="counterImg" alt="Member" />
                                        <p><?= $rows['sec_3_text_2'] ?></p>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </section>
                    
                    
                    
                    <!--Section 4-->
                    
                    <section class="customer-service mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-6 pr-lg-8 mb-8">
                                
                                <h4><?= $rows['sec_4_heading_1'] ?></h4>
                                <p><?= $rows['sec_4_text_1'] ?></p>
                                
                                <h4><?= $rows['sec_4_heading_2'] ?></h4>
                                <p><?= $rows['sec_4_text_2'] ?></p>
                                
                                <h4><?= $rows['sec_4_heading_3'] ?></h4>
                                <p><?= $rows['sec_4_text_3'] ?></p>
                            </div>
                            <div class="col-md-6 mb-8">
                                <figure class="br-lg">
                                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['sec_4_img'] ?>" alt="Banner"
                                        width="610" height="500" style="background-color: #CECECC;" />
                                </figure>
                            </div>
                        </div>
                    </section>
                    
                    
                    
                    <!--Section 5-->
                    
                    <section class="boost-section pt-10 pb-10">
                    <div class="container mt-10 mb-9">
                        <div class="row align-items-center mb-10">
                            <div class="col-md-6 mb-8">
                                <figure class="br-lg">
                                    <img src="././admin/src/front-store/uploads/about_girl.png" alt="Banner"
                                        width="610" height="450" style="background-color: #9E9DA2;" />
                                </figure>
                            </div>
                            <div class="col-md-6 pl-lg-8 mb-8">
                                <h4><?= $rows['sec_5_heading'] ?></h4>
                                <p class="mb-6"><?= $rows['sec_5_text'] ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                    
                    
                </div>
                
            </div>
        </main>


<?php
include 'footer.php'; ?>
