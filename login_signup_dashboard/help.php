<?php
	require_once('layouts/header.php');

	include('C:\xampp\htdocs\444\includes\connect.php');

	// Lấy thông tin sản phẩm từ cơ sở dữ liệu
	$sql = "SELECT products.*, GROUP_CONCAT(categories.category_title SEPARATOR ', ') AS category_titles FROM products 
			LEFT JOIN product_categories ON products.product_id = product_categories.product_id 
			LEFT JOIN categories ON product_categories.category_id = categories.category_id 
			GROUP BY products.product_id";
	$result = mysqli_query($con, $sql);
?>

<div class="product-karofi-frame">
		<div class="product-karofi">
			<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<div class="product-item">
					<img src="product_images/<?php echo $row['product_image1']; ?>" class="product-image">
					<div class="product-title"><?php echo $row['product_title']; ?></div>
					<div class="product-price"><?php echo $row['product_price']; ?></div>
					<button class="buy-now-button">Mua Ngay</button>
				</div>
			<?php } ?>
		</div>
	</div>

	

	<nav aria-label="..." style="height: 10px; z-index: 99; margin-left: 960px; margin-bottom: 60px;">
  <ul class="pagination pagination-lg">
    <?php if ($current_page > 1) { ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php } ?>

    <?php for ($i = 1; $i < $total_pages; $i++) { ?>
      <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php } ?>

    <?php if ($current_page < $total_pages) { ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>