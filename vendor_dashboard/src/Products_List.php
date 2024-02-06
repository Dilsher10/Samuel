<?php include 'header.php';?>
<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>" style="text-align: center;"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>



 <?php
    session_start();
if(isset($_SESSION['status'])){
   ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert" id="loginAlert" style="background:green; color:#fff;">
      <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
   </div>
  <?php
  unset($_SESSION['status']);
}
?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <!-- Title Start -->
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                                <h1 class="mb-0 pb-0 display-4" id="title">Products List</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                        <!-- Top Buttons Start -->
                        <div class="w-100 d-md-none"></div>
                        <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                            <a href="Products_add.php?token=<?php echo $_SESSION['token']?>">
                                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                                    <i data-acorn-icon="plus"></i>
                                    <span>Add Products</span>
                                </button>
                            </a>
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>

                <div class="box-body">
                    <?php
                    $query = "SELECT * FROM products_detail  where token = '" .  $_SESSION['token'] . "' order by id desc ";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									   <th>Image</th>
									   <th style ='width:66.359px !important;'>Name</th>
                                      <th>SKU</th>
                                      <th>Stock</th>
                                      <th>Price</th>
                                      <th>Categories</th>
                                      <th>Modified Date</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { 
                            $sql = "SELECT * FROM `variations` WHERE product_name = '" .  $row['title'] . "' AND token = '" .  $_SESSION['token'] . "'";
                            $squery = mysqli_query($conn,$sql);
                            $data = mysqli_fetch_array($squery);
                        ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><img src="<?= 'front-store/uploads/' . $row['image'] ?>" alt="product" class="card-img card-img-horizontal sw-11 h-100" /></td>
                                <td><?= $row['title'] ?> </td>
                                <td><?= $row['sku'] ?> <?= $data['small_sku'] ?> </td>
                                <td><?= $row['in_stock'] ?> <?= $data['small_stock'] ?></td>
                                <td>$<?= $row['sale_price'] ?> <?= $data['small_sale_price'] ?></td>
                                <td><?= $row['category'] ?> </td>
                                <td><?= $row['created_at'] ?> </td>
                                <td class="td-button">
                                <a href="./Product_Edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $users['id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                                </a>

                                    <a href="./products_delete.php<?php echo '?id='. $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')">
                                        <button class="btn btn-danger btn-sm delete btn-flat"><i class="fa fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    <?php } else {
                        echo "No product found" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>

        </main>

        <?php include 'footer.php' ?>