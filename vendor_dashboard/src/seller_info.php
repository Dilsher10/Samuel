<?php include 'header.php'; ?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <!-- Title Start -->
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div>
                            <h1 class="mb-0 pb-0 display-4" id="title">Bussiness Information</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                        
                        <!-- Top Buttons Start -->
                        <div class="w-100 d-md-none"></div>
                        <!-- Top Buttons End -->
                    </div>
                </div>

                <div class="box-body">
                    <?php
                    $query = "SELECT * FROM `b_info` where token = '" .  $_SESSION['token'] . "'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Incharge Name</th>
                                      <th>Area</th>
                                      <th>State</th>
                                      <th>Country</th>
                                      <th>Address</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $row['incharge_name'] ?> </td>
                                <td><?= $row['area'] ?> </td>
                                <td><?= $row['state'] ?> </td>
                                <td><?= $row['country'] ?> </td>
                                <td><?= $row['address'] ?> </td>
                                <td>
                                <a href="./edit_b_info.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat"><i class="fa fa-edit"></i> Edit</button>
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