
<?php include 'header.php';
 $id = $_GET['id'];
$update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");


?>
      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <a href="Order_Edit.php<?php echo '?id=' .$id; ?>" class="muted-link pb-1 d-inline-block breadcrumb-back">
                    <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                    <span class="text-small align-middle">Orders</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Order Detail</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
                <!-- Status Button Start -->
                <div class="dropdown-as-select w-100 w-md-auto">
                  <button onclick="window.print();" id="print-btn" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                    <i data-acorn-icon="print"></i>
                    <span>Print</span>
                  </button>
            </div>
          </div>
          <!-- Title and Top Buttons End -->
   
        <div class="row gx-4 gy-5">
          <?php
            while ($rows = mysqli_fetch_array($update)) {
          ?>
              <div class="col-12 col-xl-8 col-xxl-9 mb-n5">
                <!-- Status Start -->
                <h2 class="small-title">Status</h2>
                <div class="mb-5">
                  <div class="row g-2">
                    <div class="col-12 col-sm-6 col-lg-6">
                      <div class="card sh-13 sh-lg-15 sh-xl-14">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                          <div class="col-auto pe-3">
                            <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                              <i data-acorn-icon="tag" class="text-primary"></i>
                            </div>
                          </div>
                          <div class="col">
                            <div class="d-flex align-items-center lh-1-25">Order Id</div>
                            <div class="text-primary"><?php echo $rows['order_id']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                      <div class="card sh-13 sh-lg-15 sh-xl-14">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                          <div class="col-auto pe-3">
                            <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                              <i data-acorn-icon="clipboard" class="text-primary"></i>
                            </div>
                          </div>
                          <div class="col">
                            <div class="d-flex align-items-center lh-1-25">Order Status</div>
                            <div class="text-primary"><?php echo $rows['order_status']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                      <div class="card sh-13 sh-lg-15 sh-xl-14">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                          <div class="col-auto pe-3">
                            <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                              <i data-acorn-icon="calendar" class="text-primary"></i>
                            </div>
                          </div>
                          <div class="col">
                            <div class="d-flex align-items-center lh-1-25">Order Date</div>
                            <div class="text-primary"><?php echo $rows['created_at']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                      <div class="card sh-13 sh-lg-15 sh-xl-14">
                        <div class="h-100 row g-0 card-body align-items-center py-3">
                          <div class="col-auto pe-3">
                            <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                              <i data-acorn-icon="calendar" class="text-primary"></i>
                            </div>
                          </div>
                          <div class="col">
                            <div class="d-flex align-items-center lh-1-25">Delivery Date</div>
                            <div class="text-primary"><?php echo $rows['updated_at']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Status End -->
            <?php }
           ?>

            <!-- Cart Start -->
            <h2 class="small-title">Cart</h2>
            <div class="card mb-5">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $update = mysqli_query($conn, "SELECT Distinct * FROM `order_details` INNER JOIN `orders` ON order_details.order_id = orders.id where order_id =$id ");
                      while ($rows = mysqli_fetch_array($update)) {
                          $p_id = $rows['product_id'];
                  $sql = mysqli_query($conn, "SELECT * FROM `products_detail` where id = $p_id");
                  $rows_2 = mysqli_fetch_array($sql);
                    ?>
                        <div class="mb-5">
                          <div class="row g-0 sh-9 mb-3">
                                <div class="col-auto">
                            <img src="<?= 'front-store/uploads/' . $rows_2['image'] ?>" class="card-img rounded-md h-100 sw-13" alt="thumb" />
                          </div>
                            <div class="col">
                              <div class="ps-4 pt-0 pb-0 pe-0 h-100">
                                <div class="row g-0 h-100 align-items-start align-content-center">
                                  <div class="col-12 d-flex flex-column mb-2">
                                    <div><?= $rows_2['title'] ?></div>
                                  </div>
                                  <div class="col-12 d-flex flex-column mb-md-0 pt-1">
                                    <div class="row g-0">
                                      <div class="col-6 d-flex flex-row pe-2 align-items-end text-alternate">
                                        <span>qty:<?= $rows['qty'] ?></span>
                                      </div>
                                      <div class="col-6 d-flex flex-row align-items-end justify-content-end text-alternate">
                                        <span>
                                          <span class="text-small">$</span>
                                          <?= $rows['product_price']; ?>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    <?php }
                    } ?>
                    <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      // $product_name = $_GET['order_id'];
                      $update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");
                      while ($rows = mysqli_fetch_array($update)) {
                    ?>
                        <div>
                          <div class="row g-0 mb-2">
                            <div class="col-auto ms-auto ps-3 text-muted">Total</div>
                            <div class="col-auto sw-13 text-end">
                              <strong> <span>
                                  $
                                  <?= $rows['total_price']; ?>
                                </span> </strong>
                            </div>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Cart End -->

            <!-- Activity Start -->
            <h2 class="small-title">Activity</h2>
                <div class="card mb-5">
                  <div class="card-body">
                    <div class="row g-0">
                      <div class="col-auto sw-1 d-flex flex-column justify-content-center align-items-center position-relative me-4">
                        <div class="w-100 d-flex sh-1"></div>
                        <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                          <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                        </div>
                        <div class="w-100 d-flex h-100 justify-content-center position-relative">
                          <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                        </div>
                      </div>
                       <?php
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");
              while ($rows = mysqli_fetch_array($update)) {
                  $p_id = $rows['product_id'];
                  $sql = mysqli_query($conn, "SELECT * FROM `products_detail` where id = $p_id");
                  $rows_2 = mysqli_fetch_array($sql);
            ?>
                      <div class="col mb-4">
                        <div class="h-100">
                          <div class="d-flex flex-column justify-content-start">
                            <div class="d-flex flex-column">
                              <a href="#" class="heading stretched-link"><?= $rows['order_status']; ?></a>
                              <div class="text-alternate"><?= $rows['updated_at'] ?></div>
                              <div class="text-muted mt-1"><?= $rows_2['title'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php }
            } ?>
                    </div>
                  </div>
                </div>
            
            <!-- Activity End -->
              </div>
              <!-- Address Start -->
              <div class="col-12 col-xl-4 col-xxl-3">
                <h2 class="small-title">Address</h2>
                <div class="card mb-5">
                  <div class="card-body mb-n5">
                    <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $update = mysqli_query($conn, " SELECT * FROM `orders` where id =$id ");
                      while ($rows = mysqli_fetch_array($update)) {
                    ?>
                        <div class="mb-5">
                          <p class="text-small text-muted mb-2">CUSTOMER</p>
                          <div class="row g-0 mb-2">
                            <div class="col-auto">
                              <div class="sw-3 me-1">
                                <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                              </div>
                            </div>
                            <div class="col text-alternate align-middle"><?= $rows['first_name'] . ' ' . $rows['last_name'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-auto">
                              <div class="sw-3 me-1">
                                <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                              </div>
                            </div>
                            <div class="col text-alternate"><?= $rows['email'] ?></div>
                          </div>
                        </div>
                        <div class="mb-5">
                          <p class="text-small text-muted mb-2">SHIPPING ADDRESS</p>
                          <div class="row g-0 mb-2">
                            <div class="col-auto">
                              <div class="sw-3 me-1">
                                <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                              </div>
                            </div>
                            <div class="col text-alternate align-middle"><?= $rows['address'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-auto">
                              <div class="sw-3 me-1">
                                <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                              </div>
                            </div>
                            <div class="col text-alternate"><?= $rows['zipcode'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-auto">
                              <div class="sw-3 me-1">
                                <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                              </div>
                            </div>
                            <div class="col text-alternate"><?= $rows['phone'] ?></div>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
              <!-- Address End -->
          </div>
        </div>
      </main>

      <?php include 'footer.php' ?>
