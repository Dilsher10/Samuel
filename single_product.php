<?php
@include('header.php');
$id = $_GET['id'];
$eQuery = "SELECT * FROM `products_detail` WHERE id = $id";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);


$token = $rows['token'];
$product_name = $rows['title'];
$sql = "SELECT * FROM `variations` WHERE token = '$token' AND product_name = '$product_name'";
$squery = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($squery);



$attributesQuery = "SELECT * FROM `attributes` WHERE token = '$token'";
$aquery = mysqli_query($conn,$attributesQuery);
$attributes_data = mysqli_fetch_array($aquery);


$imgQuery = "SELECT * FROM b_info WHERE token = '$token'";
$iquery = mysqli_query($conn,$imgQuery);
$img_data = mysqli_fetch_array($iquery);
$company_logo = $img_data['company_logo'];
                                            

?>
<!-- Start of Main -->
<main class="main mb-10 pb-1">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav container">
        <ul class="breadcrumb bb-no">
            <li><a href="demo1.html">Home</a></li>
            <li>Products</li>
        </ul>
    </nav>
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content">
                    <form method="post" action="cart.php?action=add&id=<?php echo $rows["id"]; ?>">
                        <div class="product product-single row">
                            <div class="col-md-6 mb-6">
                                <div class="product-gallery product-gallery-sticky">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $rows['image'] ?>" data-zoom-image="<?= '././Simuel_dashboard/src/front-store/uploads/' . $rows['image'] ?>" alt="Electronics Black Wrist Watch" width="800" height="900">
                                                </figure>
                                            </div>
                                            <?php
                                            $pro_title = $rows['title'];
                                            $img_Query = "SELECT * FROM `tbl_images` WHERE `title` = '$pro_title' ";
                                            $img_query = mysqli_query($conn, $img_Query);
                                            if (mysqli_num_rows($img_query) > 0) {
                                                while ($img_row = mysqli_fetch_assoc($img_query)) {

                                            ?>
                                                    <div class="swiper-slide">
                                                        <figure class="product-image">
                                                            <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" data-zoom-image="<?= '././Simuel_dashboard/src/' . $img_row['images'] ?>" alt="Product Image" width="800" height="900">
                                                        </figure>
                                                    </div>
                                            <?php }
                                            } ?>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                            <div class="product-thumb swiper-slide">
                                                <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $rows['image'] ?>" alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <?php
                                            $pro_title = $rows['title'];
                                            $img_Query = "SELECT * FROM `tbl_images` WHERE `title` = '$pro_title' ";
                                            $img_query = mysqli_query($conn, $img_Query);
                                            if (mysqli_num_rows($img_query) > 0) {
                                                while ($img_row = mysqli_fetch_assoc($img_query)) {

                                            ?>
                                                    <div class="product-thumb swiper-slide">
                                                        <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product thumb" width="800" height="900" />
                                                    </div>
                                            <?php }
                                            } ?>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-6">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title"><?= $rows['title'] ?></h1>
                                    <div class="product-bm-wrapper">
                                        <figure class="brand">
                                            
                                            
                                            
                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $company_logo ?>" alt="Brand" width="102" height="48" />
                                        </figure>
                                        <div class="product-meta">
                                            <div class="product-categories">
                                                Category:
                                                <span class="product-category"><a href="#"><?= $rows['category'] ?></a></span>
                                            </div>
                                            <?php
                                    
                                    if(!empty($data['variation_name'])){
                                        ?>
                                            <div class="product-sku">
                                                SKU: <span id="small_sku"></span>
                                            </div>
                                        <?php
                                    }
                                    else{
                                         ?>
                                            <div class="product-sku">
                                                SKU: <span><?= $rows['sku'] ?></span>
                                            </div>
                                        <?php
                                    }
                                    
                                    ?>
                                        </div>
                                    </div>

                                    <hr class="product-divider">
                                    
                                    <?php
                                    
                                    if(!empty($data['variation_name'])){
                                        ?>
                                        <div class="product-price">
                                            <?php
                                            if(!empty($data['small_regular_price'])){
                                                ?>
                                                <del class="old-price" id="small_regular_prices"></del>
                                                <?php
                                            }
                                            if(!empty($data['small_sale_price'])){
                                                ?>
                                                <ins class="new-price" id="small_sales_price"></ins>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    else{
                                         ?>
                                        <div class="product-price">
                                           <?php
                                            if(!empty($rows['regular_price'])){
                                                ?>
                                                <del class="old-price">$<?= $rows['regular_price']; ?></del>
                                                <?php
                                            }
                                            
                                            if(!empty($rows['sale_price'])){
                                                ?>
                                                <ins class="new-price">$<?= $rows['sale_price']; ?></ins>
                                                <?php
                                            }
                                         
                                            ?>
                                        
                                        </div>
                                        <?php
                                    }
                                    
                                    ?>
            

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                            Reviews)</a>
                                    </div>

                                    <div class="product-short-desc">
                                        <ul class="list-type-check list-style-none">
                                            <?= $rows['details'] ?>
                                        </ul>
                                    </div>

                                    <hr class="product-divider">
                                    
                                    <!--Select Code-->
                                    
                                     <?php
                                    
                                    if(!empty($data['variation_name'])){
                                        
                                        $token = $rows['token'];
                                        $product_name = $rows['title'];
                                        
                                        $attributeQuery = "SELECT * FROM `save_attribute` WHERE token = '$token' AND product_name = '$product_name'";
                                        $attrquery = mysqli_query($conn,$attributeQuery);
                                        while($attribute_data = mysqli_fetch_array($attrquery)){
                                            
                                            ?>
                                        <div class="product-form product-variation-form product-color-swatch row">
                                            <div class="col-6">
                                                <label style="max-width: 12.5rem; font-weight:bold;"><?= $attribute_data['name'] ?></label>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center product-variations">
                                                <select class="form-control form-select employee">
                                                    <option value="Choose an option" selected>Choose an option</option>
                                                    <?php
                                                    $token = $rows['token'];
                                                    $product_name = $rows['title'];
                                                    $ssql = "SELECT * FROM `save_attribute` WHERE name = '$attribute_data[name]' AND token = '$token' AND product_name = '$product_name'";
                                                    $ssquery = mysqli_query($conn,$ssql);
                                                    $variations = array();
                                                    
                                                    

    while ($row = mysqli_fetch_array($ssquery)) {
        $str = $row['value'];
        $res = str_replace(array('[', ']', ':', '{', '}', '"value"', ','), ' ', $str);
        $arr = str_replace(array('"', 'value'), ' ', $res);
        $array = str_replace(' ', "\n", $arr);
        $variations[] = $res;
    }
    
                                                    $variationItems = explode(' ', implode(' ', $variations));
                                                     foreach ($variationItems as $item) {
                                                         $variation_sql = "SELECT * FROM `variations` WHERE variation_name = '$item' AND token = '$token' AND product_name = '$product_name'";
                                                         $variation_query = mysqli_query($conn,$variation_sql);
                                                         $variation_result = mysqli_fetch_array($variation_query);
                                                         
                                                         $variation_id = $variation_result['id'];
                                                         
                                                         echo "<option value='$variation_id'>$item</option>";
        }
                                                    ?>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    }
                                    ?>
           
                                        <div id="priceDiv" style="font-size: 2.4rem;font-weight: 600;color: #333;line-height: 1;margin-bottom: 1.2rem;padding-top: 2.8rem;">
                                            <span id="small_sale_price"></span>
                                        </div>
                                        
                                        
                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container add-cart">
                                            <div class="product-qty-form">
                                                <input type="hidden" name="hidden_name" value="<?php echo $rows["title"]; ?>" />
                                                <input type="hidden" name="hidden_price" id="small_sale" value="<?php echo $rows["sale_price"]; ?>" />
                                                <input type="hidden" name="image" value="<?php echo $rows["image"]; ?>" />
                                                <input type="hidden" name="token" value="<?php echo $rows["token"]; ?>" />
                                                <input class="form-control" name="quantity" type="number" value="1" id="quantityInput">
                                            </div>
                                            <input type="submit" name="add_to_cart" style="margin-top: -1rem;" class="btn btn-success" value="Add to Cart" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                <div class="row mb-4">
                                    <div class="col-md-12 mb-5">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                        <ul class="list-type-check">
                                            <?= $rows['description']; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tab-specification">
                                <ul class="list-none">
                                    <li>
                                        <label>Model</label>
                                        <p>Skysuite 320</p>
                                    </li>
                                    <li>
                                        <label>Color</label>
                                        <p>Black</p>
                                    </li>
                                    <li>
                                        <label>Size</label>
                                        <p>Large, Small</p>
                                    </li>
                                    <li>
                                        <label>Guarantee Time</label>
                                        <p>3 Months</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="product-tab-vendor">
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-4">
                                        <figure class="vendor-banner br-sm">
                                            <img src="assets/images/products/vendor-banner.jpg" alt="Vendor Banner" width="610" height="295" style="background-color: #353B55;" />
                                        </figure>
                                    </div>
                                    <div class="col-md-6 pl-2 pl-md-6 mb-4">
                                        <div class="vendor-user">
                                            <figure class="vendor-logo mr-4">
                                                <a href="#">
                                                    <img src="assets/images/products/vendor-logo.jpg" alt="Vendor Logo" width="80" height="80" />
                                                </a>
                                            </figure>
                                            <div>
                                                <div class="vendor-name"><a href="#">Jone Doe</a></div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 90%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(32 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="vendor-info list-style-none">
                                            <li class="store-name">
                                                <label>Store Name:</label>
                                                <span class="detail">OAIO Store</span>
                                            </li>
                                            <li class="store-address">
                                                <label>Address:</label>
                                                <span class="detail">Steven Street, El Carjon, CA 92020, United
                                                    States (US)</span>
                                            </li>
                                            <li class="store-phone">
                                                <label>Phone:</label>
                                                <a href="#tel:">1234567890</a>
                                            </li>
                                        </ul>
                                        <a href="vendor-dokan-store.html" class="btn btn-dark btn-link btn-underline btn-icon-right">Visit
                                            Store<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <p class="mb-5"><strong class="text-dark">L</strong>orem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                                    Venenatis tellus in metus vulputate eu scelerisque felis. Vel pretium
                                    lectus quam id leo in vitae turpis massa. Nunc id cursus metus aliquam.
                                    Libero id faucibus nisl tincidunt eget. Aliquam id diam maecenas ultricies
                                    mi eget mauris. Volutpat ac tincidunt vitae semper quis lectus. Vestibulum
                                    mattis ullamcorper velit sed. A arcu cursus vitae congue mauris.
                                </p>
                                <p class="mb-2"><strong class="text-dark">A</strong> arcu cursus vitae congue
                                    mauris. Sagittis id consectetur purus
                                    ut. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla.
                                    Diam in
                                    arcu cursus euismod quis. Eget sit amet tellus cras adipiscing enim eu. In
                                    fermentum et sollicitudin ac orci phasellus. A condimentum vitae sapien
                                    pellentesque
                                    habitant morbi tristique senectus et. In dictum non consectetur a erat. Nunc
                                    scelerisque viverra mauris in aliquam sem fringilla.</p>
                            </div>
                            <div class="tab-pane" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50" id="average_rating"></h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold"></span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <!--Review Section-->
                                    
                                    
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                Review</h3>
                                                <div class="rating-form mt-2">
                                                    <label for="rating">Your Rating Of This Product :</label>
                                                    <span class="rating-stars">
                                                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                                                       <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                                                       <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                                                        <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                                                    </span>
                                                </div>
                                                <textarea cols="30" rows="6" placeholder="Write Your Review Here..." class="form-control" name="user_review" id="user_review"></textarea>
                                                <div class="row gutter-md">
                                                    <div class="col-md-6 mt-3">
                                                        <input type="text" class="form-control" placeholder="Your Name" name="user_name" id="user_name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="hidden" class="form-control"  name="product_id" id="product_id" value="<?php echo $_GET['id'] ?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-dark mt-3" name="save_review" id="save_review">Submit Review</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="show-all">
                                            <ul class="comments list-style-none">
                                                
                                                <?php
                                                $id = $_GET['id'];
                                                $sqlQuery = "SELECT * FROM `review_table` WHERE product_id = '$id' AND status = 1";
                                                $query = mysqli_query($conn,$sqlQuery);
                                                while($data = mysqli_fetch_array($query)){
                                                    ?>
                                                    <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <div class="rounded-circle" style="background-color: #799b5a; border-radius:50%;" >
                                                                <h3 class="text-center" style="color:#fff; font-size: 5rem; padding: 12px; margin-top: 18px;">
                                                            <?php
                                                            $name = $data['user_name'];
                                                            $firstCharacter = substr($name, 0, 1);
                                                            echo $firstCharacter;
                                                            ?>
                                                            
                                                        </h3></div>
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href=""><?php echo $data['user_name'] ?></a>
                                                                <span class="comment-date"><?php echo $data['datetime'] ?></span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <?php
                                                                
                                                                	if($data["user_rating"] == '5')
		{
			?>
			<span class="rating-stars">
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                    </span>
			<?php
		}

		if($data["user_rating"] == '4')
		{
				?>
		<span class="rating-stars">
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                    </span>
			<?php
		}

		if($data["user_rating"] == '3')
		{
				?>
			<span class="rating-stars">
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                    </span>
			<?php
		}

		if($data["user_rating"] == '2')
		{
				?>
		<span class="rating-stars">
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                    </span>
			<?php
		}

		if($data["user_rating"] == '1')
		{
				?>
			<span class="rating-stars">
                                                        <i class="fas fa-star star-warning" style="color:orange;"></i>
                                                        <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                       <i class="fas fa-star star-light"></i>
                                                    </span>
			<?php
		}

                                                                
                                                                ?>
                                                            </div>
                                                            <p><?php echo $data['user_review'] ?></p>
                                                            <div class="comment-action">
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="vendor_dashboard/src/front-store/uploads/<?php echo $rows["image"]; ?>" width="60" height="60" alt="Attachment image of John Doe's review on Electronics Black Wrist Watch" data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="vendor-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title text-left">Related Products</h4>
                            <?php
                            $cat = $rows['category'];
                            ?>
                            <a href="category.php<?php echo '?category=' . $cat; ?>" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                <?php
                                $query_1 = "SELECT * FROM `products_detail` where category = '$cat' AND `status` = 'Approved' ";


                                $result_1 = mysqli_query($conn, $query_1);

                                if (mysqli_num_rows($result_1) > 0) {

                                    // OUTPUT DATA OF EACH ROW
                                    while ($row_1 = mysqli_fetch_assoc($result_1)) {
                                        $title = $row_1['title'];
                                        $img_Query = mysqli_query($conn, "SELECT * FROM `tbl_images` WHERE `title` = '$title' ");
                                        $img_row = mysqli_fetch_array($img_Query);
                                ?>
                                        <div class="swiper-slide product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $row_1['image'] ?>" alt="Product" width="216" height="243" />
                                                    <img src="<?= '././vendor_dashboard/src/' . $img_row['images'] ?>" alt="Product" width="216" height="243" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat"><a href="shop-banner-sidebar.html"><?= $row_1['category'] ?></a>
                                                </div>
                                                <h4 class="product-name"><a href="single_product.php?id=<?php echo $row_1['id']; ?>"><?= implode(' ', array_slice(explode(' ', $row_1['title']), 0, 2)) . "\n"; ?>....</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        <del class="old-price">$<?= $row_1['regular_price']; ?>></del>
                                                        <ins class="new-price">$<?= $row_1['sale_price']; ?></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </section>
                    <section class="related-product-section">
                        <div class="title-link-wrapper mb-4">
                            <h4 class="title">YOU MIGHT ALSO LIKE</h4>
                            <a href="shop.php" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                Products<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                <?php
                                $query = "SELECT * FROM `products_detail` WHERE `status` = 'Approved'";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    // OUTPUT DATA OF EACH ROW
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <div class="swiper-slide product">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $row['image'] ?>" alt="Product" width="300" height="338" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="single_product.php?id=<?php echo $row['id']; ?>"><?= $row['title'] ?>....</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price"><del class="old-price">$<?= $row['regular_price']; ?></del>
                                                        <ins class="new-price">$<?= $row['sale_price']; ?></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- End of Main Content -->
                <?php $eQuery_11 = "SELECT * FROM `section_11`";
                $equery_11 = mysqli_query($conn, $eQuery_11);
                $rows_11 = mysqli_fetch_array($equery_11);
                ?>
                <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                    <div class="sidebar-overlay"></div>
                    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                    <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                    <div class="sidebar-content scrollable">
                        <div class="sticky-sidebar">
                            <div class="widget widget-icon-box mb-6">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_1'] ?>" alt="Icon Free Ship" class="absolute" />
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows_11['title_1'] ?></h4>
                                        <p><?= $rows_11['des_1'] ?></p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_2'] ?>" alt="Icon Free Ship" class="absolute" />
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows_11['title_2'] ?></h4>
                                        <p><?= $rows_11['des_2'] ?></p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_3'] ?>" alt="Icon Free Ship" class="absolute" />
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows_11['title_3'] ?></h4>
                                        <p><?= $rows_11['des_3'] ?></p>
                                    </div>
                                </div>
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <img src="<?= '././admin/src/front-store/uploads/' . $rows_11['icon_img_4'] ?>" alt="Icon Free Ship" class="absolute" />
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title"><?= $rows_11['title_4'] ?></h4>
                                        <p><?= $rows_11['des_4'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Widget Icon Box -->

                            <div class="widget widget-banner mb-9">
                                <div class="banner banner-fixed br-sm">
                                    <figure>
                                        <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266" height="220" style="background-color: #1D2D44;" />
                                    </figure>
                                    <div class="banner-content">
                                        <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                            40<sup class="font-weight-bold">%</sup><sub class="font-weight-bold text-uppercase ls-25">Off</sub>
                                        </div>
                                        <h4 class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                            Ultimate Sale</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Widget Banner -->

                            <div class="widget widget-products">
                                <div class="title-link-wrapper mb-2">
                                    <h4 class="title title-link font-weight-bold">More Products</h4>
                                </div>

                                <div class="swiper nav-top">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'navigation': {
                                                    'prevEl': '.swiper-button-prev',
                                                    'nextEl': '.swiper-button-next'
                                                }
                                            }">

                                        <div class="swiper-wrapper">
                                            <?php
                                            $counter = 1;

echo '<div class="swiper-slide product-widget-wrap">';

                                           $seller1_1 ="SELECT token FROM b_info Where best_seller = 'YES'";
                                             $s1 = mysqli_query($conn,$seller1_1);
                                             
                                               while ($best_seller_products = mysqli_fetch_array($s1)){
                                            $token_1 = $best_seller_products['token'];
                                            $best_seller = "SELECT * FROM products_detail WHERE token = '$token_1' AND status = 'Approved'";
                                            $best_seller_query = mysqli_query($conn,$best_seller);
                                            $records = [];
                                            while ($best_seller_product = mysqli_fetch_array($best_seller_query)){
                                                $records[] = $best_seller_product ; }
                                            foreach ($records as $record) { ?>
                                                <div class="product product-widget">

                                                    <figure class="product-media">
                                                        <a href="single_product.php?id=<?php echo $record['id']; ?>">
                                                            <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $record['image'] ?>" alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="single_product.php?id=<?php echo $record['id']; ?>"><?= implode(' ', array_slice(explode(' ', $record['title']), 0, 2)) . "\n"; ?></a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <?php
                                                             if(!empty($record['sale_price'])){
                                                                 ?>
                                                                  <ins class="new-price">$<?= $record['sale_price']; ?></ins>
                                                                 <?php
                                                             }
                                                             
                                                              if(!empty($record['regular_price'])){
                                                                 ?>
                                                                  <del class="old-price">$<?= $record['regular_price']; ?></del>
                                                                 <?php
                                                             }
                                                            ?>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                             <?php if ($counter % 3 == 0) {
        echo '</div><div class="swiper-slide product-widget-wrap">';
    }
    
    $counter++;
}}
echo '</div>';

?>

                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- End of Sidebar -->
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->
<?php @include('footer.php'); ?>










<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();
        
        var product_id = $('#product_id').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review, product_id: product_id},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
            location.reload();
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>







<!--Select Code-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){  
	// code to get all records from table via select box
	$(".employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'get_data.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(employeeData) {
					$("#heading").show();		  
					$("#no_records").hide();
					$("#small_sale_price").text("$" + employeeData.small_sale_price);
					$("#small_sales_price").text("$" + employeeData.small_sale_price);
					$("#small_sale").val(employeeData.small_sale_price);
					$("#small_regular_prices").text("$" + employeeData.small_regular_price);
					$("#small_sku").text(employeeData.small_sku);
					$("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});
</script>


<script>
  var smallSalePrice = document.getElementById("small_sale_price").innerHTML.trim();
  var priceDiv = document.getElementById("priceDiv");



</script>




<script>
    const quantityInput = document.getElementById('quantityInput');
    quantityInput.addEventListener('change', function() {
      const quantity = parseInt(quantityInput.value);
      if (quantity <= 0) {
        quantityInput.value = '1';
      }
    });
  </script>

