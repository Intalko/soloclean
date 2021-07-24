<div id="breadcrumb" class="clearfix">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="<?=base_url()?>" title="Beranda">Beranda</a></li>
				<li><span>Pesanan Anda</span></li>
			</ul>
			<h2 class="bread-title">Pesanan Anda</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="page-checkout">
			<div class="row">
				<form method="post" action="<?=base_url()?>pesan/konfirmasi">
					<div class="checkoutleft col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<p>Apakah anda langganan kami? <a href="<?=base_url()?>login">Silahkan login dengan akun anda</a>.</p>
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Data Pemesan
										</a>
									</h4>
								</div>
								<?php $sess_u = $this->session->userdata('user');?>
								
								<div id="collapseOne" class="accordion-body collapse in">
									<div class="panel-body">
									<?php if(!$sess_u) { ?>
										<div class="form-group">
											<div class="col-md-6">
												<label>Nama</label>
												<input type="text" name="nama_pembeli" value="" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Email</label>
												<input type="text" name="email_pembeli" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Alamat</label>
												<textarea name="alamat_pembeli" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>No Handphone</label>
												<input type="text" name="phone_pembeli" value="" class="form-control">
											</div>
										</div>
									<?php }else{ ?>
										<div class="form-group">
											<div class="col-md-6">
												<label>Nama</label>
												<input type="hidden" name="nama_pembeli" value="<?=$sess_u['nama']?>"/>
												<input type="text" disabled value="<?=$sess_u['nama']?>" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Email</label>
												<input type="hidden" name="email_pembeli" value="<?=$sess_u['email']?>"/>
												<input type="text" disabled value="<?=$sess_u['email']?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Alamat</label>
												<input type="hidden" name="alamat_pembeli" value="<?=$sess_u['alamat']?>"/>
												<textarea disabled class="form-control"><?=$sess_u['alamat']?></textarea>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>No Handphone</label>
												<input type="hidden" name="phone_pembeli" value="<?=$sess_u['phone']?>"/>
												<input type="text" disabled value="<?=$sess_u['phone']?>" class="form-control">
											</div>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Data Pesanan Bunga
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="panel-body">
										<div class="form-group">
											<div class="col-md-6">
												<label>Harga</label>
												<input type="number" min="100000" value="100000" class="form-control" name="harga">
											</div>
											<div class="col-md-6">
												<label>Ditujukan Kepada</label>
												<input type="text" value="" class="form-control" name="nama_penerima">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Tanggal dan Jam</label>
												<input type="text" name="tanggal_kirim" value="" placeholder="2017-02-02 13:13" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Alamat</label>
												<textarea name="alamat_penerima" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Data yang dicantumkan di Bunga
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="panel-body">
										<div class="form-group">
											<div class="col-md-6">
												<label>Ucapan</label>
												<textarea name="ucapan" class="form-control"></textarea>
											</div>
											<div class="col-md-6">
												<label>Pengirim</label>
												<input type="text" value="" name="pengirim" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Keterangan Lain</label>
												<textarea name="keterangan_lain" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="actions-continue pull-right">
							<input type="submit" value="Saya yakin Dengan Pesanan Saya" name="proceed" class="btn btn-primary">
						</div>
					</div>
				</form>
				<div class="checkoutright col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title_block">Pesanan Anda</h4>
					<table class="table cart-totals">
						<tbody>
							<tr class="cart-subtotal">
								<th>
									Pesanan
								</th>
								<td>
									<?=$produk['nama_produk']?>
								</td>
							</tr>
							<tr>
								<th>
									Ukuran
								</th>
								<td>
									<?=$ukuran?>
								</td>
							</tr>
							<tr class="total">
								<th>
									Jumlah
								</th>
								<td>
									<?=$qty?>
								</td>
							</tr>
						</tbody>
					</table>
					<a href="<?=base_url()?>single_produk/<?=$produk['id']?>" class="btn btn-danger">Ingin Rubah Pilihan anda, Klik Disini</a>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->
<hr/>