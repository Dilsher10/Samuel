<?php

include('conn.php');

$review_id = $_GET['review_id'];

$sqlQuery = "UPDATE `review_table` SET `status`='1' WHERE review_id = '$review_id'";

$query = mysqli_query($conn,$sqlQuery);

echo "
<script>
window.location.href='Dashboard.php';
</script>
";

?>