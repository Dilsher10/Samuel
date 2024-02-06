<?php
session_start();
if(!$_SESSION['admin']){
header('location: login.php'); 
}
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title> Samuel | <?php echo basename($_SERVER['SCRIPT_FILENAME'], '.php');  ?></title>
    <meta name="description" content="Ecommerce Products List" />
    <!-- Favicon Tags Start -->
    <link rel="icon"  href="img/favicon/favicon.png" sizes="196x196" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href=" https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css" />

    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />
    
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />

  <link rel="stylesheet" href="css/vendor/select2.min.css" />

  <link rel="stylesheet" href="css/vendor/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/vendor/tagify.css" />

  <link rel="stylesheet" href="css/vendor/dropzone.min.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="https://cdn.tiny.cloud/1/4fz8lwgoem6imxy56cdd8weoxqb92ooa5bpukpjenudepjx5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">
                <!-- Logo Start -->
                <div class="logo position-relative">
                    <a href="Dashboard.php">
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="profile" alt="profile" src="img/profile/user.png" />
                        <a href="/admin/src/Dashboard.php"><div class="name">Admin</div></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide" style="background-image: linear-gradient(160deg, var(--gradient-1), var(--gradient-1), var(--gradient-2), var(--gradient-3));">
                        <div class="row mb-1 ms-0 me-0" >
                            <div class="col-6 pe-1 ps-1" >
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="admin_logout.php">
                                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17" style="color:white"></i>
                                            <span class="align-middle" style="color:white">SignOut</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->


                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                     <ul id="menu" class="menu">
              <li>
                <a href="Dashboard.php">
                  <i data-acorn-icon="dashboard-1" class="icon" data-acorn-size="18"></i>
                  <span class="label">Dashboard</span>
                </a>
              </li>
               <li>
                <a href="categories.php">
                   <i data-acorn-icon="cart" class="icon" data-acorn-size="18"></i>
                  <span class="label">Categories</span>
                </a>
              </li>
              <li>
                <a href="Products-List.php">
                   <i data-acorn-icon="diagram-3" class="icon" data-acorn-size="18"></i>
                  <span class="label">All Products</span>
                </a>
              </li>
              <li>
                <a href="#pages" data-href="Products.html">
                  <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                  <span class="label">Pages</span>
                </a>
                <ul id="pages">
                  <li>
                    <a href="header_edit.php">
                      <span class="label">Header</span>
                    </a>
                  </li>
                  <li>
                    <a href="main_page.php">
                      <span class="label">Main Page</span>
                    </a>
                  </li>
                  <li>
                    <a href="about_us.php">
                      <span class="label">About Us</span>
                    </a>
                  </li>
                   <li>
                    <a href="contact_us.php">
                      <span class="label">Contact Us</span>
                    </a>
                  </li>
                   <li>
                    <a href="shop_banner.php">
                      <span class="label">Shop</span>
                    </a>
                  </li>
                   <li>
                    <a href="section_12_edit.php">
                      <span class="label">Footer</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
              <a href="users.php">
               <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                <span class="label">Vendors</span>
              </a>
              </li>
              <li>
              <a href="policy_edit.php">
               <i data-acorn-icon="bookmark" class="icon" data-acorn-size="18"></i>
                <span class="label">Privacy And Policy</span>
              </a>
              </li>
                <li>
              <a href="info_edit.php">
               <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                <span class="label">Terms And Condition</span>
              </a>
              </li>
              <li>
              <a href="payment_method.php">
               <i data-acorn-icon="safe" class="icon" data-acorn-size="18"></i>
                <span class="label">Payment Method</span>
              </a>
              </li>
              <li>
              <a href="money_back.php">
               <i data-acorn-icon="money" class="icon" data-acorn-size="18"></i>
                <span class="label">Money Back</span>
              </a>
              </li>
               <li>
              <a href="product_return.php">
               <i data-acorn-icon="sign" class="icon" data-acorn-size="18"></i>
                <span class="label">Product Return</span>
              </a>
              </li>
               <li>
              <a href="support_center.php">
               <i data-acorn-icon="support" class="icon" data-acorn-size="18"></i>
                <span class="label">Support Center</span>
              </a>
              </li>
               <li>
              <a href="shipping.php">
               <i data-acorn-icon="shipping" class="icon" data-acorn-size="18"></i>
                <span class="label">Shipping</span>
              </a>
              </li>
              <li>
                <a href="#products" data-href="Products.html">
                  <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                  <span class="label">Policy Pages</span>
                </a>
                <ul id="products">
                  <li>
                    <a href="cookies.php">
                      <span class="label">Cookies</span>
                    </a>
                  </li>
                  <li>
                    <a href="terms-and-conditions-for-vendor.php">
                      <span class="label">Terms and Conditions for vendors</span>
                    </a>
                  </li>
                   <li>
                    <a href="cyber-security-policy.php">
                      <span class="label">Cyber Security Policy</span>
                    </a>
                  </li>
                  <li>
                    <a href="exchange-policy.php">
                      <span class="label">Exchange Policy</span>
                    </a>
                  </li>
                  <li>
                    <a href="register-user.php">
                      <span class="label">How to register as a user</span>
                    </a>
                  </li>
                  <li>
                    <a href="register-vendor.php">
                      <span class="label">How to register as a vendor</span>
                    </a>
                  </li>
                  <li>
                    <a href="terms-and-conditions-for-buyer.php">
                      <span class="label">Terms and Conditions for buyers</span>
                    </a>
                  </li>
                  <li>
                    <a href="vendor-uploading-process.php">
                      <span class="label">Vendor Uploading Process</span>
                    </a>
                  </li>
                  <li>
                    <a href="vendor-selling-process.php">
                      <span class="label">Vendor Selling Process</span>
                    </a>
                  </li>
                  <li>
                    <a href="vendor-withdrawal-process.php">
                      <span class="label">Vendor Withdrawal Process</span>
                    </a>
                  </li>
                </ul>
              </li>
               <li>
                <a href="client_management.php">
                   <i data-acorn-icon="diagram-3" class="icon" data-acorn-size="18"></i>
                  <span class="label">Client Management</span>
                </a>
              </li>
            </ul>
                </div>
                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">
                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->
                </div>
                <!-- Mobile Buttons End -->
            </div>
            <div class="nav-shadow"></div>
        </div>
        