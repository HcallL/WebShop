<?php
	require_once('layouts/header.php');
	include('C:\xampp\htdocs\444\includes\connect.php');

	session_start();

	$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
	$product_title = isset($_GET['product_title']) ? $_GET['product_title'] : null;
	$product_price = isset($_GET['product_price']) ? $_GET['product_price'] : null;

	if ($product_id && $product_title && $product_price) {
		// Lưu thông tin sản phẩm vào session
		$_SESSION['cart'][$product_id] = array(
			'title' => $product_title,
			'price' => $product_price
		);
	}
	// Tính số trang hiện tại
	$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

	// Số sản phẩm hiển thị trên mỗi trang
	$per_page = 12;

	// Tính vị trí bắt đầu của sản phẩm trong truy vấn
	$start = ($current_page - 1) * $per_page;

	// Truy vấn sản phẩm
	$sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles
			FROM products
			LEFT JOIN product_categories ON products.product_id = product_categories.product_id
			LEFT JOIN categories ON product_categories.category_id = categories.category_id
			GROUP BY products.product_id";

			if(isset($_GET['category'])) {
				$category = $_GET['category'];
				$sql .= " HAVING category_titles LIKE '%".$category."%'";
			}

			$sql .= " LIMIT $start, $per_page";

			$result = mysqli_query($con, $sql);

			$products = array();

			while ($row = mysqli_fetch_assoc($result)) {
				$products[] = $row;
			}

	// Truy vấn để tính tổng số trang
	$sql = "SELECT COUNT(*) AS total_products FROM products";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	$total_products = $row['total_products'];
	$total_pages = ceil($total_products / $per_page);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="cover">
	<div class="shop-page-title">
		<div class="shop-page-inner">
			<a href="index.php">TRANG CHỦ</a>
			<span>/</span>
			<p>Máy lọc nước karofi</p>
		</div>
		<!-- Chưa xong truy vấn sắp xếp Bye --> 
		<div class="orderby">
			<p>Hiển thị 1 - 12 của <?= $total_products ?> kết quả</p>
			<div class="select">
			<select class="form-select" aria-label="Default select example">
				<option value="default" selected>Sắp xếp</option>
				<option value="price_asc">Thứ tự theo giá: từ thấp đến cao</option>
				<option value="price_desc">Thứ tự theo giá: từ cao đến thấp</option>
			</select>
			</div>
		</div>
	</div>

	<!--Do thing right here right nowwwwwwwwwwwww -->

<div class="main">
	<div class="box-category-product">
			<span>DANH MỤC</span>
			<div class="diviser-small"></div>
			<a href="">Máy lọc nước karofi</a>
			<button onclick="myFunction()" style="border: none;background: none;margin-left: 70px;"><i class="fa-solid fa-angle-down"></i></button>
			<ul id="children" style="display: none;">
				<a href="">Máy lọc nước bán công nghiệp</a>
				<a href="#" class="category-link" data-category="Máy lọc nước để gầm">Máy lọc nước để gầm</a>
				<a href="#" class="category-link" data-category="Máy lọc nước tủ đứng">Máy lọc nước tủ đứng</a>
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

		<!-- HEREEEEEEE -->

		<div class="product-karofi-frame">
			<div class="product-karofi">
				<?php foreach ($products as $product) { ?>
				<div class="single-product">
					<div class="category-titles" style="display:none;"><?php echo $product['category_titles']; ?></div>
					<div class="thumbnail">
						<img class="thumbnail-img" src="../product_images/<?php echo $product['product_image1']; ?>" class="card-img-top product-image">
						<div class="quick-view">
							<a href="cart.php?product_id=<?php echo $product_id; ?>&product_title=<?php echo $product_title; ?>&product_price=<?php echo $product_price; ?>">Mua</a>
						</div>
					</div>
					<div class="box-title">
						<a href=""><?php echo $product['product_title']; ?></a>
						<div class="box-title-inner">
						<span><?php echo number_format($product['product_price'], 0, ',', '.') . 'đ'; ?></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>



</div>

<!-- Chuyển Trang -->

<div class="pagination">
  <?php if ($current_page > 1) : ?>
    <a href="?page=<?= $current_page - 1 ?>">
      <button class="pagination-btn">&lt;</button>
    </a>
  <?php endif; ?>

  <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
    <?php if ($i == $current_page) : ?>
      <button class="pagination-btn pagination-current"><?= $i ?></button>
    <?php else : ?>
      <a href="?page=<?= $i ?>">
        <button class="pagination-btn"><?= $i ?></button>
      </a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if ($current_page < $total_pages) : ?>
    <a href="?page=<?= $current_page + 1 ?>">
      <button class="pagination-btn">&gt;</button>
    </a>
  <?php endif; ?>
</div>

<script>
	function myFunction() {
	  var x = document.getElementById("children");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}
	function myFunction1() {
	  var x = document.getElementById("children-coldwarm");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}
	function myFunction2() {
	  var x = document.getElementById("children-other");
	  if (x.style.display === "none") {
	    x.style.display = "block";
	  } else {
	    x.style.display = "none";
	  }
	}
</script>

<!-- Lọc Cate -->
<script>
  $(document).ready(function() {
    $(".category-link").click(function(e) {
      var category = $(this).data("category");
      window.location.href = "?category=" + category;
    });

    var category = "<?php echo isset($_GET['category']) ? $_GET['category'] : ''; ?>";
    if(category !== '') {
      filterProducts(category);
    }
  });

  function filterProducts(category) {
    $(".category-titles:contains('" + category + "')").closest(".single-product").show();
  }
</script>


<?php
	require_once('layouts/footer.php');
?>