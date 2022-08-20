<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ubah Karyawan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Karyawan</li>
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
              <h5 class="m-0">UBAH KARYAWAN</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="<?= base_url('Karyawan/ubah/' . $kode) ?>" method="POST">
                    <div class="form-group">
                      <label for="kode">KODE KARYAWAN</label>
                      <input type="text" name="kode" id="kode" class="form-control" value="<?= $kode ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nama">NAMA KARYAWAN</label>
                      <input type="text" name="nama" id="nama" class="form-control" value="<?= $karyawan['nama_karyawan'] ?>">
                      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="jenis">JENIS KELAMIN</label>
                      <div class="col-sm-10">
                        <input type="radio" name="jenis" id="jenis" <?= $karyawan['jk'] == 'Laki-Laki' ? 'checked' : '' ?> class="mt-3" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jenis" id="jenis" <?= $karyawan['jk'] == 'Perempuan' ? 'checked' : '' ?> class="mt-3 ml-2" value="Perempuan">Perempuan
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jabatan">NAMA JABATAN</label>
                      <select name="jabatan" id="jabatan" class="form-control">
                        <?php foreach ($jabatan as $r) : ?>
                          <option value="<?= $r['kode_jabatan'] ?>" <?= $karyawan['kode_jabatan'] == $r['kode_jabatan'] ? 'selected' : '' ?>><?= $r['nama_jabatan'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="nohp">NO HP</label>
                      <input type="text" name="nohp" id="nohp" class="form-control" value="<?= $karyawan['no_hp'] ?>">
                      <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
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