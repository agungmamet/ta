<div class="row">
    <div class="col-md-6">
          <!-- Horizontal Form -->
      <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Bobot Parameter</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Bobot/simpanbobot" method="POST">
            <div class="box-body">
              <?php echo form_open(); ?>
              <?php echo validation_errors(); ?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Parameter</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="namaparameter" placeholder="Nama Parameter" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nilai Bobot</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="nilaibobot" placeholder="Nilai Bobot" required>
                  </div>
              </div>

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/pengaturan/Bobot/index">
                  <button type="button" class="btn btn-default">Cancel</button>
                </a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
              <!-- /.box-footer -->
        </form>
      </div>
    </div>