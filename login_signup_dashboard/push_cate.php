<?php 
    include('C:\xampp\htdocs\444\includes\connect.php');
    
    // Lấy dữ liệu từ form
    if(isset($_POST['push-cate'])) {
        $product_id = $_POST['product_id'];
        $category_id = $_POST['category_id'];
    
        // Kiểm tra xem product_id và category_id đã được kết nối với nhau trong bảng product_categories chưa
        $sql = "SELECT * FROM product_categories WHERE product_id='$product_id' AND category_id='$category_id'";
        $result = mysqli_query($con, $sql);
    
        // Nếu đã có trong bảng thì thực hiện lệnh DELETE để xóa
        if (mysqli_num_rows($result) > 0) {
            $sql = "DELETE FROM product_categories WHERE product_id='$product_id' AND category_id='$category_id'";
            $result = mysqli_query($con, $sql);
    
            // Kiểm tra số lượng dòng ảnh hưởng và hiển thị thông báo
            if (mysqli_affected_rows($con) > 0) {
                echo "<script>alert('Xóa thành công')</script>";
            } else {
                echo "<script>alert('Xóa thất bại')</script>";
            }
        } else {
            echo "<script>alert('Category này chưa được gắn với sản phẩm')</script>";
        }
    }
    
?>
<form action="" method="post" class="mb-2"> 
    <h3 class="text-center">Xóa 1 Category khỏi sản phẩm</h2>

    <!-- Product -->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_id" id="product_id" class="form-select">
            <option value="">Select a Product</option>
            <?php 
                $select_query="Select * from `products`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $product_title=$row['product_title'];
                    $product_id=$row['product_id'];
                    echo "<option value='$product_id'>$product_title</option>";
                }
            ?>
        </select>
    </div>

    <!--Categories -->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="category_id" id="category_id" class="form-select">
            <option value="">Select a Category</option>
            <?php 
                $select_query="Select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
            ?>
        </select>
    </div>


    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="form-control bg-info" name="push-cate" value="Push Cate">
    </div>
</form>

