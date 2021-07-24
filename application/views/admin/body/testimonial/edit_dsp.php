<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update Testimonial <?=$data['judul_testimonial']?>
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
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Testimonial/Update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id']?>" />
            <div class="box-body">
              <div class="form-group">
                <label for="judul_testimonial">Judul Testimonial</label>
                <input type="text" class="form-control" id="judul_testimonial" name="judul_testimonial" value="<?=$data['judul_testimonial']?>">
              </div>

              <div class="form-group">
                <label for="testimonial_image">Image Testimonial</label>
                <a href="<?=base_url()?><?=$data['testimonial_image']?>" target="_blank">Lihat Gambar 1</a>
                <input type="file" name="testimonial_image" id="testimonial_image" class="form-control" />
              </div>

              <div class="form-group">
                <label for="description">Deskripsi Product</label>
                <textarea name="description" id="description" placeholder="Tulis Deskripsi Produk anda" class="form-control"><?=$data['description']?></textarea>
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
