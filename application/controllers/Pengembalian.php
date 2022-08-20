<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->helper('naive_helper');
		$this->load->model('PengembalianModel', 'pengembalian');
		$this->load->model('PeminjamanModel', 'peminjaman');
		$this->load->model('KaryawanModel', 'karyawan');
		$this->load->model('BarangModel', 'barang');
		$this->load->model('HeaderBarangModel', 'headerBarang');
		$this->load->model('NaiveModel', 'naive');
	}

	public function index()
	{
		$data['judul'] = 'Pengembalian';
		$data['group'] = 'Pengembalian';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/pengembalian/pengembalian');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getPengembalian()
	{
		header('Content-Type: application/json');
		$data = $this->pengembalian->getListPengembalian();
		echo $data;
	}

	public function tambah()
	{
		$pengembalian = $this->pengembalian->getLast('kode_pengembalian');
		$kodeDariDb = $pengembalian['kode_pengembalian'];
		$split = explode("-", $kodeDariDb);
		$kode = isset($split[1]) ? $this->generateKode($split[1]) : $this->generateKode(0);

		$this->form_validation->set_rules(
			'peminjaman',
			'KODE PEMINJAMAN',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Pengembalian';
			$data['group'] = 'Pengembalian';
			$data['kode'] = $kode;
			$data['peminjaman'] = $this->peminjaman->getAllWhere('kode_peminjaman', ['status' => 'belum selesai']);
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/pengembalian/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$kodePemimjaman = htmlspecialchars($i->post('peminjaman'));

			$peminjaman = $this->peminjaman->getWhere('tgl_kembali,kode_barang', ['kode_peminjaman' => $kodePemimjaman]);
			$kodeBarang = $peminjaman['kode_barang'];
			$barang = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarang]);
			$idHeaderBarang = $barang['id_header_barang'];

			$isTerlambat = isTerlambat($peminjaman['tgl_kembali']);
			$kondisi = htmlspecialchars($i->post('kondisi'));
			$sanksi = htmlspecialchars($i->post('sanksi'));
			$data = [
				'kode_pengembalian' => $kode,
				'kode_peminjaman' => $kodePemimjaman,
				'kondisi_barang' => $kondisi,
				'sanksi' => $sanksi,
				'keterangan' => htmlspecialchars($i->post('keterangan')),
				'terlambat' => $isTerlambat
			];

			$naiveItem = [
				'kode' => $kodePemimjaman,
				'sanksi' => $sanksi,
				'kondisi' => $kondisi,
			];

			$this->pengembalian->insert($data);

			$naive = naivebayes($naiveItem);
			$naive['kode_pengembalian'] = $kode;

			$this->naive->insert($naive);

			$this->peminjaman->update(['status' => 'selesai'], ['kode_peminjaman' => $kodePemimjaman]);

			$this->barang->update(['status_barang' => 'Tersedia', 'kondisi_barang' => $kondisi], ['kode_barang' => $kodeBarang]);

			$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $idHeaderBarang]);
			$stokTersedia = $headerBarang['stok_tersedia'] + 1;
			$this->headerBarang->update(['stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data pengembalian berhasil di simpan'})</script>"
			);
			redirect('Pengembalian');
		}
	}

	public function ubah($kode)
	{
		$this->form_validation->set_rules(
			'sanksi',
			'SANKSI',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);

		$data['kode'] = $kode;
		$data['pengembalian'] = $this->pengembalian->getWhere('*', ['kode_pengembalian' => $kode]);
		// var_dump($data['pengembalian']);
		// die();
		$kodePemimjaman = $data['pengembalian']['kode_peminjaman'];
		$kondisiBarang = $data['pengembalian']['kondisi_barang'];
		$data['peminjaman'] = $this->peminjaman->getDetailForPengembalian($kodePemimjaman);

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Pengembalian';
			$data['group'] = 'Pengembalian';
			$data['naive'] = $this->naive->getWhere('*', ['kode_pengembalian' => $kode]);

			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/pengembalian/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$idHeaderBarang = $data['peminjaman']['id_header_barang'];
			$peminjaman = $this->peminjaman->getWhere('tgl_kembali,kode_barang', ['kode_peminjaman' => $kodePemimjaman]);
			$kodeBarang = $peminjaman['kode_barang'];

			$kondisi = htmlspecialchars($i->post('kondisi'));
			$sanksi = htmlspecialchars($i->post('sanksi'));

			$data = [
				'kondisi_barang' => $kondisi,
				'sanksi' => $sanksi,
				'keterangan' => htmlspecialchars($i->post('keterangan')),
			];

			$naiveItem = [
				'kode' => $kodePemimjaman,
				'sanksi' => $sanksi,
				'kondisi' => $kondisi
			];

			$naive = naivebayesEdit($naiveItem, $kode);

			$this->naive->update($naive, ['kode_pengembalian' => $kode]);

			$this->pengembalian->update($data, ['kode_pengembalian' => $kode]);
			if ($kondisi != $kondisiBarang) {
				$this->barang->update(['kondisi_barang' => $kondisi], ['kode_barang' => $kodeBarang]);
				if ($kondisi == "Baik" && $kondisiBarang != "Baik") {
					// jika kondisi lama tidak baik, dan sekarang baik, maka ubah jumlah tersedia tambah 1
					$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $idHeaderBarang]);
					$stokTersedia = $headerBarang['stok_tersedia'] + 1;
					$this->headerBarang->update(['stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);
				} else if ($kondisiBarang == "Baik" && $kondisi != "Baik") {
					// jika kondisi lama baik dan sekarang tidak biak, maka jumalh tersedia kurang 1
					$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $idHeaderBarang]);
					$stokTersedia = $headerBarang['stok_tersedia'] -  1;
					$this->headerBarang->update(['stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);
				}
			}

			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data pengembalian berhasil di simpan'})</script>"
			);
			redirect('Pengembalian');
		}
	}

	public function hapus($kode)
	{
		$pengembalian =  $this->pengembalian->getWhere('*', ['kode_pengembalian' => $kode]);
		$kodePemimjaman = $pengembalian['kode_peminjaman'];

		$peminjaman = $this->peminjaman->getDetailForPengembalian($kodePemimjaman);
		$kodeBarang = $peminjaman['kode_barang'];
		$idHeaderBarang = $peminjaman['id_header_barang'];

		$this->naive->delete(['kode_pengembalian' => $kode]);
		$this->pengembalian->delete(['kode_pengembalian' => $kode]);
		$this->peminjaman->update(['status' => 'belum selesai'], ['kode_peminjaman' => $kodePemimjaman]);

		$barang = [
			'status_barang' => 'Tidak Tersedia',
			'kondisi_barang' => 'Baik'
		];
		$this->barang->update($barang, ['kode_barang' => $kodeBarang]);

		$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $idHeaderBarang]);
		$stokTersedia = $headerBarang['stok_tersedia'] - 1;
		$this->headerBarang->update(['stok_tersedia' => $stokTersedia], ['id' => $idHeaderBarang]);

		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data pengembalian berhasil di hapus'})</script>");
		redirect('Pengembalian');
	}
	public function detail()
	{
		$id = $this->input->post('id');
		$peminjaman = $this->peminjaman->getDetail($id);
		echo json_encode($peminjaman);
	}

	public function getBayes()
	{
		$i = $this->input;

		$kodePemimjaman = htmlspecialchars($i->post('peminjaman'));
		$kondisi = htmlspecialchars($i->post('kondisi'));
		$sanksi = htmlspecialchars($i->post('sanksi'));

		$naiveItem = [
			'kode' => $kodePemimjaman,
			'sanksi' => $sanksi,
			'kondisi' => $kondisi
		];

		$naive = naivebayes($naiveItem);
		echo json_encode($naive);
	}

	public function naivebayes($kodePengembalian)
	{
		$data['judul'] = 'Pengembalian';
		$data['group'] = 'Pengembalian';
		$data['naive'] = $this->pengembalian->getDetail($kodePengembalian);
		$data['pengembalian'] = $this->pengembalian->getPengembalian($kodePengembalian);
		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/pengembalian/naivebayes');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	private function generateKode($last)
	{
		$kode = "";
		$last ? $kode = 'PGA-' . sprintf("%03d", ($last + 1)) : $kode = 'PGA-' . sprintf("%03d", 1);
		return $kode;
	}
}
