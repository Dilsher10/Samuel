<?php
	session_start();
unset($_SESSION["adminemail"]);
echo "<script>
window.location.href='login.php';
</script>";
?>