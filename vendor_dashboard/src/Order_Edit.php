<?php include 'header.php';
$id = $_GET['id'];
$update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");
$get = mysqli_fetch_array($update);

$get_order = mysqli_query($conn, "SELECT * FROM `orders` where `id` =$id ");
$get_order_2 = mysqli_fetch_array($get_order);
$email = $get_order_2['email'];
$firstName = $get_order_2['first_name'];
$lastName = $get_order_2['last_name'];
if (isset($_POST['submit'])) {
  $status = $_POST['status'];
  $updated_at = date('Y-m-d H:i:s');
  $sql = mysqli_query($conn, "UPDATE `orders` SET `order_status` ='$status', `updated_at`=' $updated_at' where id =$id ");
// SEND MAIL TO USERS

    $to = $email;
    $subject = "Details";

    $message = "
    <html> 
    <head> 
        <title>Welcome</title> 
    </head> 
    <body>
    <table style='border:2px solid #DAA520; width:100%;'>
  <thead style='background-color:#DAA520; color:white;'>
    <tr>
      <th style='padding:20px 0; font-size:20px;'>Your Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><p style='margin-top:20px; padding:0 5px; letter-spacing:0.3px; line-height:20px; font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:500;font-style:normal'>Hi, <b>$firstName&nbsp;$lastName</b></p></td>
    </tr>
     <tr>
      <td><div class='row'>
    <div class='col-md-12 mt-5 mb-5' style='text-align:center;margin: 5rem 0rem 10rem;'>
    <strong><h1>Thank you!</h1></strong>
    <strong><p>
            Your order has been $status.
        </p></strong>
    </div>
</div>
      </td>
    </tr>
  </tbody>
</table>
    </body> 
    </html>

";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"
    ;
     mail($to, $subject, $message, $headers);
}

?>
      <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <h1 class="mb-0 pb-0 display-4" id="title">Order Detail</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="col-4 col-md-5 d-flex alignment-start align-items-end justify-content-end ">
                <!-- Status Button Start -->
                <div class="dropdown-as-select flex-class-custom">
                    <button form="tform" name="submit" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100" style="margin-right:15px;">
                    <i data-acorn-icon="send"></i>
                    <span>Save</span>
                  </button>
            <form method="POST" action="invoice_print.php<?php echo '?id=' . $get['id']; ?>" style="display:inline-block;">
            <input type="hidden" value
              <div class="d-inline-block">
                <!-- Print Button Start -->
                <button
                  class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-delay="0"
                  title="Print"
                  name="print_btn">
                  <i data-acorn-icon="print"></i>
                </button>
                   </form>
            </div>
          </div>
          <!-- Title and Top Buttons End -->
          
      <div class="row mb-2">
                    <!-- Search Start -->
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1"></div>
                    <!-- Search End -->
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <!-- Print Button Start -->
                            </div>
                            <!-- Print Button End -->
</div> 
                 <div class="row gx-4 gy-5">
          <?php
       if (isset($_GET['id'])) {
                      $id = $_GET['id'];
           $update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");
            while ($rows = mysqli_fetch_array($update)) {
          ?>
              <div class="col-12 col-xl-7 col-xxl-9 mb-n5">
                <!-- Status Start -->
                <h2 class="small-title">Order Info</h2>
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
                            <div class="d-flex align-items-center lh-1-25">Date Delivered</div>
                            <div class="text-primary"><?php echo $rows['updated_at']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Status End -->
            <?php } }
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
                          $product_name = $rows['product_name'];
                  $sql = mysqli_query($conn, "SELECT * FROM `products_detail` where title = '$product_name'");
                  $rows_2 = mysqli_fetch_array($sql);
                    ?>
                    
                    <table class='table table-bordered mb-5'>
                        <thead>
                            <tr>
                                <th>Item</th>
								<th>Cost</th>
								<th>Qty</th>
							    <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="<?= 'front-store/uploads/' . $rows_2['image'] ?>" class="card-img rounded-md h-100 sw-13" alt="thumb" /></td>
                                <td>$ <?= $rows['product_price'] ?> </td>
                                <td><?= $rows['qty'] ?> </td>
                                <td>$
                                <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $update = mysqli_query($conn, "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `order_id` = '$id' ");
                      while ($rows = mysqli_fetch_array($update)) {
                    ?>
                       <?= $rows['total_price']; ?>
                    <?php }
                    } ?>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                       
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
              <div class="col-12 col-xl-5 col-xxl-3">
                <h2 class="small-title">Billing Details</h2>
                <div class="card mb-5">
                  <div class="card-body mb-n5">
                    <?php
                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $update = mysqli_query($conn, " SELECT * FROM `orders` where id =$id ");
                      while ($rows = mysqli_fetch_array($update)) {
                    ?>
                        <div class="mb-5">
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                First Name:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['first_name'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Last Name:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['last_name'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Country / Region:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['country'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Street / Address:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['address'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                State:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['state'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Zip:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['zipcode'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Email Address:
                              </div>
                            </div>
                            <div class="col-7 text-alternate text-muted mb-2"><?= $rows['email'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Phone:
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['phone'] ?></div>
                          </div>
                          <div class="row g-0 mb-2">
                            <div class="col-5">
                              <div class="text-muted mb-2">
                                Order Notes (Optional):
                              </div>
                            </div>
                            <div class="col-7 text-alternate align-middle text-muted mb-2"><?= $rows['order_note'] ?></div>
                          </div>
                        </div>
                    <?php }
                    } ?>
                  </div>
                </div>
</div>
              </div>
              <!-- Address End -->
          </div>
        </div>
      </main>

      <?php include 'footer.php' ?>