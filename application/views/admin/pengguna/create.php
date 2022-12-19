  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Pengguna</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/pengguna')?>">Data Pengguna</a></li>
        <li class="active">Tambah Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="phone">No HP</label>
              <input type="tel" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" name="level" required="">
                <option value="">- Pilih Level -</option>
                <option value="admin">Admin</option>
                <option value="panitia">Panitia</option>
                <option value="verifikator">Verifikator</option>
              </select>
            </div>
            <button class="btn btn-primary" name="action" value="create"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->