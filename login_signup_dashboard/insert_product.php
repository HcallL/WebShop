<?php 
    include('C:\xampp\htdocs\444\includes\connect.php');
    if(isset($_POST['insert_product'])){
        $product_title = $_POST['product_title'];
        $product_description = $_POST['description'];
        $product_price = $_POST['product_price'];

        // accessing images
        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];

        // accessing image tmp name
        $temp_image1 = $_FILES['product_image1']['tmp_name'];
        $temp_image2 = $_FILES['product_image2']['tmp_name'];
        $temp_image3 = $_FILES['product_image3']['tmp_name'];

        // Select Database
        $select_query = "SELECT * from products WHERE product_title='$product_title'";
        $result_select = mysqli_query($con, $select_query);

        //Kiểm tra đã điền chưa
        if(empty($product_title) || empty($product_description) || empty($product_price) || empty($product_image1) || empty($product_image2) || empty($product_image3)){
            echo "<script>alert('Hãy điền đầy đủ thông tin')</script>";
            exit();
        } else {
            // Kiểm tra trùng lặp và từ chối thêm nếu trùng
            if(mysqli_num_rows($result_select) > 0){
                echo "<script>alert('Sản phẩm này đã có sẵn trong database rồi.')</script>";
            }
            else{
                            // move uploaded images to folder - Đưa ảnh sản phẩm vào folder
            move_uploaded_file($temp_image1, "product_images/$product_image1");
            move_uploaded_file($temp_image2, "product_images/$product_image2");
            move_uploaded_file($temp_image3, "product_images/$product_image3");

            $insert_query = "INSERT INTO products (product_title, product_description, product_price, product_image1, product_image2, product_image3) 
                             VALUES ('$product_title', '$product_description', '$product_price', '$product_image1', '$product_image2', '$product_image3')";
            $result = mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Sản phẩm đã được thêm thành công')</script>";
            } else {
                echo "Không thêm được vì lý do nào đó";
            }
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link rel="stylesheet" href="css/button_help.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">
</head>
<body class="bg-light">
    <!--Quay Lại-->
    <button class="back-button" onclick="location.href='dashboard.php';">Quay Lại</button>
    
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <!-- Tên sản phẩm _ Product Title -->
            <div class="form-outline mb-4 w-50 m-auto"> 
            <label for="product_title" class="form-label">Product title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Thêm Tên Sản Phẩm" autocomplete="off" required="required">
        </div>

             <!-- Miêu tả _ Description -->
            <div class="form-outline mb-4 w-50 m-auto"> 
            <label for="description" class="form-label">Product description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Thêm Mô Tả Sản Phẩm" autocomplete="off" required="required">
        </div>

            <!--Categories 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
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
-->

             <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto"> 
            <label for="product_image1" class="form-label">Product image 1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
        </div>

            <!-- Image 2 -->
             <div class="form-outline mb-4 w-50 m-auto"> 
            <label for="product_image2" class="form-label">Product image 2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
        </div>


            <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto"> 
            <label for="product_image3" class="form-label">Product image 3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
        </div>

            <!-- Giá - Price -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Thêm Giá Sản Phẩm" autocomplete="off" required="required">
            </div>

            <!-- Đăng Tải Sản Phẩm - Insert Products -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <button type="submit" name="insert_product" class="btn btn-info mb-3 px-3">Insert Products</button>
            </div>

    </div>
    
</body>
</html>