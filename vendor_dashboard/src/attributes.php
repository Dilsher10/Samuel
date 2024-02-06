<?php include 'header.php';?>

        <main>
            <div class="container">
                <div class="page-title-container">
                    <div class="row g-0">
                        <div class="col-6 mb-3 mb-md-0 me-auto">
                            <div class="w-auto sw-md-30">
                                <input type="button" class="muted-link pb-1 d-inline-block breadcrumb-back backBtn" value="Back" onClick="history.go(-1);">
                                <h1 class="mb-0 pb-0 display-4" id="title">Attributes List</h1>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                            <a href="attributes_add.php">
                                <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
                                    <i data-acorn-icon="plus"></i>
                                    <span>Add Attributes</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <div class="dropdown-as-select d-inline-block" data-childSelector="span">
                                <div class="row mx-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="box-body">
                    <?php
                    $query = "SELECT * FROM `attributes` where token = '" .  $_SESSION['token'] . "'";

                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table class='tables table-bordered mb-5' id='order_table'>
                                    <thead>
                                      <tr>
                                      <th>S-No</th>
									  <th>Name</th>
									  <th>value(s)</th>
                                      <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        $count = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <tr>
                                <?php $str = $row['value'];
                                $res = str_replace(array('[', ']', '"', ':', '{', '}', 'value'), ' ', $str);
                                ?>
                                <td><?= $count++ ?></td>
                                <td><?= $row['name'] ?> </td>
                                <td><?= $res ?></td>
                                <!--<td><?= $row['attributes'] ?></td>-->
                                <td>
                                <a href="./attributes_edit.php<?php echo '?id=' . $row['id']; ?>" >
                                    <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $users['id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                                </a>

                                    <a href="./attributes_delete.php<?php echo '?id=' . $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')">
                                        <button class="btn btn-danger btn-sm delete btn-flat"><i class="fa fa-trash"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    <?php } else {
                        echo "No record found." . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>

        </main>

        <?php include 'footer.php' ?>