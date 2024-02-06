<?php include 'header.php';
?>
<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>" style="text-align: center;"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <!-- Title Start -->
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                               <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
                                <h1 class="mb-0 pb-0 display-4" id="title">Products List</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                    </div>
                </div>

                <!-- Controls Start -->
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1"></div>
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <!-- Length Start -->
                            <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                                <div class="row mx-2">
                                    <!-- CSV file upload form -->
                                    <div class="col-md-12" id="importFrm" style="display: none;">
                                        <form action="importData.php" method="post" enctype="multipart/form-data" id="Form">
                                            <input type="file" name="file" />
                                            <input type="submit" id="btn" class="btn btn-primary" name="importSubmit" value="IMPORT">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Length End -->
                        </div>
                    </div>
                </div>
                <!-- Controls End -->

                <div class="box-body">
                    <?php
                    
                    $query = "SELECT * FROM products_detail  where status = 'Approved' order by id desc ";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Image</th>
									  <th style ='width:66.359px !important;'>Product</th>
                                      <th>Category</th>
                                      <th>Vendor</th>
                                      <th>Stock</th>
                                      <th>Price</th>
                                      <th>Modified Date</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { 
                        $token = $row['token'];
                        $sqlQuery = "SELECT * FROM `user_registration` WHERE token = '$token'";
                        $squery = mysqli_query($conn, $sqlQuery);
                        $data = mysqli_fetch_array($squery);
                    
                        ?>
                             <?php 
                                if($row['deals_status']=="") { 
                                ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><img src="<?= '../../vendor_dashboard/src/front-store/uploads/' . $row['image'] ?>" alt="productpp" class="card-img card-img-horizontal sw-11 h-100" /></td>
                                <td><?= implode(' ', array_slice(explode(' ', $row['title']), 0, 2))."\n"; ?></td>
                                <td><?= $row['category'] ?> </td>
                                <td><?= $data['username'] ?> </td>
                                <td><?= $row['in_stock'] ?> </td>
                                <td>$<?= $row['regular_price'] ?> </td>
                                <td><?= $row['created_at'] ?> </td>
                                <td>
                                    <a href="Product-Edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" ><i class="fa fa-edit"></i>Add To Hot Deals </button></a>
                                </td>
                            </tr>
                            <?php } elseif($row['deals_status']=="YES") { ?>
                                <tr>
                                <td><?= $count++ ?></td>
                                <td><img src="<?= '../../vendor_dashboard/src/front-store/uploads/' . $row['image'] ?>" alt="product" class="card-img card-img-horizontal sw-11 h-100" /></td>
                                <td><?= implode(' ', array_slice(explode(' ', $row['title']), 0, 2))."\n"; ?></td>
                                <td><?= $row['sku'] ?> </td>
                                <td><?= $row['in_stock'] ?> </td>
                                <td>$<?= $row['regular_price'] ?> </td>
                                <td><?= $row['category'] ?> </td>
                                <td><?= $row['created_at'] ?> </td>
                                <td>
                                    <a href="Product-Edit.php<?php echo '?remove_id=' . $row['id']; ?>" >
                                    <button class="btn btn-danger btn-sm edit btn-flat" ><i class="fa fa-edit"></i>Remove From Hot Deals </button></a>
                                </td>
                            </tr>
                        <?php } } ?>
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