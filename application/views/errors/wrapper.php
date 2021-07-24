<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <!--<![endif]-->
<html lang="en">
	<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Liez Florist - <?=$title?></title>

		<meta name="keywords" content="<?=$meta['keywords']?>">
		<meta name="description" content="<?=$meta['description']?>">
		<meta name="author" content="<?=$meta['author']?>">
		<meta name="robots" content="nofollow">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url()?>includes/frontend/img/favicon.ico" type="image/x-icon">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/owl.carousel/assets/owl.carousel.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/magnific-popup/magnific-popup.css">
		
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/nivo-slider/css/style.css">

		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/vendor/slider-range/css/jslider.css">

		<!-- Template CSS -->
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-global.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-animate.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-product.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-product-list.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/theme-responsive.css">

		<!-- Template Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>includes/frontend/css/custom.css">
	</head>
	
	<body class="index home-1">
	<?php $sess_u = $this->session->userdata('user');?>
		<div id="all" <?php if(isset($error)){ ?>class="page-not404"<?php } ?>>
			<header id="top-header">
				<div class="header-topbar">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-8">

								<div class="block-callus pull-left hidden-xs">
									<span>Telepon Kami: 0281-641-931</span>
								</div><!-- end call us -->
							</div>
							<div class="col-lg-7 col-md-7 col-sm-6 col-xs-4">
								<div class="header_user_info pull-right">
									<div data-toggle="dropdown" class="dropdown-title">
										<a href="#" title="My account"><i class="fa fa-user"></i></a>
									</div>   
									<ul class="links">
										<?php if($sess_u) {?>
											<li>
												<a href="#" title="Halo, <?=$sess_u['nama']?>">Halo, <?=$sess_u['nama']?></a>
											</li>
										<?php } ?>
										<?php if($sess_u) {?>
											<li>
												<a href="#" title="Account">Akun Anda</a>
											</li>
										<?php } ?>
										<?php if(!$sess_u) {?>
											<li>
												<a href="<?=base_url()?>register" title="Register">Daftar</a>
											</li>
										<?php } ?>
										<li>
											<?php if(!$sess_u) {?>
												<a href="<?=base_url()?>login" title="Login">Login</a>
											<?php }else{ ?>
												<a href="<?=base_url()?>logout" title="Logout">Logout</a>
											<?php } ?>
										</li>
									</ul>
								</div><!-- end header_user_info -->
							</div>
						</div>
					</div>
				</div>
				<div class="header-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-5 col-xs-5">
								<div class="logo">
									<a href="<?=base_url()?>" title="Tiva byHands">
										<img class="img-responsive" src="<?=base_url()?>includes/frontend/img/logo.png" alt="">
									</a>
								</div><!--end logo-->
							</div>
							<div class="col-lg-10 col-md-10 col-sm-7 col-xs-7">
								<div class="topheader-navholder">
									<div class="topheader-navholder-lf">
										
										<div id="search_block_top" class="block-search dropdown-over pull-right">
											<div class="dropdown-title">
												<a href="<?=base_url()?>pesan" title="Search"><i class="zmdi zmdi-shopping-basket"></i></a>
											</div>
											
										</div><!-- end #search_block_top -->
									</div><!-- end topheader-navholder-lf -->
									<div class="topheader-navholder-rg">
										<span id="btn-menu"><i class="zmdi zmdi-menu"></i></span>
										<nav id="main-nav">
											<ul class="nav navbar-nav megamenu">
												<li class="dropdown">
													<a href='<?=base_url()?>'>Beranda</a>
												</li>
												<li class="dropdown">
													<a href='#'>Produk <b class="caret"></b></a>
													<div id="dropdown-menu4" class="dropdown-menu">
														<ul>
															<?php foreach($kategori as $key) { ?>
																<li><a href='<?=base_url()?>produk/<?=$key['id']?>'><?=$key['nama_kategori']?></a></li>
															<?php } ?>
														</ul>
													</div>
												</li>
												
												<li class="dropdown">
													<a href='page-about.html'>FAQ</a>
												</li>
												<li class="dropdown"><a href='<?=base_url()?>kontak'>Kontak Kami</a></li>
											</ul>
										</nav><!-- end main-nav -->
									</div><!-- end topheader-navholder-rg -->
								</div><!-- end topheader-navholder -->
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</header><!-- end header -->

			<?php $this->load->view($body); ?>
			
			<footer id="footer">
				<div class="footer-center">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-sp-12">
								<div class="block-keep block">
									<h4 class="title_block">Tentang Kami</h4>
									<div class="block_content">
										<p>Berdiri sejak tahun 2002 Liez Florist merupakan toko bunga terbaik di Purwokerto dan sekitarnya. Didukung dengan perangkai bunga handal & profesional, percayakan kebutuhan rangkaian dan dekorasi Anda kepada kami.</p>
									</div>
								</div>
								<div class="social_block">
									<ul class="links">
										<li><a href="#"><em class="fa fa-facebook"></em><span class="unvisible">facebook</span> </a></li>
										<li><a href="#"><em class="fa fa-twitter"></em><span class="unvisible">twitter</span> </a></li>
										<li><a href="#"><em class="fa fa-google-plus"></em><span class="unvisible">google</span> </a></li>
										<li><a href="#"><em class="fa fa-linkedin"></em><span class="unvisible">linkedin</span> </a></li>
										<li><a href="#"><em class="fa fa-pinterest"></em><span class="unvisible">pinterest</span> </a></li>
										<li class="last"><a href="#"><em class="fa fa-instagram"></em><span class="unvisible">instagram</span> </a></li>
									</ul>
								</div><!-- end social_block -->
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-sp-12">
								<div class="footer-block block">
									<h4 class="title_block">Servis Kami</h4>
									<ul class="toggle-footer list-group bullet">
										<li><a href="#" title="Our Policy">Our Policy</a></li>
										<li><a href="#" title="Shipping & Returns">Shipping & Returns</a></li>
										<li><a href="#" title="F.A.Qs">FAQ</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-sp-12">
								<div class="footer-block block">
									<h4 class="title_block">Akun Anda</h4>
									<ul class="toggle-footer list-group bullet">
										<?php if(!$sess_u) {?>
										<li><a href="<?=base_url()?>login" title="Login">Login</a></li>
										<li><a href="<?=base_url()?>register" title="Register">Register</a></li>
										<?php }else{ ?>
										<li><a href="#" title="Akun Anda">Akun Anda</a></li>
										<li><a href="<?=base_url()?>logout" title="Logout">Logout</a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-sp-12">
								<div class="block-html block">
									<h4 class="title_block">Jadwal Buka Toko</h4>
									<div class="block_content">
										<p>Senin - Jumat ....... 8 a.m - 8 p.m</p>
										<p>Sabtu - Minggu ....... 8 a.m - 7 p.m</p>
										<p>Hari Raya kami tidak melayani</p>
									</div>
								</div><!-- end block-gallery -->
							</div>
						</div><!-- end row -->
					</div>
				</div><!-- end footer-center -->

				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
								Copyright ©LiezFlorist <?=date('Y')?> - All rights reserved. Dibuat Oleh Lixus
							</div>
						</div>
					</div>
				</div><!-- end footer-copyright -->
			</footer><!-- end footer -->

			
			
			<div class="go-up">
				<a href="#"><i class="fa fa-chevron-up"></i></a>    
			</div><!-- end go-up -->
		</div> <!-- end all -->

		<!-- Vendor JS -->
		<script src="<?=base_url()?>includes/frontend/vendor/jquery/jquery.min.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<script src="<?=base_url()?>includes/frontend/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>

		<script src="<?=base_url()?>includes/frontend/vendor/slider-range/js/tmpl.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/slider-range/js/draggable-0.1.js"></script>
		<script src="<?=base_url()?>includes/frontend/vendor/slider-range/js/jquery.slider.js"></script>
		
		<!-- Template Base, Components and Settings -->
		<script src="<?=base_url()?>includes/frontend/js/theme.js"></script>

		<!-- Template Custom -->
		<script src="<?=base_url()?>includes/frontend/js/custom.js"></script>
	</body>
</html>