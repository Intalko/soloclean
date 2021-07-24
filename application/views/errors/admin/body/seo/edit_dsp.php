<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Update SEO
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Data Master SEO TAG</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" id="form_input" action="<?=base_url()?>Admin/Seo/Update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$data['id']?>" />
            <div class="box-body">
              <div class="form-group">
                <label for="seo_title">SEO Title</label>
                <textarea maxlength="150" id="seo_title" name="seo_title" class="form-control"><?=$data['seo_title']?></textarea>
              </div>
              <div class="form-group">
                <label for="seo_keywords">SEO Keywords</label>
                <textarea maxlength="150" id="seo_keywords" name="seo_keywords" class="form-control"><?=$data['seo_keywords']?></textarea>
              </div>
              <div class="form-group">
                <label for="seo_description">SEO Description</label>
                <textarea maxlength="150" id="seo_description" name="seo_description" class="form-control"><?=$data['seo_description']?></textarea>
              </div>
              <div class="form-group">
                <label for="seo_author">SEO Authors</label>
                <textarea maxlength="150" id="seo_author" name="seo_author" class="form-control"><?=$data['seo_author']?></textarea>
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
