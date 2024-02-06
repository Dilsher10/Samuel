<?php include('header.php') ; ?>


      <main>
        <div class="container">
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-10">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4 fw-bold" id="title">Welcome,Admin!</h1>
              </div>
              <div class="col-12 col-md-2">
                    <a href="admin_logout.php" class="btn btn-primary btn-flat pull-right ">Sign out</a>
              </div>
              <!-- Title End -->
            </div>
          </div>

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="dollar" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL EARNINGS</div>
                        <div class="text-primary cta-4">$
                            <?php
                            $data = "SELECT SUM(total_price) AS total_price FROM orders";
                            $query = $conn->query($data);

                            if ($query) {
                               $row = $query->fetch_assoc();
                               $totalPrice = $row['total_price'];
                               echo $totalPrice;
                              } 
                            ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="cart" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL ORDERS</div>
                        <div class="text-primary cta-4">
                            <?php
                              $data = "SELECT DISTINCT `id` FROM `orders`";
                              $query = $conn->query($data);
                              echo $query->num_rows;
                            ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="user" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL VENDORS</div>
                        <div class="text-primary cta-4">
                            <?php
                              $data = "SELECT DISTINCT `id` FROM `user_registration`";
                              $query = $conn->query($data);
                              echo $query->num_rows;
                            ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Stats End -->

          <div class="row">
            <!-- Recent Orders Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Recent Orders</h2>
              <div class="mb-n2 scroll-out">
                <div class="scroll-by-count" data-count="6">
                    
                    <?php
                      $sqlQuery = "SELECT * FROM `order_details` ORDER BY date DESC Limit 5";
                      $query = mysqli_query($conn,$sqlQuery);
                      while($data = mysqli_fetch_array($query)){
                          $id = $data['order_id'];
                          $sql = "SELECT * FROM `orders` WHERE id = $id";
                          $squery = mysqli_query($conn,$sql);
                          $orderData = mysqli_fetch_array($squery);
                          ?>
                          <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.php" class="body-link stretched-link">Order #<?php echo $data['order_id'] ?></a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1"><?php echo $orderData['order_status'] ?></span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            <?php echo $data['total_price'] ?>
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate"><?php echo $data['date'] ?></div>
                      </div>
                    </div>
                  </div>
                          <?php
                      }
                    ?>
                </div>
              </div>
            </div>
            <!-- Recent Orders End -->

            <!-- Performance Start -->
            <div class="col-xl-6 mb-5">
              <div class="d-flex">
                <h2 class="small-title">Performance</h2>
              </div>
              <div class="card sh-45 h-xl-100-card">
                <div class="card-body h-100">
                  <div class="h-100">
                    <canvas id="horizontalTooltipChart"></canvas>
                    <div
                      class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                    >
                      <div
                        class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                      >
                        <span class="icon"></span>
                      </div>
                      <div>
                        <span class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                        <span class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Performance End -->
          </div>

          <div class="row gx-4 gy-5">
            <!-- Top Selling Items Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Top Selling Items</h2>
              <div class="scroll-out mb-n2">
                <div class="scroll-by-count" data-count="4">
                     <?php
            $sqlQuery = "SELECT product_name, COUNT(*) AS count FROM order_details GROUP BY product_name ORDER BY count DESC LIMIT 5";
            $query = mysqli_query($conn,$sqlQuery);
            while($data = mysqli_fetch_array($query)){
                $product_name = $data['product_name'];
                $sql = "SELECT * FROM products_detail WHERE title = '$product_name'";
                $squery = mysqli_query($conn,$sql);
                $imgData = mysqli_fetch_array($squery);
                ?>
                <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                          <img src="../../vendor_dashboard/src/front-store/uploads/<?php echo $imgData['image'] ?>" alt="alternate text" class="card-img sw-11" />
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-9 d-flex align-items-center mb-2 mb-md-0">
                              <a href=""><?php echo $data['product_name'] ?></a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium"><?php echo $data['count'] ?> Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
            }
            ?>
                </div>
              </div>
            </div>
            <!-- Top Selling Items End -->

            <!-- Top Search Terms Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Top Search Terms</h2>
              <div class="card sh-35 h-xl-100-card">
                <div class="card-body scroll-out h-100">
                  <div class="scroll h-100">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">847</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>White bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">753</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Sourdough bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">721</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Melonpan bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">693</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Gluten free bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">431</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>sliced whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">381</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Packaged Zopf bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">310</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Barm cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">301</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Pita bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">288</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Taftan cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">219</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Search Terms End -->
          </div>

          <div class="row">
            <div class="col-12 col-xxl">
              <div class="row">
                <!-- Activity Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Activity</h2>
                  <div class="card sh-35">
                    <div class="card-body scroll-out h-100">
                      <div class="scroll h-100">
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  Product out of stock:
                                  <a href="#" class="alternate-link underline-link">Breadstick</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-acorn-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Activity End -->

                <!-- Recent Reviews Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Recent Reviews</h2>
                  <div class="card sh-35">
                    <div class="card-body mb-n2 scroll-out h-100">
                      <div class="scroll h-100">
                          
                          <?php
                          $sqlQuery = "SELECT * FROM `review_table`";
                          $query = mysqli_query($conn,$sqlQuery);
                          while($data = mysqli_fetch_array($query)){
                              ?>
                              <div class="row g-0 sh-8 mb-5">
                          <div class="col-auto">
                            <div class="rounded-circle my-3" style="background-color: #799b5a; width:83px; border-radius:50%;" >
                                                        <h3 class="text-center" style="color:#fff; font-size: 3rem; padding: 12px; margin-top: 18px; font-weight:bold;">
                                                            <?php
                                                            $name = $data['user_name'];
                                                            $firstCharacter = substr($name, 0, 1);
                                                            echo $firstCharacter;
                                                            ?>
                                                            
                                                        </h3></div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="" class="body-link"><?php echo $data['user_name'] ?></a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">
                                  <?php echo $data['user_review'] ?>
                                </div>
                                <div class="br-wrapper br-theme-cs-icon">
                                    
                                    <?php
                                                                
                                                                	if($data["user_rating"] == '5')
		{
			?>
			<select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
			<?php
		}

		if($data["user_rating"] == '4')
		{
				?>
	<select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
			<?php
		}

		if($data["user_rating"] == '3')
		{
				?>
			<select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
			<?php
		}

		if($data["user_rating"] == '2')
		{
				?>
		<select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
			<?php
		}

		if($data["user_rating"] == '1')
		{
				?>
			<select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
			<?php
		}

                                                                
                                                                ?>
                                    
                                    
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                              <?php
                              if($data['status'] == '1'){
                                  ?>
                                  <a class="btn btn-primary mt-5" disabled>Verified</a>
                                  <?php
                              }
                              else{
                                  ?>
                                  <a class="btn btn-primary mt-5" href="verify_review.php?review_id=<?php echo $data['review_id'] ?>">Verify Review</a>
                                  <?php
                              }
                              ?>
                          </div>
                        </div>
                              <?php
                          }
                          ?>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Recent Reviews End -->
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>


    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="icon/acorn-icons.js"></script>
    <script src="icon/acorn-icons-interface.js"></script>
    <script src="icon/acorn-icons-commerce.js"></script>

    <script src="js/vendor/Chart.bundle.min.js"></script>

    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>

    <script src="js/vendor/jquery.barrating.min.js"></script>

    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->

    <script src="js/charts.extend.js"></script>

    <script src="js/dashboard.js"></script>

    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>
