<?php
	require_once('layouts/header.php');
	include('C:\xampp\htdocs\444\includes\connect.php');

	$product_id = $_GET['product_id'];
	$product_title = $_GET['product_title'];
	$product_price = $_GET['product_price'];

	$sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles FROM products 
	LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
	LEFT JOIN categories ON product_categories.category_id = categories.category_id 
	GROUP BY products.product_id";
	  
	$result = mysqli_query($con, $sql);

	
?>

<link rel="stylesheet" type="text/css" href="css/cart.css">

<div class="cart-frame">
	<div class="page-title-inner">
		<a href="">GIỎ HÀNG</a>
		<i class="fa-solid fa-angle-right"></i>
		<a href="" style="color: gray;">THANH TOÁN</a>
		<i class="fa-solid fa-angle-right"></i>
		<a href="" style="color: gray;">HOÀN THÀNH</a>
	</div>

	<div class="container mt-5">
		<h1>Giỏ Hàng</h1>
		<hr>
		<div class="row">
			<div class="col-md-6">
			<h4>Sản Phẩm</h4>
			</div>
			<div class="col-md-2">
			<h4>Giá</h4>
			</div>
			<div class="col-md-2">
			<h4>Số Lượng</h4>
			</div>
			<div class="col-md-2">
			<h4>Tạm Tính</h4>
			</div>
		</div>

		<!-- Thêm dòng này cho mỗi sản phẩm trong giỏ hàng -->
		<div class="row mt-3">
			<div class="col-md-6">
			<p>Tên sản phẩm</p>
			</div>
			<div class="col-md-2">
			<p>Giá sản phẩm</p>
			</div>
			<div class="col-md-2">
			<input type="number" value="1" class="form-control">
			</div>
			<div class="col-md-2">
			<p>Tạm tính sản phẩm</p>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-12 d-flex justify-content-between">
				<span class="font-weight-bold">Tổng cộng:</span>
				<button type="button" class="btn btn-primary">Đặt hàng</button>
			</div>
  		</div>
	</div>


</div>

<?php
	require_once('layouts/footer.php');
?>