<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPeminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
        $this->load->library('datatables');
        //$this->load->library('pdf');
        $this->load->model('PeminjamanModel', 'peminjaman');
    }

    public function index()
    {
        $data['judul'] = 'Laporan Peminjaman';
        $data['group'] = 'Laporan Peminjaman';

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('layout/sidebar');
        $this->load->view('petugas/peminjaman/laporanPeminjaman');
        $this->load->view('layout/footer');
        $this->load->view('layout/script');
    }

    public function getPeminjaman()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        header('Content-Type: application/json');
        $data = $this->peminjaman->getListLaporanPeminjaman($bulan, $tahun);
        echo $data;
    }

    public function cetakLaporan($bulan, $tahun)
    {
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('petugas/peminjaman/cetak', ['bulan' => $bulan, 'tahun' => $tahun], true);
        $mpdf->WriteHTML($data);
        $mpdf->Output('');
    }
}
