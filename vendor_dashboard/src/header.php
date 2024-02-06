<?php
session_start();
if(!$_SESSION['adminemail']){
header('location: login.php'); 
}
include 'conn.php';?>
<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Samuel | <?php echo basename($_SERVER['SCRIPT_FILENAME'], '.php');  ?></title>
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

    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/tagify.css" />
   <link rel="stylesheet" href="css/vendor/dropzone.min.css" />

    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="profile" alt="profile" src="img/profile/user.png" />
                        <div class="name"> <?= $_SESSION['username']?> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide" style="background-image: linear-gradient(160deg, var(--gradient-1), var(--gradient-1), var(--gradient-2), var(--gradient-3));">
                        <div class="row mb-1 ms-0 me-0" >
                            <div class="col-6 pe-1 ps-1" >
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="logout.php">
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
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="view_profile.php">View Profile</a>
                    </li>
                </ul>
                <!-- Menu Start -->
                
                <div class="menu-container flex-grow-1">
                     <ul id="menu" class="menu">
              <li>
                <a href="Dashboard.php">
                  <i data-acorn-icon="shop" class="icon" data-acorn-size="18"></i>
                  <span class="label">Dashboard</span>
                </a>
              </li>
              <li>
              <a href="#Profile" data-href="Profile.php">
                <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                <span class="label">Profile</span>
              </a>
              <ul id="Profile">
                <li>
                  <a href="Profile.php">
                    <span class="label">Seller Account</span>
                  </a>
                </li>
                <li>
                  <a href="b_info.php">
                    <span class="label">Bussiness Information</span>
                  </a>
                </li>
                <li>
                  <a href="bank_account.php">
                    <span class="label">Bank Account</span>
                  </a>
                </li>
                <li>
                  <a href="warehouse_address.php">
                    <span class="label">Warehouse Address</span>
                  </a>
                </li>
                <li>
                  <a href="return_address.php">
                    <span class="label">Return Address</span>
                  </a>
                </li>
              </ul>
            </li>
                <li>
                <a href="attributes.php">
                 <i data-acorn-icon="cart" class="icon" data-acorn-size="18"></i>
                  <span class="label">Attributes</span>
                </a>
              </li>
                <li>
                <a href="Products_List.php">
                  <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                  <span class="label">Products</span>
                </a>
              </li>
              <li>
                <a href="Orders.List.php">
                <i data-acorn-icon="screen" class="icon" data-acorn-size="18"></i>
                  <span class="label">Orders</span>
                </a>
              </li>
              <li>
                <a href="invoices_list.php">
                <i data-acorn-icon="print" class="icon" data-acorn-size="18"></i>
               <span class="label">Invoice</span>
               </a>
              </li>
                <li>
                <a href="earnings.php">
                <i data-acorn-icon="dollar" class="icon" data-acorn-size="18"></i>
               <span class="label">Earnings</span>
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