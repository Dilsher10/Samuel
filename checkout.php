<?php 

include 'cart-funtion.php';
 session_start();
    if(!isset($_SESSION['shopping_cart']) || empty($_SESSION['shopping_cart']))
    {
        header('location:index.php');
        exit();
    }
    require_once('inc/config.php');    
    require_once('inc/helpers.php');  
    $cartItemCount = count($_SESSION['shopping_cart']);
    if(isset($_POST['submit']))
    {
        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['address'],$_POST['country'],$_POST['state'],$_POST['zipcode']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['country']) && !empty($_POST['state']) && !empty($_POST['zipcode']))
        {
           $firstName = $_POST['first_name'];

           if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false)
           {
                 $errorMsg[] = 'Please enter valid email address';
           }
           else
           {
                $firstName  = validate_input($_POST['first_name']);
                $lastName   = validate_input($_POST['last_name']);
                $email      = validate_input($_POST['email']);
                $address    = validate_input($_POST['address']);
                $phone   = validate_input($_POST['phone']);
                $country    = validate_input($_POST['country']);
                $state      = validate_input($_POST['state']); 
                $zipcode    = validate_input($_POST['zipcode']);
                $order_note = $_POST['order_note'];

                $sql = 'insert into orders (first_name, last_name, email, address, phone, country, state, zipcode, order_status,order_note,created_at, updated_at) values (:fname, :lname, :email, :address, :phone, :country, :state, :zipcode, :order_status, :order_note, :created_at, :updated_at)';

    $to = $email;
    $subject = "Details";

    $message = "
    <html> 
    <head> 
        <title>Welcome</title> 
    </head> 
    <body>
    <table style='border:2px solid #DAA520; width:100%;'>
  <thead style='background-color:#DAA520; color:white;'>
    <tr>
      <th style='padding:20px 0; font-size:20px;'>Your Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><p style='margin-top:20px; padding:0 5px; letter-spacing:0.3px; line-height:20px; font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:500;font-style:normal'>Hi, <b>$firstName&nbsp;$lastName</b></p></td>
    </tr>
     <tr>
      <td><div class='row'>
    <div class='col-md-12 mt-5 mb-5' style='text-align:center;margin: 5rem 0rem 10rem;'>
    <strong><h1>Thank you!</h1></strong>
    <strong><p>
            Your order has been placed.
        </p></strong>
    </div>
</div>
      </td>
    </tr>
  </tbody>
</table>
    </body> 
    </html>

";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     mail($to, $subject, $message, $headers);
                $statement = $db->prepare($sql);
                $params = [
                    'fname' => $firstName,
                    'lname' => $lastName,
                    'email' => $email,
                    'address' => $address,
                    'phone' => $phone,
                    'country' => $country,
                    'state' => $state,
                    'zipcode' => $zipcode,
                    'order_status' => 'confirmed',
                    'order_note' => $order_note,
                    'created_at'=> date('Y-m-d H:i:s'),
                    'updated_at'=> date('Y-m-d H:i:s')
                ];

                $statement->execute($params);
                if($statement->rowCount() == 1)
                {
                    $getOrderID = $db->lastInsertId();
                    if(isset($_SESSION['shopping_cart']) || !empty($_SESSION['shopping_cart']))
                    {
                        $date = date('Y-m-d');
                        $sqlDetails = "insert into order_details (order_id, product_id, product_name, product_price, qty, total_price,token,date) values(:order_id,:product_id,:product_name,:product_price,:qty,:total_price,:token,'$date')";
                        $orderDetailStmt = $db->prepare($sqlDetails);
                         
                        $totalPrice = 0;
                        foreach($_SESSION['shopping_cart'] as $item)
                        {
                          $total = $item['item_price'] * $item['item_quantity'];
                          $totalPrice+= $total;
                            $paramOrderDetails = [
                                'order_id' =>  $getOrderID,
                                'product_id' =>  $item['item_id'],
                                'product_name' => $item['item_name'],
                                'product_price' => $item['item_price'],
                                'qty' =>  $item['item_quantity'],
                                'total_price' => $totalPrice,
                                'token' => $item['item_token']
                            ];
                            $orderDetailStmt->execute($paramOrderDetails);
                            $orderDetailStmt->bindParam($paramOrderDetails);
                        }
                        $updateSql = 'update orders set total_price = :total where id = :id';
                        $rs = $db->prepare($updateSql);
                        $prepareUpdate = [
                            'total' => $totalPrice,
                            'id' =>$getOrderID
                        ];
                        $rs->execute($prepareUpdate);
                        unset($_SESSION['shopping_cart']);
                        $_SESSION['confirm_order'] = true;
                        header('location:order.php');
                        exit();
                    }
                }
                else
                {
                    $errorMsg[] = 'Unable to save your order. Please try again';
                }
           }
        }
        else
        {
            $errorMsg = [];

            if(!isset($_POST['first_name']) || empty($_POST['first_name']))
            {
                $errorMsg[] = 'First name is required';
            }
            else
            {
                $fnameValue = $_POST['first_name'];
            }

            if(!isset($_POST['last_name']) || empty($_POST['last_name']))
            {
                $errorMsg[] = 'Last name is required';
            }
            else
            {
                $lnameValue = $_POST['last_name'];
            }

            if(!isset($_POST['email']) || empty($_POST['email']))
            {
                $errorMsg[] = 'Email is required';
            }
            else
            {
                $emailValue = $_POST['email'];
            }

            if(!isset($_POST['address']) || empty($_POST['address']))
            {
                $errorMsg[] = 'Address is required';
            }
            else
            {
                $addressValue = $_POST['address'];
            }

            if(!isset($_POST['country']) || empty($_POST['country']))
            {
                $errorMsg[] = 'Country is required';
            }
            else
            {
                $countryValue = $_POST['country'];
            }

            if(!isset($_POST['state']) || empty($_POST['state']))
            {
                $errorMsg[] = 'State is required';
            }
            else
            {
                $stateValue = $_POST['state'];
            }

            if(!isset($_POST['zipcode']) || empty($_POST['zipcode']))
            {
                $errorMsg[] = 'Zipcode is required';
            }
            else
            {
                $zipCodeValue = $_POST['zipcode'];
            }


            if(isset($_POST['phone']) || !empty($_POST['phone']))
            {
                 $errorMsg[] = 'Phone is required';
            }else{
                $phoneValue = $_POST['phone'];
            }
            
            

        }
    }

    include('header.php');
