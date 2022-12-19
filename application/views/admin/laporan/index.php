  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?=isset($judul)?$judul:'Data Calon Siswa'?></h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?=isset($judul)?$judul:'Data Calon Siswa'?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-body">
            <div class="form-group">
                <label>Jenjang</label>
                <select name="jenjang" class="form-control" id="jenjang">
                    <option <?=$jenjang=="Semua"?'selected=""':''?>>Semua</option>
                    <option <?=$jenjang=="MI"?'selected=""':''?>>MI</option>
                    <option <?=$jenjang=="TK"?'selected=""':''?>>TK</option>
                    <option <?=$jenjang=="PAUD"?'selected=""':''?>>PAUD</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success" onclick="loadJenjang(jenjang.value)">Filter</button>
            </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-body">
          <?php
          if($this->session->flashdata('success')) {
            $message = $this->session->flashdata('success');
          ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
          <?php
            }
          ?>
          <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>NO</th>
              <th>No Pendaftaran</th>
              <th>Nama</th>
              <th>Jenjang</th>
              <th>Status</th>
              <th>Bukti Pendaftaran</th>
              <th>Ringkasan</th>
            </tr>
            </thead>
            <tbody>
              <?php 
              $badge = ['Daftar'=>'primary','Terverifikasi'=>'success','Lulus'=>'success','Ditolak'=>'danger','Daftar Ulang'=>'success'];
              foreach($students as $key => $student): 
              ?>
              <tr>
                <td><?=++$key?></td>
                <td><?=$student->register_number?></td>
                <td><?=$student->name?></td>
                <td><?=explode('.',$student->register_number)[0]?></td>
                <td>
                  <span class="label label-<?=$badge[$student->status]?>">
                    <?=$student->status?>
                  </span>
                </td>
                <td><a href="<?= base_url('daftar/buktiPendaftaran/'.$student->id) ?>" class="btn btn-success">Download</a></td>
                <td><a href="<?= base_url('daftar/selesai/'.$student->id) ?>?save=true" class="btn btn-success">Download</a></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
      function loadJenjang(val)
      {
          location.href="<?=base_url('admin/laporan/index')?>/"+val
      }
  </script>