<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPengembalian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
        $this->load->library('datatables');
        $this->load->model('PengembalianModel', 'pengembalian');
        //$this->load->library('pdf');
    }

    public function index()
    {
        $data['judul'] = 'Laporan Pengembalian';
        $data['group'] = 'Laporan Pengembalian';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('petugas/pengembalian/laporanPengembalian');
        $this->load->view('layout/footer');
        $this->load->view('layout/script');
    }

    public function getPengembalian()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        header('Content-Type: application/json');
        $data = $this->pengembalian->getListLaporanPengembalian($bulan, $tahun);
        echo $data;
    }

    public function cetakLaporan($bulan, $tahun)
    {
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('petugas/pengembalian/cetak', ['bulan' => $bulan, 'tahun' => $tahun], true);
        $mpdf->WriteHTML($data);
        $mpdf->Output('');
    }
}
