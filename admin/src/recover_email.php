<?php
session_start();
?>

<?php
 include 'conn.php' ; 

if (isset($_POST['forgot_btn'])) {
    $email = $_POST['email'];
    $sqlQuery = "SELECT * FROM `admin` WHERE email = '$email' ";
    $query = mysqli_query($conn, $sqlQuery);
    
    $emailcount = mysqli_num_rows($query);
    
    
    if ($emailcount) {
        $data = mysqli_fetch_array($query);
        $username = $data['username'];
        $id = $data['id'];
        $subject = "Password Reset";
        $body = "Hi, click here to reset your password https://parcelprevail.com/admin/src/reset_password.php?id=$id";
        $sender_email = "Form: samuel@gmail.com";
        
        session_start();
        if(mail($email, $subject, $body, $sender_email)){
            $_SESSION['mail-status'] = 'Check your email.';
             echo "
        <script>
        window.location.href='login.php';
        </script>
        ";
        }
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
    <link rel="icon"  href="img/favicon/logo.ico" sizes="196x196" />
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
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />
    
    <link rel="stylesheet" href="css/vendor/quill.bubble.css" />

  <link rel="stylesheet" href="css/vendor/select2.min.css" />

  <link rel="stylesheet" href="css/vendor/select2-bootstrap4.min.css" />

  <link rel="stylesheet" href="css/vendor/tagify.css" />

  <link rel="stylesheet" href="css/vendor/dropzone.min.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/admin.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
    <style>
        body{
        background:url('img/Login-bg.jpg'); 
        background-repeat:no-repeat;
    }

    .img-fluid{
        width:18px;
    }
    .backLink {
    text-align: center;
    justify-content: center;
    display: block;
}
h4{
    font-weight:600;
}
button{
    border-radius:10px !important;
}
    </style>
</head>

<body>
    
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

 <section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card rounded-3 text-black">
          <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo/logo_1.png" alt="logo" style="width: 185px;">
                  <strong><h4 class="mt-5 mb-5 pb-1">Recovery Email</h4></strong>
         
                </div>

                <form method="POST">
                  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Enter email address" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit" name="forgot_btn">Send Email</button>
                    
                  </div>

                   <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a href='login.php'><button type="button" class="btn btn-outline-danger">Log in</button></a>
                  </div>
                 <a href="/admin/src/login.php" class="backLink"><img src="img/left-arrows.png" alt="" class="img-fluid"> Go to Login</a>
                </form>

              </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <?php include 'footer.php' ?>
