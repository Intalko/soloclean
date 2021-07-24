<script type="text/javascript">
var basefolder = '<?=$basefolder?>';
</script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAMBAH IMAGE SLIDER
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-info">
          <form class="form-horizontal">
            <div class="box-body">
              <form action="" id="form-upload">
                <div class="form-group">
                  <label for="inputFile" class="col-sm-2 control-label">IMAGE untuk SLIDER</label>
                  <div class="col-sm-10">
                      <div class="fileinput fileinput-new input-group" data-provides="fileinput" id="upload">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><i class="glyphicon glyphicon-paperclip"></i> Select file</span><span class="fileinput-exists"><i class="glyphicon glyphicon-repeat"></i> Change</span><input type="file" name="file"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                        <a href="#" id="upload-btn" class="input-group-addon btn btn-success fileinput-exists"><i class="glyphicon glyphicon-open"></i> Upload</a>
                      </div>
                    <!-- <progress id="progress-bar" max="100" value="0"></progress> -->
                    <div class="progress" style="display:none;">
                      <div id="progress-bar" class="progress-bar progress-bar-success progress-bar-striped " role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                        20%
                      </div>
                    </div>

                    <ul class="list-group"><ul>
                  </div>
                </div>
              </form>
            </div><!-- /.box-body -->
          </form>
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>   <!-- /.row -->
  </section>
</div>
