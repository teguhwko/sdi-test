<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengembalianModel extends MY_Model
{
    var $table = 'tbl_pengembalian';
    public function __construct()
    {
        parent::__construct($this->table);
    }
    public function getListPengembalian()
    {
        $this->datatables->select('nama_karyawan,nama_barang,kode_pengembalian,tbl_pengembalian.kode_peminjaman,tbl_pengembalian.tgl_kembali,tbl_pengembalian.keterangan');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->datatables->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->datatables->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->datatables->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->datatables->edit_column('tgl_kembali', '$1', 'tglIndo(tgl_kembali)');
        $this->datatables->add_column(
            'view',
            '<a href="' . base_url('Pengembalian/naivebayes/$1') . '" class="btn btn-info" ><i class="fas fa-eye"></i></a>  
            <a href="' . base_url('Pengembalian/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
            <a href="' . base_url('Pengembalian/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ',
            'kode_pengembalian,nama_karyawan'
        );
        return $this->datatables->generate();
    }
    public function getListLaporanPengembalian($bulan, $tahun)
    {
        $this->datatables->select('nama_karyawan,nama_barang,kode_pengembalian,tbl_pengembalian.kode_peminjaman,tbl_pengembalian.tgl_kembali,tbl_pengembalian.keterangan,tgl_pinjam,sanksi');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->datatables->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->datatables->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->datatables->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->datatables->where('MONTH(tgl_pinjam)', $bulan);
        $this->datatables->where('year(tgl_pinjam)', $tahun);
        $this->datatables->edit_column('tgl_kembali', '$1', 'tglIndo(tgl_kembali)');
        $this->datatables->add_column(
            'view',
            '<a href="' . base_url('Pengembalian/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
            <a href="' . base_url('Pengembalian/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ',
            'kode_pengembalian,nama_karyawan'
        );
        return $this->datatables->generate();
    }
    public function getCountRowDetail($where)
    {
        $this->db->select('kode_pengembalian');
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        return $this->db->get()->num_rows();
    }
    public function getKeterangan($kodeBarang, $kodeKaryawan)
    {
        $this->db->select($this->table . '.keterangan');
        $this->db->from($this->table);
        $this->db->where('tbl_header_barang.id', $kodeBarang);
        $this->db->where('kode_karyawan', $kodeKaryawan);
        $this->db->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->db->order_by('kode_pengembalian', 'desc');
        return $this->db->get()->row_array();
    }
    public function getCountRowDetailForEdit($where, $kodePengembalian)
    {
        $this->db->select('kode_pengembalian');
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->where('kode_pengembalian !=', $kodePengembalian);
        $this->db->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
	
        return $this->db->get()->num_rows();
    }
    public function getLaporanPengembalian($bulan, $tahun)
    {
        $this->db->select('nama_karyawan,nama_barang,kode_pengembalian,tbl_pengembalian.kode_peminjaman,tbl_pengembalian.tgl_kembali,tbl_pengembalian.keterangan,sanksi,terlambat');
        $this->db->from($this->table);
        $this->db->join('tbl_peminjaman', $this->table . '.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->db->where('MONTH(tgl_pinjam)', $bulan);
        $this->db->where('year(tgl_pinjam)', $tahun);
		$this->db->order_by('tgl_kembali','desc');
        return $this->db->get()->result_array();
    }
    public function getDetail($kodePengembalian)
    {
        $this->db->select('tbl_naive_bayes.keterangan,hitung_pengembalian_dipinjamkan,jumlah_pengembalian,hitung_pengembalian_tidak_dipinjamkan,hitung_pengembalian_dipinjamkan_jabatan,hitung_pengembalian_tidak_dipinjamkan_jabatan,hitung_pengembalian_tidak_dipinjamkan_kondisi,hitung_pengembalian_dipinjamkan_kondisi,hitung_pengembalian_dipinjamkan_terlambat,hitung_pengembalian_tidak_dipinjamkan_terlambat,hitung_pengembalian_dipinjamkan_sanksi,hitung_pengembalian_tidak_dipinjamkan_sanksi,hasil_hitung_dipinjamkan,hasil_hitung_tidak_dipinjamkan,jumlah_pengembalian_dipinjamkan,jumlah_pengembalian_tidak_dipinjamkan,jumlah_pengembalian_dipinjamkan_jabatan,jumlah_pengembalian_tidak_dipinjamkan_jabatan,jumlah_pengembalian_dipinjamkan_kondisi,jumlah_pengembalian_tidak_dipinjamkan_kondisi,jumlah_pengembalian_dipinjamkan_terlambat,jumlah_pengembalian_tidak_dipinjamkan_terlambat,jumlah_pengembalian_dipinjamkan_sanksi,jumlah_pengembalian_tidak_dipinjamkan_sanksi');
        $this->db->from('tbl_naive_bayes');
        $this->db->where('tbl_naive_bayes.kode_pengembalian ', $kodePengembalian);
        return $this->db->get()->row_array();
    }
    public function getPengembalian($kodePengembalian)
    {
        $this->db->select('nama_karyawan,jk,nama_jabatan,nama_barang,tbl_pengembalian.kondisi_barang,terlambat,sanksi');
        $this->db->from($this->table);
        $this->db->where('kode_pengembalian ', $kodePengembalian);
        $this->db->join('tbl_peminjaman', 'tbl_pengembalian.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', 'tbl_peminjaman.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        return $this->db->get()->row_array();
    }
    public function getJumlahPeminjamanByJabatan($jabatan, $keterangan)
    {
        $this->db->select($this->table . '.keterangan');
        $this->db->from($this->table);
        $this->db->where('tbl_jabatan.nama_jabatan', $jabatan);
        $this->db->where($this->table . '.keterangan', $keterangan);
        $this->db->join('tbl_peminjaman', 'tbl_pengembalian.kode_peminjaman=tbl_peminjaman.kode_peminjaman');
        $this->db->join('tbl_karyawan', 'tbl_peminjaman.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        return $this->db->get()->num_rows();
    }
}
