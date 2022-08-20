<link rel="stylesheet" href="<?= base_url('adminlte/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('adminlte/') ?>plugins/select2/css/select2.min.css">
<script src="<?= base_url('adminlte/') ?>plugins/select2/js/select2.min.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ubah Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Peminjaman</li>
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
                                    <form action="<?= base_url('Peminjaman/ubah/' . $kode) ?>" method="POST">
                                        <div class="form-group">
                                            <label for="kode">KODE PEMINJAMAN</label>
                                            <input type="text" name="kode" id="kode" class="form-control" value="<?= $kode ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="karyawan">NAMA KARYAWAN</label>
                                            <select name="karyawan" id="karyawan" class="form-control select2bs4">
                                                <?php foreach ($karyawan as $r) : ?>
                                                    <option value="<?= $r['kode_karyawan'] ?>" <?= $peminjaman['kode_karyawan'] == $r['kode_karyawan'] ? 'selected' : '' ?>>
                                                        <?= $r['nama_karyawan'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="barang">NAMA BARANG</label>
                                            <select name="barang" id="barang" class="form-control select2bs4">
                                                <option value="">--- NAMA BARANG ---</option>
                                                <option value="<?= $peminjaman['kode_barang'] ?>" selected>
                                                    <?= $peminjaman['kode_barang'] ?>
                                                </option>
                                                <?php foreach ($barang as $r) : ?>
                                                    <option value="<?= $r['kode_barang'] ?>">
                                                        <?= $r['kode_barang'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">KETERANGAN</label>
                                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"><?= $peminjaman['keterangan'] ?></textarea>
                                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kembali">KEMBALI</label>
                                            <input type="date" name="kembali" id="kembali" class="form-control" value="<?= $peminjaman['tgl_kembali'] ?>">
                                            <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
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
<script>
    var Controller = (function() {
        var base_url = "<?= base_url() ?>";
        var setupEventListener = function() {
            $('#barang').on('change', function() {
                var kode = $(this).val();
                var kondisi = $('#kondisi').val();
            });
            $('#kondisi').on('change', function() {
                var kode = $('#barang').val();
                var kondisi = $('#kondisi').val();
            });
            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })
        }

        return {
            init: function() {
                setupEventListener();
            }
        }
    })();
    Controller.init();
</script>