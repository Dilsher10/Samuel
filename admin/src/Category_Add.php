<?php include 'header.php';
error_reporting(0);
if (isset($_POST['save'])) {

    $parent_cat = $_POST['parent_cat'];
    $category = $_POST['category'];

    //   IMAGE UPLOAD
    $image = $_FILES['image']['tmp_name'];
    $imagename = $_FILES['image']['name'];
    $imagedes = $imagename;
    move_uploaded_file($image, "front-store/uploads/" . $imagename);

    //   ICON IMAGE UPLOAD
    $image_2 = $_FILES['icon_image']['tmp_name'];
    $imagename_2 = $_FILES['icon_image']['name'];
    $imagedes_2 = $imagename_2;
    move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);

    $sql = "INSERT INTO categories (parent_cat,category,image,icon_image) VALUES ('" . $category . "','" . $parent_cat . "','" . $imagedes . "','" . $imagedes_2 . "')";

    // print_r($sql);

    if (mysqli_query($conn, $sql)) {
        echo
        "<script>
    alert('New record created successfully !')
    window.location.href='categories.php';
    </script>";
    }
}

?>

<main>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row g-0">
                    <!-- Title Start -->
                    <div class="col-auto mb-3 mb-md-0 me-auto">
                        <div class="w-auto sw-md-30">
                            <a href="https://demo-developers.com/samuel/Admin/src/categories.php" class="muted-link pb-1 d-inline-block breadcrumb-back">
                                <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                                <span class="text-small align-middle">Categories</span>
                            </a>
                            <h1 class="mb-0 pb-0 display-4" id="title">Add Categories</h1>
                        </div>
                    </div>
                    <!-- Title End -->

                    <!-- Top Buttons Start -->
                    <div class="w-100 d-md-none"></div>
                    <div class="col col-md-auto d-flex align-items-end justify-content-end">
                        <button name="save" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                            <i data-acorn-icon="send"></i>
                            <span>Save</span>
                        </button>
                    </div>
                    <!-- Top Buttons End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <div class="row">
                <div class="col-xl-8">
                    <!-- Product Info Start -->
                    <div class="mb-5">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="mb-5 w-100">
                                    <label class="form-label">Select Parent-Category</label>
                                    <select class="select-single-no-search" name="parent_cat">
                                        <option value=" ">None</option>
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $query = $conn->query($sql);
                                        while ($srow = $query->fetch_assoc()) {
                                            echo "<option value='" . $srow['category'] . "'>" . $srow['category'] . "</option> ";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <label class="form-label">Sub Category</label>
                                <input type="text" name="category" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' required />
                            </div>
                        </div>
                    </div>
                    <!-- Product Info End -->
                </div>

                <div class="col-xl-4 mb-n5">
                    <div class="mb-5">
                        <h2 class="small-title">Upload Banner Image</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="user-image mb-3 text-center">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="chooseFile">
                                    <br><strong><label>(1349 X 305 px)</label></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="small-title">Upload Icon Image</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="user-image mb-3 text-center">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="icon_image" class="custom-file-input" id="chooseFile">
                                    <br><strong><label>(20 X 20 px)</label></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <!-- Image End -->
    </div>
    </div>
    </div>
</main>

<?php include 'footer.php' ?>