<?php 
@include('header.php'); 
$category = $_GET['category'];
$query_2 = "SELECT * FROM `categories` where `category` = '$category' ";
$result_2 = mysqli_query($conn, $query_2);
$cat_res = mysqli_fetch_array($result_2);
?>

        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop.php">Shop</a></li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mb-10">
                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6">
                    <img src="<?='././admin/src/front-store/uploads/'.$cat_res['image'] ?>" width="100%">
                </div>
                <div class="container">
    <div class="shop-content row gutter-lg mb-10">
                        <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <div class="sidebar-content scrollable">
                                <div class="sticky-sidebar">
                                    <div class="filter-actions">
                                        <label>Filter :</label>
                                        <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><label>All Categories</label><span class="toggle-btn"></span></h3>
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
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><label>Price</label><span class="toggle-btn"></span></h3>
                                        <div class="widget-body">
                                           <form class="price-range" action="category.php<?php echo '?category=' . $cat_res['category']; ?>" method="POST">
                                            <input type="number" name="min" class="min_price text-center"
                                                placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                name="max" class="max_price text-center" placeholder="$max">
                                                <input type="submit" name="filter" id="filter" value="GO" class="btn btn-info" />
                                        </form>
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><label>Size</label><span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items item-check mt-1">
                                            <li><a href="#">Extra Large</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Small</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><label>Brand</label><span class="toggle-btn"></span></h3>
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
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><label>Color</label><span class="toggle-btn"></span></h3>
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
                                </div>
                            </div>
                        </aside>
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
      $from = "and regular_price between '" . $_REQUEST['min'] . "' and '" . $_REQUEST['max'] . "' AND status = 'Approved' ";
    }
$category = $_GET['category'];
    $query =  "SELECT * FROM products_detail where `category` = '$category' $from  order by category, regular_price";
  } else {
    $query =  "SELECT * FROM `products_detail` where `category` = '$category' AND `status` = 'Approved' ";
  }
  if ($result = mysqli_query($conn, $query)) {
	
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
								    $token = $row['token'];
                                    $product_name = $row['title'];
                                    $sql = "SELECT * FROM `variations` WHERE token = '$token' AND product_name = '$product_name'";
                                    $squery = mysqli_query($conn,$sql);
                                    $data = mysqli_fetch_array($squery);
                                ?>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="single_product.php<?php echo '?id=' . $row['id']; ?>">
                                                <img src="././vendor_dashboard/src/front-store/uploads/<?php echo $row["image"]?>" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-banner-sidebar.html"><?= $row['category'] ?></a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="single_product.php<?php echo '?id=' . $row['id']; ?>"><?= implode(' ', array_slice(explode(' ', $row['title']), 0, 5))."\n"; ?></a>
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
                                            if(!empty($row['regular_price']) || !empty($data['small_regular_price'])){
                                                ?>
                                                <del class="old-price">$<?= $row['regular_price']; ?><?= $data['small_regular_price']; ?></del>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <del class="old-price"><?= $row['regular_price']; ?><?= $data['small_regular_price']; ?></del>
                                                <?php
                                            }
                                            ?>
                            
                                                  <ins class="new-price">$<?= $row['sale_price']; ?><?= $data['small_sale_price']; ?></ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php
    } } }
?>

                            </div>
                            <div class="row text-center">
 <div class="btn-wrap ">
     <a href="#" id="loadMore" class="btn btn-primary">Load More</a>
 </div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php @include('footer.php'); ?>

<script>
	$(function () {
    $(".product-wrap").slice(0, 12).show();
    $("#loadMore").on('click', function (e) {
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