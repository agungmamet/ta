<div class="row">
    <div class="col-md-6" style="opacity: 0.9;">
          <!-- Horizontal Form -->
      <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Administrator</h3>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>index.php/pengaturan/Admin/register" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nama Administrator</label>
                  <div class="col-sm-8">
                    <input type="username" class="form-control" id="inputEmail3" name="namaadmin" placeholder="Nama Administrator" required>
                  </div>
              </div>

              <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                      <div class="alert alert-danger animated fadeInDown" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Peringatan!</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_username'); ?>
                    </div>
              <?php } ?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="username" class="form-control" id="inputEmail3" name="username" placeholder="Username" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
                  </div>
              </div>

              <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                      <div class="alert alert-danger animated fadeInDown" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Peringatan!</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_password'); ?>
                    </div>
              <?php } ?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Konfirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputEmail3" name="conf_pass" placeholder="Konfirm Password" required>
                  </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Hak Akses</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="hakakses" style="width: 333px;" required>
                        <option value="">Pilih Hak Akses</option>
                        <option value="1">Administrator</option>
                        <option value="2">Manager</option>
                        <option value="3">Client</option>
                      </select>
                    </div>
              </div>

            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <a href="<?php echo base_url();?>index.php/pengaturan/Admin/index">
                  <button type="button" class="btn btn-default">Cancel</button>
                </a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
              <!-- /.box-footer -->
        </form>
      </div>
    </div>