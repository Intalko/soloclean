<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Product Baru
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Data Master Product</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Product/Insert" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="nama_product">Nama Product</label>
                <input type="text" class="form-control" id="nama_product" name="nama_produk" placeholder="Nama Product yang diinginkan">
              </div>

              <div class="form-group">
                <label for="produk_image">Image Produk</label>
                <input type="file" name="produk_image" id="produk_image" class="form-control" />
              </div>
			  
              <div class="form-group">
                <label for="link_produk">Link produk (Tokopedia Or Shopee)</label>
                <input type="text" class="form-control" id="link_produk" name="link_produk" placeholder="Link Product yang diinginkan">
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
