<?php
	require_once('layouts/header.php');
?>

<style type="text/css">
	.cart-frame{
		text-align: center;
		position: relative;
		height: 325px;
		width: 1679px;
		margin-top: 100px;
	}
	.cart-frame > p{
		margin-top: 50px;
		color: gray;
	}
	.page-title-inner{
		font-size: 25px;
	}
	.page-title-inner > a {
		color: black;
	}
	.page-title-inner > a:hover{
		color: black!important;
	}
	.return-to-shop{
		margin-left: 730px;
		height: 39px;
		width: 238px;
		background-color: #007BA9;
	}
	.return-to-shop > a{
		position: relative;
		color: white;
		top: 6px;
	}
</style>

<div class="cart-frame">
	<div class="page-title-inner">
		<a href="">GIỎ HÀNG</a>
		<i class="fa-solid fa-angle-right"></i>
		<a href="" style="color: gray;">THANH TOÁN</a>
		<i class="fa-solid fa-angle-right"></i>
		<a href="" style="color: gray;">HOÀN THÀNH</a>
	</div>

	<p>Chưa có sản phẩm nào trong giỏ hàng.</p>

	<p class="return-to-shop">
		<a href="index.php">Quay trở lại cửa hàng</a>
	</p>
</div>

<?php
	require_once('layouts/footer.php');
?>