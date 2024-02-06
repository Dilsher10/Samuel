<?php 
@include('header.php'); 
?>

        <main class="main cart">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="order.php">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <div class="page-content">
                <div class="container">
                    <?php
                          if (!empty($_SESSION["shopping_cart"])) { ?>
                           
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Product</span></th>
                                        <th>Product Name</th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-subtotal"><span>Subtotal</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                            ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="single_product.php?id=<?= $values["item_id"]; ?>">
                                                    <figure>
                                                        <img src="<?= '././vendor_dashboard/src/front-store/uploads/' . $values['item_image'] ?>" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                                </a>
                                                <button type="submit" class="btn btn-close"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><i
                                                        class="fas fa-times"></i></a></button>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="single_product.php?id=<?= $values["item_id"]; ?>">
                                                <?= $values["item_name"]; ?>
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">$ <?= $values["item_price"]; ?> </span></td>
                                        <td class="product-quantity">
                                            <div class="input-group">
                                                <?= $values["item_quantity"] ?>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></span>
                                        </td>
                                    </tr>
                                    <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }   ?>
                                </tbody>
                            </table>
                            <div class="cart-action mb-6">
                                <a href="shop.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>$<?php echo number_format($total, 2); ?></span>
                                    </div>
                                    <hr class="divider">
                                    <a href="/checkout.php"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                               <?php } else if (empty($_SESSION["shopping_cart"])) { ?>
                <h1 style="text-align:center"><strong> CART EMPTY </strong></h1>
            <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <style>
        .input-group {
    justify-content: center;
    align-items: center;
}
.shop-table tbody td:not(:first-child), .shop-table thead th:not(:first-child) {
    padding-left: 1rem;
    text-align: center;
}
ul.menu.vertical-menu.category-menu li a img{
    width: 19px;
}
 </style>
<?php @include('footer.php'); ?>