<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends MY_Model {
    var $table = 'user';
    public function __construct(){
        parent::__construct($this->table);
    }
    public function getDetailUser($username){
        $this->db->select('nama,photo,jk,no_hp');
        $this->db->from($this->table);
        $this->db->where('username',$username);
        $this->db->join('tbl_karyawan','user.kode_karyawan = tbl_karyawan.kode_karyawan');
        return $this->db->get()->row_array();
    }
    public function getListUser(){
        $this->datatables->select('nama,tbl_karyawan.kode_karyawan,role,nama_jabatan,username');
        $this->datatables->from($this->table);
        $this->datatables->join('tbl_karyawan',$this->table.'.kode_karyawan=tbl_karyawan.kode_karyawan');
        $this->datatables->join('tbl_jabatan','tbl_karyawan.kode_jabatan=tbl_jabatan.kode_jabatan');
        $this->datatables->add_column('view', 
                                    '<a href="'.base_url('User/ubah/$1').'" class="btn btn-success" id="btn-edit" ><i class="fas fa-edit"></i></a>  
                                    <a href="'.base_url('User/hapus/$1').'" class="btn btn-danger delete" id="btn-delete" data-kode="$1" data-nama="$2"><i class="fas fa-trash"></i></a> 
                                    ','username,nama');
        return $this->datatables->generate();
    }
}