?>

        <main class="main checkout">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.php">Shopping Cart</a></li>
                        <li class="active"><a href="checkout.php">Checkout</a></li>
                        <li><a href="order.php">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <div class="page-content">
                <div class="container">
                    
                    <?php
                    $token = $_SESSION['token'];
                    $sqlQuery = "SELECT * FROM `user` WHERE token = '$token'";
                    $query = mysqli_query($conn,$sqlQuery);
                    $data = mysqli_fetch_array($query);
                     
                    if(isset($_SESSION['token'])){
                        ?>
                        <form class="form checkout-form" method="post">
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control form-control-md" onkeydown='return validateText(event)' name="first_name" value="<?= $data['username']; ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xs-0">
                                        <div class="form-group">
                                            <input onkeydown="return /[a-z]/i.test(event.key)" type="hidden" class="form-control form-control-md" onkeydown='return validateText(event)' name="last_name" value="<?php echo (isset($lnameValue) && !empty($lnameValue)) ? $lnameValue:'' ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Country / Region *</label>
                                    <div class="select-box">
                                        <select name="country" class="form-control form-control-md">
                                            <option value="default" selected="selected">United States
                                                (US)
                                            </option>
                                            <option value="uk">United Kingdom (UK)</option>
                                            <option value="us">United States</option>
                                            <option value="fr">France</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="address" value="<?php echo (isset($addressValue) && !empty($addressValue)) ? $addressValue:'' ?>" required>
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <div class="select-box">
                                                <select name="state" class="form-control form-control-md">
                                                    <option value="default" selected="selected">California</option>
                                                    <option value="uk">United Kingdom (UK)</option>
                                                    <option value="us">United States</option>
                                                    <option value="fr">France</option>
                                                    <option value="aus">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email address *</label>
                                        <input type="email" class="form-control form-control-md" name="email" value="<?= $data['email_address']; ?>" readonly required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>ZIP *</label>
                                            <input type="text" class="form-control form-control-md" name="zipcode" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo (isset($zipCodeValue) && !empty($zipCodeValue)) ? $zipCodeValue:'' ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" maxlength="10" class="form-control form-control-md" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['phone_number']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="order_note" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                	<?php
                          if (!empty($_SESSION["shopping_cart"])) { ?>
							<?php  $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                            ?>
                                                <tr class="bb-no">
                                                    <td class="product-name"><?= $values["item_name"]; ?><i
                                                            class="fas fa-times"></i> <span
                                                            class="product-quantity"><?= $values["item_quantity"] ?></span></td>
                                                    <td class="product-total">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                                </tr>
                                                 <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }   ?>
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b>$<?php echo number_format($total, 2); ?></b>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button class="btn btn-dark btn-block btn-rounded" type="submit" name="submit" value="submit">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <?php
                    }
                    else{
                        ?>
                        <form class="form checkout-form" method="post">
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control form-control-md" onkeydown='return validateText(event)' name="first_name" value="<?php echo (isset($fnameValue) && !empty($fnameValue)) ? $fnameValue:'' ?>"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input onkeydown="return /[a-z]/i.test(event.key)" type="text" class="form-control form-control-md" onkeydown='return validateText(event)' name="last_name" value="<?php echo (isset($lnameValue) && !empty($lnameValue)) ? $lnameValue:'' ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Country / Region *</label>
                                    <div class="select-box">
                                        <select name="country" class="form-control form-control-md">
                                            <option value="default" selected="selected">United States
                                                (US)
                                            </option>
                                            <option value="uk">United Kingdom (UK)</option>
                                            <option value="us">United States</option>
                                            <option value="fr">France</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2" name="address" value="<?php echo (isset($addressValue) && !empty($addressValue)) ? $addressValue:'' ?>" required>
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <div class="select-box">
                                                <select name="state" class="form-control form-control-md">
                                                    <option value="default" selected="selected">California</option>
                                                    <option value="uk">United Kingdom (UK)</option>
                                                    <option value="us">United States</option>
                                                    <option value="fr">France</option>
                                                    <option value="aus">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email address *</label>
                                        <input type="email" class="form-control form-control-md" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" name="email" value="<?php echo (isset($emailValue) && !empty($emailValue)) ? $emailValue:'' ?>" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>ZIP *</label>
                                            <input type="text" class="form-control form-control-md" name="zipcode" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo (isset($zipCodeValue) && !empty($zipCodeValue)) ? $zipCodeValue:'' ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" maxlength="10" class="form-control form-control-md" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo (isset($phoneValue) && !empty($phoneValue)) ? $phoneValue:'' ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="order_note" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                	<?php
                          if (!empty($_SESSION["shopping_cart"])) { ?>
							<?php  $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                            ?>
                                                <tr class="bb-no">
                                                    <td class="product-name"><?= $values["item_name"]; ?><i
                                                            class="fas fa-times"></i> <span
                                                            class="product-quantity"><?= $values["item_quantity"] ?></span></td>
                                                    <td class="product-total">$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                                </tr>
                                                 <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                            }   ?>
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b>$<?php echo number_format($total, 2); ?></b>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button class="btn btn-dark btn-block btn-rounded" type="submit" name="submit" value="submit">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <?php
                    }
                    
                    ?>
                    
                    
                </div>
            </div>
        </main>
<?php @include('footer.php'); ?>