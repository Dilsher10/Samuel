<?php 
include 'header.php';
?>

<main>
    <div class="container">
        <div class="page-title-container">
            <div class="row g-0">
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <input type="button" class="muted-link pb-1 d-inline-block breadcrumb-back backBtn" value="Back" onClick="history.go(-1);">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-body">
            <table class='tables table-bordered mb-5' id='order_table'>
                <thead>
                    <tr>
                        <th>Invoice ID</th>
                        <th>Order ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>12345</td>
                        <td>$40</td>
                        <td>Paid</td>
                        <td><a href=""><i class="fa fa-print"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>
