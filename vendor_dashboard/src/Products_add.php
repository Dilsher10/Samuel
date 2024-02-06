 <?php
include 'header.php';
?>

<?php
    session_start();
if(isset($_SESSION['status'])){
   ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert" style="background:red; color:#fff;">
      <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
   </div>
  <?php
  unset($_SESSION['status']);
}
?>

<form method="post" enctype="multipart/form-data" action="insert.php">
 <main>
        <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div class="w-auto sw-md-30">
                  <h1 class="mb-0 pb-0 display-4" id="title">Add Products</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <div class="col col-md-auto d-flex align-items-end justify-content-end">
                <button name="save_btn" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
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
                <h2 class="small-title">Product Info</h2>
                <div class="card">
                  <div class="card-body">
                    <h3><label class="form-label">Product Name</label></h3>
                    <input type="text" class="form-control" name="title" />
                    <h3><label class="form-label mt-5">Product Long Description</label></h3>
                    <textarea cols="80" rows="10" id="content" name="content" class="mb-5" ></textarea>
                    <script type="text/javascript">
                      CKEDITOR.replace('content');
                    </script>
                    <h3><label class="form-label mt-5">Product Short Description</label></h3>
                    <textarea class="form-control html-editor-bubble html-editor sh-13 mb-5" id="quillEditorBubble"
                      type="text" name="details" pattern="^[\p{L}]${1,25}"></textarea>
                    <script type="text/javascript">
                      CKEDITOR.replace('details');
                    </script>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>

            <div class="col-xl-4 mb-n5">
              <div class="mb-5 w-100"></div>
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
                        <?php foreach ($fruits as $color => $options): ?>
                        <optgroup label="<?php echo $color; ?>">
                          <?php foreach ($options as $option): ?>
                          <option value="<?php echo $option; ?>">
                            <?php echo $option; ?>
                          </option>
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
                <h2 class="small-title">Tags</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="mb-n6 border-last-none">
                      <div class="mb-3 pb-3 border-bottom border-separator-light">
                        <div class="row gx-2">
                          <div class="col col-md-auto order-1">
                          </div>
                          <div class="col-md order-3">
                            <div class="mb-0">
                              <label class="form-label">Add Tags</label>
                              <input name="tagsBasic2" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <h2 class="small-title">Upload Product Image</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="chooseFile">
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="mb-5">
                <h2 class="small-title">Upload Gallery Images</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="custom-file">
                      <input type="file" name="files[]" multiple>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <main>
                <div class="container">
          <!-- Title and Top Buttons Start -->
                  <div class="row">
            <div class="col-xl-8">
      <!--test-->
                <div class="card" style="top:-8rem;">
                    <div class="card-body">
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
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-stock" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">SKU</label><br>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="text" name="sku" id="inventry-sku" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">Regular Price</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="tel" name="regular_price"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-regular" />
                                </div>
                                <div class="col-4">
                                  <label class="form-label">Sale Price</label>
                                </div>
                                <div class="col-6">
                                  <input class="form-control mb-5" type="tel" name="sale_price"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" id="inventry-sales" />
                                </div>
                              </div>
                            </div>
                            
                            <!--Variation-->
                            
                            <div class="tab-pane fade mx-3" id="v-pills-settings" role="tabpanel"
                              aria-labelledby="v-pills-settings-tab" tabindex="0">
                              <div id="dynamic_field">
                                  <div class="mb-5">
                                    <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add</button>
                                  </div>
                                <div class="form-row">
                                 <select class="select-single-no-search mb-5 form-control form-select" name="variation_name[]" id="responds">
    <option value="Select" selected disabled hidden>Select</option>
    <?php
    $token = $_GET['token'];
    $Result = mysqli_query($conn, "SELECT t1.*
FROM save_attribute t1
JOIN (
  SELECT MIN(id) AS min_id
  FROM save_attribute
  GROUP BY value
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
            if (!empty($item)) {
                echo "<option value='$item'>$item</option>";
            }
        }
    }
    ?>
</select>
                                  <input class="form-control mt-5 mb-5" type="text" name="small_sku[]"
                                    placeholder="SKU" />
                                  <div class="row">
                                    <div class="col-4">
                                      <input class="form-control mb-5" type="tel" name="small_regular_price[]"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        placeholder="Regular Price $" />
                                    </div>
                                    <div class="col-4">
                                      <input class="form-control mb-5" type="tel" name="small_sale_price[]"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        placeholder="Sale Price $" />
                                    </div>
                                    <div class="col-4">
                                      <input class="form-control mb-5" type="number" name="small_stock[]"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        placeholder="Stock Quantity" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                            
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                              <div class="row">
                                <div class="col-4">
                                  <div class="mb-5">
                                      <select id="employee" class="select-single-no-search form-select form-control" style="width:165px !important;">
				<option value="Add Attributes" selected disabled hidden>Select Attribute</option>
				<?php
				$token = "$_GET[token]";
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
                                            <!--<input type="text" id="empName" value="">-->
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
                                       <div class="mb-5">
                                        <div class="mb-n6 border-last-none">
                                          <div class="mb-3 pb-3 border-bottom border-separator-light">
                                            <div class="row gx-2 mx-3">
                                              <div class="col col-md-auto order-1">
                                                <div class="mb-3">
                                                  <strong><label class="form-label">Product Name</label></strong>
                                                </div>
                                              </div>
                                              <div class="col-md order-3">
                                                <div class="mb-0">
                                                  <input type="text" name="product_name" class="form-control"/>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="hidden" value="<?php echo $_GET['token'] ?>" name="saveToken">
                                      <button type="submit" name="saveAttr" class="btn btn-outline-primary btn-icon btn-icon-start w-30">Save Attribute</button>
                                    </td>
                                  </tr>
                                </table>
                                </form>
                                
                                
                                <?php
        
                                include 'conn.php';
                                $token = $_GET['token'];
                                
                                $sqlQuery = "SELECT t1.*
FROM save_attribute t1
JOIN (
  SELECT MIN(id) AS min_id
  FROM save_attribute
  GROUP BY value
) t2 ON t1.id = t2.min_id
WHERE token = '$token';";

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
                                                    <form method="POST" action="delete_saved_attribute.php">
                                                    <input type="hidden" value="<?php echo $_GET['token']; ?>" name="savedToken">
                                                    <input type="hidden" value="<?php echo $data['id']; ?>" name="savedId">
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
                  <!--test-end-->
                  </div>
                  </div>
                  </div>
    </main>
    
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
$token = $_GET['token'];
$Result = mysqli_query($conn, "SELECT t1.*
FROM save_attribute t1
JOIN (
  SELECT MIN(id) AS min_id
  FROM save_attribute
  GROUP BY value
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
    <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa-trash"></i> Delete</button></td>\
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

    
    <?php include 'footer.php' ?>
 