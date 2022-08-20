<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Pengembalian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Pengembalian</li>
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
                            <h5 class="m-0">UBAH PENGEMBALIAN</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="<?= base_url('Pengembalian/ubah/' . $kode) ?>" method="POST">
                                        <div class="form-group">
                                            <label for="kode">KODE PENGEMBALIAN</label>
                                            <input type="text" name="kode" id="kode" class="form-control" value="<?= $kode ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="peminjaman">KODE PEMINJAMAN</label>
                                            <input type="text" name="peminjaman" id="peminjaman" disabled class="form-control" value="<?= $pengembalian['kode_peminjaman'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">NAMA KARYAWAN</label>
                                            <input type="text" name="nama" id="nama" disabled class="form-control" value="<?= $peminjaman['nama_karyawan'] ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="barang">NAMA BARANG</label>
                                            <input type="text" name="barang" id="barang" disabled class="form-control" value="<?= $peminjaman['nama_barang'] ?>">
                                            <?= form_error('barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="kondisi">KONDISI BARANG</label>
                                            <select name="kondisi" id="kondisi" class="form-control">
                                                <option value="Baik" <?= $pengembalian['kondisi_barang'] == "Baik" ? 'selected' : '' ?>>BAIK</option>
                                                <option value="Rusak Berat" <?= $pengembalian['kondisi_barang'] == "Rusak Berat" ? 'selected' : '' ?>>RUSAK BERAT</option>
                                                <option value="Rusak Ringan" <?= $pengembalian['kondisi_barang'] == "Rusak Ringan" ? 'selected' : '' ?>>RUSAK RINGAN</option>
                                                <option value="Hilang" <?= $pengembalian['kondisi_barang'] == "Hilang" ? 'selected' : '' ?>>Hilang</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sanksi">SANKSI</label>
                                            <select name="sanksi" id="sanksi" class="form-control">
                                                <option value="Tidak" <?= $pengembalian['sanksi'] == "Tidak" ? 'selected' : '' ?>>Tidak</option>
                                                <option value="Iya" <?= $pengembalian['sanksi'] == "Iya" ? 'selected' : '' ?>>IYA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">KETERANGAN</label>
                                            <select name="keterangan" id="keterangan" class="form-control">
                                                <option value="Dipinjamkan" <?= $pengembalian['keterangan'] == "Dipinjamkan" ? 'selected' : '' ?>>DIPINJAMKAN</option>
                                                <option value="Tidak Dipinjamkan" <?= $pengembalian['keterangan'] == "Tidak Dipinjamkan" ? 'selected' : '' ?>>TIDAK DIPINJAMKAN</option>
                                            </select>
                                            <small id="hasil-naive-bayes-success" class="text-success"><?= $naive['keterangan'] == "Dipinjamkan" ? 'Berdasarkan hasil dari naive bayes karyawan ini mendapatkan keterangan Dipinjamkan' : '' ?></small>
                                            <small id="hasil-naive-bayes-warning" class="text-danger"><?= $naive['keterangan'] == "Tidak Dipinjamkan" ? 'Berdasarkan hasil dari naive bayes karyawan ini mendapatkan keterangan Tidak Dipinjamkan' : '' ?></small>
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
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">HASIL NAIVE BAYES</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jumlah-data">Jumlah Data Pengembalian</label>
                                        <input type="text" name="jumlah-data" id="jumlah-data" disabled class="form-control" value="<?= $naive['jumlah_pengembalian'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-pinjam-jabatan">Perhitungan Data Pengembalian Dipinjamkan Berdasarkan Jabatan</label>
                                        <input type="text" name="jumlah-data-pinjam-jabatan" id="jumlah-data-pinjam-jabatan" disabled class="form-control" value="<?= $naive['hitung_pengembalian_dipinjamkan_jabatan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-pinjam-kondisi">Perhitungan Data Pengembalian Dipinjamkan Berdasarkan Kondisi</label>
                                        <input type="text" name="jumlah-data-pinjam-kondisi" id="jumlah-data-pinjam-kondisi" disabled class="form-control" value="<?= $naive['hitung_pengembalian_dipinjamkan_kondisi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-pinjam-sanksi">Perhitungan Data Pengembalian Dipinjamkan Berdasarkan Sanksi</label>
                                        <input type="text" name="jumlah-data-pinjam-sanksi" id="jumlah-data-pinjam-sanksi" disabled class="form-control" value="<?= $naive['hitung_pengembalian_dipinjamkan_sanksi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-pinjam-terlambat">Perhitungan Data Pengembalian Dipinjamkan Berdasarkan Terlambat</label>
                                        <input type="text" name="jumlah-data-pinjam-terlambat" id="jumlah-data-pinjam-terlambat" disabled class="form-control" value="<?= $naive['hitung_pengembalian_dipinjamkan_terlambat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-tidak-pinjam-jabatan">Perhitungan Data Pengembalian Tidak Dipinjamkan Berdasarkan Jabatan</label>
                                        <input type="text" name="jumlah-data-tidak-pinjam-jabatan" id="jumlah-data-tidak-pinjam-jabatan" disabled class="form-control" value="<?= $naive['hitung_pengembalian_tidak_dipinjamkan_jabatan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-tidak-pinjam-kondisi">Perhitungan Data Pengembalian Tidak Dipinjamkan Berdasarkan Kondisi</label>
                                        <input type="text" name="jumlah-data-tidak-pinjam-kondisi" id="jumlah-data-tidak-pinjam-kondisi" disabled class="form-control" value="<?= $naive['hitung_pengembalian_tidak_dipinjamkan_kondisi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-tidak-pinjam-sanksi">Perhitungan Data Pengembalian Tidak Dipinjamkan Berdasarkan Sanksi</label>
                                        <input type="text" name="jumlah-data-tidak-pinjam-sanksi" id="jumlah-data-tidak-pinjam-sanksi" disabled class="form-control" value="<?= $naive['hitung_pengembalian_tidak_dipinjamkan_sanksi'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-data-tidak-pinjam-terlambat">Perhitungan Data Pengembalian Tidak Dipinjamkan Berdasarkan Terlambat</label>
                                        <input type="text" name="jumlah-data-tidak-pinjam-terlambat" id="jumlah-data-tidak-pinjam-terlambat" disabled class="form-control" value="<?= $naive['hitung_pengembalian_tidak_dipinjamkan_terlambat'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="hasil-tidak">Perhitungan Untuk Tidak Dipinjamkan</label>
                                        <textarea name="hasil-tidak" id="hasil-tidak" class="form-control" cols="30" rows="10" readonly><?= $naive['hitung_pengembalian_tidak_dipinjamkan'] . ' x ' . $naive['hitung_pengembalian_tidak_dipinjamkan_jabatan'] . 'x' . $naive['hitung_pengembalian_tidak_dipinjamkan_kondisi'] . ' x ' . $naive['hitung_pengembalian_tidak_dipinjamkan_sanksi'] . ' x ' . $naive['hitung_pengembalian_tidak_dipinjamkan_terlambat'] . ' = ' . $naive['hasil_hitung_tidak_dipinjamkan'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="hasil">Perhitungan Untuk Dipinjamkan</label>
                                        <textarea name="hasil" id="hasil" class="form-control" cols="30" rows="10" readonly><?= $naive['hitung_pengembalian_dipinjamkan'] . ' x ' . $naive['hitung_pengembalian_dipinjamkan_jabatan'] . 'x' . $naive['hitung_pengembalian_dipinjamkan_kondisi'] . ' x ' . $naive['hitung_pengembalian_dipinjamkan_sanksi'] . ' x ' . $naive['hitung_pengembalian_dipinjamkan_terlambat'] . ' = ' . $naive['hasil_hitung_dipinjamkan'] ?></textarea>
                                    </div>
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
            $('#peminjaman').on('change', function() {
                var kode = $(this).val();
                var sanksi = $('#sanksi').val();
                var kondisi = $('#kondisi').val();
                if (kode && sanksi && kondisi) {
                    getNaiveBayes(kode, sanksi, kondisi);
                }
                getDetail(kode);
            });
            $('#sanksi').on('change', function() {
                var kode = $('#peminjaman').val();
                var sanksi = $(this).val();
                var kondisi = $('#kondisi').val();
                if (kode && sanksi && kondisi) {
                    getNaiveBayes(kode, sanksi, kondisi);
                }
            });
            $('#kondisi').on('change', function() {
                var kode = $('#peminjaman').val();
                var sanksi = $('#sanksi').val();
                var kondisi = $(this).val();
                if (kode && sanksi && kondisi) {
                    getNaiveBayes(kode, sanksi, kondisi);
                }
            });

        }

        function getDetail(id) {
            $.ajax({
                url: base_url + 'Pengembalian/detail',
                method: "POST",
                data: {
                    id: id
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data) {
                        $('#nama').val(data.nama_karyawan)
                        $('#barang').val(data.nama_barang)
                        $('#jumlah').val(data.jumlah)
                    } else {
                        $('#nama').val('')
                        $('#barang').val('')
                        $('#jumlah').val('')
                    }
                }
            });
        }

        function getNaiveBayes(kodePeminjaman, sanksi, kondisi) {
            $.ajax({
                url: base_url + 'Pengembalian/getBayes',
                method: "POST",
                data: {
                    peminjaman: kodePeminjaman,
                    sanksi: sanksi,
                    kondisi: kondisi
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data.keterangan == "Dipinjamkan") {
                        $('#hasil-naive-bayes-warning').text('');
                        $('#hasil-naive-bayes-success').text(
                            'Berdasarkan hasil dari naive bayes karyawan ini mendapatkan keterangan ' +
                            data.keterangan);
                        $('#jumlah-data').val(data.jumlah_pengembalian);
                        $('#jumlah-data-pinjam-jabatan').val(data.hitung_pengembalian_dipinjamkan_jabatan);
                        $('#jumlah-data-pinjam-kondisi').val(data.hitung_pengembalian_dipinjamkan_kondisi);
                        $('#jumlah-data-pinjam-sanksi').val(data.hitung_pengembalian_dipinjamkan_sanksi);
                        $('#jumlah-data-pinjam-terlambat').val(data.hitung_pengembalian_dipinjamkan_terlambat);
                        $('#jumlah-data-tidak-pinjam-jabatan').val(data.hitung_pengembalian_tidak_dipinjamkan_jabatan);
                        $('#jumlah-data-tidak-pinjam-kondisi').val(data.hitung_pengembalian_tidak_dipinjamkan_kondisi);
                        $('#jumlah-data-tidak-pinjam-sanksi').val(data.hitung_pengembalian_tidak_dipinjamkan_sanksi);
                        $('#jumlah-data-tidak-pinjam-terlambat').val(data.hitung_pengembalian_tidak_dipinjamkan_terlambat);
                        $('#hasil').val(data.hitung_pengembalian_dipinjamkan + ' x ' + data.hitung_pengembalian_dipinjamkan_jabatan + ' x ' + data.hitung_pengembalian_dipinjamkan_kondisi + ' x ' + data.hitung_pengembalian_dipinjamkan_sanksi + ' x ' + data.hitung_pengembalian_dipinjamkan_terlambat + ' = ' + data.hasil_hitung_dipinjamkan);
                        $('#hasil-tidak').val(data.hitung_pengembalian_tidak_dipinjamkan + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_jabatan + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_kondisi + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_sanksi + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_terlambat + ' = ' + data.hasil_hitung_tidak_dipinjamkan);
                    } else if (data.keterangan == "Tidak Dipinjamkan") {
                        $('#hasil-naive-bayes-success').text('');
                        $('#hasil-naive-bayes-warning').text(
                            'Berdasarkan hasil dari naive bayes karyawan ini mendapatkan keterangan ' +
                            data.keterangan);
                        $('#jumlah-data').val(data.jumlah_pengembalian);
                        $('#jumlah-data-pinjam-jabatan').val(data.hitung_pengembalian_dipinjamkan_jabatan);
                        $('#jumlah-data-pinjam-kondisi').val(data.hitung_pengembalian_dipinjamkan_kondisi);
                        $('#jumlah-data-pinjam-sanksi').val(data.hitung_pengembalian_dipinjamkan_sanksi);
                        $('#jumlah-data-pinjam-terlambat').val(data.hitung_pengembalian_dipinjamkan_terlambat);
                        $('#jumlah-data-tidak-pinjam-jabatan').val(data.hitung_pengembalian_tidak_dipinjamkan_jabatan);
                        $('#jumlah-data-tidak-pinjam-kondisi').val(data.hitung_pengembalian_tidak_dipinjamkan_kondisi);
                        $('#jumlah-data-tidak-pinjam-sanksi').val(data.hitung_pengembalian_tidak_dipinjamkan_sanksi);
                        $('#jumlah-data-tidak-pinjam-terlambat').val(data.hitung_pengembalian_tidak_dipinjamkan_terlambat);
                        $('#hasil').val(data.hitung_pengembalian_dipinjamkan + ' x ' + data.hitung_pengembalian_dipinjamkan_jabatan + ' x ' + data.hitung_pengembalian_dipinjamkan_kondisi + ' x ' + data.hitung_pengembalian_dipinjamkan_sanksi + ' x ' + data.hitung_pengembalian_dipinjamkan_terlambat + ' = ' + data.hasil_hitung_dipinjamkan);
                        $('#hasil-tidak').val(data.hitung_pengembalian_tidak_dipinjamkan + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_jabatan + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_kondisi + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_sanksi + ' x ' + data.hitung_pengembalian_tidak_dipinjamkan_terlambat + ' = ' + data.hasil_hitung_tidak_dipinjamkan);
                    } else {
                        $('#hasil-naive-bayes-warning').text('');
                        $('#hasil-naive-bayes-success').text('');
                        $('#jumlah-data').val('');
                        $('#jumlah-data-pinjam-jabatan').val('');
                        $('#jumlah-data-pinjam-kondisi').val('');
                        $('#jumlah-data-pinjam-sanksi').val('');
                        $('#jumlah-data-pinjam-terlambat').val('');
                        $('#jumlah-data-tidak-pinjam-jabatan').val('');
                        $('#jumlah-data-tidak-pinjam-kondisi').val('');
                        $('#jumlah-data-tidak-pinjam-sanksi').val('');
                        $('#jumlah-data-tidak-pinjam-terlambat').val('');
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