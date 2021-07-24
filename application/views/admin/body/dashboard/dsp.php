<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DASHBOARD
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
	<div class="row">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Order Baru</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="dataTable" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</thead>
					<tbody>
						<?php if(!empty($data)){?>
							<?php foreach($data as $val){?>
							<tr>
								<td><?=$val['trans_code']?></td>
								<td><?=$val['nama_pembeli']?></td>
								<td><?=$val['phone_pembeli']?></td>
								<td><a href="mailto:<?=$val['email_pembeli']?>"><?=$val['email_pembeli']?></a></td>
								<td align="center">
									<a href="<?=base_url()?>admin/transaksi/<?=$val['id']?>" class="btn btn-primary">Cek Transaksi</a>
								</td>
							</tr>
							<?php }?>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Order yang Sedang Diproses</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="dataTable2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</thead>
					<tbody>
						<?php if(!empty($data2)){?>
							<?php foreach($data2 as $val2){?>
							<tr>
								<td><?=$val2['trans_code']?></td>
								<td><?=$val2['nama_pembeli']?></td>
								<td><?=$val2['phone_pembeli']?></td>
								<td><a href="mailto:<?=$val2['email_pembeli']?>"><?=$val2['email_pembeli']?></a></td>
								<td align="center">
									<a href="<?=base_url()?>admin/transaksi/<?=$val2['id']?>" class="btn btn-primary">Cek Transaksi</a>
								</td>
							</tr>
							<?php }?>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Order yang sudah Selesai</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="dataTable3" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</thead>
					<tbody>
						<?php if(!empty($data3)){?>
							<?php foreach($data3 as $val3){?>
							<tr>
								<td><?=$val3['trans_code']?></td>
								<td><?=$val3['nama_pembeli']?></td>
								<td><?=$val3['phone_pembeli']?></td>
								<td><a href="mailto:<?=$val3['email_pembeli']?>"><?=$val3['email_pembeli']?></a></td>
								<td align="center">
									<a href="<?=base_url()?>admin/transaksi/<?=$val3['id']?>" class="btn btn-primary">Cek Transaksi</a>
								</td>
							</tr>
							<?php }?>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Kode Transaksi</th>
							<th>Nama</th>
							<th>Telp</th>
							<th>Email</th>
							<th>Cek</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
    </div><!-- /.row (main row) -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
