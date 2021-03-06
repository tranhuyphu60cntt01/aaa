<!DOCTYPE php>
<php lang="en">
<body>
    <header>
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
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<style>
		.out{
			margin: 5px; border-left:1px;
		}
	</style>

	<?php
	session_start();
	?>
	
			
<div class="row bg-primary bg-opacity-50">
    <div class="">
     	<div>
		  			<?php

                            if(isset($_SESSION['khachhang']['ten_nd'])){
                                    $ten_nd=$_SESSION['khachhang']['ten_nd'];
                            ?>
                                    
							 <a href="./index.php" class=" p-2 text-light "><i class="fa fa-user p-1"></i><?php echo $ten_nd; ?></a>
							 <a  href="./logout.php" class=" p-2 text-white"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
							 
                            <?php
                                }else{
                            ?>
                            <?php 
                                }
                            ?>
          </div>     
		<div> </div>       
	</div>
</div>		

        <nav class="colorlib-nav" role="navigation" >
		   <div> <h2><a  href="./BTTH_60136550/" ></i>BTTH</a></h2> </div>
			<div class="top-menu" >
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.php">
								<img style="height:200px; " src="./images/logo.jpg" alt="logo">
							</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
							<div class="form-group ">

								<div class="sale">
									<div class="container">
										<div class="row">
											<div class="col-sm-8 offset-sm-2 text-center">
												<div class="row">
													<div class="owl-carousel2">
														<div class="item">
															<div class="col">
																<h3><a href="./login.php">????ng nh???p</a></h3>
															</div>
														</div>
														<div class="item">
															<div class="col">
																<h3><a href="./signup.php">????ng k?? </a></h3>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
			               <div class="form-group">
							   <form action="" method="get">
								<input type="search" class="form-control search" placeholder="T??m ki???m" 
								value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>" name="search">
								<button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			           
							   </form>
			                     </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="index.php">Chung</a></li>
								<li class="has-dropdown">
									<a href="all.php">Lo???i m??</a>
									<ul class="dropdown">
										<li><a href="muluoitrai.php">M?? L?????I TRAI</a></li>
										<li><a href="mulen.php">M?? LEN</a></li>
										<li><a href="mutaibeo.php">M?? TAI B??O</a></li>
										<li><a href="mubaohiem.php">M?? B???O HI???M</a></li>
										<li><a href="mucaoboi.php">M?? CAO B???I</a></li>										
									</ul>
								</li>

								<li><a href="about.php">Th??ng tin</a></li>
								<li><a href="contact.php">Li??n l???c</a></li>
								<li class="cart"><a href="cart.php"><i class="icon-shopping-cart"></i> GI??? H??NG [_]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="all.php">Lu??n lu??n cho b???n nh???ng chi???c m?? ?????p nh???t</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Mua s???m d??? d??ng, ????n gi???n, ti???n l???i </a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
    </header>
</body>
</php>