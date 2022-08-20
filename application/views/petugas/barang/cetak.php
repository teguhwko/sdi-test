<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Barang</title>
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
$ci = get_instance();
$ci->load->model('HeaderBarangModel', 'headerBarang');
$ci->load->model('PeminjamanModel', 'peminjaman');
$ci->load->model('BarangModel', 'barang');
$barang = $ci->headerBarang->getAll();
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
                        <b style="font-size: 16px;">Laporan Daftar Data Barang</b><br>
                        <b style="font-size: 16px;">Barang dan Stok Barang Tersedia</b><br>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <b style="font-size:16px">Laporan : <?= tglIndo(date("Y-m-d")) ?></b>
        <div id="body">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 5%;font-size:14px; font-weight:normal;text-align:rigth">No</th>
                    <th style="width: 35%;font-size:14px; font-weight:normal;text-align:rigth">Nama Barang</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Stok</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Stok Tersedia</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Dipinjamkan</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Rusak Ringan</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Rusak Berat</th>
                    <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">Hilang</th>
                </tr>
                <?php if ($barang) { ?>
                    <?php $i = 1;
                    foreach ($barang as $r) { ?>
                        <?php
                        $jumlah_dipinjamkan = $ci->peminjaman->getJumlahPinjamPerbarang($r['id']);
                        // $jumlah_dipinjamkan = 10;
                        $jumlah_rusak_ringan = $ci->barang->getCountRowWhere(['id_header_barang' => $r['id'], 'kondisi_barang' => 'Rusak Ringan']);
                        $jumlah_rusak_berat = $ci->barang->getCountRowWhere(['id_header_barang' => $r['id'], 'kondisi_barang' => 'Rusak Berat']);
                        $jumlah_hilang = $ci->barang->getCountRowWhere(['id_header_barang' => $r['id'], 'kondisi_barang' => 'Hilang']);
                        ?>
                        <tr>
                            <th style="width: 5%;font-size:14px; font-weight:normal;text-align:rigth"><?= $i++ ?></th>
                            <th style="width: 35%;font-size:14px; font-weight:normal;text-align:rigth"><?= $r['nama_barang'] ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $r['stok_barang'] ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $r['stok_tersedia'] ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $jumlah_dipinjamkan ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $jumlah_rusak_ringan ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $jumlah_rusak_berat ?></th>
                            <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth"><?= $jumlah_hilang ?></th>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <th style="width: 5%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 35%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
                        <th style="width: 10%;font-size:14px; font-weight:normal;text-align:rigth">-</th>
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
                            <b style="font-size: 14px;">General Manager</b><br>
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