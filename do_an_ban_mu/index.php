<!DOCTYPE php>
<php>
	<head>
		<title>THE HATS SHOP</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	

		<?php
		require('./header.php');
		?>
		<?php
		require('./config.php');
		$products =mysqli_query($conn, "SELECT *FROM `sanpham` ");
		?>

			

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/bg1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Thời trang</h1>
					   					<h2 class="head-2">Sành điệu</h2>
					   					<!-- 	 -->
					   					<p class="category"><span>Cập nhật xu hướng mới nhất</span></p>
					   					<p><a href="./all.php" class="btn btn-primary">Mua Ngay</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/bg2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">An toàn</h1>
					   					<h2 class="head-2">Tiện lợi</h2>
					   					<h2 class="head-3"><strong class="font-weight-bold"></strong> Đảm bảo chất lượng</h2>
					   					<p class="category"><span>Uy tín khắp cả nước </span></p>
					   					<p><a href="./all.php" class="btn btn-primary">Mua liền tay</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/bg3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">	
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Tiết kiệm</h1>
					   					<h2 class="head-2">Nhanh chóng</h2>
					   					<h2 class="head-3">Luôn luôn <strong class="font-weight-bold">Freeship</strong> cho mọi khách hàng</h2>
					   					<p class="category"><span>Giá cả phải chăng</span></p>
					   					<p><a href="./all.php" class="btn btn-primary">Xem sản phẩm</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">The Hats Shop luôn mang đến cho bạn những thứ tốt đẹp nhất</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(images/trai.jpg);"></a>
							<div class="desc">
								<h2><a href="./mutaibeo.php">Sang trọng, quý phái</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="./mubaohiem.php" class="featured-img" style="background-image: url(images/phai.jpg);"></a>
							<div class="desc">
								<h2><a href="./mubaohiem.php">An toàn, chất lượng</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- ;;;;;;; -->
		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Tất cả các mũ có ở shop</h2>
					</div>
				</div>

				
				<div class="row row-pb-md">
				<?php
                	while($row =mysqli_fetch_array($products)){
                ?>
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="" class="prod-img">
								<img src="<?=$row['anh']?>" class="img-fluid" alt="Free php5 bootstrap 4 template">
							</a> 
							<div class="desc">
								
								<h2><a href="chitietsp.php?id_sp=<?=$row['id_sp']?>"><?=$row['ten_sp']?></a></h2>
								<span class="price"><?=$row['gia']?></span>
							</div>
						</div>
					</div>
					
					<!-- <div class="w-100"></div> -->
					<?php }?>
				</div>

				

				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="#" class="btn btn-primary btn-lg">Mua Mũ Ngay và Luôn</a></p>
					</div>
				</div>
			</div>
		</div>

		

		<?php
			require('./footer.php');
		?>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</php>

