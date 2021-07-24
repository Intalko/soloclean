<div id="breadcrumb" class="clearfix">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="<?=base_url()?>" title="Home">Beranda</a></li>
				<li><span>Kontak Kami</span></li>
			</ul>
			<h2 class="bread-title">Kontak Kami</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<div class="container">
		<div class="contact-us">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h2 class="title_block">Info Kontak</h2>
					<div class="contact-box">
						<p>Liez Florist selalu memberi kualitas bunga terbaik kepada Anda, maka jangan ragukan kebutuhan bunga kalian segera datang ke store / hubungi kami langsung.<p>
						<ul>
							<li><i class="zmdi zmdi-pin"></i><span>Jl. Martadireja 2 No. 1100 (Dekat Rumah Sakit Sinar Kasih), Purwokerto.</span></li>
							<li><i class="zmdi zmdi-phone"></i><span>0281 - 641931 / 0812 6823260 / 0811261249 / 0857 26261272</span></li>
							<li><i class="zmdi zmdi-email"></i><a href="mail:liezfloristpurwokerto@gmail.com" title="Mail to LiezFlorist">liezfloristpurwokerto@gmail.com</a></li>
						</ul>
					</div><!-- contact-box-->
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="contact-form clearfix">
						<h2 class="title_block">Kirim pesan anda</h2>
						<form method="post" action="php/contact.php" id="cform" autocomplete="on">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="name" name="name" placeholder="Name*"/>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<input type="email" id="email" name="email" placeholder="Email*"/>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="text" id="subject" name="subject" placeholder="Subject*"/>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<textarea id="message" name="message" placeholder="Enter your message*"></textarea>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<button type="submit" class="btn button btn-primary">Kirim Pesan</button>
								</div>
							</div>
						</form>
					</div><!-- end contac-form -->
				</div>
			</div>
			<div id="contact-map" class="clearfix">
				<div id="map"></div><!-- end map -->
				<div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">Toko Bunga Liez Florist</div>
			</div><!-- end contact-map -->
		</div><!-- end contact-us -->
	</div><!-- end container -->
</div><!--end columns-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBd1UJcqm8K9sZ4p9xloWUHSzsFaovKxuM"></script>