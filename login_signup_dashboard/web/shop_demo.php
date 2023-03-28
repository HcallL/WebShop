<?php
	
	include('C:\xampp\htdocs\444\includes\connect.php');

	// Lấy thông tin sản phẩm từ cơ sở dữ liệu
	$sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles FROM products 
			LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
			LEFT JOIN categories ON product_categories.category_id = categories.category_id 
			GROUP BY products.product_id";
	$result = mysqli_query($con, $sql);

	$products = array();

  	while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/shop.css">

	
</head>
<body>
<div class="big-box">
    <div class="row">
        <div class="col-lg-3">
            <div class="box-categories">
                <span>DANH MỤC</span>
                <div class="diviser-small"></div>
                <a href="">Máy lọc nước karofi</a>
                <button onclick="myFunction()" style="border: none;background: none;margin-left: 70px;"><i class="fa-solid fa-angle-down"></i></button>
                <ul id="children" style="display: none;">
                    <a href="">Máy lọc nước bán công nghiệp</a>
                    <a href="">Máy lọc nước để gầm</a>
                    <a href="">Máy lọc nước tủ đứng</a>
                </ul>
                <div class="underline"></div>

                <a href="">Máy lọc nước Karofi Livotec</a>
                <div class="underline"></div>

                <a href="">Máy lọc nước Korihome</a>
                <div class="underline"></div>

                <a href="">Máy lọc nước Kangaroo</a>
                <div class="underline"></div>

                <a href="">Máy lọc nước nóng lạnh</a>
                <button onclick="myFunction1()" style="border: none;background: none;margin-left: 42px;"><i class="fa-solid fa-angle-down"></i></button>
                <ul id="children-coldwarm" style="display: none;">
                    <a href="">Cây nước nóng lạnh hút bình</a>
                    <a href="">Cây nước nóng lạnh úp bình</a>
                    <a href="">Máy lọc nước nóng lạnh</a>
                </ul>
                <div class="underline"></div>

                <a href="">Hệ thống lọc đầu nguồn</a>
                <div class="underline"></div>

                <a href="">Máy lọc không khí</a>
                <div class="underline"></div>

                <a href="">Sản phẩm khác</a>
                <button onclick="myFunction2()" style="border: none;background: none;margin-left: 100px;"><i class="fa-solid fa-angle-down"></i></button>
                <ul id="children-other" style="display: none;">
                    <a href="">Linh - Phụ kiện</a>
                    <a href="">Quạt và Quạt điều hoà</a>
                </ul>
                <div class="underline"></div>

                <a href="">Flash sale</a>
                <div class="underline"></div>
                <span>LỌC THEO GIÁ</span>
                <div class="diviser-small"></div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($products as $product) { ?>
                    <div class="col-sm-10 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="../product_images/<?php echo $product['product_image1']; ?>" class="card-img-top product-image" width="300" height="300">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title"><?php echo $product['product_title']; ?></h5>
                                    <p class="card-text"><?php echo $product['product_price']; ?></p>
                                </div>
                                <div class="text-center">
                                    <button class="btn-buy align-self-end mt-1">Mua</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

