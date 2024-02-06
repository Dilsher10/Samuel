<?php include 'header.php';
$id = $_GET['id'];
$eQuery = "SELECT * FROM `products_detail` WHERE id = $id";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
$title = $rows['title'];
$category = $rows['category'];
$tags = $rows['tagsBasic2'];
$image = $rows['image'];
?>
<main>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
  <form method="post" enctype="multipart/form-data" action="update_products.php<?php echo '?id=' . $rows['id']; ?>">
    <div class="container">
      <!-- Title and Top Buttons Start -->
      <div class="page-title-container">
        <div class="row g-0">
          <!-- Title Start -->
          <div class="col-auto mb-3 mb-md-0 me-auto">
            <div class="w-auto sw-md-30">
              <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                <span class="text-small align-middle">Products</span>
              </a>
              <h1 class="mb-0 pb-0 display-4" id="title">Edit Product</h1>
            </div>
          </div>
          <!-- Title End -->

          <!-- Top Buttons Start -->
          <div class="w-100 d-md-none"></div>
          <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="update_btn" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Save</span>
            </button>
          </div>
          <!-- Top Buttons End -->
        </div>
      </div>
      <!-- Title and Top Buttons End -->

      <div class="row">
        <input name="id" value="<?= $rows['id']; ?>" type="hidden" />
        <div class="col-xl-8">
          <!-- Product Info Start -->
          <div class="mb-5">
            <h2 class="small-title">Product Info</h2>
            <div class="card" >
              <div class="card-body">
                <h3><label class="form-label">Product Name</label></h3>
                <input type="text" class="form-control mb-5" name="title" value="<?php echo $rows['title'] ?>" />
                <h3><label class="form-label mt-5">Product Long Description</label></h3>
                <textarea cols="80" rows="10" id="content" name="content"><?php echo $rows['description'] ?></textarea>
                <script type="text/javascript">
                  CKEDITOR.replace('content');
                </script>
                <h3><label class="form-label mt-5">Product Short Description</label></h3>
                <textarea class="form-control mb-5" type="text" name="details"><?php echo $rows['details'] ?></textarea>
                <script type="text/javascript">
                  CKEDITOR.replace('details');
                </script>
                
                <!--Add Product-->
                
                <h3><label class="form-label mt-5">Product Data</label></h3>
                <div class="d-flex align-items-start mb-5">
                      <div class="row">
                        <div class="col-3 product_data w-20">
                          <div class="nav nav-pills mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                              aria-selected="true">Inventory</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                              aria-selected="false" disabled>Attributes</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-settings" type="button" role="tab"
                              aria-controls="v-pills-settings" aria-selected="false" disabled>Variations</button>
                          </div>
                        </div>
                        <div class="col-3 product_data w-80">
                            <div class="row mt-3 mb-4" style="margin-left: 13px;">
                                    <div class="col-6">
                                       <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="simpleRadio" checked>
  <label class="form-check-label" for="simpleRadio">
    Simple
  </label>
</div>                               
</div>
                                    <div class="col-6">
                                       <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="variationRadio">
  <label class="form-check-label" for="variationRadio">
    Variation
  </label>
