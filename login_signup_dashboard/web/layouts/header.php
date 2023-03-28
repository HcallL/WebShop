<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/98638255fc.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<title><?=$title?></title>
</head>
<body>
<div class="header">
	<div class="header-main">
		<div class="logo">
		<a href="index.php">
			<img style="height: auto; width: 278px;" src="img/logo.png">
		</a>
		</div>
		<div class="search">
			<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Tìm kiếm..." >
			<i class="fa fa-search"></i>
		</div>
		<div class="contact">
			<i class="fa fa-phone"></i>
			<b>Hotline: 0988.0908.0988</b>
		</div>
		<div class="user">
			<a href="" style="color: white;"><i class="fa-solid fa-user"></i></a>
		</div>
		<div class="cart">
			<a href="cart.php" style="color: white;"><i class="fa-regular fa-cart-shopping"></i></a>
		</div>
	</div>
	<div class="menubar">
		<ul class="submenubar">
			<li><a href="products.php">Máy lọc nước karofi <i class="fa-solid fa-angle-down"></i></a>
				<ul class="submenu">
					<a href="">Lọc nước nóng lạnh
						<div class="imgSubmn1">
						<img style="margin-top: auto;" src="img/kad-d50-1.jpeg">
						</div></a>
					<div class="underline" style="margin-top: -250px;"></div>

					<a id="imgSubmn" href="">Máy lọc nước nóng lạnh
					<div class="imgSubmn1">
						<img style="margin-top: -600px; margin-left: -33px;" src="img/kad-d50-1.jpeg">
						</div></a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Cây nước nóng lạnh hút bình
						<div class="imgSubmn1">
						<img style="margin-top: -132px; margin-left: -67px;" src="img/cay-nuoc-nong-lanh-karofi-banner-up-website-04-jpg-1.jpeg">
						</div></a>
					<div class="underline"></div>
					<a id="imgSubmn" href="">Cây nước nóng lạnh úp bình
					<div class="imgSubmn1">
						<img style="margin-top: -200px; margin-left: -57px;" src="img/cay-nuoc-nong-lanh-karofi-11-2-banner-up-website-jpg.jpeg">
						</div></a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Máy lọc nước tủ đứng
						<div class="imgSubmn1">
						<img style="margin-top: -260px; margin-left: -50px;" src="img/dc066b355fe5acbbf5f4.jpeg">
						</div></a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Máy lọc nước để gầm
						<div class="imgSubmn1">
							<img style="margin-top: -320px; margin-left: -20px;" src="img/mlndegam.jpeg">
						</div>
					</a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Máy lọc nước karofi livotec
						<div class="imgSubmn1">
							<img style="margin-top: -450px; margin-left: -65px;" src="img/anhdanhmuc-livotec.jpeg">
						</div>
					</a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Máy lọc nước korihome
						<div class="imgSubmn1">
							<img style="margin-top: -560px; margin-left: -40px;" src="img/banner-korihome.png">
						</div>
					</a>
					<div class="underline"></div>

					<a id="imgSubmn" href="">Máy lọc nước kangaroo
						<div class="imgSubmn1">
							<img style="margin-top: -600px; height: 600px; margin-left: -30px" src="img/may-loc-nuoc-kangaroo-tai-hai-phong.jpeg">
						</div>
					</a>	
					<div class="underline"></div>
				</ul>
				
			</li>
			
			<li id="scmenubar"><a href="">Máy lọc nước bán công nghiệp<i class="fa-solid fa-angle-down"></i>
				<ul class="submenu">
					<a href=""><img style="margin-top: -30px;margin-left: -32px;height: 147px;width:320px;" src="img/banner-may-loc-nuoc-ban-cong-nghiep-karofi.jpeg"></a>
				</ul>
				</a>
			</li>

			<li id="thrmenubar"><a href="">Hệ thống lọc đầu nguồn</a>
				<ul class="submenu"></ul>
			</li>

			<li id="other"><a href="">Sản phẩm khác<i class="fa-solid fa-angle-down"></i></a>
				<ul class="submenu">
					<a href="">Quạt và Quạt điều hoà</a>
					<div class="underline"></div>
					<a href="">Linh - Phụ kiện</a>
					<div class="underline"></div>
					<a href="">Máy lọc không khí</a>
				</ul>
			</li>

			<li id="dcmenubar"><a href="">Khuyến mãi</a></li>

			<li id="rpmenubar"><a href="">Thay lõi lọc nước<i class="fa-solid fa-angle-down"></i></a>
				<ul class="submenu">
					<a href="">Dịch vụ thay lõi lọc nước tại Hải Phòng</a>
					<div class="underline"></div>
					<a href="">Địa chỉ thay lõi lọc nước tại Hải Phòng</a>
				</ul>
			</li>

			<li id="fixmenubar"><a href="">Sửa máy lọc</a></li>
		</ul>
	</div>
</div>