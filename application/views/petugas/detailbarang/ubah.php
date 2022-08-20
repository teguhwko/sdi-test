<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ubah Informasi Barang - <?= $judul ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Informasi Barang - <?= $judul ?></li>
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
                            <h5 class="m-0">Ubah Informasi Barang - <?= $judul ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="<?= base_url('DetailBarang/ubah/' . $kode) ?>" method="POST">
                                        <div class="form-group">
                                            <label for="kode">KODE JABATAN</label>
                                            <input type="text" name="kode" id="kode" class="form-control" value="<?= $kode ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">KONDISI BARANG</label>
                                            <select name="kondisi" id="kondisi" class="form-control">
                                                <option value="Baik" <?= $barang['kondisi_barang'] == "Baik" ? 'selected' : '' ?>>BAIK</option>
                                                <option value="Rusak Berat" <?= $barang['kondisi_barang'] == "Rusak Berat" ? 'selected' : '' ?>>RUSAK BERAT</option>
                                                <option value="Rusak Ringan" <?= $barang['kondisi_barang'] == "Rusak Ringan" ? 'selected' : '' ?>>RUSAK RINGAN</option>
                                                <option value="Hilang" <?= $barang['kondisi_barang'] == "Hilang" ? 'selected' : '' ?>>HILANG</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">STATUS KETERSEDIAN BARANG</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="Tersedia" <?= $barang['status_barang'] == "Tersedia" ? 'selected' : '' ?>>TERSEDIA</option>
                                                <option value="Tidak Tersedia" <?= $barang['status_barang'] == "Tidak Tersedia" ? 'selected' : '' ?>>TIDAK TERSEDIA</option>
                                            </select>
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