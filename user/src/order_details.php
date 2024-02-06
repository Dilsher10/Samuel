<?php 
include 'header.php';

$id = $_GET['id'];

$sqlQuery = "SELECT * FROM `order_details` WHERE order_id = '$id'";
$query = mysqli_query($conn,$sqlQuery);
$data = mysqli_fetch_array($query);
$product_name = $data['product_name'];

$sql = "SELECT * FROM `orders` WHERE id = '$id'";
$equery = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($equery);

$ssql = "SELECT * FROM `products_detail` WHERE title = '$product_name'";
$eequery = mysqli_query($conn,$ssql);
$rows = mysqli_fetch_array($eequery);
?>

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                    <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                    <span class="text-small align-middle">Orders</span>
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Order Detail</h1>
                </div>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row gx-4 gy-5">
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
                          <div class="text-primary"><?= $data['order_id']; ?></div>
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
                          <div class="text-primary"><?= $row['order_status']; ?></div>
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
                          <div class="text-primary"><?= $data['date']; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card sh-13 sh-lg-15 sh-xl-14">
                      <div class="h-100 row g-0 card-body align-items-center py-3">
                        <div class="col-auto pe-3">
                          <div class="border border-primary sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center">
                            <i data-acorn-icon="pin" class="text-primary"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="d-flex align-items-center lh-1-25">Address</div>
                          <div class="text-primary"><?= $row['address']; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Status End -->

              <!-- Cart Start -->
              <h2 class="small-title">Cart</h2>
              <div class="card mb-5">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                        <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th style="width:20%;">Item</th>
								<th style="width:20%;">Cost</th>
								<th style="width:20%;">Qty</th>
							    <th style="width:20%;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="<?= '../../vendor_dashboard/src/front-store/uploads/' . $rows['image'] ?>" alt="thumb" style="width:50%;" /></td>
                                <td>$ <?= $data['product_price'] ?> </td>
                                <td><?= $data['qty'] ?> </td>
                                <td>$ <?= $data['total_price']; ?></td>
                            </tr>
                        </tbody>
                        </table>
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
                      <div class="w-100 d-flex sh-1 position-relative justify-content-center">
                        <div class="line-w-1 bg-separator h-100 position-absolute"></div>
                      </div>
                      <div class="rounded-xl shadow d-flex flex-shrink-0 justify-content-center align-items-center">
                        <div class="bg-gradient-light sw-1 sh-1 rounded-xl position-relative"></div>
                      </div>
                      <div class="w-100 d-flex h-100 justify-content-center position-relative"></div>
                    </div>
                    <div class="col">
                      <div class="h-100">
                        <div class="d-flex flex-column justify-content-start">
                          <div class="d-flex flex-column">
                            <a class="heading stretched-link pt-0"><?= $row['order_status']; ?></a>
                          </div>
                        </div>
                      </div>
                    </div>
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
                  <div class="mb-5">
                    <p class="text-small text-muted mb-2">CUSTOMER</p>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 me-1">
                          <i data-acorn-icon="user" class="text-primary" data-acorn-size="17"></i>
                        </div>
                      </div>
                      <div class="col text-alternate align-middle"><?= $row['first_name']; ?> <?= $row['last_name']; ?></div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 me-1">
                          <i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
                        </div>
                      </div>
                      <div class="col text-alternate"><?= $row['email']; ?></div>
                    </div>
                    <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 me-1">
                          <i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
                        </div>
                      </div>
                      <div class="col text-alternate"><?= $row['phone']; ?></div>
                    </div>
                     <div class="row g-0 mb-2">
                      <div class="col-auto">
                        <div class="sw-3 me-1">
                          <i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
                        </div>
                      </div>
                      <div class="col text-alternate"><?= $row['address']; ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Address End -->
          </div>
        </div>
      </main>

     
     <?php include 'footer.php' ?>