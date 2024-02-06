<?php
include 'conn.php';
error_reporting(0);
$eQuery = "SELECT * FROM `header`";
$equery = mysqli_query($conn, $eQuery);
$rows = mysqli_fetch_array($equery);
?>


<?php 
 include 'conn.php';
 if (isset($_POST['signupBtn'])) {

	$email_address = $_POST['email_address'];
	$username = $_POST['username'];
	$phone_number=$_POST['phone_number'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];

    $token = bin2hex(random_bytes(6));
    
	if ($password == $c_password) {
		$sql = "SELECT * FROM user_registration WHERE email_address='$email_address'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `user_registration`(`username`,`email_address`,`phone_number`, `password`, `c_password`,`token`,`status`) VALUES ('$username','$email_address','$phone_number','$password','$c_password','$token','Disapproved')";
			$result = mysqli_query($conn, $sql);
			session_start();
			if ($result) {
			    $_SESSION['vendor-status'] = 'User Registration Completed.';
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				 echo "<script>
    window.location.href='login.php';
    </script>";
			} else {
			    $_SESSION['status'] = 'Woops! Something Wrong Went.';
			}
		} else {
		    $_SESSION['status'] = 'Email Already Exists.';
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
  

	
}
?>
<!DOCTYPE html>
<html lang="en" data-footer="true">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title> Samuel | <?php echo basename($_SERVER['SCRIPT_FILENAME'], '.php');  ?></title>
    <meta name="description" content="Ecommerce Products List" />
    <!-- Favicon Tags Start -->
    <link rel="icon"  href="img/favicon/favicon.png" sizes="196x196" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href=" https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css" />

    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />

    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />

    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/tagify.css" />
    <link rel="stylesheet" href="css/vendor/dropzone.min.css" />

    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/admin.css" />

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
    <style>
        body{
        background:url('img/Login-bg.jpg'); 
        
    }
    button{
        border-radius:10px !important;
    }
    h4{
        font-weight:600;
    }
    .img-fluid{
        width:18px;
    }
    .backLink {
    text-align: center;
    justify-content: center;
    display: block;
}
    </style>
</head>

<body>
    
    
        <?php
    session_start();
if(isset($_SESSION['status'])){
   ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert" id="loginAlert" style="background:red; color:#fff;">
      <strong>Woops!</strong> <?php echo $_SESSION['status']; ?>
   </div>
  <?php
  unset($_SESSION['status']);
}
?>

 <section class="gradient-form">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center">
      <div class="col-xl-6">
        <div class="card rounded-3 text-black">
          <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                 <img src="<?= '../../assets/images/' . $rows['logo']; ?>" alt="logo" style="width: 185px;">
                  <strong><h4 class="mt-5 mb-5 pb-1">SignUp</h4></strong>
                </div>
                <form class="row g-3" method="POST" action="">
                  <div class="form-outline mb-1">
                    <label class="form-label" for="formName">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="username" id="formName"  onkeydown='return validateText(event)' pattern="^[a-zA-Z\s\-]+$" required/>
                  </div>
                  <div class="form-outline mb-1">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email_address" id="email" class="form-control" placeholder="Enter email address" required/>
                  </div>
                  <div class="form-outline mb-1">
                    <label class="form-label" for="form2Example11">Phone Number</label>
                    <input type="tel" class="form-control" id="form2Example11" name="phone_number" placeholder="Enter phone number" oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\+.*)\+/g, '$1');" required/>
                  </div>
                  <div class="form-outline mb-1">
                    <label class="form-label" for="password1">Password</label>
                    <input type="password" id="password1" placeholder="Enter password" class="form-control" name="password" oninput="validatePasswords()" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$" title="Password must meet the following requirements:
              - At least 8 characters long
              - Contains at least one lowercase letter
              - Contains at least one uppercase letter
              - Contains at least one number
              - Contains at least one special character (@ $ ! % * # ? &)" required/>
                  </div>
                  <div class="form-outline mb-1">
                    <label class="form-label" for="password2">Confirm Password</label>
                    <input type="password" id="password2" placeholder="Enter confirm password" class="form-control" name="c_password" oninput="validatePasswords()" required/>
                  </div>
                  <p id="passwordError" style="color: red;"></p>
                  <div class="text-center pt-1 mb-2 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit" name="signupBtn" onclick="validateEmail(event)">Sign up
                      </button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a href='login.php'><button type="button" class="btn btn-outline-danger">Login</button></a>
                  </div>
                  <a href="/vendor_dashboard/src/login.php" class="backLink"><img src="img/left-arrows.png" alt="" class="img-fluid"> Go to Login</a>
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <?php include 'footer.php' ?>
 
 <script>
     function validatePasswords() {
  var password1 = document.getElementById('password1').value;
  var password2 = document.getElementById('password2').value;
  var passwordError = document.getElementById('passwordError');

  if (password1 !== password2) {
    passwordError.textContent = 'Password does not match';
    return false;
  }
  passwordError.textContent = ''; 
}
 </script>


<script>
  function validateEmail(event) {
    var emailInput = document.getElementById("email").value;
    var emailPattern = /^\w+([\.-]?\w+)*@[a-zA-Z]+([\.-]?[a-zA-Z]+)*(\.\w{2,3})+$/;

    if (!emailPattern.test(emailInput)) {
      event.preventDefault();
      alert("Please enter a valid email address.");
    }
  }
</script>








               

