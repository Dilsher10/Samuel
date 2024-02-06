<?php
session_start();
?>

<?php
include 'inc/config.php';
include 'cart-funtion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Parcel Prevail</title>

    <meta name="keywords" content="Parcel Prevail" />
    <meta name="description" content="Parcel Prevail">
    <meta name="google-site-verification" content="Ibyijv8Ek3Us2j-0B5ih-X3LSTqkhuifPfojLALsnUg" />
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">


    <style>
        img.goog-te-gadget-icon {
            display: none;
        }
    </style>


    <style>
        div#myModal {
            z-index: 99999999;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 13% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-inline-start: auto;
            margin-top: -10px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #myModal .card {
            text-align: center !important;
            border: 1px solid #999 !important;
            padding: 30px;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        #myModal .card:hover {
            background: #336699;
            color: #fff !important;
        }

        #myModal .card:hover .customerName {
            color: #fff !important;
        }

        #myModal .card img {
            max-width: 50%;
            margin: 0 auto;
            display: flex;
        }

        .customerName {
            font-size: 20px;
            font-weight: bold;
            color: #000;
            position: relative;
            top: 20px;
        }

        button#myBtn {
            background: transparent;
            border: 0;
            font-size: 1.1rem;
            letter-spacing: -0.027em;
            text-transform: capitalize;
            color: #333;
            cursor: pointer;
        }
    </style>


</head>

<body class=" about-us">

    <div class="page-wrapper">
        <h1 class="d-none">Parcel Prevail</h1>
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Parcel Prevail!</p>
                    </div>
                    <div class="header-right">
                        <!-- Start of Language Change Code -->
                        <span>
                            <div class="translate" id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en',
                                        includedLanguages: 'en,es,fr,de,ru,ja,zh-CN,ar,pt,hi',
                                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                    }, 'google_translate_element');
                                }
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        </span>
                        <!-- End of Language Change Code -->
                        <span class="divider d-lg-show"></span>
                        <a href="contact-us.php" class="d-lg-show">Contact Us</a>
                        <button id="myBtn" class="d-lg-show">My Account</button>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <?php
            $sqlQuery = "SELECT * FROM header";
            $query = mysqli_query($conn, $sqlQuery);
            $data = mysqli_fetch_array($query);
            ?>

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="./" class="ml-lg-0">
                            <img src="assets/images/<?php echo $data['logo'] ?>" alt="logo" class="img-fluid" width="<?php echo $data['width'] ?>" height="<?php echo $data['height'] ?>" id="logo" />
                        </a>
                        <form method="Post" action="search.php" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box w-100">
                                <input type="text" name="search" class="form-control" id="search" placeholder="Search in..." required />
                            </div>
                            <button class="btn btn-search" type="submit" name="Submit" value="search" role="button"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:+1 (408) 718-5608" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:info@parcelprevail.com" class="text-capitalize"><?php echo $data['phone_text'] ?></a>
                                </h4>
                                <a href="tel:+1 (424) 274-5078" class="phone-number font-weight-bolder ls-50">+<?php echo $data['phone'] ?></a>
                            </div>
                        </div>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <?php
                                    $totalquantity = 0;
                                    if (!empty($_SESSION["shopping_cart"])) {
                                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                                            $totalquantity += $values["item_quantity"];
                                        } ?>
                                        <span class="cart-count"> <?php echo $totalquantity; ?></span><?php   } else { ?> <span class="cart-count">0
                                        <?php   }

                                        ?> </span>

                                </i>
                                <span class="cart-label">Cart</span>
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
                                                    <a href=" " class="product-name"><?= implode(' ', array_slice(explode(' ', $values["item_name"]), 0, 5)) . "\n"; ?></a>
                                                    <div class="price-box">
                                                        <span class="product-quantity"><?= $values["item_quantity"] ?></span>
                                                        <span class="product-price">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></span>
                                                    </div>
                                                </div>
                                                <figure class="product-media">
                                                    <a href="">
                                                        <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $values['item_image'] ?>" alt="product" height="84" width="94" />
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

                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>
                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $result = $conn->query($sql);
                                        if ($result) {
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <li>
                                                    <a href="category.php<?php echo '?category=' . $row['category']; ?>">
                                                        <img src="<?= '././admin/src/front-store/uploads/' . $row['icon_image'] ?>"> <?= $row['category']; ?>
                                                    </a>
                                                </li>
                                        <?php  }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="">
                                        <a href="./">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="shop.php">Shop</a>

                                    </li>
                                    <li class="">
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li class="">
                                        <a href="contact-us.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->


        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content loginCard">
                <div class="d-flex">
                    <h4>Login as an Customer OR Vendor</h4>
                    <span class="close">&times;</span>
                </div>
                <hr>
                <div class="row" style="justify-content: space-around;">
                    <div class="card col-5" onclick="window.open('/user/src/login.php','_blank')">
                        <img src="assets/images/user.png" class="img-fluid" alt="customer">
                        <p class="customerName">Customer</p>
                    </div>
                    <div class="card col-5" onclick="window.open('/vendor_dashboard/src/login.php','_blank')">
                        <img src="assets/images/vendor.png" class="img-fluid" alt="vendor">
                        <p class="customerName">Vendor</p>
                    </div>
                </div>
            </div>

        </div>



        <script>
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
                modal.style.display = "block";
            }
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>