</div>
                                    </div>
                                </div>
                          <div class="tab-content mt-5 mx-3" id="v-pills-tabContent">
                            <div class="tab-pane fade show active mx-3" id="v-pills-home" role="tabpanel"
                              aria-labelledby="v-pills-home-tab" tabindex="0">
                              <div class="row">
                                <div class="col-4">
                                  <label class="form-label">Stock Quantity</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="tel" name="in_stock"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-stock" value="<?php echo $rows['in_stock'] ?>" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">SKU</label><br>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="text" name="sku" id="inventry-sku" value="<?php echo $rows['sku'] ?>" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">Regular Price</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="tel" name="regular_price"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-regular" value="<?php echo $rows['regular_price'] ?>" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">Sale Price</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="tel" name="sale_price"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-sales" value="<?php echo $rows['sale_price'] ?>" />
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            
                            
                            <!--Variation-->
                            
                            <div class="tab-pane fade mx-3" id="v-pills-settings" role="tabpanel"
                              aria-labelledby="v-pills-settings-tab" tabindex="0">
                              <div id="dynamic_field">
                                  <div class="mb-5">
                                    <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                <div class="form-row" id="dummy">


    <?php
    $token = $_SESSION['token'];
    $product_name = $rows['title'];
    $sqlQuery = "SELECT * FROM variations WHERE product_name = '$product_name' AND token = '$token'";
    $query = mysqli_query($conn, $sqlQuery);
    while($variation = mysqli_fetch_array($query)){
        ?>
         <select class="select-single-no-search mb-5 form-control form-select" name="variation_name[]" id="responds">
             <option value="<?php echo $variation['variation_name']; ?>"><?php echo $variation['variation_name']; ?></option>
    <?php
    $token = $_SESSION['token'];
    $product_name = $rows['title'];
    $Result = mysqli_query($conn, "SELECT t1.*
FROM save_attribute t1
JOIN (
  SELECT MIN(id) AS min_id
  FROM save_attribute
  GROUP BY name
) t2 ON t1.id = t2.min_id
WHERE token = '$token';");
    $variations = array();

    while ($row = mysqli_fetch_array($Result)) {
        $str = $row['value'];
        $res = str_replace(array('[', ']', ':', '{', '}', '"value"', ','), ' ', $str);
        $arr = str_replace(array('"', 'value'), ' ', $res);
        $array = str_replace(' ', "\n", $arr);
        $variations[] = $res;
    }



   if (!empty($variations)) {
    $variationItems = explode(' ', implode(' ', $variations));
    foreach ($variationItems as $item) {
        if ($item !== $variation['variation_name'] && !empty($item)) {
            echo "<option value='$item'>$item</option>";
        }
    }
}


    ?>
</select>

        <input class="form-control mt-5 mb-5" type="text" name="small_sku[]"
                                    placeholder="SKU" value="<?php echo $variation['small_sku']; ?>" />
                                  <div class="row">
                                    <div class="col-4">
                                      <input class="form-control mb-5" type="tel" name="small_regular_price[]"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        placeholder="Regular Price $" value="<?php echo $variation['small_regular_price']; ?>" />
                                    </div>
                                    <div class="col-4">
                                      <input class="form-control mb-5" type="tel" name="small_sale_price[]"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        placeholder="Sale Price $" value="<?php echo $variation['small_sale_price']; ?>" />
                                    </div>
                                    <div class="col-4">
                                     <input class="form-control mb-5" type="text" name="small_stock[]"
                                      oninput="this.value = this.value.replace(/[^\d,]/g, '').replace(/(\..*)\./g, '$1');"
                                      placeholder="Stock Quantity" value="<?php echo $variation['small_stock']; ?>" />
                                    </div>
                                  </div>
        <?php
    }
    
    ?>
                                  
                                   <div class="col" style="text-align: end;margin-bottom:20px;">
                                         <button type="button" name="add" class="btn btn-danger btn_remove" onclick="removeDummy();"><i class="fa fa-times"></i></button>
                                     </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                              <div class="row">
                                <div class="col-4">
                                  <div class="mb-5">
                                      <select id="employee" class="select-single-no-search form-control form-select" style="width:165px !important;">
				<option value="Add Attributes" selected disabled hidden>Select Attribute</option>
				<?php
				$token = $_SESSION['token'];
				$sql = "SELECT * FROM attributes WHERE token = '$token'";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></option>
				<?php }	?>
			</select>	
                    </div>
                                </div>
                                <div class="col-4">
                                  <div class="mb-5">
                                  </div>
                                </div>
                                <div class="col-4">
                                  <div class="mb-5">
                                  </div>
                                </div>
                                <table class="table table-bordered mx-3">
                                  <tr>
                                    <td>
                                      <div class="row gx-2 mx-3 mt-5">
                                        <div class="col col-md-auto order-1">
                                          <div class="mb-3">
                                            <strong><label class="form-label">Attribute Name</label></strong>
                                          </div>
                                        </div>
                                        <div class="col-md order-3">
                                          <div class="mb-0">
                                            <input type="text" name="content_txt" id="empName"
                                              class="form-control mb-5"
                                              onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
                                              placeholder="e.g Size,color,weight etc" />
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mb-5">
                                        <div class="mb-n6 border-last-none">
                                          <div class="mb-3 pb-3 border-bottom border-separator-light">
                                            <div class="row gx-2 mx-3">
                                              <div class="col col-md-auto order-1">
                                                <div class="mb-3">
                                                  <strong><label class="form-label">Value(s)</label></strong>
                                                </div>
                                              </div>
                                              <div class="col-md order-3">
                                                <div class="mb-0">
                                                  <input name="attribute_value" id="contentText2" class="form-control" value=""/>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="hidden" value="<?php echo $_SESSION['token'] ?>" name="saveToken">
                                      <button type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-30" name="updateAttr">Save Attribute</button>
                                    </td>
                                  </tr>
                                </table>
                                </form>
                                
                                <?php
                                
                                include 'conn.php';
                                
                                $token = $_SESSION['token'];
                                $sqlQuery = "SELECT * FROM `save_attribute` WHERE token = '$token' AND product_name = '$title'";
                                $query = mysqli_query($conn,$sqlQuery);
                                while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <div class="dropdown mb-1">
                                        <button class="dropdown-toggle attrBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             <?php echo $data['name']; ?>
                                        </button>
                                        <div class="dropdown-menu attrDropdown">
                                            <div class="row">
                                                <div class="col-8">
                                                    <form>
                                                        <label class="form-label">Values</label>
                                                        <input type="text" class="form-control" value="<?php echo $data['value']; ?>">
                                                    </form>
                                                </div>
                                                <div class="col-4">
                                                    <form method="POST" action="delete_updated_attribute.php">
                                                    <input type="hidden" value="<?php echo $_SESSION['token']; ?>" name="savedToken">
                                                    <input type="hidden" value="<?php echo $data['id']; ?>" name="savedId">
                                                    <input type="hidden" value="<?php echo $_GET['id']; ?>" name="s_id">
                                                    <button type="submit" class="aBtn"><i data-acorn-icon="bin" class="icon attrIcon" data-acorn-size="25"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-6">
                                                    <label class="form-check  mb-1">
                                                    <input type="checkbox" class="form-check-input" name="used_for_variations" />
                                                    <span class="form-check-label d-block">
                                                    <span class="mb-1 lh-1-25" style="font-size:12px">Used For variations</span>
                                                    </span>
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-check  mb-1">
                                                    <input type="checkbox" class="form-check-input" name="visible_on_product" />
                                                    <span class="form-check-label d-block">
                                                    <span class="mb-1 lh-1-25" style="font-size:12px">Visible on product page</span>
                                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          <!-- Product Info End -->
        </div>
        <div class="col-xl-4 mb-n5">
          <!-- Price Start -->
          <div class="mb-5">
            <h2 class="small-title">Select Category</h2>
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <?php
                  $sql = "SELECT * FROM categories";
                  $result = $conn->query($sql);
                  if ($result) {
                    $fruits = array();
                    while ($row = $result->fetch_assoc()) {
                      $fruits[$row['parent_cat']][] = $row['category'];
                    }
                  }
                  ?>
                 <select class="select-single-no-search w-100 form-control form-select" name="category">
    <option value="<?php echo $category ?>"><?php echo $category ?></option>
    <?php foreach ($fruits as $color => $options) : ?>
        <optgroup label="<?php echo $color; ?>">
            <?php foreach ($options as $option) : ?>
                <?php
                    if ($option !== $category) {
                        echo '<option value="' . $option . '">' . $option . '</option>';
                    }
                ?>
            <?php endforeach; ?>
        </optgroup>
    <?php endforeach; ?>
