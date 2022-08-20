<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HeaderBarangModel extends MY_Model
{
    var $table = 'tbl_header_barang';
    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function insertWithReturn($header)
    {
        $this->db->insert($this->table, $header);
        return $this->db->insert_id();
    }
    public function getListBarang()
    {
        $this->datatables->select('nama_barang,stok_barang,id,stok_tersedia');
        $this->datatables->from($this->table);
        if ($this->session->userdata('role') == 'admin') {
            $this->datatables->add_column(
                'view',
                '<a href="' . base_url('DetailBarang?id_header=$1') . '" class="btn btn-primary " ><i class="fas fa-eye"></i></a> 
                 <a href="' . base_url('Barang/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                 <a href="' . base_url('Barang/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                 ',
                'id,nama_barang'
            );
        } else {
            $this->datatables->add_column(
                'view',
                '<a href="' . base_url('DetailBarang?id_header=$1') . '" class="btn btn-primary " ><i class="fas fa-eye"></i></a> 
                 ',
                'id,nama_barang'
            );
        }

        return $this->datatables->generate();
    }
}
