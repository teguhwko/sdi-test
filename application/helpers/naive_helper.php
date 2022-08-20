<?php
function naivebayes($data)
{
    $isDipinjamkan = "Dipinjamkan";
    $isNotDipinjamkan = "Tidak Dipinjamkan";
    $ci = get_instance();
    $ci->load->model('PeminjamanModel', 'peminjaman');
    $ci->load->model('PengembaliannModel', 'pengembalian');
    $kodePeminjaman = $data['kode'];
    $sanksi = $data['sanksi'];
    $kondisi = $data['kondisi'];
    $peminjaman = $ci->peminjaman->getDetail($kodePeminjaman);
    $kodeJabatan = $peminjaman['kode_jabatan'];
    $kodeBarang = $peminjaman['kode_barang'];
    $kodeKaryawan = $peminjaman['kode_karyawan'];
    $isTerlambat = isTerlambat($peminjaman['tgl_kembali']);
    $isHasilDipinjamkan = 'Dipinjamkan';

    $jumlahDataPengembalian = $ci->pengembalian->getCountRow();
    $hitungPengembalianDipinjamkan = 0;
    $hitungPengembalianTidakDipinjamkan = 0;
    $hitungPengembalianDipinjamkanJabatan = 0;
    $hitungPengembalianDipinjamkanSanksi = 0;
    $hitungPengembalianDipinjamkanKondisi = 0;
    $hitungPengembalianDipinjamkanTerlambat = 0;

    $hitungPengembalianTidakDipinjamkanJabatan = 0;
    $hitungPengembalianTidakDipinjamkanSanksi = 0;
    $hitungPengembalianTidakDipinjamkanKondisi = 0;
    $hitungPengembalianTidakDipinjamkanTerlambat = 0;

    $hintungHasilDipinjamkan = 0;
    $hintungHasilTidakDipinjamkan = 0;

    $jumlahPengembalianDipinjamkan = 0;
    $jumlahPengembalianTidakDipinjamkan = 0;

    $jumlahPengembalianDipinjamkanJabatan = 0;
    $jumlahPengembalianTidakDipinjamkanJabatan = 0;
    $jumlahPengembalianDipinjamkanSanksi = 0;
    $jumlahPengembalianTidakDipinjamkanSanksi = 0;
    $jumlahPengembalianDipinjamkanKondisi = 0;
    $jumlahPengembalianTidakDipinjamkanKondisi = 0;
    $jumlahPengembalianDipinjamkanTerlambat = 0;
    $jumlahPengembalianTidakDipinjamkanTerlambat = 0;

    if ($jumlahDataPengembalian > 0) {
        $jumlahPengembalianDipinjamkan = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.keterangan' => $isDipinjamkan]);
        $jumlahPengembalianTidakDipinjamkan = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.keterangan' => $isNotDipinjamkan]);
        $hitungPengembalianDipinjamkan = $jumlahPengembalianDipinjamkan / $jumlahDataPengembalian;
        $hitungPengembalianTidakDipinjamkan = $jumlahPengembalianTidakDipinjamkan / $jumlahDataPengembalian;

        $jumlahPengembalianDipinjamkanJabatan = $ci->pengembalian->getCountRowDetail(['tbl_karyawan.kode_jabatan' => $kodeJabatan, 'tbl_pengembalian.keterangan' => $isDipinjamkan]);
        $jumlahPengembalianTidakDipinjamkanJabatan = $ci->pengembalian->getCountRowDetail(['tbl_karyawan.kode_jabatan' => $kodeJabatan, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan]);
        $jumlahPengembalianDipinjamkanSanksi = $ci->pengembalian->getCountRowDetail(['sanksi' => $sanksi, 'tbl_pengembalian.keterangan' => $isDipinjamkan]);
        $jumlahPengembalianTidakDipinjamkanSanksi = $ci->pengembalian->getCountRowDetail(['sanksi' => $sanksi, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan]);
        $jumlahPengembalianDipinjamkanKondisi = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.kondisi_barang' => $kondisi, 'tbl_pengembalian.keterangan' => $isDipinjamkan]);
        $jumlahPengembalianTidakDipinjamkanKondisi = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.kondisi_barang' => $kondisi, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan]);
        $jumlahPengembalianDipinjamkanTerlambat = $ci->pengembalian->getCountRowDetail(['terlambat' => $isTerlambat, 'tbl_pengembalian.keterangan' => $isDipinjamkan]);
        $jumlahPengembalianTidakDipinjamkanTerlambat = $ci->pengembalian->getCountRowDetail(['terlambat' => $isTerlambat, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan]);

        if ($jumlahPengembalianDipinjamkan > 0) {
            $hitungPengembalianDipinjamkanJabatan = $jumlahPengembalianDipinjamkanJabatan / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanSanksi = $jumlahPengembalianDipinjamkanSanksi / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanKondisi = $jumlahPengembalianDipinjamkanKondisi / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanTerlambat = $jumlahPengembalianDipinjamkanTerlambat / $jumlahPengembalianDipinjamkan;
        }
        if ($jumlahPengembalianTidakDipinjamkan > 0) {
            $hitungPengembalianTidakDipinjamkanJabatan = $jumlahPengembalianTidakDipinjamkanJabatan /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanSanksi = $jumlahPengembalianTidakDipinjamkanSanksi /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanKondisi = $jumlahPengembalianTidakDipinjamkanKondisi /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanTerlambat = $jumlahPengembalianTidakDipinjamkanTerlambat /  $jumlahPengembalianTidakDipinjamkan;
        }

        $hintungHasilDipinjamkan = $hitungPengembalianDipinjamkan *  $hitungPengembalianDipinjamkanJabatan *  $hitungPengembalianDipinjamkanSanksi *  $hitungPengembalianDipinjamkanKondisi *  $hitungPengembalianDipinjamkanTerlambat;
        $hintungHasilTidakDipinjamkan = $hitungPengembalianTidakDipinjamkan *  $hitungPengembalianTidakDipinjamkanJabatan *  $hitungPengembalianTidakDipinjamkanSanksi *  $hitungPengembalianTidakDipinjamkanKondisi *  $hitungPengembalianTidakDipinjamkanTerlambat;

        if ($hintungHasilDipinjamkan >= $hintungHasilTidakDipinjamkan) {
            $isHasilDipinjamkan = 'Dipinjamkan';
        } else if ($hintungHasilDipinjamkan == 0 && $hintungHasilTidakDipinjamkan == 0) {
            $isHasilDipinjamkan = 'Dipinjamkan';
        } else if ($hintungHasilDipinjamkan < $hintungHasilTidakDipinjamkan) {
            $isHasilDipinjamkan = 'Tidak Dipinjamkan';
        }
    }
	//untuk menambahkan//
    $result = [
        'kode_karyawan' => $kodeKaryawan,
        'kode_barang' => $kodeBarang,
        'keterangan' => $isHasilDipinjamkan,
        'jumlah_pengembalian' => $jumlahDataPengembalian,
        'jumlah_pengembalian_dipinjamkan' => $jumlahPengembalianDipinjamkan,
        'jumlah_pengembalian_tidak_dipinjamkan' => $jumlahPengembalianTidakDipinjamkan,
        'jumlah_pengembalian_dipinjamkan_jabatan' => $jumlahPengembalianDipinjamkanJabatan,
        'jumlah_pengembalian_tidak_dipinjamkan_jabatan' => $jumlahPengembalianTidakDipinjamkanJabatan,
        'jumlah_pengembalian_dipinjamkan_sanksi' => $jumlahPengembalianDipinjamkanSanksi,
        'jumlah_pengembalian_tidak_dipinjamkan_sanksi' => $jumlahPengembalianTidakDipinjamkanSanksi,
        'jumlah_pengembalian_dipinjamkan_kondisi' => $jumlahPengembalianDipinjamkanKondisi,
        'jumlah_pengembalian_tidak_dipinjamkan_kondisi' => $jumlahPengembalianTidakDipinjamkanKondisi,
        'jumlah_pengembalian_dipinjamkan_terlambat' => $jumlahPengembalianDipinjamkanTerlambat,
        'jumlah_pengembalian_tidak_dipinjamkan_terlambat' => $jumlahPengembalianTidakDipinjamkanTerlambat,
        'hitung_pengembalian_dipinjamkan' => $hitungPengembalianDipinjamkan,
        'hitung_pengembalian_tidak_dipinjamkan' => $hitungPengembalianTidakDipinjamkan,
        'hitung_pengembalian_dipinjamkan_jabatan' => $hitungPengembalianDipinjamkanJabatan,
        'hitung_pengembalian_dipinjamkan_sanksi' => $hitungPengembalianDipinjamkanSanksi,
        'hitung_pengembalian_dipinjamkan_kondisi' => $hitungPengembalianDipinjamkanKondisi,
        'hitung_pengembalian_dipinjamkan_terlambat' => $hitungPengembalianDipinjamkanTerlambat,
        'hitung_pengembalian_tidak_dipinjamkan_jabatan' => $hitungPengembalianTidakDipinjamkanJabatan,
        'hitung_pengembalian_tidak_dipinjamkan_sanksi' => $hitungPengembalianTidakDipinjamkanSanksi,
        'hitung_pengembalian_tidak_dipinjamkan_kondisi' => $hitungPengembalianTidakDipinjamkanKondisi,
        'hitung_pengembalian_tidak_dipinjamkan_terlambat' => $hitungPengembalianTidakDipinjamkanTerlambat,
        'hasil_hitung_dipinjamkan' => $hintungHasilDipinjamkan,
        'hasil_hitung_tidak_dipinjamkan' => $hintungHasilTidakDipinjamkan,
    ];
    return $result;
}


