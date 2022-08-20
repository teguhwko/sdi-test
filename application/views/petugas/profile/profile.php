<script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
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
              <h5 class="m-0">Profile</h5>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Profile/profile') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">NAMA</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="<?= $user['nama'] ?>" disabled>
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="nohp">NO HP</label>
                  <input type="text" name="nohp" id="nohp" class="form-control" value="<?= $user['no_hp'] ?>" disabled>
                  <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="jenis">JENIS KELAMIN</label>
                  <div class="col-sm-10">
                    <input type="radio" name="jenis" id="jenis-l" class="mt-3" <?= $user['jk'] == 'Laki-Laki' ? 'checked' : '' ?> value="Laki-Laki" disabled>Laki-Laki
                    <input type="radio" name="jenis" id="jenis-p" class="mt-3 ml-2" <?= $user['jk'] == 'Perempuan' ? 'checked' : '' ?> value="Perempuan" disabled>Perempuan
                  </div>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label><br>
                  <div class="col-sm-10">
                    <input type="file" name="foto" id="foto" disabled>
                    <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="button" id="ubah-profil" value="UBAH" class="btn btn-warning">
                  <input type="submit" disabled id="simpan-profil" value="SIMPAN" class="btn btn-primary">
                  <input type="reset" id="batal-profil" value="BATAL" class="btn btn-danger">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">Akses</h5>
            </div>
            <div class="card-body">
              <form action="<?= base_url('Profile/gantiPassword') ?>" method="POST">
                <div class="form-group">
                  <label for="oldpassword">OLD PASSWORD</label>
                  <input type="password" name="oldpassword" id="oldpassword" disabled class="form-control" value="<?= set_value('oldpassword') ?>">
                  <?= form_error('oldpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="newpassword">PASSWORD</label>
                  <input type="password" name="newpassword" id="newpassword" disabled class="form-control" value="">
                  <?= form_error('newpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="repassword">RE PASSWORD</label>
                  <input type="password" name="repassword" id="repassword" disabled class="form-control" value="">
                  <?= form_error('repassword', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="button" id="ganti-password" value="GANTI PASSWORD" class="btn btn-warning">
                  <input type="submit" value="SIMPAN" class="btn btn-primary">
                  <input type="reset" id="batal-ganti" value="BATAL" class="btn btn-danger">
                </div>
              </form>
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
<?= $this->session->flashdata('pesan') ? $this->session->flashdata('pesan') : '' ?>
<script>
  <?php if (form_error('oldpassword') || form_error('newpassword') || form_error('repassword')) { ?>
    $('#oldpassword').prop("disabled", false);
    $('#newpassword').prop("disabled", false);
    $('#repassword').prop("disabled", false);
  <?php } ?>
  $('#ganti-password').on('click', function() {
    $('#oldpassword').prop("disabled", false);
    $('#newpassword').prop("disabled", false);
    $('#repassword').prop("disabled", false);
  });
  $('#batal-ganti').on('click', function() {
    $('#oldpassword').prop("disabled", true);
    $('#newpassword').prop("disabled", true);
    $('#repassword').prop("disabled", true);
  });
  <?php if (form_error('nama') || form_error('nohp')) { ?>
    $('#nama').prop("disabled", false);
    $('#nohp').prop("disabled", false);
    $('#jenis-p').prop("disabled", false);
    $('#jenis-l').prop("disabled", false);
    $('#simpan-profil').prop("disabled", false);
    $('#foto').prop("disabled", false);
  <?php } ?>
  $('#ubah-profil').on('click', function() {
    $('#nama').prop("disabled", false);
    $('#nohp').prop("disabled", false);
    $('#jenis-p').prop("disabled", false);
    $('#jenis-l').prop("disabled", false);
    $('#simpan-profil').prop("disabled", false);
    $('#foto').prop("disabled", false);
  });
  $('#batal-profil').on('click', function() {
    $('#nama').prop("disabled", true);
    $('#nohp').prop("disabled", true);
    $('#jenis-p').prop("disabled", true);
    $('#jenis-l').prop("disabled", true);
    $('#foto').prop("disabled", true);
    $('#simpan-profil').prop("disabled", true);
  });
</script>