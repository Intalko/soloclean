<div id="breadcrumb" class="clearfix" style="background-image: url(<?=base_url()?>includes/frontend/img/banner/banner3.jpg);">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="<?=base_url()?>" title="Home">Beranda</a></li>
				<li><span>Login</span></li>
			</ul>
			<h2 class="bread-title">Login</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<form action="#" id="create-account-form" class="form-horizontal box panel panel-default">
					<h3 class="panel-heading">Buat Akun</h3>
					<div class="form_content panel-body clearfix">
						<p>Dengan Registrasi, anda tidak perlu mengisi alamat atau data diri anda lagi saat ingin memesan. Dan tunggu update dari Liez Florist untuk Pelanggan Setia kami yang Melakukan Register</p>
						<a href="page-register.html" class="btn button btn-default" title="Create an account" rel="nofollow"><i class="fa fa-user left"></i> Buat Akun Sekarang</a>
					</div>
				</form><!--end form -->
			</div>
			<div class="col-lg-6">
				<form action="<?=base_url()?>login/submit" method="post" id="form-login" class="form-horizontal box panel panel-default">
					<h3 class="panel-heading">Sudah punya akun?</h3>
					<div class="form_content panel-body clearfix">
						<div class="form-group">
							<div class="col-lg-12">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<p class="lost_password">
									<a href="#" title="Recover your forgotten password" rel="nofollow">Lupa Password Anda?</a>
								</p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<button class="btn button btn-default"><i class="fa fa-lock left"></i> Masuk Sekarang</button>
							</div>
						</div>
					</div>
				</form><!--end form -->
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->