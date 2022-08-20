<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryawanModel extends MY_Model
{
    var $table = 'tbl_karyawan';
    public function __construct()
    {
        parent::__construct($this->table);
    }
    public function getListKaryawan()
    {
        $this->datatables->select('nama_karyawan,kode_karyawan,jk,nama_jabatan,no_hp');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_jabatan', $this->table . '.kode_jabatan=tbl_jabatan.kode_jabatan');
        if ($this->session->userdata('role') == 'admin') {
            $this->datatables->add_column(
                'view',
                '<a href="' . base_url('Karyawan/ubah/$1') . '" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                    <a href="' . base_url('Karyawan/hapus/$1') . '" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ',
                'kode_karyawan,nama_karyawan'
            );
        }
        return $this->datatables->generate();
    }

    public function getKaryawanTidakAdaAkun(){
        return $this->db->query('select * from tbl_karyawan where kode_karyawan not in( select kode_karyawan from user)')->result_array();
        
    }
}
