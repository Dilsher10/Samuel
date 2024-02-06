<?php include 'header.php'; ?>
        <main>
            <div class="container">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row g-0">
                        <!-- Title Start -->
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                                <input type="button" class="muted-link pb-1 d-inline-block breadcrumb-back backBtn" value="Back" onClick="history.go(-1);">
                                <h1 class="mb-0 pb-0 display-4" id="title">Order List</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    $query = "select * FROM (SELECT DISTINCT order_id,token FROM `order_details`) AS order_details INNER JOIN (SELECT * FROM `orders`) AS orders ON order_details.order_id = orders.id WHERE `token` = '".$_SESSION['token']."' GROUP BY order_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Name</th>
									  <th>Email</th>
									  <th>Phone</th>
									  <th>Total</th>
									  <th>Status</th>
									  <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['first_name'] .' '. $row['last_name'] ?> </td>
                                <td><?= $row['email']?> </td>
                                <td><?= $row['phone']?> </td>
                                <td>$<?= $row['total_price'] ?></td>
                                <td><?= $row['order_status'] ?></td>
                                <td>
                                <a href="./Order_Edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $users['id']; ?>"><i class="fa fa-eye"></i> View</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    <?php } else {
                        echo "No record available";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </main>

        <?php include 'footer.php' ?>