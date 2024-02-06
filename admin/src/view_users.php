<?php include 'header.php';
error_reporting(0);
$token = $_GET['token'];
$query = mysqli_query($conn,"Select * FROM `user_registration` WHERE `token`='$token'");
$row = mysqli_fetch_array($query);
$email = $row['email_address'];
$name = $row['username'];
if(isset($_POST['approved'])){
    $sql_1 = "UPDATE `user_registration` SET `status`='Approved' WHERE `token`='$token' ";
    $sql_2 = "UPDATE `products_detail` SET `status`='Approved' WHERE `token`='$token' ";
    $query_1 = mysqli_query($conn, $sql_1);
    $query_2 = mysqli_query($conn, $sql_2);
     // SEND MAIL TO USERS

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
      <td><p style='margin-top:20px; padding:0 5px; letter-spacing:0.3px; line-height:20px; font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:500;font-style:normal'>Hi, <b>$name</p></td>
    </tr>
     <tr>
      <td><div class='row'>
    <div class='col-md-12 mt-5 mb-5' style='text-align:center;margin: 5rem 0rem 10rem;'>
    <strong><p>
            Your account has been approved.
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

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"
    ;
     mail($to, $subject, $message, $headers);
  if ($query_1 && $query_2) {
    echo "<script>
    window.location.href='users.php';
    </script>";
  } else {
    echo mysqli_error($conn);
    echo 'something went wrong';
  }
}
if(isset($_POST['disapproved'])){
    $sql_1 = "UPDATE `user_registration` SET `status`='Dispproved' WHERE `token`='$token' ";
    $sql_2 = "UPDATE `products_detail` SET `status`='Dispproved' WHERE `token`='$token' ";
    $query_1 = mysqli_query($conn, $sql_1);
    $query_2 = mysqli_query($conn, $sql_2);
    
      // SEND MAIL TO USERS

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
      <td><p style='margin-top:20px; padding:0 5px; letter-spacing:0.3px; line-height:20px; font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:500;font-style:normal'>Hi, <b>$name</p></td>
    </tr>
     <tr>
      <td><div class='row'>
    <div class='col-md-12 mt-5 mb-5' style='text-align:center;margin: 5rem 0rem 10rem;'>
    <strong><p>
            Your Account Is Disapproved.
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

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"
    ;
     mail($to, $subject, $message, $headers);
     
  if ($query_1 && $query_2) {
    echo "<script>
    window.location.href='users.php';
    </script>";
  } else {
    echo mysqli_error($conn);
    echo 'something went wrong';
  }
}
$pQuery = "SELECT * FROM `seller_account` WHERE token = '$token' ";
$pquery = mysqli_query($conn, $pQuery);
$prows = mysqli_fetch_array($pquery);

$bQuery = "SELECT * FROM `bank_account_detail` WHERE token = '$token' ";
$bquery = mysqli_query($conn, $bQuery);
$brows = mysqli_fetch_array($bquery);

$b_iQuery = "SELECT * FROM `b_info` WHERE token = '$token' ";
$b_iquery = mysqli_query($conn, $b_iQuery);
$b_irows = mysqli_fetch_array($b_iquery);

$wQuery = "SELECT * FROM `warehouse_address` WHERE token = '$token' ";
$wquery = mysqli_query($conn, $wQuery);
$wrows = mysqli_fetch_array($wquery);


