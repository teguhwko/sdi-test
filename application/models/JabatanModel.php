<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanModel extends MY_Model {
    var $table = 'tbl_jabatan';
    public function __construct(){
        parent::__construct($this->table);
    }
    public function getListJabatan(){
        $this->datatables->select('nama_jabatan,kode_jabatan');
        $this->datatables->from($this->table);
        $this->datatables->add_column('view', 
                                    '<a href="'.base_url('Jabatan/ubah/$1').'" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                    <a href="'.base_url('Jabatan/hapus/$1').'" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ','kode_jabatan,nama_jabatan');
        return $this->datatables->generate();
    }
}