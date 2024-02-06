<?php 
include 'inc/config.php';
$eQuery_1 = "SELECT * FROM `footer`";
$equery_1 = mysqli_query($conn, $eQuery_1);
$rows_1 = mysqli_fetch_array($equery_1);
?>

<?php
include 'inc/config.php';
$eQuery = "SELECT * FROM `header`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
?>

<style>
    #mobile_logo{
    width: 50%;
    margin: 20px auto;
    display: flex;
}
</style>
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
            <div class="footer-newsletter bg-primary">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase font-weight-bold"><?= $rows_1['title'] ?></h4>
                                    <p class="text-white"><?= $rows_1['des'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get"
                                class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                    placeholder="Your Email Address" />
                                <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                        class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="./" class="logo-footer">
                                    <img style="width: 50%;" src="assets/images/<?php echo $rows['logo']; ?>" alt="logo-footer"  />
                                        
                                        <!--   <img src="assets/images/logo_footer.png" alt="logo-footer" width="144"-->
                                        <!--height="45" />-->
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title"><?= $rows_1['page_1_name'] ?></p>
                                    <a href="tel:(424) 274-5078" class="widget-about-call"><?= $rows_1['page_2_name'] ?></a>
                                    <p class="widget-about-desc"><?= $rows_1['page_3_name'] ?>
                                    </p>
                                    <div class="social-icons social-icons-colored">
                                <a href="<?= $rows_1['icon_link_1'] ?>"><img class="icon-custom" src="<?= '././admin/src/front-store/uploads/' . $rows_1['icon_img1'] ?>" alt="Icon Social Twiter"></a>
                                <a href="<?= $rows_1['icon_link_2'] ?>"><img class="icon-custom" src="<?= '././admin/src/front-store/uploads/' . $rows_1['icon_img2'] ?>" alt="Icon Social Facebook"></a>
                                <a href="<?= $rows_1['icon_link_3'] ?>"><img class="icon-custom" src="<?= '././admin/src/front-store/uploads/' . $rows_1['icon_img3'] ?>" alt="Icon Social Instagram"></a>
                                <a href="<?= $rows_1['icon_link_4'] ?>"><img class="icon-custom" src="<?= '././admin/src/front-store/uploads/' . $rows_1['icon_img4'] ?>" alt="Icon Social Youtube" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">OUR POLICIES</h3>
                                <ul class="widget-body">
                                <li><a href="<?= $rows_1['4page_8_link'] ?>"><?= $rows_1['4page_8_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_9_link'] ?>"><?= $rows_1['4page_9_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_10_link'] ?>"><?= $rows_1['4page_10_name'] ?></a></li>
                                <li><a href="<?= $rows_1['3page_1_link'] ?>"><?= $rows_1['3page_1_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_3_link'] ?>"><?= $rows_1['4page_3_name'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-3">
                            <div class="widget">
                                <ul class="widget-body mt-5">
                                <li><a href="<?= $rows_1['3page_3_link'] ?>"><?= $rows_1['3page_3_name'] ?></a></li>
                                <li><a href="<?= $rows_1['3page_4_link'] ?>"><?= $rows_1['3page_4_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_6_link'] ?>"><?= $rows_1['4page_6_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_7_link'] ?>"><?= $rows_1['4page_7_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_11_link'] ?>"><?= $rows_1['4page_11_name'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mt-3">
                            <div class="widget">
                                <ul class="widget-body mt-5">
                                <li><a href="<?= $rows_1['3page_5_link'] ?>"><?= $rows_1['3page_5_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_4_link'] ?>"><?= $rows_1['4page_4_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_5_link'] ?>"><?= $rows_1['4page_5_name'] ?></a></li>
                                <li><a href="<?= $rows_1['4page_12_link'] ?>"><?= $rows_1['4page_12_name'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright"><?= $rows_1['copyright'] ?></p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="<?= '././admin/src/front-store/uploads/' . $rows_1['pay_img'] ?>" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="/" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="/shop.php" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="/vendor_dashboard/src/login.php" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                
                                     <?php
                            if (!empty($_SESSION["shopping_cart"])) {
                                 $total = 0;
                                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                                     
                            ?>
                            <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href=" " class="product-name"><?= implode(' ', array_slice(explode(' ', $values["item_name"]), 0, 5))."\n"; ?></a>
                                            <div class="price-box">
                                                <span class="product-quantity"><?= $values["item_quantity"] ?></span>
                                                <span class="product-price">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="">
                                                <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $values['item_image'] ?>" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><i class="fas fa-times"></i></a>
                                        </button>
                                    </div>
                                    </div>
 <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }   ?>
                                    
                                

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$<?php echo number_format($total, 2); ?></span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                                <?php } ?>
                            </div>
        </div>
        
        

      <div class="cart-dropdown dir-up">
    <a class="sticky-link">
        <i class="w-icon-search"></i>
        <p>Search</p>
    </a>
    <div class="dropdown-box" style="position:absolute; right:30px;">
        <form method="Post" action="search.php" class="input-wrapper" style="display:flex;">
            <input type="text" name="search" class="form-control" id="search" placeholder="Search in..." required />
            <button class="btn btn-search" type="submit" name="Submit" value="search"><i
                    class="w-icon-search"></i></button>
        </form>
    </div>
</div>
      
      
    </div>

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>

        <div class="mobile-menu-container scrollable">
            <img src="assets/images/<?php echo $rows['logo']; ?>" class="img-fluid" alt="logo" id="mobile_logo">
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu"> 
                    <li class="<?if($page=="home"){?>active<?}?>">
                                        <a href="./">Home</a>
                                    </li>
                                    <li class="<?if($page=="shop"){?>active<?}?>">
                                        <a href="shop.php">Shop</a>

                                    </li>
                                    
                                    <li class="<?if($page=="about"){?>active<?}?>">
                                        <a href="about.php">About Us</a>
                                    </li>
                                    
                                    <li class="<?if($page=="contact"){?>active<?}?>">
                                        <a href="contact-us.php">Contact Us</a>
                                    </li></ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">                                         <?php 
                                         $sql = "SELECT * FROM categories";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) { ?>
      <li>
        <a href="category.php<?php echo'?category='.$row['category'];?>">
                                                <img src="<?= '././admin/src/front-store/uploads/' . $row['icon_image'] ?>"> <?= $row['category']; ?>
                                            </a>
                                        </li>
  <?php  } }
    ?></ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Newsletter popup -->
    <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
            <h2 class="ls-25">Sign up to Parcel Prevail</h2>
            <p class="text-light ls-10">Subscribe to the Parcel Prevail market newsletter to
                receive updates on special offers.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email font-size-md" name="email" id="email2"
                    placeholder="Your email address" required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div>
        </div>
    </div>

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
li.has-submenu ul.megamenu {
    display: none;
}
li.has-submenu ul.megamenu.type2 {
    display: none !important;
}
ul.menu.vertical-menu.category-menu {
    display: none;
}
.show ul.menu.vertical-menu.category-menu {
    display: block !important;
}
</style>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/skrollr/skrollr.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.min.js"></script>
    <script>
        function validateText(event) {
  var key = event.keyCode || event.charCode;
  if ((key >= 48 && key <= 57) || (key >= 96 && key <= 105)) {
    event.preventDefault();
    return false;
  }
}


















  var swiper = new Swiper('.banner-home', {
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
    }

  });
 


         




    </script>
</body>
</html>