function naivebayesEdit($data, $kodePengembalian)
{
    $isDipinjamkan = "Dipinjamkan";
    $isNotDipinjamkan = "Tidak Dipinjamkan";
    $ci = get_instance();
    $ci->load->model('PeminjamanModel', 'peminjaman');
    $ci->load->model('PengembaliannModel', 'pengembalian');
    $kodePeminjaman = $data['kode'];
    $sanksi = $data['sanksi'];
    $kondisi = $data['kondisi'];
    $peminjaman = $ci->peminjaman->getDetailForPengembalian($kodePeminjaman);
    $kodeJabatan = $peminjaman['kode_jabatan'];
    $kodeBarang = $peminjaman['kode_barang'];
    $kodeKaryawan = $peminjaman['kode_karyawan'];
    $isTerlambat = isTerlambat($peminjaman['tgl_kembali']);
    $isHasilDipinjamkan = 'Dipinjamkan';

    $jumlahDataPengembalian = $ci->pengembalian->getCountRow() - 1;
    $hitungPengembalianDipinjamkan = 0;
    $hitungPengembalianTidakDipinjamkan = 0;
    $hitungPengembalianDipinjamkanJabatan = 0;
    $hitungPengembalianDipinjamkanSanksi = 0;
    $hitungPengembalianDipinjamkanKondisi = 0;
    $hitungPengembalianDipinjamkanTerlambat = 0;

    $hitungPengembalianTidakDipinjamkanJabatan = 0;
    $hitungPengembalianTidakDipinjamkanSanksi = 0;
    $hitungPengembalianTidakDipinjamkanKondisi = 0;
    $hitungPengembalianTidakDipinjamkanTerlambat = 0;

    $hintungHasilDipinjamkan = 0;
    $hintungHasilTidakDipinjamkan = 0;

    if ($jumlahDataPengembalian > 0) {
        $jumlahPengembalianDipinjamkan = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.keterangan' => $isDipinjamkan], $kodePengembalian);
        $jumlahPengembalianTidakDipinjamkan = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.keterangan' => $isNotDipinjamkan], $kodePengembalian);
        $hitungPengembalianDipinjamkan = $jumlahPengembalianDipinjamkan / $jumlahDataPengembalian;
        $hitungPengembalianTidakDipinjamkan = $jumlahPengembalianTidakDipinjamkan / $jumlahDataPengembalian;

        $jumlahPengembalianDipinjamkanJabatan = $ci->pengembalian->getCountRowDetail(['tbl_karyawan.kode_jabatan' => $kodeJabatan, 'tbl_pengembalian.keterangan' => $isDipinjamkan], $kodePengembalian);
        $jumlahPengembalianTidakDipinjamkanJabatan = $ci->pengembalian->getCountRowDetail(['tbl_karyawan.kode_jabatan' => $kodeJabatan, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan], $kodePengembalian);
        $jumlahPengembalianDipinjamkanSanksi = $ci->pengembalian->getCountRowDetail(['sanksi' => $sanksi, 'tbl_pengembalian.keterangan' => $isDipinjamkan], $kodePengembalian);
        $jumlahPengembalianTidakDipinjamkanSanksi = $ci->pengembalian->getCountRowDetail(['sanksi' => $sanksi, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan], $kodePengembalian);
        $jumlahPengembalianDipinjamkanKondisi = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.kondisi_barang' => $kondisi, 'tbl_pengembalian.keterangan' => $isDipinjamkan], $kodePengembalian);
        $jumlahPengembalianTidakDipinjamkanKondisi = $ci->pengembalian->getCountRowDetail(['tbl_pengembalian.kondisi_barang' => $kondisi, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan], $kodePengembalian);
        $jumlahPengembalianDipinjamkanTerlambat = $ci->pengembalian->getCountRowDetail(['terlambat' => $isTerlambat, 'tbl_pengembalian.keterangan' => $isDipinjamkan], $kodePengembalian);
        $jumlahPengembalianTidakDipinjamkanTerlambat = $ci->pengembalian->getCountRowDetail(['terlambat' => $isTerlambat, 'tbl_pengembalian.keterangan' => $isNotDipinjamkan], $kodePengembalian);

        if ($jumlahPengembalianDipinjamkan > 0) {
            $hitungPengembalianDipinjamkanJabatan = $jumlahPengembalianDipinjamkanJabatan / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanSanksi = $jumlahPengembalianDipinjamkanSanksi / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanKondisi = $jumlahPengembalianDipinjamkanKondisi / $jumlahPengembalianDipinjamkan;
            $hitungPengembalianDipinjamkanTerlambat = $jumlahPengembalianDipinjamkanTerlambat / $jumlahPengembalianDipinjamkan;
        }
        if ($jumlahPengembalianTidakDipinjamkan > 0) {
            $hitungPengembalianTidakDipinjamkanJabatan = $jumlahPengembalianTidakDipinjamkanJabatan /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanSanksi = $jumlahPengembalianTidakDipinjamkanSanksi /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanKondisi = $jumlahPengembalianTidakDipinjamkanKondisi /  $jumlahPengembalianTidakDipinjamkan;
            $hitungPengembalianTidakDipinjamkanTerlambat = $jumlahPengembalianTidakDipinjamkanTerlambat /  $jumlahPengembalianTidakDipinjamkan;
        }

        $hintungHasilDipinjamkan = $hitungPengembalianDipinjamkan *  $hitungPengembalianDipinjamkanJabatan *  $hitungPengembalianDipinjamkanSanksi *  $hitungPengembalianDipinjamkanKondisi *  $hitungPengembalianDipinjamkanTerlambat;
        $hintungHasilTidakDipinjamkan = $hitungPengembalianTidakDipinjamkan *  $hitungPengembalianTidakDipinjamkanJabatan *  $hitungPengembalianTidakDipinjamkanSanksi *  $hitungPengembalianTidakDipinjamkanKondisi *  $hitungPengembalianTidakDipinjamkanTerlambat;

        if ($hintungHasilDipinjamkan >= $hintungHasilTidakDipinjamkan) {
            $isHasilDipinjamkan = 'Dipinjamkan';
        }

        if ($hitungPengembalianDipinjamkanJabatan == 0 && $hitungPengembalianDipinjamkanSanksi == 0 && $hitungPengembalianDipinjamkanKondisi == 0 && $hitungPengembalianDipinjamkanTerlambat == 0) {
            $isHasilDipinjamkan = 'Dipinjamkan';
        }
    }
    $result = [
        'kode_karyawan' => $kodeKaryawan,
        'kode_barang' => $kodeBarang,
        'keterangan' => $isHasilDipinjamkan,
        'jumlah_pengembalian' => $jumlahDataPengembalian,
        'hitung_pengembalian_dipinjamkan' => $hitungPengembalianDipinjamkan,
        'hitung_pengembalian_tidak_dipinjamkan' => $hitungPengembalianTidakDipinjamkan,
        'hitung_pengembalian_dipinjamkan_jabatan' => $hitungPengembalianDipinjamkanJabatan,
        'hitung_pengembalian_dipinjamkan_sanksi' => $hitungPengembalianDipinjamkanSanksi,
        'hitung_pengembalian_dipinjamkan_kondisi' => $hitungPengembalianDipinjamkanKondisi,
        'hitung_pengembalian_dipinjamkan_terlambat' => $hitungPengembalianDipinjamkanTerlambat,
        'hitung_pengembalian_tidak_dipinjamkan_jabatan' => $hitungPengembalianTidakDipinjamkanJabatan,
        'hitung_pengembalian_tidak_dipinjamkan_sanksi' => $hitungPengembalianTidakDipinjamkanSanksi,
        'hitung_pengembalian_tidak_dipinjamkan_kondisi' => $hitungPengembalianTidakDipinjamkanKondisi,
        'hitung_pengembalian_tidak_dipinjamkan_terlambat' => $hitungPengembalianTidakDipinjamkanTerlambat,
        'hasil_hitung_dipinjamkan' => $hintungHasilDipinjamkan,
        'hasil_hitung_tidak_dipinjamkan' => $hintungHasilTidakDipinjamkan,
    ];
    return $result;
}

function isTerlambat($tanggalKembali)
{
    $hariIni = date('Y-m-d');
    if (strtotime($hariIni) > strtotime($tanggalKembali)) {
        return 0;
    } else {
        return 1;
    }
}
