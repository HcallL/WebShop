<?php
include('C:\xampp\htdocs\444\includes\connect.php');

$category_id = $_GET['id'];

    $sql = "DELETE FROM product_categories WHERE category_id = $category_id";
    mysqli_query($con, $sql);

    $sql = "DELETE FROM categories WHERE category_id = $category_id";

    if(mysqli_query($con, $sql)) {
        header('Location:view_cate.php');
    } else {
        echo 'Xóa danh mục không thành công.';
    }

mysqli_close($con);
?>
