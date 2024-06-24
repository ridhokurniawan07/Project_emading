<!DOCTYPE html>
<html lang="en">

<head>
	<title>Article Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/landing/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/landing/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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


	<?php
	include "koneksi.php";
	$id_artikel = $_GET['id_artikel'];
	$result = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = $id_artikel");
	$data = mysqli_fetch_array($result);
	?>

	<!-- Content -->
	<section class="bg0 p-b-70 p-t-5">
		<!-- Title -->
		<div class="bg-img1 size-a-18 how-overlay1" style="background-image: url(assets/admin/images/artikel/<?php echo $data["gambar"]; ?>); background-size: cover; background-position: center;">
			<div class="container h-full flex-col-e-c p-b-58">

				<h3 class="f1-l-5 cl0 p-b-16 txt-center respon2">
					<?php echo $data['judul']; ?>
				</h3>

				<div class="flex-wr-c-s">
					<span class="f1-s-3 cl8 m-rl-7 txt-center">
						<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
							<?php echo $data['penerbit']; ?>
						</a>

						<span class="m-rl-3">-</span>

						<span>
							<?php
							$tanggal_formatted = date("M d", strtotime($data['tanggal'])); ?>
							<?php echo $tanggal_formatted; ?>
						</span>
					</span>
				</div>
			</div>
		</div>

		<!-- Detail -->
		<div class="container p-t-82">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-100">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<p class="f1-s-11 cl6 p-b-25">
								<?php echo $data['isi']; ?>
							</p>
							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									Tags:
								</span>

								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
										Articles
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-100">
					<div class="p-l-10 p-rl-0-sr991">
						<!-- Banner -->
						<div class="flex-c-s">
							<a href="#">
								<img class="max-w-full" src="assets/landing/images/banner-02.jpg" alt="IMG">
							</a>
						</div>
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