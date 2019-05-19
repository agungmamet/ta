<div class="row">
  <div class="col-md-6">
          <!-- Horizontal Form -->
    <div class="box box-success" style="opacity: 0.9;">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Bobot Parameter</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <?php foreach ($edit as $e) { ?> <!-- $edit berasal dari controller function edit ['edit'] -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Bobot/updatebobot" method="POST">
            <input type="hidden" name="idbobot" value="<?php echo $e->id_bobot ?>" required>
              <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nama Parameter</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="namaparameter" placeholder="Nama Daerah" value="<?php echo $e->nama_parameter?>" required>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Nilai Bobot</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="nilaibobot" placeholder="Nilai Bobot" value="<?php echo $e->nilai_bobot?>" required>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>index.php/pengaturan/Bobot/index">
                    <button type="button" class="btn btn-default">Cancel</button>
                  </a>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
        </form>
        <?php } ?>
    </div>
  </div>