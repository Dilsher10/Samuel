<?php 
include'header.php';
?>

      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
         <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-10">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4 fw-bold" id="title">Welcome,<?= $_SESSION['username']?>!</h1>
              </div>
              <div class="col-12 col-md-2">
                <a href="logout.php" class="btn btn-primary btn-flat pull-right ">Sign out</a>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Stats</h2>
              </div>
              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="cart" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
                        <div class="text-primary cta-4"> 
                        <?php
                       $data = "SELECT * FROM `order_details` WHERE `token` = '".$_SESSION['token']."' ";
                       $query = $conn->query($data);
                       echo $query->num_rows;
                      ?>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="server" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">PRODUCTS</div>
                        <div class="text-primary cta-4">
                         <?php
                       $data = "SELECT * FROM `products_detail` WHERE `token` = '".$_SESSION['token']."' ";
                       $query = $conn->query($data);
                       echo $query->num_rows;
                      ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="user" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">CUSTOMERS</div>
                        <div class="text-primary cta-4">
                             <?php
                       $data = "SELECT DISTINCT `order_id` FROM `order_details` WHERE `token` = '".$_SESSION['token']."'";
                       $query = $conn->query($data);
                       echo $query->num_rows;
                      ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="arrow-top-left" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">SOLD OUT</div>
                        <div class="text-primary cta-4">
                            <?php
                       $data = "SELECT * FROM `order_details` WHERE `token` = '".$_SESSION['token']."' ";
                       $query = $conn->query($data);
                       echo $query->num_rows;
                      ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-acorn-icon="dollar" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">IN STOCK</div>
                        <div class="text-primary cta-4"> 
                        <?php
                       $data = "SELECT * FROM `products_detail` WHERE `token` = '".$_SESSION['token']."' ";
                       $query = $conn->query($data);
                       $row = $query->num_rows;
                       
                       $data_2 = "SELECT * FROM `order_details` WHERE `token` = '".$_SESSION['token']."' ";
                       $query_2 = $conn->query($data_2);
                       $row_2 =  $query_2->num_rows;
                       $res = $row-$row_2;
                       
                       echo $res;
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
                     $update = mysqli_query($conn,"SELECT * FROM `order_details` INNER JOIN  `orders` ON order_details.order_id = orders.id  WHERE `token` = '".$_SESSION['token']."' ");
                      while ($rows = mysqli_fetch_array($update)) {  ?>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Order #<?= $rows['id'] ?></div>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1"><?= $rows['order_status'] ?></span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            <?= $rows['total_price'] ?>
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate"><?= $rows['date'] ?></div>
                      </div>
                    </div>
                  </div>
                  <?php  }?>
                </div>
              </div>
            </div>
            <!-- Recent Orders End -->

            <!-- Performance Start -->
            <div class="col-xl-6 mb-5">
              <div class="d-flex">

                <h2 class="small-title">Performance</h2>
              </div>
              <?php
$sql = "SELECT MONTH(date) AS month, SUM(total_price) AS total_sales FROM order_details WHERE `token` = '".$_SESSION['token']."' GROUP BY MONTH(date)";
$result = mysqli_query($conn, $sql);
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$data = array();
foreach ($rows as $row) {
    $data[$row['month']] = $row['total_sales'];
}
?>
              <div class="card sh-45 h-xl-100-card">
                <div class="card-body h-100">
                  <div class="h-100">
                   <canvas id="salesChart"></canvas>
	<script>
		var ctx = document.getElementById('salesChart').getContext('2d');
		var chart = new Chart(ctx, {
			type: 'bar',
			data: {
			
				datasets: [{
					label: 'Monthly Sales',
					data: <?php echo json_encode($data); ?>,
					backgroundColor: 'rgb(144, 238, 144)',
					borderColor: 'rgba(54, 162, 235, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
                  </div>
                </div>
              </div>
            </div>
            <!-- Performance End -->
          </div>
        </div>
      </main>
    </div>

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

    <!-- Template Base Scripts Start -->
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
