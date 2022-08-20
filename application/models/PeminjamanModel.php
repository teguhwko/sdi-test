<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeminjamanModel extends MY_Model
{
    var $table = 'tbl_peminjaman';
    public function __construct()
    {
        parent::__construct($this->table);
    }
    public function getListPeminjaman()
    {
        $this->datatables->select('nama_karyawan,nama_barang,tgl_pinjam,keterangan,kode_peminjaman,tgl_pinjam');
        $this->datatables->from($this->table);
        $this->datatables->where('status', 'belum selesai');
        $this->datatables->join('tbl_karyawan', $this->table . '.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->datatables->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->datatables->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->datatables->edit_column('tgl_pinjam', '$1', 'tglIndo(tgl_pinjam)');
        $this->datatables->add_column(
            'view',
            '<a href="' . base_url('Peminjaman/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                    <a href="' . base_url('Peminjaman/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ',
            'kode_peminjaman,nama_karyawan'
        );
        return $this->datatables->generate();
    }
    public function getListLaporanPeminjaman($bulan, $tahun)
    {
        $this->datatables->select('count(nama_barang) as jumlah,nama_karyawan,nama_barang,tgl_pinjam,keterangan,kode_peminjaman,tgl_kembali,status');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_karyawan', $this->table . '.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->datatables->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->datatables->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->datatables->where('MONTH(tgl_pinjam)', $bulan);
        $this->datatables->where('year(tgl_pinjam)', $tahun);
        $this->datatables->group_by('nama_karyawan,nama_barang,tgl_pinjam,tgl_kembali,status');
        $this->datatables->edit_column('tgl_pinjam', '$1', 'tglIndo(tgl_pinjam)');
        $this->datatables->edit_column('tgl_kembali', '$1', 'tglIndo(tgl_kembali)');
        $this->datatables->add_column(
            'view',
            '<a href="' . base_url('Peminjaman/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                    <a href="' . base_url('Peminjaman/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ',
            'kode_peminjaman,nama_karyawan'
        );
        return $this->datatables->generate();
    }
    public function getDetail($kode)
    {
        $this->db->select('nama_karyawan,nama_barang,kode_peminjaman,jk,tbl_karyawan.kode_jabatan,tgl_kembali,tbl_peminjaman.kode_karyawan,tbl_peminjaman.kode_barang');
        $this->db->from($this->table);
        $this->db->where('kode_peminjaman', $kode);
        $this->db->where('status', 'belum selesai');
        $this->db->join('tbl_karyawan', $this->table . '.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        return $this->db->get()->row_array();
    }

    public function getDetailForPengembalian($kode)
    {
        $this->db->select('nama_karyawan,nama_barang,kode_peminjaman,jk,tbl_karyawan.kode_jabatan,tgl_kembali,tbl_peminjaman.kode_karyawan,tbl_peminjaman.kode_barang,id_header_barang');
        $this->db->from($this->table);
        $this->db->where('kode_peminjaman', $kode);
        $this->db->where('status', 'selesai');
        $this->db->join('tbl_karyawan', $this->table . '.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        return $this->db->get()->row_array();
    }

    public function getLaporanPeminjaman($bulan, $tahun)
    {
        $this->db->select('count(nama_barang) as jumlah,nama_karyawan,nama_barang,kode_peminjaman,jk,tbl_karyawan.kode_jabatan,tgl_kembali,tgl_pinjam,tbl_peminjaman.kode_karyawan,tbl_peminjaman.kode_barang,status');
        $this->db->from($this->table);
        $this->db->join('tbl_karyawan', $this->table . '.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->db->join('tbl_jabatan', 'tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->db->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->db->where('MONTH(tgl_pinjam)', $bulan);
        $this->db->where('year(tgl_pinjam)', $tahun);
        $this->db->group_by('nama_karyawan,nama_barang,tgl_pinjam,tgl_kembali,status');
        $this->db->order_by('tgl_pinjam','desc');
        return $this->db->get()->result_array();
    }
    public function getJumlahPinjamPerbarang($idBarang)
    {
        $this->db->select($this->table . '.kode_peminjaman');
        $this->db->from($this->table);
        $this->db->join('tbl_barang', $this->table . '.kode_barang=tbl_barang.kode_barang');
        $this->db->join('tbl_header_barang', 'tbl_barang.id_header_barang=tbl_header_barang.id');
        $this->db->where('tbl_header_barang.id', $idBarang);
        $this->db->where('status', 'belum selesai');
        return $this->db->get()->num_rows();
    }
}