</select>

                </div>
              </div>
            </div>
          </div>
          <!-- Price End -->

          <div class="mb-5">
            <h2 class="small-title">Image</h2>
            <div class="card">
              <div class="card-body">
                <div class="user-image mb-3 text-center">
                  <div>
                    <img src="<?= 'front-store/uploads/' . $image ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                  </div>
                </div>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="chooseFile">
                </div>
              </div>
            </div>
          </div>
  
    <!-- header section-1 start-->
    <div class="container section-1 mb-2">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Product Gallery
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row gx-2 gy-2">
                      <?php  
            $sql = "SELECT * FROM tbl_images Where title = '$title'";  
            $images =mysqli_query($conn,$sql);  
            while($image = mysqli_fetch_array($images)){  
            ?>  
                    <div class="col-lg-4">
                      <div class="profile-pic">
                      <img src="<?php echo $image['images'] ?>" alt="" width="100%">
                      <form action="imageDelete.php" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="image_id" value="<?php echo $image['image_id'] ?>">  
                    <input type="hidden" name="pro_id" value="<?php echo $_GET['id'] ?>">
                      <div class="edit"><button type="submit" name="deleteImg" class="close-icon "><i class="fa-solid fa-circle-xmark"></i></button></div>
                    </form>  
            </div>
            </div>
            <?php } ?>  
                      </div>
                    <div class="row g-0 mt-3">
                      <div class="col-lg-12 custom-file">
                  <input type="file" name="files[]" multiple>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-section-1-end -->
        </div>
      </div>
    </div>
