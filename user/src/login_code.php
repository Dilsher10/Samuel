<?php
session_start();
 include 'conn.php' ; 
if (isset($_POST['login_btn'])) {
    include 'conn.php';
    $adminemail = $_POST['adminemail'];
    $adminpassword = $_POST['adminpassword'];
    $sqlQuery = "SELECT * FROM `user` WHERE email_address = '$adminemail' AND password = '$adminpassword'";
    $query = mysqli_query($conn, $sqlQuery);
    while ($row = mysqli_fetch_array($query)) {
     $token = $row['token'];
     $username = $row['username'];
     
  }

    if (mysqli_num_rows($query)) {
        
        $_SESSION['adminemail'] = $adminemail;
        $_SESSION['token'] =  $token;
        $_SESSION['username'] = $username;
      
        echo "
      <script>
      window.location.href='index.php';
      </script>
      ";
      
     
    } else {
        $_SESSION['status'] = "Invalid username or password";
        echo "
      <script>
      window.location.href='login.php';
      </script>
      ";
    }
}

?>