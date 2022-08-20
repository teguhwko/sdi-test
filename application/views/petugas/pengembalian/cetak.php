<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Pengembalian</title>
    <style>
        body {
            font-family: arial;
        }

        #body table,
        #body th,
        #body td {
            border: 1px solid black;
            text-align: center;
        }

        #body table {
            border-collapse: collapse;
        }

        hr {
            height: 3px;
            color: black;
            border: none;
        }

        b {
            text-align: center;
            font-size: 18px;
        }
        footer {
            clear: both;
            position: relative;
            height: 200px;
            margin-top: 650px;
        }
    </style>
</head>
<?php
$this->load->model('pengembalianModel', 'pengembalian');
$laporanPengembalian = $this->pengembalian->getLaporanPengembalian($bulan, $tahun);
?>

<body>

    <div id="container">
        <table>
            <tr>
                <td><img src="<?= base_url('gambar/logo.JPG') ?>" style="width:100px"></td>
                <td>
                    <center align="center">

                        <b style="font-size: 24px;color:rgb(42, 135, 189)">CV. PERSIA DAYA ENERGI</b><br>
                        <span style="font-size: 16px;color:rgb(209, 29, 29)">CONTRAKTOR - ELECTRICAL - MECHANICAL - SUPPLIER</span><br>
                        <b style="font-size: 12px;">Alamat : Jln. Raya Indarung No.21 Padang HP.081363381653 / 081378234927</b><br>
                        <b style="font-size: 12px;">Workshop : Jln. Raya Bandar Buat No.17 Telp (0751) 7740953</b><br>
                        <b style="font-size: 12px;">Email : Persiadayaenergi@gmail.com</b><br>

                    </center>
                </td>
            </tr>
        </table>

        <hr>
        <table style="width: 100%;">
            <tr>
                <td>
                    <center align="center">
                        <b style="font-size: 16px;">Laporan Daftar Data</b><br>
                        <b style="font-size: 16px;">Pengembalian Barang</b><br>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <b style="font-size:16px">Laporan Pengembalian Bulan <?= getNamaBulan($bulan) . ' ' . $tahun ?></b>
        <div id="body">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 5%;font-size:14px; font-weight:normal;text-align:center">No</th>
                    <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">Kode Pengembalian</th>
                    <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">Kode Peminjaman</th>
                    <th style="width: 20%;font-size:14px; font-weight:normal;text-align:center">Nama Karyawan</th>
                    <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">Tgl Kembali</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">Sanksi</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">Terlambat</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">Keterangan</th>
                </tr>
                <?php if ($laporanPengembalian) { ?>
                    <?php $i = 1;
                    foreach ($laporanPengembalian as $r) { ?>
                        <tr>
                            <th style="width: 5%;font-size:14px; font-weight:normal;text-align:center"><?= $i++ ?></th>
                            <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center"><?= $r['kode_pengembalian'] ?></th>
                            <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center"><?= $r['kode_peminjaman'] ?></th>
                            <th style="width: 20%;font-size:14px; font-weight:normal;text-align:center"><?= $r['nama_karyawan'] ?></th>
                            <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center"><?= tglIndo($r['tgl_kembali']) ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center"><?= $r['sanksi'] ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center"><?= $r['terlambat'] == 1 ? 'Ya' : 'Tidak' ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center"><?= $r['keterangan'] ?></th>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <th style="width: 5%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 20%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 15%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:center">-</th>
                    </tr>
                <?php } ?>


            </table>
        </div>

    </div>
    <div style="position: absolute;bottom:100px;left:0">
        <div style="margin-right: -5px;">
            <table style="width: 100%;margin-bottom:-10px">
                <tr>
                    <td style="width: 50%;text-align:center">
                    </td>
                    <td style="height:80px;width: 50%;">
                    <center align="center">
                            <b style="font-size: 14px;">Padang, <?= tglIndo(date("Y-m-d")) ?></b><br>
                            <b style="font-size: 14px;">Mengetahui</b><br>
                            <b style="font-size: 14px;">General Manajer</b><br>
                            <br>
                            <br>
                            <br>
                            <br>
                            (.......................................)
                        </center>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>