<style>
body{
    background: #f9f9f9;
}
.card{
    border:0;
    border-radius:16px;
}
#title {
    font-size: 20px;
}
.form-label {
    font-size: 19px;
}
button.btn.btn-outline-primary.btn-icon.btn-icon-start.w-100 {
    border: 1px;
    padding: 0px 30px;
    border-radius: 12px;
}
button.btn.btn-outline-primary.btn-icon.btn-icon-start.w-100:hover{
    background:#1ca35e;
}
button.accordion-button {
    background: transparent !important;
    color: #000 !important;
    font-weight: 700;
}
.accordion-button:focus{
    box-shadow: none !important;
}
.accordion-item {
    border-radius: 0 !important;
}
.profile-pic {
	position: relative;
	display: inline-block;
    width: 100%;
}
.profile-pic:hover .edit {
	display: block;
}
.edit {
	padding-top: 1px;	
	padding-right: 6px;
	position: absolute;
	right: 0;
	top: 0;
	display: none;
}
.edit a {
	color: red;
}
button.close-icon {
    border: none;
    background: transparent;
}
.edit svg {
    color: red;
}
.tagify__tag__removeBtn {
    margin-top: 0 !important;
}
tag.tagify__tag.tagify--noAnim {
    padding-bottom: 6px !important;
}
</style>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<script>
         $(document).ready(function () {
                var i = 1;
                   $('#add').click(function () {
                    i++;
                    $('#dynamic_field').append('<div class="form-row" id="row' + i + '">\
  <select class="form-control select-single-no-search mb-5" name="variation_name[]" id="responds">\
    <option value="Select" selected disabled hidden>Select</option>' +
    '<?php
$token = $_SESSION['token'];
$Result = mysqli_query($conn, "SELECT t1.*
FROM save_attribute t1
JOIN (
  SELECT MIN(id) AS min_id
  FROM save_attribute
  GROUP BY name
) t2 ON t1.id = t2.min_id
WHERE token = '$token';");
$variations = array();
while ($row = mysqli_fetch_array($Result)) {
    $str = $row["value"];
    $res = str_replace(array("[", "]", '"', ":", "{", "}", "value"), " ", $str);
    $arr = str_replace(array(",", '"', "value"), " ", $res);
    $array = str_replace(" ", "\n", $arr);
    $variations[] = $res;
}
if (!empty($variations)) {
    $variationItems = explode(" ", implode(" ", $variations));
    foreach ($variationItems as $item) {
        if (!empty($item)) {
            echo '<option class="variation-option" value="' . $item . '">' . str_replace(',', '', $item) . '</option>';
        }
    }
}
?>' +
  '</select>\
  <input class="form-control mb-5" type="text" name="small_sku[]" placeholder="SKU" />\
  <div class="row">\
    <div class="col-4">\
      <input class="form-control mb-5" type="tel" name="small_regular_price[]" placeholder="Regular Price $" />\
    </div>\
    <div class="col-4">\
      <input class="form-control mb-5" type="tel" name="small_sale_price[]" placeholder="Sale Price $" />\
    </div>\
    <div class="col-4">\
      <input class="form-control mb-5" type="number" name="small_stock[]" placeholder="Stock Quantity" />\
    </div>\
  </div>\
  <div class="col" style="text-align: end;margin-bottom:20px;">\
    <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa-times"></i></button></td>\
  </div>\
</div>');

                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });

            });
    </script>


    
    
    <!--Set attributes into input field-->
    
    
    <script>
        $(document).ready(function(){  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'ajax_handler.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');
					$("#empName").val(empData.name);
					$("#contentText2").val(empData.value);				
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});

   var inputField = document.getElementById('empName');
   var inputValue = document.getElementById('contentText2');
    inputField.value = empData.value;
    inputValue.value = empData.value;
    </script>
    
    <script>
  const simpleBtn = document.getElementById('simpleRadio');
  const attributeBtn = document.getElementById('v-pills-profile-tab');
  const variationBtn = document.getElementById('v-pills-settings-tab');
  const inventryBtns = document.getElementById('v-pills-home-tab');
  const inventryStocks = document.getElementById('inventry-stock');
  const inventrySkus = document.getElementById('inventry-sku');
  const inventryRegulars = document.getElementById('inventry-regular');
  const inventrySaless = document.getElementById('inventry-sales');

  simpleBtn.addEventListener('click', function() {
    attributeBtn.disabled = true;
    variationBtn.disabled = true;
    inventryBtns.disabled = false;
    inventryStocks.disabled = false;
    inventrySkus.disabled = false;
    inventryRegulars.disabled = false;
    inventrySaless.disabled = false;
  });
</script>
    
    
    <script>
  const radioBtn = document.getElementById('variationRadio');
  const attributesBtn = document.getElementById('v-pills-profile-tab');
  const variationsBtn = document.getElementById('v-pills-settings-tab');
  const inventryBtn = document.getElementById('v-pills-home-tab');
  const inventryStock = document.getElementById('inventry-stock');
  const inventrySku = document.getElementById('inventry-sku');
  const inventryRegular = document.getElementById('inventry-regular');
  const inventrySales = document.getElementById('inventry-sales');

  radioBtn.addEventListener('click', function() {
    attributesBtn.disabled = false;
    variationsBtn.disabled = false;
    inventryBtn.disabled = true;
    inventryStock.disabled = true;
    inventrySku.disabled = true;
    inventryRegular.disabled = true;
    inventrySales.disabled = true;
  });
</script>

<script>
    function removeDummy() {
 var elem = document.getElementById('dummy');
 elem.parentNode.removeChild(elem);
 return false;
}
</script>


<?php include 'footer.php' ?>