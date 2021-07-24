<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Product <?=$data['nama_produk']?>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          </div><!-- /.box-header -->
            <h3 class="box-title">Data Master Product</h3>
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Product/Update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id']?>" />
            <div class="box-body">
              <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?=$data['nama_produk']?>">
              </div>
              <div class="form-group">
                <input id="promo" type="checkbox" name="featured" value="1" <?php if($data['featured'] == 1){?>checked<?php } ?>><label for="promo">Featured
                </label>
              </div>
              
              <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select id="id_kategori" name="id_kategori" class="form-control">
                  <?php foreach($data2 as $row) {?>
                    <option <?php if($row['id'] == $data['id_kategori']) {?>selected<?php }?> value="<?=$row['id']?>"><?=$row['nama_kategori']?></option>
                  <?php } ?>
                </select>
              </div>
              

              <div class="form-group">
                <label for="produk_image">Image Produk</label>
                <a href="<?=base_url()?><?=$data['produk_image']?>" target="_blank">Lihat Gambar 1</a>
                <input type="file" name="produk_image" id="produk_image" class="form-control" />
              </div>


              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="penjelasan" id="description" placeholder="Tulis Deskripsi Produk anda" class="form-control"><?=$data['penjelasan']?></textarea>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box -->
    </div>   <!-- /.row -->
  </section>
</div>
