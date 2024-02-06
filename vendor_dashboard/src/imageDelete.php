<?php  
require('conn.php'); 

$image_id = $_POST['image_id']; 

$id = $_POST['pro_id'];  

if(isset($_POST['deleteImg'])){  
    
 $sql = "DELETE FROM tbl_images WHERE image_id = $image_id";  
 $query = mysqli_query($conn,$sql);
echo
"<script>
window.location.href='Product_Edit.php?id=$id';
</script>";
}else{  
echo
"<script>
window.location.href='Product_Edit.php?id=$id';
</script>";
}   
  
?>  