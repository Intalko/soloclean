<div id="breadcrumb" class="clearfix" style="background-image: url(<?=base_url()?>includes/frontend/img/banner/banner3.jpg);">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="<?=base_url()?>" title="Home">Beranda</a></li>
				<li><span>Daftar</span></li>
			</ul>
			<h2 class="bread-title">Daftar</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<form action="<?=base_url()?>register/submit" method="post" id="form-account-creation" class="form-horizontal box panel panel-default">
					<h3 class="panel-heading">Buat Akun</h3>
					<div class="form_content panel-body clearfix">
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="email">Alamat Email <sup>*</sup></label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
						</div>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="password">Password <sup>*</sup></label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>
						<hr/>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="nama">Nama Anda <sup>*</sup></label>
								<input type="nama" class="form-control" id="nama" name="nama">
							</div>
						</div>
						
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="phone">No Handphone <sup>*</sup></label>
								<input type="phone" class="form-control" id="phone" name="phone">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="alamat">Alamat </label>
								<textarea type="alamat" class="form-control" id="alamat" name="alamat"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<button class="btn button btn-default">Daftar Sekarang</button>
								<p class="pull-right required"><span><sup>*</sup>Required field</span></p>
							</div>
						</div>
					</div>
				</form><!--end form -->
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->