$rQuery = "SELECT * FROM `return_address` WHERE token = '$token' ";
$rquery = mysqli_query($conn, $rQuery);
$rows = mysqli_fetch_array($rquery);
?>
<form method="post">
    <main>
      <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                    
                  </a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Profile Information</h1>
                </div>
              </div>
              <!-- Title End -->
              <!-- Top Buttons Start -->

              <div class="w-100 d-md-none"></div>
             <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="approved" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Approve</span>
            </button>
          </div>
          </form>
          &nbsp;&nbsp;
            <div class="col col-md-auto d-flex align-items-end justify-content-end">
            <button name="disapproved" type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
              <i data-acorn-icon="send"></i>
              <span>Disapprove</span>
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
                <h2 class="small-title">PROFILE INFO</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        <label class="form-label">First Name*</label>
                    <input name="f_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $prows['first_name'] ?>" disabled >
                        </div>
                        <div class="col-6">
                        <label class="form-label">Last Name*</label>
                    <input name="l_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $prows['last_name'] ?>" disabled>
                        </div>
                    </div>
                    <label class="form-label">Contact Email Address*</label>
                    <input class="form-control mb-5" name="email" value="<?= $prows['email'] ?>" disabled>
                    <label class="form-label">Contact Number*</label>
                    <input class="form-control mb-5" name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $prows['phone'] ?>" disabled>
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>

            <div class="col-xl-4 mb-n5">
              <!-- Image Start -->
              <div class="mb-5">
                <h2 class="small-title">Profile Image</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img src="<?= 'https://backslashwebs.com/samuel/Simuel_dashboard/src/front-store/uploads/' . $prows['user_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>
  
   <main>
      <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <h1 class="mb-0 pb-0 display-4" id="title">Bank Account Details</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
             
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-8">
              <!-- Product Info Start -->
              <div class="mb-5">
                <div class="card">
                  <div class="card-body">
                    <label class="form-label">Account Title*</label>
                    <input name="account_title" class="form-control mb-5" value="<?= $brows['account_title'] ?>" disabled >
                      
                    <label class="form-label">Account Number*</label>
                    <input name="account_number" class="form-control mb-5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?= $brows['account_number'] ?>" disabled>
                      
                    <label class="form-label">Bank Name*</label>
                    <input name="bank_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'  value="<?= $brows['bank_name'] ?>" disabled>

                    <label class="form-label">Branch Code*</label>
                    <input class="form-control mb-5" name="branch_code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?= $brows['branch_code'] ?>" disabled> 

                    <label class="form-label">IBAN*</label>
                    <input name="IBAN" class="form-control mb-5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?= $brows['IBAN'] ?>" disabled>

                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>

            <div class="col-xl-4 mb-n5">
              <!-- Image Start -->
              <div class="mb-5">
                <h2 class="small-title">Cheque Image</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img src="<?= 'https://backslashwebs.com/samuel/Simuel_dashboard/src/front-store/uploads/'.$brows['cheque_copy']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>


<main>
      <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Bussiness Information</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-8">
              <!-- Product Info Start -->
              <div class="mb-5">
                <div class="card">
                  <div class="card-body">
                    <label class="form-label">Company Name*</label>
                    <input name="comapny_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $b_irows['comapny_name']?>" disabled>
                    <label class="form-label">Address*</label>
                    <input disabled name="address" class="form-control mb-5" value="<?= $b_irows['address']?>">
                    <div class="mb-5 w-100">
                      <label class="form-label">Country/Region*</label>
                      <input disabled name="address" class="form-control mb-5" value="<?= $b_irows['country'] ?>">
                    </div>
                    <label class="form-label">State*</label>
                    <input disabled name="state" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value=<?= $b_irows['state'] ?> >
                    <label class="form-label">Area*</label>
                    <input disabled name="area" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value=<?= $b_irows['area'] ?> >
                    <label class="form-label">Bussiness Registration Number*</label>
                    <input class="form-control mb-5" disabled name="b_registration_no" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value=<?= $b_irows['b_registration_no'] ?>> 
                    <label class="form-label">Person In Charge Name*</label>
                    <input disabled name="incharge_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value=<?= $b_irows['incharge_name'] ?> >
                    <label class="form-label">Person In Charge Email Address*</label>
                    <input class="form-control mb-5" disabled name="incharge_email" value=<?= $b_irows['incharge_email'] ?>>
                    <label class="form-label">Person In Charge Mobile Number*</label>
                    <input class="form-control mb-5" disabled name="incharge_mob" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value=<?= $b_irows['incharge_mob'] ?> >
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>

            <div class="col-xl-4 mb-n5">
              <!-- Image Start -->
              <div class="mb-5">
                <h2 class="small-title">ID Card (Front Side)</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img src="<?= 'https://backslashwebs.com/samuel/Simuel_dashboard/src/front-store/uploads/' . $b_irows['front_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-5">
                <h2 class="small-title">ID Card (Back side)</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                        <img src="<?= 'https://backslashwebs.com/samuel/Simuel_dashboard/src/front-store/uploads/' . $b_irows['back_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
                <div class="mb-5">
                <h2 class="small-title">Company Logo</h2>
                <div class="card">
                  <div class="card-body">
                    <div class="user-image mb-3 text-center">
                      <div>
                       <img src="<?= 'https://backslashwebs.com/samuel/Simuel_dashboard/src/front-store/uploads/' . $b_irows['company_logo']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>

