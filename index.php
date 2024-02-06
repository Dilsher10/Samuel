<? $page = "home"; ?>
<?php
include 'header.php';

$eQuery_1 = "SELECT * FROM `section_1`";
$equery_1 = mysqli_query($conn, $eQuery_1);
$rows_1 = mysqli_fetch_array($equery_1);

$eQuery_2 = "SELECT * FROM `section_2`";
$equery_2 = mysqli_query($conn, $eQuery_2);
$rows_2 = mysqli_fetch_array($equery_2);

$eQuery_3 = "SELECT * FROM `section_3`";
$equery_3 = mysqli_query($conn, $eQuery_3);
$rows_3 = mysqli_fetch_array($equery_3);

$eQuery_4 = "SELECT * FROM `section_4`";
$equery_4 = mysqli_query($conn, $eQuery_4);
$rows_4 = mysqli_fetch_array($equery_4);

$eQuery_5 = "SELECT * FROM `section_5`";
$equery_5 = mysqli_query($conn, $eQuery_5);
$rows_5 = mysqli_fetch_array($equery_5);

$eQuery_6 = "SELECT * FROM `section_6`";
$equery_6 = mysqli_query($conn, $eQuery_6);
$rows_6 = mysqli_fetch_array($equery_6);

$eQuery_7 = "SELECT * FROM `section_7`";
$equery_7 = mysqli_query($conn, $eQuery_7);
$rows_7 = mysqli_fetch_array($equery_7);

$eQuery_8 = "SELECT * FROM `section_8`";
$equery_8 = mysqli_query($conn, $eQuery_8);
$rows_8 = mysqli_fetch_array($equery_8);

$eQuery_9 = "SELECT * FROM `section_9`";
$equery_9 = mysqli_query($conn, $eQuery_9);
$rows_9 = mysqli_fetch_array($equery_9);

$eQuery_10 = "SELECT * FROM `section_10`";
$equery_10 = mysqli_query($conn, $eQuery_10);
$rows_10 = mysqli_fetch_array($equery_10);

$eQuery_11 = "SELECT * FROM `section_11`";
$equery_11 = mysqli_query($conn, $eQuery_11);
$rows_11 = mysqli_fetch_array($equery_11);

$eQuery_12 = "SELECT * FROM `client`";
$equery_12 = mysqli_query($conn, $eQuery_12);
$rows_12 = mysqli_fetch_array($equery_12);


?>

