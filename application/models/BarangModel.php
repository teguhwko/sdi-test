<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangModel extends MY_Model
{
    var $table = 'tbl_barang';
    public function __construct()
    {
        parent::__construct($this->table);
    }
    public function getListBarang($idHeader)
    {
        $this->datatables->select('nama_barang,stok_barang,kode_barang,status_barang,kondisi_barang');
        $this->datatables->from($this->table);
        $this->datatables->where('id_header_barang', $idHeader);
        $this->datatables->join('tbl_header_barang', $this->table . '.id_header_barang = tbl_header_barang.id');
        $this->datatables->add_column(
            'view',
            '<a href="' . base_url('DetailBarang/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                        <a href="' . base_url('DetailBarang/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                        ',
            'kode_barang,nama_barang'
        );
        return $this->datatables->generate();
    }

    public function getBarang($kodeBarang)
    {
        $this->db->select('nama_barang,stok_barang,kode_barang,status_barang,kondisi_barang,id_header_barang,stok_tersedia');
        $this->db->from($this->table);
        $this->db->where('kode_barang', $kodeBarang);
        $this->db->join('tbl_header_barang', $this->table . '.id_header_barang = tbl_header_barang.id');
        return $this->db->get()->row_array();
    }

    public function getListBarangDashboard()
    {
        $this->datatables->select('kode_barang,nama_barang,stok_barang,status_barang,kondisi_barang,id');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_header_barang', $this->table . '.id_header_barang = tbl_header_barang.id');

        return $this->datatables->generate();
    }
}
