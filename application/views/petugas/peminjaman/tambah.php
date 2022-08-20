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
                    <h1 class="m-0 text-dark">Tambah Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Peminjaman</li>
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
                            <h5 class="m-0">TAMBAH PEMINJAMAN</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="<?= base_url('Peminjaman/tambah') ?>" method="POST">
                                        <div class="form-group">
                                            <label for="kode">KODE PEMINJAMAN</label>
                                            <input type="text" name="kode" id="kode" class="form-control" value="<?= $kode ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="karyawan">NAMA KARYAWAN</label>
                                            <select name="karyawan" id="karyawan" class="form-control select2bs4">
                                                <option value="">--- PILIH KARYAWAN ---</option>
                                                <?php foreach ($karyawan as $r) : ?>
                                                    <option value="<?= $r['kode_karyawan'] ?>" <?= set_value('karyawan') == $r['kode_karyawan'] ? 'selected' : '' ?>>
                                                        <?= $r['nama_karyawan'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="barang">KODE BARANG</label>
                                            <select name="barang" id="barang" class="form-control select2bs4">
                                                <option value="">--- KODE BARANG ---</option>
                                                <?php foreach ($barang as $r) : ?>
                                                    <option value="<?= $r['kode_barang'] ?>" <?= set_value('barang') == $r['kode_barang'] ? 'selected' : '' ?>>
                                                        <?= $r['kode_barang'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">KETERANGAN</label>
                                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"><?= set_value('keterangan') ?></textarea>
                                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kembali">KEMBALI</label>
                                            <input type="date" name="kembali" id="kembali" class="form-control" value="<?= set_value('kembali') ?>">
                                            <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                                            <br>
                                            <small id="hasil-success" class="text-success"></small>
                                            <small id="hasil-warning" class="text-danger"></small>
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
                var karyawan = $('#karyawan').val();
                var kondisi = $('#kondisi').val();
                getKeterangan(kode, karyawan);
            });
            $('#kondisi').on('change', function() {
                var kode = $('#barang').val();
                var kondisi = $('#kondisi').val();
            });
            $('#karyawan').on('change', function() {
                var karyawan = $(this).val();
                var kode = $('#barang').val();
                getKeterangan(kode, karyawan);
            });
            $('.select2bs4').select2({
                theme: 'bootstrap4',
            })
        }

        function getKeterangan(idBarang, idKaryawan) {
            $.ajax({
                url: base_url + 'Peminjaman/keterangan',
                method: "POST",
                data: {
                    id: idBarang,
                    karyawan: idKaryawan
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        if (data.keterangan == 'Tidak Dipinjamkan') {
                            $('#hasil-success').text('');
                            $('#hasil-warning').text(
                                'Berdasarkan hasil peminjaman sebelumnya karyawan ini mendapatkan keterangan ' +
                                data.keterangan);
                        } else if (data.keterangan == 'Dipinjamkan') {
                            $('#hasil-warning').text('');
                            $('#hasil-success').text(
                                'Berdasarkan hasil peminjaman sebelumnya karyawan ini mendapatkan keterangan ' +
                                data.keterangan);
                        }
                    } else {
                        $('#hasil-warning').text('');
                        $('#hasil-success').text(
                            'Berdasarkan hasil peminjaman sebelumnya karyawan ini mendapatkan keterangan ' +
                            ' Dipinjamkan');
                    }
                }
            });
        }

        return {
            init: function() {
                setupEventListener();
            }
        }
    })();
    Controller.init();
</script>