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
                        <th>S-No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Total</th>
						<th>Status</th>
						<th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $email = $_SESSION['user_email'];
                    $sqlQuery = "SELECT * FROM `orders` WHERE email = '$email'";
                    $query = mysqli_query($conn,$sqlQuery);
                    $count = 1;
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $row['first_name']; ?> <?= $row['last_name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td>$ <?= $row['total_price']; ?></td>
                        <td><?= $row['order_status']; ?></td>
                        <td><a href="order_details.php?id=<?= $row['id']; ?>" class="btn btn-primary">View</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>