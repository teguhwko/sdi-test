<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->model('HeaderBarangModel', 'headerBarang');
		$this->load->model('BarangModel', 'barang');
		$this->load->model('UserModel', 'user');
		$this->load->model('PeminjamanModel', 'peminjaman');
		$this->load->model('PengembalianModel', 'pengembalian');
		$this->load->model('JabatanModel', 'jabatan');
		$this->load->library('datatables');
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['group'] = 'Dashboard';
		$data['jumlahBarang'] = $this->headerBarang->getSum('stok_tersedia');
		$data['jumlahPetugas'] = $this->user->getCountRowWhere(['role' => 'petugas']);
		$data['jumlahPeminjaman'] = $this->peminjaman->getCountRow();
		$data['jumlahPengembalian'] = $this->pengembalian->getCountRow();

		$data['jumlah_dipinjamkan_kk'] = $this->pengembalian->getJumlahPeminjamanByJabatan('Karyawan Kantor', 'Dipinjamkan');
		$data['jumlah_tidak_dipinjamkan_kk'] = $this->pengembalian->getJumlahPeminjamanByJabatan('Karyawan Kantor', 'Tidak Dipinjamkan');

		$data['jumlah_dipinjamkan_kl'] = $this->pengembalian->getJumlahPeminjamanByJabatan('Karyawan Lapangan', 'Dipinjamkan');
		$data['jumlah_tidak_dipinjamkan_kl'] = $this->pengembalian->getJumlahPeminjamanByJabatan('Karyawan Lapangan', 'Tidak Dipinjamkan');

		$data['jumlah_dipinjamkan_sanksi'] = $this->pengembalian->getCountRowWhere(['sanksi' => 'Iya', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_sanksi'] = $this->pengembalian->getCountRowWhere(['sanksi' => 'Iya', 'keterangan' => 'Tidak Dipinjamkan']);

		$data['jumlah_dipinjamkan_tidak_sanksi'] = $this->pengembalian->getCountRowWhere(['sanksi' => 'Tidak', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_tidak_sanksi'] = $this->pengembalian->getCountRowWhere(['sanksi' => 'Tidak', 'keterangan' => 'Tidak Dipinjamkan']);

		$data['jumlah_dipinjamkan_terlambat'] = $this->pengembalian->getCountRowWhere(['terlambat' => '0', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_terlambat'] = $this->pengembalian->getCountRowWhere(['terlambat' => '0', 'keterangan' => 'Tidak Dipinjamkan']);

		$data['jumlah_dipinjamkan_tidak_terlambat'] = $this->pengembalian->getCountRowWhere(['terlambat' => '1', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_tidak_terlambat'] = $this->pengembalian->getCountRowWhere(['terlambat' => '1', 'keterangan' => 'Tidak Dipinjamkan']);

		$data['jumlah_dipinjamkan_kondisi_barang_baik'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Baik', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_dipinjamkan_kondisi_barang_rusak_ringan'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Rusak Ringan', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_dipinjamkan_kondisi_barang_rusak_berat'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Rusak Berat', 'keterangan' => 'Dipinjamkan']);
		$data['jumlah_dipinjamkan_kondisi_barang_hilang'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Hilang', 'keterangan' => 'Dipinjamkan']);

		$data['jumlah_tidak_dipinjamkan_kondisi_barang_baik'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Baik', 'keterangan' => 'Tidak Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_kondisi_barang_rusak_ringan'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Rusak Ringan', 'keterangan' => 'Tidak Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_kondisi_barang_rusak_berat'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Rusak Berat', 'keterangan' => 'Tidak Dipinjamkan']);
		$data['jumlah_tidak_dipinjamkan_kondisi_barang_hilang'] = $this->pengembalian->getCountRowWhere(['kondisi_barang' => 'Hilang', 'keterangan' => 'Tidak Dipinjamkan']);


		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/dashboard/dashboard');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getBarang()
	{
		header('Content-Type: application/json');
		$data = $this->barang->getListBarangDashboard();
		echo $data;
	}
}
