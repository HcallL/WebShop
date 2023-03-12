<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <!-- Tên sản phẩm _ Product Title -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product-title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Thêm Tên Sản Phẩm" autocomplete="off" required="required">
            </div>

            <!-- Miêu tả _ Description -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Thêm Mô Tả Sản Phẩm" autocomplete="off" required="required">
            </div>

            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="kproduct_keywords" id="product_keywords" class="form-control" placeholder="Thêm Keywords Sản Phẩm" autocomplete="off" required="required">
            </div>

            <!--Categories--> 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <option value="">Máy Lọc Tủ Đứng</option>
                    <option value="">Máy Lọc Để Gầm</option>
                    <option value="">Cây Nước Hút Bình</option>
                    <option value="">Cây Nước Úp Bình</option>
                    <option value="">Đây Là Ví Dụ</option>
                </select>
            </div>

            <!--Brands--> 
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brands</option>
                    <option value="">Karofi</option>
                    <option value="">Karofi Livotec</option>
                    <option value="">Korihome</option>
                    <option value="">Kangaroo</option>
                    <option value="">Đây Là Ví Dụ</option>
                </select>
            </div>

            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="kproduct_image1" id="product_image1" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
            </div>

             <!-- Image 2 -->
             <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="kproduct_image2" id="product_image2" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
            </div>

             <!-- Image 3 -->
             <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="kproduct_image3" id="product_image3" class="form-control" placeholder="Thêm Ảnh Sản Phẩm" autocomplete="off" required="required">
            </div>

            <!-- Giá - Price -->
            <div class="form-outline mb-4 w-50 m-auto"> 
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="kproduct_price" id="product_price" class="form-control" placeholder="Thêm Giá Sản Phẩm" autocomplete="off" required="required">
            </div>

             <!-- Đăng Tải Sản Phẩm - Insert Products -->
             <div class="form-outline mb-4 w-50 m-auto"> 
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>

    </div>
    
</body>
</html>