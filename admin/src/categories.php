<?php include 'header.php' ?>


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
                        <div class="col-6 mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                                <button type="button" onClick="history.go(-1)" class="backBtn text-muted">Back</button>
                                <h1 class="mb-0 pb-0 display-4" id="title">Category List</h1>
                            </div>
                        </div>
                        <!-- Title End -->
                        <!-- Top Buttons Start -->
                        <div class="col-6 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                            <a href="Category_Add.php" target="_blank">
                                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                                    <i data-acorn-icon="plus"></i>
                                    <span>Add Category</span>
                                </button>
                            </a>
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>

                <div class="box-body popup">
                    <?php
                    $query = "SELECT * FROM `categories`";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables2 table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
                                      <th>Image</th>
									  <th>Category Name</th>
									  <th>Parent Category</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td><img src="<?= 'front-store/uploads/' . $row['image'] ?>" alt="product" class="card-img card-img-horizontal sw-11 h-100" /></td>
                                <td><?= $row['parent_cat'] ?></td>
                                <td><?= $row['category'] ?> </td>
                                <td>
                                <a href="./category_edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $users['id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                                </a>

                                    <a href="./category_delete.php<?php echo '?id=' . $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')">
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
        
        
        <div class="show">
  <div class="overlay"></div>
  <div class="img-show">
    <span>X</span>
    <img src="">
  </div>
</div>

        <?php include 'footer.php' ?>
        
        <script>
            $(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
        </script>