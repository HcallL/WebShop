<?php
  include('C:\xampp\htdocs\444\includes\connect.php');
  
  $product_id = $_GET['id'];

  // Xóa bản ghi trong bảng product_categories liên quan đến sản phẩm cần xóa
  $sql = "DELETE FROM product_categories WHERE product_id = $product_id";
  mysqli_query($con, $sql);

  // Xóa sản phẩm
  $sql = "DELETE FROM products WHERE product_id = $product_id";
    
  if(mysqli_query($con, $sql)) {
      header('Location:viewproduct.php');
  } else {
      echo 'Xóa sản phẩm không thành công.';
  }

  mysqli_close($con);
?>
