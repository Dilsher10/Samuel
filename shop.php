<? $page = "shop"; ?>
<?php @include('header.php');
$Shop_row = mysqli_query($conn, "SELECT * From `shop`");
$shop_query = mysqli_fetch_assoc($Shop_row);
?>

<!-- Start of Main -->
<main class="main">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href="/">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <!-- Start of Shop Banner -->
        <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs">
            <img src="<?= '././admin/src/front-store/uploads/' . $shop_query['image']; ?>" width="100%">
        </div>
        <!-- End of Shop Banner -->
        <div class="container">

            <!-- Start of Shop Content -->
            <div class="shop-content row gutter-lg mb-10">
                <!-- Start of Sidebar, Shop Sidebar -->
                <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <!-- Start of Sidebar Overlay -->
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                    <!-- Start of Sidebar Content -->
                    <div class="sidebar-content scrollable">
                        <!-- Start of Sticky Sidebar -->
                        <div class="sticky-sidebar">
                            <div class="filter-actions">
                                <label>Filter :</label>
                                <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                            </div>
                            <!-- Start of Collapsible widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><label>All Categories</label></h3>
                                <ul class="widget-body filter-items search-ul">
                                    <?php
                                    $Ecat_1 = "SELECT * FROM `categories`";
                                    $ecat_1 = mysqli_query($conn, $Ecat_1);
                                    if (mysqli_num_rows($ecat_1) > 0) {
                                        while ($cat_1 = mysqli_fetch_assoc($ecat_1)) {

                                    ?>
                                            <li><a href="category.php<?php echo '?category=' . $cat_1['category']; ?>"><?= $cat_1['category'] ?></a></li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <label>Price</label>
                                </h3>
                                <div class="widget-body">

                                    <form class="price-range" action="shop.php" method="POST">
                                        <input type="number" name="min" class="min_price text-center" placeholder="$min"><span class="delimiter">-</span><input type="number" name="max" class="max_price text-center" placeholder="$max">
                                        <input type="submit" name="filter" id="filter" value="GO" class="btn btn-info" />
                                    </form>
                                </div>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><label>Size</label></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Extra Large</a></li>
                                    <li><a href="#">Large</a></li>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Small</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><label>Brand</label></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Elegant Auto Group</a></li>
                                    <li><a href="#">Green Grass</a></li>
                                    <li><a href="#">Node Js</a></li>
                                    <li><a href="#">NS8</a></li>
                                    <li><a href="#">Red</a></li>
                                    <li><a href="#">Skysuite Tech</a></li>
                                    <li><a href="#">Sterling</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><label>Color</label></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Black</a></li>
                                    <li><a href="#">Blue</a></li>
                                    <li><a href="#">Brown</a></li>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#">Grey</a></li>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">Yellow</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->
                        </div>
                        <!-- End of Sidebar Content -->
                    </div>
                    <!-- End of Sidebar Content -->
                </aside>
                <!-- End of Shop Sidebar -->

                <!-- Start of Shop Main Content -->
                <div class="main-content">
                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left d-block d-lg-none"><i class="w-icon-category"></i><span>Filters</span></a>
                        </div>
                    </nav>
                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                        <?php
                        if (isset($_REQUEST['filter'])) {
                            $from = "";
                            if ($_REQUEST['min']) {
                                $from = "regular_price between '" . $_REQUEST['min'] . "' and '" . $_REQUEST['max'] . "' AND status = 'Approved' ";
                            }
                            $query =  "SELECT * FROM products_detail where $from  order by regular_price";
                        } else {
                            $query =  "SELECT * FROM `products_detail` where `status` = 'Approved' ";
                        }
                        if ($result = mysqli_query($conn, $query)) {

                            if (mysqli_num_rows($result) > 0) {

                                // OUTPUT DATA OF EACH ROW
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $title = $row['title'];
                                    $token = $row['token'];
                                    $sql = "SELECT * FROM `variations` WHERE product_name = '$title' AND token = '$token'";
                                    $sql_query = mysqli_query($conn, $sql);
                                    $price_data = mysqli_fetch_array($sql_query);
                        ?>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="single_product.php<?php echo '?id=' . $row['id']; ?>">
                                                    <img src="././vendor_dashboard/src/front-store/uploads/<?php echo $row["image"] ?>" alt="Product" width="300" height="338" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="shop-banner-sidebar.html"><?= $row['category'] ?></a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="single_product.php<?php echo '?id=' . $row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $row['title']), 0, 5)) . "\n"; ?></a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">

                                                        <?php
                                                        if (!empty($row['sale_price']) || !empty($price_data['small_sale_price'])) {
                                                        ?>
                                                            <ins class="new-price">
                                                                <?php
                                                                if (!empty($row['sale_price'])) {
                                                                    echo '$' . $row['sale_price'];
                                                                }

                                                                if (!empty($price_data['small_sale_price'])) {
                                                                    echo ' ' . $price_data['small_sale_price'];
                                                                }
                                                                ?>
                                                            </ins>
                                                        <?php
                                                        }

                                                        if (!empty($row['regular_price']) || !empty($price_data['small_regular_price'])) {
                                                        ?>
                                                            <del class="old-price">
                                                                <?php
                                                                if (!empty($row['regular_price'])) {
                                                                    echo '$' . $row['regular_price'];
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
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>

                    </div>
                    <div class="row text-center">
                        <div class="btn-wrap ">
                            <a href="#" id="loadMore" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                </div>
                <!-- End of Shop Main Content -->
            </div>
            <!-- End of Shop Content -->
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->
<?php @include('footer.php'); ?>

<script>
    $(function() {
        $(".product-wrap").slice(0, 12).show();
        $("#loadMore").on('click', function(e) {
            e.preventDefault();
            $(".product-wrap:hidden").slice(0, 6).slideDown();
            if ($(".product-wrap:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
        });
    });
</script>
<style>
    .product-wrap {
        display: none;
    }
</style>