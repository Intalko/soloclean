<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Kode Transaksi <?=$trans_code?>
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<!-- form start -->
					<div class="box-body">
						<div class="form-group">
							<label for="nama_pembeli">Nama Pembeli</label>
							<input class="form-control" id="nama_pembeli" type="text" disabled value="<?=$data['nama_pembeli']?>">
						</div>
						<div class="form-group">
							<label for="email_pembeli">Email Pembeli</label>
							<input class="form-control" id="email_pembeli" type="text" disabled value="<?=$data['email_pembeli']?>">
						</div>
						<div class="form-group">
							<label for="alamat_pembeli">Alamat Pembeli</label>
							<textarea disabled class="form-control" id="alamat_pembeli"><?=$data['alamat_pembeli']?></textarea>
						</div>
						<div class="form-group">
							<label for="phone_pembeli">Telepon Pembeli</label>
							<input class="form-control" id="phone_pembeli" type="text" disabled value="<?=$data['phone_pembeli']?>">
						</div>
						<h3>Produk Pembelian</h3>
						<hr/>
						<div class="form-group">
							<label for="produk">Produk yang dibeli</label>
							<input class="form-control" id="produk" type="text" disabled value="<?=$data['nama_produk']?>">
						</div>
						<div class="form-group">
							<label for="qty">Kuantitas</label>
							<input class="form-control" id="qty" type="text" disabled value="<?=$data['qty']?>">
						</div>
						<div class="form-group">
							<label for="ukuran">Tipe Ukuran</label>
							<input class="form-control" id="ukuran" type="text" disabled value="<?=$data['ukuran']?>">
						</div>
						<div class="form-group">
							<label for="harga">Harga</label>
							<input class="form-control" id="harga" type="text" disabled value="<?=$data['harga']?>">
						</div>
						<h3>Data Pesanan Bunga</h3>
						<hr/>
						<div class="form-group">
							<label for="nama_penerima">Ditujukan Ke</label>
							<input class="form-control" id="nama_penerima" type="text" disabled value="<?=$data['nama_penerima']?>">
						</div>
						<div class="form-group">
							<label for="tanggal_kirim">Tanggal Pengiriman</label>
							<input class="form-control" id="tanggal_kirim" type="text" disabled value="<?=$data['tanggal_kirim']?>">
						</div>
						<div class="form-group">
							<label for="alamat_penerima">Alamat Penerima</label>
							<input class="form-control" id="alamat_penerima" type="text" disabled value="<?=$data['alamat_penerima']?>">
						</div>
						<div class="form-group">
							<label for="pengirim">Ucapan dari</label>
							<input class="form-control" id="pengirim" type="text" disabled value="<?=$data['pengirim']?>">
						</div>
						<div class="form-group">
							<label for="ucapan">Isi Ucapan</label>
							<input class="form-control" id="ucapan" type="text" disabled value="<?=$data['ucapan']?>">
						</div>
						<div class="form-group">
							<label for="keterangan_lain">Keterangan Lain</label>
							<input class="form-control" id="keterangan_lain" type="text" disabled value="<?=$data['keterangan_lain']?>">
						</div>
						<h3>Status Pesanan</h3>
						<hr/>
						<div class="form-group" style="font-size:20px;">
							Status Terakhir : <b><?php if($data['status'] == 0){ ?> Baru pesan <?php }else if($data['status'] == 1){ ?>Sedang di Proses<?php }else{ ?>Telah Selesai<?php } ?></b>
							<br/>
							Update Tanggal : <b> <?= $data['updated']?></b>
						</div>
					</div><!-- /.box-body -->
					<?php if($data['status'] != 2) { ?>
					<div class="box-footer">
						<?php if($data['status'] == 0){ ?>
							<a href="<?=base_url()?>admin/transaksi/update/<?=$data['id']?>" style="float:right" type="submit" class="btn btn-lg btn-primary">Process Order</a>
						<?php }else if($data['status'] == 1){ ?>
							<a href="<?=base_url()?>admin/transaksi/close/<?=$data['id']?>" style="float:right" type="submit" class="btn btn-lg btn-danger">Close Order</a>
						<?php }?>
					</div>
					<?php } ?>
				</div><!-- /.box -->
			</div>   <!-- /.row -->
		</div>
	</section>

</div>
