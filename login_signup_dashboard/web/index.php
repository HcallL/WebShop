<?php
	$title = "Trang chủ";
	require_once('layouts/header.php');
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

<div class="slides">
		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active" data-bs-interval="5000">
		      <img src="img/BANNER-web-sale-karofi-hai-phong-thang-2-2023-copy.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item" data-bs-interval="5000">
		      <img src="img/bannerweb-1400x474.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item" data-bs-interval="5000">
		      <img src="img/z2530357782124-e0badf58af1e85b4c53cf20cfc6d75a5-1400x474.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item" data-bs-interval="5000">
		      <img src="img/047708090f4ff811a15e-1-1400x474.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
</div>
<!--------------------------------------Sản phẩm nổi bật--------------------------------------->
<div class="carousel-product"
  data-flickity='{ "wrapAround": true }'>
  <div class="carousel-cell">
  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-nuoc-tu-dung-catenogy.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước karofi</h5>
  							<p> 51 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-nuoc-lovitec-catenogy1.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước karofi livotec</h5>
  							<p> 15 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-nuoc-korihome.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước korihome</h5>
  							<p> 21 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/61a3-300x300.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước kangaroo</h5>
  							<p> 3 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/loc-nuoc-nong-lanh-catenogy.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước nóng lạnh</h5>
  							<p> 23 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>
  </div>
  <div class="carousel-cell">
  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-nuoc-dau-nguon-ktf-333-2-large-300x300.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Hệ thống lọc đầu nguồn</h5>
  							<p> 9 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-khong-khi-catenogy1.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc không khí</h5>
  							<p> 3 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/phukien-catenogy.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Sản phẩm khác</h5>
  							<p> 29 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/flash-sale.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>flash sale</h5>
  							<p> 12 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>

  	<div class="product-category">
  		<div class="col">
  			<a href="">
  				<div class="box-category">
  					<div class="box-image">
  						<img src="img/may-loc-nuoc-tu-dung-catenogy.png">
  					</div>
  					<div class="boxtext">
  						<div class="box-text-inner">
  							<h5>Máy lọc nước karofi</h5>
  							<p> 51 sản phẩm </p>
  						</div>
  					</div>
  				</div>
  			</a>
  		</div>
  	</div>
  </div>
  <!--<div class="carousel-cell"></div>
  <div class="carousel-cell"></div>
  <div class="carousel-cell"></div>-->
</div>
			<!----------------------kết thúc phần sản phẩm nổi bật----------------------->

			<!----------------------Sản phẩm bán chạy----------------------->
<div class="bg-spbc">
	<div class="title-container">
			<h3>
				<div class="stick1"></div>
				<span><i class="fa fa-gift"></i> Sản phẩm bán chạy</span>
				<div class="stick2"></div>
			</h3>
	</div>

	<div class="product-top-sale">
				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>								
	</div>
</div>
<!----------------------Kết thúc phần sản phẩm bán chạy----------------------->

<!----------------------Máy lọc nước Karofi----------------------->

<div class="bg-karofi"> 
	<div class="title-container" style="">
			<h3>
				<div class="stick1"></div>
				<span><i class="fa fa-star"></i> Máy lọc nước Karofi</span>
				<div class="stick2"></div>
			</h3>
	</div>

	<div class="product-top-sale">
		<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>

				<div class="single-product">
					<div class="thumbnail">
						<div class="discount">-19%</div>
						<div class="img-preview">
							<img src="img/kaq-u96-3-large.png">
						</div>
						<img src="img/U96-Karofi-Hai-Phong-thang-2-2023-copy-280x280.jpeg">
						<div class="quick-view">
							<a href="">Xem nhanh</a>
						</div>
					</div>
					<div class="box-title">
						<a href="">Máy lọc nước Karofi KAQ-U96</a>
						<div class="box-title-inner">
							<del>7.970.00 đ</del> <span>6.350.000 đ</span>
						</div>
					</div>
				</div>
	</div>
</div>

<div class="bg-news">
	<img src="img/unnamed.png">
	<div class="title-container" style="">
			<h3>
				<div class="stick1"></div>
				<span>Tin tức - Khuyễn mãi</span>
				<div class="stick2"></div>
			</h3>
	</div>
</div>
</body>
<?php
	require_once('layouts/footer.php');
?>
</html>