<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/landing/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/css/util.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->
				<div class="logo-mobile">
					<a href="#" class=""><span>JWP</span> MADING.</a>
				</div>
				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="main-menu-m">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>
			</div>

			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->
				<div class="logo">
					<a href="#" class=""><span>JWP</span> MADING.</a>
				</div>
			</div>

			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="assets/landing/images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu justify-content-center">
							<li class="main-menu-active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="login.php">Login</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-12 col-lg-12 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							E-Mading
						</h3>
					</div>

					<div class="row p-t-35">
						<?php
						include "koneksi.php";
						$result = mysqli_query($conn, "SELECT * FROM artikel where status='publish' ");
						while ($data = mysqli_fetch_array($result)) {
						?>
							<div class="col-sm-4 p-r-25 p-r-15-sr991">
								<!-- Item latest -->
								<div class="m-b-45">
									<a href="detail.php?id_artikel=<?php echo $data['id_artikel']; ?>" class="wrap-pic-w hov1 trans-03">
										<img src='assets/admin/images/artikel/<?php echo $data["gambar"]; ?>'>
									</a>

									<div class="p-t-16">
										<h5 class="p-b-5">
											<a href="detail.php?id_artikel=<?php echo $data['id_artikel']; ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
												<?php echo $data['judul']; ?>
											</a>
										</h5>

										<span class="cl8">
											<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
												<?php echo $data['penerbit']; ?>
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												<?php
												$tanggal_formatted = date("M d", strtotime($data['tanggal'])); ?>
												<?php echo $tanggal_formatted; ?>
											</span>
										</span>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<a href="index.php">
								<a href="#" class="" style="font-size: 30px; color: #fff;"><span style="font-size: 30px; color: #b6895b;">JWP</span> MADING.</a>
							</a>
						</div>

						<div>
							<p class="f1-s-1 cl11 p-b-16">
								Merupakan sebuah media komunikasi berbasis website yang dapat digunakan untuk menyampaikan informasi kepada pembaca. website ini dapat diakses oleh semua peserta didik.
							</p>
							<div class="p-t-15">
								<a href="https://github.com/ridhokurniawan07" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-linkedin"></span>
								</a>
								<a href="https://www.linkedin.com/in/ridhokurniawan/" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-github"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2024 Ridho Kurniawan
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="assets/landing/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/landing/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/landing/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/landing/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="assets/landing/js/main.js"></script>

</body>

</html>