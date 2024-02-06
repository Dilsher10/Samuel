<?php include 'header.php' ?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <div class="col-auto mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                               <button type="button" class="backBtn text-muted" onClick="history.go(-1)">Back</button>
                                <h1 class="mb-0 pb-0 display-4" id="title">Orders  List</h1>
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
                    <table class='tables2 table-bordered mb-5' id='order_table'>
                        <thead>
                                      <tr>
                                      <th>Order ID</th>
                                      <th>Item</th>
                                      <th>Quantity</th>
									  <th>Order Amount</th>
									  <th>Delivery Charges</th>
									  <th>Total Amount</th>
									  <th>Order Status</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $token = $_GET['token'];
                    $query = "SELECT * FROM `order_details` WHERE token = '$token'";
                    $result = mysqli_query($conn, $query);
                    
                    while($row = mysqli_fetch_array($result)){
                        
                        $order_id = $row['order_id'];
                        
                        $sqlQuery = "SELECT * FROM `orders` WHERE id = '$order_id'";
                        $squery = mysqli_query($conn,$sqlQuery);
                        $data = mysqli_fetch_array($squery);
                        
                        $total = $row['total_price'];
                        $charges = 3;

                        $sum = $total + $charges;
                        
                      echo"
                       <tr>
                                <td>$row[order_id]</td>
                                <td>$row[product_name]</td>
                                <td>$row[qty]</td>
                                <td>$ $row[product_price]</td>
                                <td>$ 3</td>
                                <td>$ $sum</td>
                                <td>$data[order_status]</td>
                                <td>
                                <a href='order_details.php?order_id=$row[order_id]' >
                                    <button class='btn btn-success btn-sm edit btn-flat'><i class='fa fa-edit'></i>View</button>
                                </a>
                                </td>
                            </tr>
                      ";
                    }
                    ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>