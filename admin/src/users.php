<?php include 'header.php' ?>

        <main>
            <div class="container">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row g-0">
                        <!-- Title Start -->
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                               <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
                                <h1 class="mb-0 pb-0 display-4" id="title">Vendors List</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                        <!-- Top Buttons Start -->
                        <div class="w-100 d-md-none"></div>
                        <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Controls Start -->
                <div class="row mb-2">
                    <!-- Search Start -->
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1"></div>
                    <!-- Search End -->
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <!-- Length Start -->
                            <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                                <div class="row mx-2"></div>
                            </div>
                            <!-- Length End -->
                        </div>
                    </div>
                </div>
                <!-- Controls End -->




                <div class="box-body">
                    <?php
                    $query = "SELECT * FROM `user_registration`";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
                                      <th>Name</th>
                                      <th>Email</th>
									  <th>Phone</th>
									  <th>Status</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['username'] ?> </td>
                                <td><?= $row['email_address'] ?></td>
                                <td><?= $row['phone_number'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>
                                <a href="./view_users.php<?php echo'?token='.$row['token'];?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat"><i class="fa fa-edit"></i>View</button>
                                </a>
                                    <a href="users_delete.php<?php echo '?id='.$row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')">
                                        <button class="btn btn-danger btn-sm delete btn-flat"><i class="fa fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    <?php } else {
                        echo "ERROR: Could not able to execute record. " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>

        </main>

        <?php include 'footer.php' ?>