<main class="main">
    <!-- Start of Header -->
    <section style="text-align:center;">
        <div class="swiper-container">
            <div class="swiper-wrapper banner-home">
                <div class="swiper-slide">
                    <a href="/shop.php">
                        <img src="assets/images/header-img3.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/shop.php">
                        <img src="assets/images/header-img2.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/shop.php">
                        <img src="assets/images/header-img4.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/shop.php">
                        <img src="assets/images/header-img5.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/shop.php">
                        <img src="assets/images/header-img6.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End of Header -->


    <div class="container">
        <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-shipping">
                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_1'] ?>" alt="Icon Free Ship" class="absolute" />
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1"><?= $rows_11['title_1'] ?></h4>
                        <p class="text-default"><?= $rows_11['des_1'] ?></p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-payment">
                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_2'] ?>" alt="Icon Free Ship" class="absolute" />
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1"><?= $rows_11['title_2'] ?></h4>
                        <p class="text-default"><?= $rows_11['des_2'] ?></p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                    <span class="icon-box-icon icon-money">
                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_3'] ?>" alt="Icon Free Ship" class="absolute" />
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1"><?= $rows_11['title_3'] ?></h4>
                        <p class="text-default"><?= $rows_11['des_3'] ?></p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_4'] ?>" alt="Icon Free Ship" class="absolute" />
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1"><?= $rows_11['title_4'] ?></h4>
                        <p class="text-default"><?= $rows_11['des_4'] ?></p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start of Category Banner Section -->
        <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <a href="<?= $rows_8['link_1'] ?>"><img src="<?= '././admin/src/front-store/uploads/' . $rows_8['img_1'] ?>" alt="Category Banner" width="610" height="160" style="background-color: #ecedec;" />
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <a href="<?= $rows_8['link_2'] ?>"><img src="<?= '././admin/src/front-store/uploads/' . $rows_8['img_2'] ?>" alt="Category Banner" width="610" height="160" style="background-color: #636363;" /></a>
                    </figure>
                </div>
            </div>
        </div>
        <!-- Start of Category Banner Section -->



        <!-- Start of Hot Deals & Best Seller -->
        <div class="row deals-wrapper appear-animate mb-8">
            <!-- Start of Hot Deals of the Day -->
            <div class="col-lg-9 mb-4">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Hot Deals of the Day
                    </h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <?php
                                $pro_sql = "SELECT * FROM products_detail  where deals_status = 'YES' ORDER BY deals_status DESC";
                                $pro_query = mysqli_query($conn, $pro_sql);
                                if (mysqli_num_rows($pro_query) > 0) {
                                    while ($pro_row = mysqli_fetch_array($pro_query)) {
                                        $sql = "SELECT * FROM `variations` WHERE product_name = '$pro_row[title]' AND token = '$pro_row[token]'";
                                        $squery = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_array($squery);
                                ?>
                                        <div class="swiper-slide">
                                            <div class="product product-single row">

                                                <div class="col-md-6">
                                                    <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $pro_row['image'] ?>" data-zoom-image="<?= '././vendor_dashboard/src/front-store/uploads/' . $pro_row['image'] ?>" alt="Product Image" width="800" height="900">
                                                                    </figure>
                                                                </div>
                                                                <?php
                                                                $pro_title = $pro_row['title'];
                                                                $img_Query = "SELECT * FROM `tbl_images` WHERE `title` = '$pro_title' ";
                                                                $img_query = mysqli_query($conn, $img_Query);
                                                                if (mysqli_num_rows($img_query) > 0) {
                                                                    while ($img_row = mysqli_fetch_assoc($img_query)) {

                                                                ?>
                                                                        <div class="swiper-slide">
                                                                            <figure class="product-image">
                                                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" data-zoom-image="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product Image" width="800" height="900">
                                                                            </figure>
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                        </div>
                                                        <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                            <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $pro_row['image'] ?>" alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <?php
                                                                $pro_title = $pro_row['title'];
                                                                $img_Query = "SELECT * FROM `tbl_images` WHERE `title` = '$pro_title' ";
                                                                $img_query = mysqli_query($conn, $img_Query);
                                                                if (mysqli_num_rows($img_query) > 0) {
                                                                    while ($img_row = mysqli_fetch_assoc($img_query)) {

                                                                ?>
                                                                        <div class="product-thumb swiper-slide">
                                                                            <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product thumb" width="60" height="68" />
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a href="single_product.php?id=<?php echo $pro_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $pro_row['title']), 0, 5)) . "\n"; ?></a>
                                                        </h2>

                                                        <hr class="product-divider">

                                                        <div class="product-price">
                                                            <?php
                                                            if (!empty($pro_row['regular_price']) || !empty($data['small_regular_price'])) {
                                                            ?>
                                                                <del class="old-price">$<?= $pro_row['regular_price']; ?>
                                                                    <?= $data['small_regular_price'] ?></del>
                                                            <?php
                                                            }
                                                            ?>
                                                            <ins class="new-price">$<?= $pro_row['sale_price']; ?>
                                                                <?= $data['small_sale_price'] ?></ins>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                        </div>

                                                        <div class="product-form product-variation-form product-size-swatch mb-3">
                                                            <label class="mb-1">Size:</label>
                                                            <div class="flex-wrap d-flex align-items-center product-variations">
                                                                <a href="#" class="size">Extra Large</a>
                                                                <a href="#" class="size">Large</a>
                                                                <a href="#" class="size">Medium</a>
                                                                <a href="#" class="size">Small</a>
                                                            </div>
                                                            <a href="#" class="product-variation-clean">Clean All</a>
                                                        </div>

                                                        <div class="product-variation-price">
                                                            <span></span>
                                                        </div>

                                                        <form method="post" action="cart.php?action=add&id=<?php echo $pro_row["id"]; ?>">
                                                            <div class="product-form pt-4">
                                                                <div class="product-qty-form mb-2 mr-2">
                                                                    <input type="hidden" name="hidden_name" value="<?php echo $pro_row["title"]; ?>" />
                                                                    <input type="hidden" name="hidden_price" value="<?php echo $pro_row["sale_price"]; ?>" />
                                                                    <input type="hidden" name="hidden_price" value="<?php echo $data["small_sale_price"]; ?>" />
                                                                    <input type="hidden" name="image" value="<?php echo $pro_row["image"]; ?>" />
                                                                    <input type="hidden" name="token" value="<?php echo $rows["token"]; ?>" />
                                                                    <input class="form-control" name="quantity" type="number" value="1">
                                                                </div>
                                                                <input type="submit" name="add_to_cart" style="margin-top: -1rem;" class="btn btn-success" value="Add to Cart" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End of Hot Deals of the Day -->

            <!-- Start of Best Seller -->
            <div class="col-lg-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2"><?= $rows_6['title'] ?>
                        </h4>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">

                                <div class="swiper-wrapper row cols-lg-1 cols-md-3 pl-4">
                                    <?php
                                    $counter = 1;
                                    echo '<div class="swiper-slide product-widget-wrap">';
                                    $seller1_1 = "SELECT token FROM b_info Where best_seller = 'YES'";
                                    $s1 = mysqli_query($conn, $seller1_1);
                                    while ($best_seller_products = mysqli_fetch_array($s1)) {
                                        $token_1 = $best_seller_products['token'];
                                        $best_seller = "SELECT * FROM products_detail WHERE token = '$token_1' AND status = 'Approved'";
                                        $best_seller_query = mysqli_query($conn, $best_seller);
                                        $records = [];
                                        while ($best_seller_product = mysqli_fetch_array($best_seller_query)) {
                                            $title = $best_seller_product['title'];
                                            $token = $best_seller_product['token'];
                                            $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                                            $sql_query = mysqli_query($conn, $sql);
                                            $price_data = mysqli_fetch_array($sql_query);
                                            $records[] = $best_seller_product;
                                        }
                                        foreach ($records as $record) { ?>
                                            <div class="product product-widget bb-no">

                                                <figure class="product-media">
                                                    <a href="single_product.php?id=<?php echo $record['id']; ?>">
                                                        <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $record['image'] ?>" alt="Product" width="105" height="118" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h4 class="product-name">
                                                        <a href="single_product.php?id=<?php echo $record['id']; ?>"><?= implode(' ', array_slice(explode(' ', $record['title']), 0, 2)) . "\n"; ?></a>
                                                    </h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <?php
                                                        if (!empty($record['sale_price']) || !empty($price_data['small_sale_price'])) {
                                                        ?>
                                                            <ins class="new-price">$<?= $record['sale_price']; ?>
                                                                <?= $price_data['small_sale_price']; ?></ins>
                                                        <?php
                                                        }

                                                        if (!empty($record['regular_price']) || !empty($price_data['small_regular_price'])) {
                                                        ?>
                                                            <del class="old-price">$<?= $record['regular_price'] ?>
                                                                <?= $price_data['small_regular_price']; ?></del>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php if ($counter % 3 == 0) {
                                                echo '</div><div class="swiper-slide product-widget-wrap">';
                                            }

                                            $counter++;
                                        }
                                    }
                                    echo '</div>';

                                    ?>
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Best Seller -->
        </div>
        <!-- End of Hot Deals & Best Seller -->
    </div>



    <!--Top categories of the month-->

    <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
        <div class="container pb-2">
            <h2 class="title justify-content-center pt-1 ls-normal mb-5"><?= $rows_10['title'] ?></h2>
            <div class="swiper">
                <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                    <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_1']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_1'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_1'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_1']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_2']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_2'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_2'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_2']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_3']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_3'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_3'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_3']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_4']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_4'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_4'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_4']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_5']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_5'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_5'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_5']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <a href="./category.php<?php echo '?category=' . $rows_10['cat_6']; ?>" class="category-media">
                                <img src="<?= '././admin/src/front-store/uploads/' . $rows_10['img_6'] ?>" alt="Category" width="130" height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name"><?= $rows_10['cat_6'] ?></h4>
                                <a href="./category.php<?php echo '?category=' . $rows_10['cat_6']; ?>" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top category section -->




    <div class="container">
        <!-- Start of Tab Section -->
        <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate"><?= $rows_2['title'] ?>
        </h2>
        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1"><?= $rows_2['cat_1'] ?></a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2"><?= $rows_2['cat_2'] ?></a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3"><?= $rows_2['cat_3'] ?></a>
                </li>
                <li class="nav-item mr-0 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4"><?= $rows_2['cat_4'] ?></a>
                </li>
            </ul>
        </div>
        <div class="tab-content product-wrapper appear-animate">
            <div class="tab-pane active pt-4" id="tab1-1">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php
                    $cat_1 = $rows_2['cat_1'];
                    $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$cat_1' AND `status` = 'Approved' ";
                    $prod_equery = mysqli_query($conn, $prod_eQuery);
                    if (mysqli_num_rows($prod_equery) > 0) {
                        while ($prod_row = mysqli_fetch_array($prod_equery)) {
                            $title = $prod_row['title'];
                            $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                            $img_row = mysqli_fetch_array($img_Query);

                            $token = $prod_row['token'];
                            $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                            $sql_query = mysqli_query($conn, $sql);
                            $price_data = mysqli_fetch_array($sql_query);

                    ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image']; ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php<?php echo '?id=' . $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 5)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">
                                                    <?php
                                                    if (!empty($prod_row['sale_price'])) {
                                                        echo '$' . $prod_row['sale_price'];
                                                    }

                                                    if (!empty($price_data['small_sale_price'])) {
                                                        echo ' ' . $price_data['small_sale_price'];
                                                    }
                                                    ?>
                                                </ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">
                                                    <?php
                                                    if (!empty($prod_row['regular_price'])) {
                                                        echo '$' . $prod_row['regular_price'];
                                                    }

                                                    if (!empty($price_data['small_regular_price'])) {
                                                        echo ' ' . $price_data['small_regular_price'];
                                                    }
                                                    ?>
                                                </del>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-2">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">

                    <?php
                    $cat_2 = $rows_2['cat_2'];
                    $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$cat_2' AND `status` = 'Approved' ";
                    $prod_equery = mysqli_query($conn, $prod_eQuery);
                    if (mysqli_num_rows($prod_equery) > 0) {
                        while ($prod_row = mysqli_fetch_assoc($prod_equery)) {
                            $title = $prod_row['title'];
                            $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                            $img_row = mysqli_fetch_array($img_Query);

                            $token = $prod_row['token'];
                            $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                            $sql_query = mysqli_query($conn, $sql);
                            $price_data = mysqli_fetch_array($sql_query);

                    ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 5)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">
                                                    <?php
                                                    if (!empty($prod_row['sale_price'])) {
                                                        echo '$' . $prod_row['sale_price'];
                                                    }

                                                    if (!empty($price_data['small_sale_price'])) {
                                                        echo ' ' . $price_data['small_sale_price'];
                                                    }
                                                    ?>
                                                </ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">
                                                    <?php
                                                    if (!empty($prod_row['regular_price'])) {
                                                        echo '$' . $prod_row['regular_price'];
                                                    }

                                                    if (!empty($price_data['small_regular_price'])) {
                                                        echo ' ' . $price_data['small_regular_price'];
                                                    }
                                                    ?>
                                                </del>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-3">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php
                    $cat_3 = $rows_2['cat_3'];
                    $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$cat_3' AND `status` = 'Approved' ";
                    $prod_equery = mysqli_query($conn, $prod_eQuery);
                    if (mysqli_num_rows($prod_equery) > 0) {
                        while ($prod_row = mysqli_fetch_assoc($prod_equery)) {
                            $title = $prod_row['title'];
                            $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                            $img_row = mysqli_fetch_array($img_Query);


                            $token = $prod_row['token'];
                            $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                            $sql_query = mysqli_query($conn, $sql);
                            $price_data = mysqli_fetch_array($sql_query);

                    ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 5)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">
                                                    <?php
                                                    if (!empty($prod_row['sale_price'])) {
                                                        echo '$' . $prod_row['sale_price'];
                                                    }

                                                    if (!empty($price_data['small_sale_price'])) {
                                                        echo ' ' . $price_data['small_sale_price'];
                                                    }
                                                    ?>
                                                </ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">
                                                    <?php
                                                    if (!empty($prod_row['regular_price'])) {
                                                        echo '$' . $prod_row['regular_price'];
                                                    }

                                                    if (!empty($price_data['small_regular_price'])) {
                                                        echo ' ' . $price_data['small_regular_price'];
                                                    }
                                                    ?>
                                                </del>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane pt-4" id="tab1-4">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php
                    $cat_4 = $rows_2['cat_4'];
                    $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$cat_4' AND `status` = 'Approved' ";
                    $prod_equery = mysqli_query($conn, $prod_eQuery);
                    if (mysqli_num_rows($prod_equery) > 0) {
                        while ($prod_row = mysqli_fetch_assoc($prod_equery)) {
                            $title = $prod_row['title'];
                            $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                            $img_row = mysqli_fetch_array($img_Query);

                            $token = $prod_row['token'];
                            $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                            $sql_query = mysqli_query($conn, $sql);
                            $price_data = mysqli_fetch_array($sql_query);

                    ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="300" height="338" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 5)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">
                                                    <?php
                                                    if (!empty($prod_row['sale_price'])) {
                                                        echo '$' . $prod_row['sale_price'];
                                                    }

                                                    if (!empty($price_data['small_sale_price'])) {
                                                        echo ' ' . $price_data['small_sale_price'];
                                                    }
                                                    ?>
                                                </ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">
                                                    <?php
                                                    if (!empty($prod_row['regular_price'])) {
                                                        echo '$' . $prod_row['regular_price'];
                                                    }

                                                    if (!empty($price_data['small_regular_price'])) {
                                                        echo ' ' . $price_data['small_regular_price'];
                                                    }
                                                    ?>
                                                </del>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <!-- End of Tab Pane -->
        </div>
        <!-- End of Tab Section -->



        <!--Section 7-->

        <div class="row category-cosmetic-lifestyle appear-animate mb-5">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed category-banner-1 br-xs">
                    <figure>
                        <a href="<?= $rows_9['link_1'] ?>"><img src="<?= '././admin/src/front-store/uploads/' . $rows_9['img_1'] ?>" alt="Category Banner" width="610" height="200" style="background-color: #3B4B48;" />
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed category-banner-2 br-xs">
                    <figure>
                        <a href="<?= $rows_9['link_2'] ?>"><img src="<?= '././admin/src/front-store/uploads/' . $rows_9['img_2'] ?>" alt="Category Banner" width="610" height="200" style="background-color: #E5E5E5;" />
                        </a>
                    </figure>
                </div>
            </div>
        </div>
        <!-- End of Category Cosmetic Lifestyle -->


        <!-- Start of Clothing & Apparel -->

        <div class="product-wrapper-1 appear-animate mb-5">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0"><?= $rows_3['title'] ?></h2>
                <a href="category.php?category=<?= $rows_3['cat_1'] ?>" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <!--Start Banner-->
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url(<?= '././admin/src/front-store/uploads/' . $rows_3['ban_img'] ?>); 
                                background-color: #ebeced;">
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <!--Start of Products Fetch Code-->
                    <div class=" row cols-xl-4 cols-lg-3 cols-2">
                        <?php
                        $sec4_cat_1 =  $rows_3['cat_1'];
                        $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$sec4_cat_1' AND `status` = 'Approved' LIMIT 8 ";
                        $prod_equery = mysqli_query($conn, $prod_eQuery);
                        if (mysqli_num_rows($prod_equery) > 0) {
                            while ($prod_row = mysqli_fetch_array($prod_equery)) {
                                $title = $prod_row['title'];
                                $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                                $img_row = mysqli_fetch_array($img_Query);

                                $token = $prod_row['token'];
                                $sql_data = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                                $sql_query = mysqli_query($conn, $sql_data);
                                $price_data = mysqli_fetch_array($sql_query);
                        ?>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="216" height="243" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="216" height="243" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 2)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">
                                                    <?php
                                                    if (!empty($prod_row['sale_price'])) {
                                                        echo '$' . $prod_row['sale_price'];
                                                    }

                                                    if (!empty($price_data['small_sale_price'])) {
                                                        echo ' ' . $price_data['small_sale_price'];
                                                    }
                                                    ?>
                                                </ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">
                                                    <?php
                                                    if (!empty($prod_row['regular_price'])) {
                                                        echo '$' . $prod_row['regular_price'];
                                                    }

                                                    if (!empty($price_data['small_regular_price'])) {
                                                        echo ' ' . $price_data['small_regular_price'];
                                                    }
                                                    ?>
                                                </del>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <!--End of Fetch Products Code-->
                </div>
            </div>
        </div>
        <!-- End of Clothing & Apparel -->



        <!-- Start of Electronic and Technology -->

        <div class="product-wrapper-1 appear-animate mb-8">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0"><?= $rows_5['title'] ?></h2>
                <a href="category.php?category=<?= $rows_5['cat_1'] ?>" class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <!--Start Banner-->
                    <div class="banner h-100 br-sm" style="background-image: url(<?= '././admin/src/front-store/uploads/' . $rows_5['ban_img']; ?>); 
                            background-color: #252525; height: 90vh !important;">
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <!-- Fetch Products Code -->
                    <div class=" row cols-xl-4 cols-lg-3 cols-2">
                        <?php
                        $sec5_cat_1 =  $rows_5['cat_1'];
                        $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='$sec5_cat_1' AND `status` = 'Approved' LIMIT 8 ";
                        $prod_equery = mysqli_query($conn, $prod_eQuery);
                        if (mysqli_num_rows($prod_equery) > 0) {
                            while ($prod_row = mysqli_fetch_assoc($prod_equery)) {
                                $title = $prod_row['title'];
                                $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                                $img_row = mysqli_fetch_array($img_Query);

                                $token = $prod_row['token'];
                                $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                                $sql_query = mysqli_query($conn, $sql);
                                $price_data = mysqli_fetch_array($sql_query);

                        ?>
                                <div class="product-wrap product text-center">
                                    <figure class="product-media">
                                        <a href="single_product.php<?php echo '?id=' . $prod_row['id']; ?>">
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="216" height="243" />
                                            <?php
                                            if (!empty($img_row['images'])) {
                                            ?>
                                                <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="216" height="243" />
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 2)) . "\n"; ?></a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href=" " class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                            ?>
                                                <ins class="new-price">$<?= $prod_row['sale_price']; ?>
                                                    <?= $price_data['small_sale_price']; ?></ins>
                                            <?php
                                            }

                                            if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                            ?>
                                                <del class="old-price">$<?= $prod_row['regular_price'] ?>
                                                    <?= $price_data['small_regular_price']; ?></del>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                        <!-- End of Fetch Products Code -->
                    </div>
                </div>
            </div>
            <!-- End of Electronic and Technology -->



            <!-- Banner Section -->

            <div class="banner banner-fashion appear-animate br-sm mb-9 fadeIn appear-animation-visible" style="background-image: url(&quot; <?= '././admin/src/front-store/uploads/' . $rows_4['img'] ?> &quot;); background-color: rgb(56, 56, 57); animation-duration: 1.2s; padding:40px;">
                <div class="banner-content align-items-center">
                    <div class="content-left d-flex align-items-center mb-3">
                        <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                            <sup class="font-weight-bold"></sup><sub class="font-weight-bold ls-25"></sub>
                        </div>
                    </div>
                    <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                        <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                            <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                            </h3>
                            <p class="text-white mb-0">
                                <span class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">
                                    <strong></strong></span>
                            </p>
                        </div>
                        <a href="/shop.php" class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Banner Section -->




            <!-- Home & Garden Section -->

            <div class="product-wrapper-1 appear-animate mb-7">
                <div class="title-link-wrapper pb-1 mb-4">
                    <h2 class="title ls-normal mb-0"><?= $rows_7['title'] ?></h2>
                    <a href="category.php?category=<?= $rows_7['cat_1'] ?>" class="font-size-normal font-weight-bold ls-25 mb-0">More
                        Products<i class="w-icon-long-arrow-right"></i></a>
                </div>
                <div class="row">
                    <!--Start Banner-->
                    <div class="col-lg-3 col-sm-4 mb-4">
                        <div class="banner h-100 br-sm" style="background-image: url(<?= '././admin/src/front-store/uploads/' . $rows_7['ban_img']; ?>); 
                            background-color: #EAEFF3;">
                        </div>
                    </div>
                    <!-- End Banner -->
                    <div class="col-lg-9 col-sm-8">
                        <!--Fetch Products Code-->
                        <div class=" row cols-xl-4 cols-lg-3 cols-2">
                            <?php
                            $sec7_cat_1 =  $rows_7['cat_1'];
                            $prod_eQuery = "SELECT * FROM `products_detail` WHERE category ='Garden' OR category ='Furniture' AND `status` = 'Approved' LIMIT 8";
                            $prod_equery = mysqli_query($conn, $prod_eQuery);
                            if (mysqli_num_rows($prod_equery) > 0) {
                                while ($prod_row = mysqli_fetch_assoc($prod_equery)) {
                                    $title = $prod_row['title'];
                                    $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                                    $img_row = mysqli_fetch_array($img_Query);

                                    $token = $prod_row['token'];
                                    $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                                    $sql_query = mysqli_query($conn, $sql);
                                    $price_data = mysqli_fetch_array($sql_query);

                            ?>
                                    <div class="product-wrap product text-center">
                                        <figure class="product-media">
                                            <a href="single_product.php?id=<?php echo $prod_row['id']; ?>">
                                                <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $prod_row['image'] ?>" alt="Product" width="216" height="243" />
                                                <?php
                                                if (!empty($img_row['images'])) {
                                                ?>
                                                    <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="216" height="243" />
                                                <?php
                                                }
                                                ?>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="single_product.php?id=<?php echo $prod_row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $prod_row['title']), 0, 2)) . "\n"; ?></a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 60%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href=" " class="rating-reviews">(3
                                                    reviews)</a>
                                            </div>
                                            <div class="product-price">
                                                <?php
                                                if (!empty($prod_row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                                ?>
                                                    <ins class="new-price">
                                                        <?php
                                                        if (!empty($prod_row['sale_price'])) {
                                                            echo '$' . $prod_row['sale_price'];
                                                        }

                                                        if (!empty($price_data['small_sale_price'])) {
                                                            echo ' ' . $price_data['small_sale_price'];
                                                        }
                                                        ?>
                                                    </ins>
                                                <?php
                                                }

                                                if (!empty($prod_row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                                ?>
                                                    <del class="old-price">
                                                        <?php
                                                        if (!empty($prod_row['regular_price'])) {
                                                            echo '$' . $prod_row['regular_price'];
                                                        }

                                                        if (!empty($price_data['small_regular_price'])) {
                                                            echo ' ' . $price_data['small_regular_price'];
                                                        }
                                                        ?>
                                                    </del>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                        <!-- Fetch Products Code -->
                    </div>
                </div>
            </div>
            <!-- End of Home & Garden Section -->



            <!-- Our Clients Section -->

            <h2 class="title title-underline mb-4 ls-normal appear-animate"><?= $rows_12['title'] ?></h2>
            <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
                <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    <?php $sql_1 = "SELECT * FROM `b_info` WHERE show_client ='YES' ";
                    $query_1 = mysqli_query($conn, $sql_1);
                    while ($comp_1 = mysqli_fetch_array($query_1)) { ?>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $comp_1['company_logo'] ?>" alt="Brand" width="410" height="186" />
                            </figure>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <!-- End of Our Clients Section -->
        </div>
        <!--End of Catainer -->
</main>
<!-- End of Main -->
<style>
    .btn-group.slide-animate {
        justify-content: flex-end;
    }

    .product-wrapper-1 .banner {
        min-height: 0rem !important;
    }
</style>
<?php include "footer.php" ?>