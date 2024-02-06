<? $page="contact";?>
<?php
include 'header.php'; 

$eQuery_1 = "SELECT * FROM `contact_us_page`";
$equery_1 = mysqli_query($conn, $eQuery_1);
$rows = mysqli_fetch_array($equery_1);
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$username','$email','$message')";
    $query = mysqli_query($conn,$sql);
    
}
?>

        <main class="main">
            <div class="page-header">
                <div class="container-fluid" style="padding:0">
                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['image_1'] ?>" style="width:100%; height: 180px;">
                </div>
            </div>
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content contact-us">
                <div class="container">
                    <section class="content-title-section mb-10">
                        <h3 class="title title-center mb-3"><?= $rows['title_1'] ?>
                        </h3>
                        <p class="text-center"><?= $rows['des_1'] ?></p>
                    </section>
                    <section class="contact-information-section mb-10">
                        <div class=" swiper-container swiper-theme " data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-xl-4 cols-md-3 cols-sm-2 cols-1">
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-email">
                                       <img src="<?= '././admin/src/front-store/uploads/' . $rows['icon_image_1'] ?>">
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows['icon_title_1'] ?></h4>
                                        <a href="mailto:<?= $rows['icon_des_1'] ?>" style="color:#666666;"><?= $rows['icon_des_1'] ?></a>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-headphone">
                                       <img src="<?= '././admin/src/front-store/uploads/' . $rows['icon_image_2'] ?>">
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows['icon_title_2'] ?></h4>
                                        <a href="tel:<?= $rows['icon_des_2'] ?>" style="color:#666666;"><?= $rows['icon_des_2'] ?></a>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-map-marker">
                                       <img src="<?= '././admin/src/front-store/uploads/' . $rows['icon_image_3'] ?>">
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows['icon_title_3'] ?></h4>
                                        <p><?= $rows['icon_des_3'] ?></p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-fax">
                                       <img src="<?= '././admin/src/front-store/uploads/' . $rows['icon_image_4'] ?>">
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows['icon_title_4'] ?></h4>
                                        <p><?= $rows['icon_des_4'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <hr class="divider mb-10 pb-1">

                    <section class="contact-section">
                        <div class="row gutter-lg pb-3">
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3"><?= $rows['faqs'] ?></h4>
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1" class="collapse"><?= $rows['faqs_title_1'] ?></a>
                                        </div>
                                        <div id="collapse1" class="card-body expanded">
                                            <p class="mb-0">
                                               <?= $rows['faqs_des_1'] ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse2" class="expand"><?= $rows['faqs_title_2'] ?></a>
                                        </div>
                                        <div id="collapse2" class="card-body collapsed">
                                            <p class="mb-0">
                                                <?= $rows['faqs_des_2'] ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse3" class="expand"><?= $rows['faqs_title_3'] ?></a>
                                        </div>
                                        <div id="collapse3" class="card-body collapsed">
                                            <p class="mb-0">
                                                <?= $rows['faqs_des_3'] ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse4" class="expand"><?= $rows['faqs_title_4'] ?></a>
                                        </div>
                                        <div id="collapse4" class="card-body collapsed">
                                            <p class="mb-0">
                                                <?= $rows['faqs_des_4'] ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse5" class="expand"><?= $rows['faqs_title_5'] ?></a>
                                        </div>
                                        <div id="collapse5" class="card-body collapsed">
                                            <p class="mb-0">
                                                <?= $rows['faqs_des_5'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-8">
                                <h4 class="title mb-3">Send Us a Message</h4>
                                <form class="form contact-us-form" action="contact-us.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Your Name</label>
                                        <input type="text" id="username" name="username"
                                            class="form-control" onkeydown='return validateText(event)' required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">Your Email</label>
                                        <input type="email" id="email_1" name="email"
                                            class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="message" cols="30" rows="5"
                                            class="form-control" onkeydown='return validateText(event)' required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded" name="submit">Send Now</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
       <?php
include 'footer.php'; ?>