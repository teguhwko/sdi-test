<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ubah User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">UBAH USER</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="<?= base_url('User/ubah/' . $user['username']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="username">USERNAME</label>
                      <input type="text" name="username" id="username" class="form-control" value="<?= $user['username'] ?>" disabled>
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="jenis">JENIS AKSES</label>
                      <div class="col-sm-10">
                        <input type="radio" name="jenis" id="jenis" class="mt-3" <?= $user['role'] == "admin" ? 'checked' : '' ?> value="admin">Admin
                        <input type="radio" name="jenis" id="jenis" class="mt-3 ml-2" <?= $user['role'] == "petugas" ? 'checked' : '' ?> value="petugas">Petugas
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="karyawan">KARYAWAN</label>
                      <input type="text" name="username" id="username" class="form-control" value="<?= $karyawan['nama_karyawan'] ?>" disabled>
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                      <label for="foto">FOTO</label>
                      <br>
                      <input type="file" name="foto" id="foto"><br>
                      <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                      <input type="submit" value="SIMPAN" class="btn btn-primary btn-block">
                      <input type="reset" value="BATAL" class="btn btn-danger btn-block">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->