<div class="row">
    <div class="col-xs-12">
        <div class="box" style="opacity: 0.9;">
            <div class="box-header">
              <h3 class="box-title">Data Jenis Tanah</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <p><a href='<?php echo base_url();?>index.php/parameter/Jenistanah/tambahjenistanah'
                  class='btn btn-primary btn-sm'>
                  <span class='fa fa-plus'></span> Tambah Data
                </a></p>
                <p>Jumlah Data : <?php echo $hitungdata->count ?></p>
                <div class="table-responsive">
                  <table id="datatanah" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Daerah</th>
                          <th>Nilai Klasifikasi</th>
                          <th>Keterangan</th>
                          <th>Bobot</th>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <th>Edit By</th> <?php } ?>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <th>Opsi</th> <?php } ?>
                          <?php if ($this->session->userdata('hak_akses')==2){?>
                          <th>Opsi</th> <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                          <?php foreach ($tampil as $row){?>
                      <tr>  
                          <td><?php echo $row->nama_daerah?></td>
                          <td><?php echo $row->nilai_klasifikasi?></td>
                          <td><?php echo $row->keterangan?></td>
                          <td><?php echo $row->nilai_bobot?></td>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <td><?php echo $row->nama_admin?></td> <?php } ?>
                          <?php if ($this->session->userdata('hak_akses')==1){?>
                          <td style="text-align: center;">
                            <a href='<?php echo base_url();?>index.php/parameter/Jenistanah/editjenistanah/<?php echo $row->id_jenis_tanah?>' class='btn btn-success btn-sm'> 
                            <span class='fa fa-pencil'>Edit</a>
                            <a href='<?php echo base_url();?>index.php/parameter/Jenistanah/hapusjenistanah/<?php echo $row->id_jenis_tanah?>' class='btn btn-danger btn-sm' onClick="return doconfirm();">
                            <span class='fa fa-trash'>Delete</a>
                          <?php } ?>
                          <?php if ($this->session->userdata('hak_akses')==2){?>
                          <td style="text-align: center;">
                            <a href='<?php echo base_url();?>index.php/parameter/Jenistanah/editjenistanah/<?php echo $row->id_jenis_tanah?>' class='btn btn-success btn-sm'> 
                            <span class='fa fa-pencil'>Edit</a>
                            <a href='<?php echo base_url();?>index.php/parameter/Jenistanah/hapusjenistanah/<?php echo $row->id_jenis_tanah?>' class='btn btn-danger btn-sm' onClick="return doconfirm();">
                            <span class='fa fa-trash'>Delete</a>
                          <?php } ?>
                      </tr>
                          <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<style>
  table th{
    text-align: center;
  }
  table td{
    text-align: center;
  }
</style>

    <!-- jQuery 3 -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#datatanah').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>

    <script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>