<?php include_once 'header.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $category = $_POST['parent_cat'];
    $parent_cat = $_POST['category'];

    //   EDIT IMAGE UPLOAD

    $image = $_FILES['image']['tmp_name'];
    $imagename = $_FILES['image']['name'];
    $imagedes = $imagename;
    move_uploaded_file($image, "front-store/uploads/" . $imagename);

    //   ICON IMAGE UPLOAD

    $image_2 = $_FILES['icon_image']['tmp_name'];
    $imagename_2 = $_FILES['icon_image']['name'];
    $imagedes_2 = $imagename_2;
    move_uploaded_file($image_2, "front-store/uploads/" . $imagename_2);

    if (!empty($imagedes)) {
        $sql = mysqli_query($conn, "UPDATE `categories` SET `parent_cat`='$parent_cat', `category`='$category', `image`='$imagedes' where `id`='$id' ");
    } elseif (!empty($imagedes_2)) {
        $sql = mysqli_query($conn, "UPDATE `categories` SET `parent_cat`='$parent_cat', `category`='$category', `icon_image`='$imagedes_2' where `id`='$id' ");
    } else {
        $sql = mysqli_query($conn, "UPDATE `categories` SET `parent_cat`='$parent_cat', `category`='$category' where `id`='$id' ");
    }
    session_start();
    if ($sql) {
        $_SESSION['status'] = 'Updated Successfully';
        echo
        "<script>
    window.location.href='categories.php';
    </script>";
    } else {
        $_SESSION['status'] = 'something went wrong';
    }
}
?>

<main>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $update = mysqli_query($conn, "SELECT * FROM `categories` where id = '" . $id . "'");
            while ($rows = mysqli_fetch_array($update)) { ?>
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
                                    <h1 class="mb-0 pb-0 display-4" id="title">Edit Categories</h1>
                                </div>
                            </div>
                            <!-- Title End -->

                            <!-- Top Buttons Start -->
                            <div class="w-100 d-md-none"></div>
                            <div class="col col-md-auto d-flex align-items-end justify-content-end">
                                <div class="btn-group ms-1 w-100 w-md-auto">
                                    <button name="update" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
                                        <i data-acorn-icon="send"></i>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Top Buttons End -->
                        </div>
                    </div>
                    <!-- Title and Top Buttons End -->

                    <div class="row">
                        <div class="col-xl-8">
                            <!-- Product Info Start -->
                            <div class="mb-5">
                                <h2 class="small-title">Category Info</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <input type="hidden" value="<?= $rows['id']; ?>" name="id" />
                                        <div class="mb-5 w-100">
                                            <label class="form-label">Select Parent-Category</label>
                                            <select class="select-single-no-search form-control form-select" name="parent_cat">
                                                <option value=" ">None</option>
                                                <?php
                                                $sql = "SELECT * FROM categories";
                                                $query = $conn->query($sql);
                                                while ($srow = $query->fetch_assoc()) {
                                                    $par_cat = $rows['category'];
                                                    $cat = $srow['category'];
                                                ?>
                                                    <option <?php if ($par_cat == $cat) echo 'Selected' ?>><?= $cat ?> </option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-5">
                                            <label class="form-label">Sub Category</label>
                                            <input type="text" name="category" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['parent_cat'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>

                            <!-- Image End -->

                        </div>
                        <div class="col-xl-4 mb-n5">
                            <div class="mb-5">
                                <h2 class="small-title">Edit Banner Image</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-image mb-3 text-center">
                                            <div>
                                                <img src="<?= 'front-store/uploads/' . $rows['image'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder1" alt="">
                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="chooseFile1">
                                            <br><strong><label>(1349 X 305 px)</label></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <h2 class="small-title">Edit Icon Image</h2>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-image mb-3 text-center">
                                            <div>
                                                <img src="<?= 'front-store/uploads/' . $rows['icon_image'] ?>" class="figure-img img-fluid rounded" id="imgPlaceholder2" alt="">
                                            </div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="icon_image" class="custom-file-input" id="chooseFile2">
                                            <br><strong><label>(20 X 20 px)</label></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        <?php }
        } ?>
    </div>
</main>

<?php include 'footer.php' ?>