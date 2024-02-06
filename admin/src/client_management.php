<?php include 'header.php' ?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                               <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
                                <h1 class="mb-0 pb-0 display-4" id="title">Vendors List</h1>
                            </div>
                        </div>
                        <div class="w-100 d-md-none"></div>
                        <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1"></div>
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                                <div class="row mx-2"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box-body">
                    <?php
                    $query = "SELECT * FROM `user_registration`";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
                                      <th>Vendor Name</th>
                                      <th>Vendor Email</th>
									  <th>Phone Number</th>
									  <th>Account Title</th>
									  <th>Account Number</th>
									  <th>Bank Name</th>
									  <th>Branch Code</th>
									  <th>IBAN</th>
									  <th>Order Number</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { 
                        
                        $token = $row['token'];
                        
                        $sqlQuery = "SELECT * FROM `bank_account_detail` WHERE token = '$token'";
                        $squery = mysqli_query($conn,$sqlQuery);
                        $data = mysqli_fetch_array($squery);
                        
                        $sql = "SELECT * FROM `order_details` WHERE token = '$token'";
                        $rquery = mysqli_query($conn,$sql);
                        $rows = mysqli_fetch_array($rquery);
                        
                        ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['username'] ?> </td>
                                <td><?= $row['email_address'] ?></td>
                                <td><?= $row['phone_number'] ?></td>
                                <td><?= $data['account_title'] ?></td>
                                <td><?= $data['account_number'] ?></td>
                                <td><?= $data['bank_name'] ?></td>
                                <td><?= $data['branch_code'] ?></td>
                                <td><?= $data['IBAN'] ?></td>
                                <td><?= $rows['order_id'] ?></td>
                                <td>
                                <a href="view_client.php<?php echo'?token='.$row['token'];?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat"><i class="fa fa-edit"></i>View</button>
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