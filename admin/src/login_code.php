<?php
 include 'conn.php' ; 
if (isset($_POST['login_btn'])) {
    include 'conn.php';
    $adminemail = $_POST['adminemail'];
    $adminpassword = $_POST['adminpassword'];
    $sqlQuery = "SELECT * FROM `admin` WHERE email = '$adminemail' AND password = '$adminpassword'";
    $query = mysqli_query($conn, $sqlQuery);

    session_start();
    if (mysqli_num_rows($query)) {
        $_SESSION['admin'] = $adminemail;
        echo "
      <script>
      window.location.href='index.php';
      </script>
      ";
    } else {
        $_SESSION['status'] = 'Invalid username or password!';
        echo "
      <script>
      window.location.href='login.php';
      </script>
      ";
    }
}
?>