<main>
      <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Warehouse Info</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-8">
              <!-- Product Info Start -->
              <div class="mb-5">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                        <div class="col-6">
                        <label class="form-label">First Name*</label>
                    <input disabled name="f_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $wrows['first_name']?>">
                        </div>
                        <div class="col-6">
                        <label class="form-label">Last Name*</label>
                    <input disabled name="l_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $wrows['last_name']?>">
                        </div>
                    </div>
                    <div class="mb-5 w-100">
                      <label class="form-label">Country/Region*</label>
                       <input disabled name="l_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $wrows['country']?>">
                    </div>
                    <label class="form-label">Address*</label>
                    <input disabled name="address" class="form-control mb-5" value="<?= $wrows['address']?>">
                    <label class="form-label">State*</label>
                    <input disabled name="state" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $wrows['state']?>">
                    <label class="form-label">Phone*</label>
                    <input class="form-control mb-5" disabled name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $wrows['phone']?>"> 
                    <label class="form-label">Email*</label>
                    <input class="form-control mb-5" disabled name="email" value="<?= $wrows['email']?>">
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
            <div class="col-xl-4 mb-n5">
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>

 <main>
      <div class="container">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Return Info</h1>
                </div>
              </div>
              <!-- Title End -->

              <!-- Top Buttons Start -->
              <div class="w-100 d-md-none"></div>
           
              <!-- Top Buttons End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <div class="row">
            <div class="col-xl-8">
              <!-- Product Info Start -->
              <div class="mb-5">
                <div class="card">
                  <div class="card-body">
                  <div class="row">
                        <div class="col-6">
                        <label class="form-label">First Name*</label>
                    <input disabled name="f_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['first_name']?>">
                        </div>
                        <div class="col-6">
                        <label class="form-label">Last Name*</label>
                    <input disabled name="l_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['last_name']?>">
                        </div>
                    </div>
                    <div class="mb-5 w-100">
                      <label class="form-label">Country/Region*</label>
                      <input disabled name="l_name" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['country']?>">
                    </div>
                    <label class="form-label">Address*</label>
                    <input disabled name="address" class="form-control mb-5" value="<?= $rows['address']?>">
                    <label class="form-label">State*</label>
                    <input disabled name="state" class="form-control mb-5" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' value="<?= $rows['state']?>">
                    <label class="form-label">Phone*</label>
                    <input class="form-control mb-5" disabled name="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $rows['phone']?>"> 
                    <label class="form-label">Email*</label>
                    <input class="form-control mb-5" disabled name="email" value="<?= $rows['email']?>">
                  </div>
                </div>
              </div>
              <!-- Product Info End -->
            </div>
            <div class="col-xl-4 mb-n5">
        <!-- Image End -->
      </div>
  </div>
  </div>
  </main>


  <?php include 'footer.php' ?>