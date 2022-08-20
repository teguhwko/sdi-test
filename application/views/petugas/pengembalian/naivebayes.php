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
                    <h1 class="m-0 text-dark">Hasil Prediksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Prediksi</li>
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
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Hasil Prediksi Dari Perhitungan Algoritma Naive Bayes</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td>NO</td>
                                    <td>NAMA KARYAWAN</td>
                                    <td>JK</td>
                                    <td>JABATAN</td>
                                    <td>BARANG</td>
                                    <td>KONDISI BARANG</td>
                                    <td>STATUS</td>
                                    <td>SANKSI</td>
                                    <td>KETERANGAN</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><?= $pengembalian['nama_karyawan'] ?></td>
                                    <td><?= $pengembalian['jk'] == "Laki-Laki" ? 'L' : 'P' ?></td>
                                    <td><?= $pengembalian['nama_jabatan'] ?></td>
                                    <td><?= $pengembalian['nama_barang'] ?></td>
                                    <td><?= $pengembalian['kondisi_barang'] ?></td>
                                    <td><?= $pengembalian['terlambat'] == 0 ? 'Terlambat' : 'Tepat Waktu' ?></td>
                                    <td><?= $pengembalian['sanksi'] ?></td>
                                    <td><?= $naive['keterangan'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header ">
                            Langkah - Langkah Mencari Probabilitas Tiap Atribut
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                - PIC | Dipinjamkan = <?= $naive['jumlah_pengembalian_dipinjamkan'] ?>/<?= $naive['jumlah_pengembalian'] ?> <br>
                                - PIC | Tidak Dipinjamkan = <?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?>/<?= $naive['jumlah_pengembalian'] ?> <br>
                            </p>
                            <p>
                                - <?= $pengembalian['nama_jabatan'] ?> | Dipinjamkan = <?= $naive['jumlah_pengembalian_dipinjamkan_jabatan'] ?>/<?= $naive['jumlah_pengembalian_dipinjamkan'] ?> <br>
                                - <?= $pengembalian['nama_jabatan'] ?> | Tidak Dipinjamkan = <?= $naive['jumlah_pengembalian_tidak_dipinjamkan_jabatan'] ?>/<?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?> <br>
                            </p>
                            <p>
                                - <?= $pengembalian['kondisi_barang'] ?> | Dipinjamkan = <?= $naive['jumlah_pengembalian_dipinjamkan_kondisi'] ?>/<?= $naive['jumlah_pengembalian_dipinjamkan'] ?> <br>
                                - <?= $pengembalian['kondisi_barang'] ?> | Tidak Dipinjamkan = <?= $naive['jumlah_pengembalian_tidak_dipinjamkan_kondisi'] ?>/<?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?> <br>
                            </p>
                            <p>
                                - Tepat Waktu | Dipinjamkan = <?= $naive['jumlah_pengembalian_dipinjamkan_terlambat'] ?>/<?= $naive['jumlah_pengembalian_dipinjamkan'] ?><br>
                                - Tepat Waktu | Tidak Dipinjamkan = <?= $naive['jumlah_pengembalian_tidak_dipinjamkan_terlambat'] ?>/<?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?><br>
                            </p>
                            <p>
                                - Peringatan | Dipinjamkan = <?= $naive['jumlah_pengembalian_dipinjamkan_sanksi'] ?>/<?= $naive['jumlah_pengembalian_dipinjamkan'] ?> <br>
                                - Peringatan | Tidak Dipinjamkan = <?= $naive['jumlah_pengembalian_tidak_dipinjamkan_sanksi'] ?>/<?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?> <br>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header ">
                                        Data Training
                                    </div>
                                    <div class="card-body">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 40%;">Jumlah Data Training</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['jumlah_pengembalian'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">P | Dipinjamkan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['jumlah_pengembalian_dipinjamkan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">P | Tidak Dipinjamkan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header ">
                                        Hasil Klasifikasi
                                    </div>
                                    <div class="card-body">
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="width: 40%;">P | Dipinjamkan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['jumlah_pengembalian_dipinjamkan'] . '/' . $naive['jumlah_pengembalian'] . '*' . $naive['jumlah_pengembalian_dipinjamkan_kondisi'] . '/' . $naive['jumlah_pengembalian_dipinjamkan'] . '*' . $naive['jumlah_pengembalian_dipinjamkan_kondisi'] . '/' . $naive['jumlah_pengembalian_dipinjamkan'] . '*' . $naive['jumlah_pengembalian_dipinjamkan_sanksi'] . '/' . $naive['jumlah_pengembalian_dipinjamkan'] . ' = ' . $naive['hasil_hitung_dipinjamkan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">P | Tidak Dipinjamkan</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['jumlah_pengembalian_tidak_dipinjamkan'] . '/' . $naive['jumlah_pengembalian'] . '*' . $naive['jumlah_pengembalian_tidak_dipinjamkan_kondisi'] . '/' . $naive['jumlah_pengembalian_tidak_dipinjamkan'] . '*' . $naive['jumlah_pengembalian_tidak_dipinjamkan_kondisi'] . '/' . $naive['jumlah_pengembalian_tidak_dipinjamkan'] . '*' . $naive['jumlah_pengembalian_tidak_dipinjamkan_sanksi'] . '/' . $naive['jumlah_pengembalian_tidak_dipinjamkan'] . ' = ' . $naive['hasil_hitung_tidak_dipinjamkan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 40%;">Hasil</td>
                                                <td style="width: 5%;">:</td>
                                                <td style="width: 55%;"><?= $naive['keterangan'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>