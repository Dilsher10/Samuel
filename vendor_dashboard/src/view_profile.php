<?php include 'header.php';
error_reporting(0);
$pQuery = "SELECT * FROM `seller_account` WHERE token = '" .  $_SESSION['token'] . "' ";
$pquery = mysqli_query($conn, $pQuery);
$prows = mysqli_fetch_array($pquery);

$bQuery = "SELECT * FROM `bank_account_detail` WHERE token = '" .  $_SESSION['token'] . "' ";
$bquery = mysqli_query($conn, $bQuery);
$brows = mysqli_fetch_array($bquery);

$b_iQuery = "SELECT * FROM `b_info` WHERE token = '" .  $_SESSION['token'] . "' ";
$b_iquery = mysqli_query($conn, $b_iQuery);
$b_irows = mysqli_fetch_array($b_iquery);

$wQuery = "SELECT * FROM `warehouse_address` WHERE token = '" .  $_SESSION['token'] . "' ";
$wquery = mysqli_query($conn, $wQuery);
$wrows = mysqli_fetch_array($wquery);


$rQuery = "SELECT * FROM `return_address` WHERE token = '" .  $_SESSION['token'] . "' ";
$rquery = mysqli_query($conn, $rQuery);
$rows = mysqli_fetch_array($rquery);
?>
    <main>
      <div class="container">
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <input type="button" class="muted-link pb-1 d-inline-block breadcrumb-back backBtn" value="Back" onClick="history.go(-1);">
                  <h1 class="mb-0 pb-0 display-4" id="title">Profile Information</h1>
                </div>
              </div>
              <!-- Title End -->
              <div class="w-100 d-md-none"></div>
            </div>
          </div>
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
                        <img src="<?= 'front-store/uploads/' . $prows['user_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
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
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <div>
                  <h1 class="mb-0 pb-0 display-4" id="title">Bank Account Details</h1>
                </div>
              </div>
              <!-- Title End -->
              <div class="w-100 d-md-none"></div>
            </div>
          </div>
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
                        <img src="<?= 'front-store/uploads/'.$brows['cheque_copy']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
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
          <div class="page-title-container">
            <div class="row g-0">
              <!-- Title Start -->
              <div class="col-auto mb-3 mb-md-0 me-auto">
                <!--<div class="w-auto sw-md-30">-->
                <div>
                  <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back"></a>
                  <h1 class="mb-0 pb-0 display-4" id="title">Bussiness Information</h1>
                </div>
              </div>
              <!-- Title End -->
              <div class="w-100 d-md-none"></div>
            </div>
          </div>

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
                        <img src="<?= 'front-store/uploads/' . $b_irows['front_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
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
                        <img src="<?= 'front-store/uploads/' . $b_irows['back_img']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
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
                       <img src="<?= 'front-store/uploads/' . $b_irows['company_logo']; ?>" class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
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
              <div class="w-100 d-md-none"></div>
            </div>
          </div>
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
              <div class="w-100 d-md-none"></div>
            </div>
          </div>
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