<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->model('PeminjamanModel', 'peminjaman');
		$this->load->model('PengembalianModel', 'pengembalian');
		$this->load->model('KaryawanModel', 'karyawan');
		$this->load->model('BarangModel', 'barang');
		$this->load->model('HeaderBarangModel', 'headerBarang');
	}

	public function index()
	{
		$data['judul'] = 'Peminjaman';
		$data['group'] = 'Peminjaman';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/peminjaman/peminjaman');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getPeminjaman()
	{
		header('Content-Type: application/json');
		$data = $this->peminjaman->getListPeminjaman();
		echo $data;
	}

	public function tambah()
	{
		$peminjaman = $this->peminjaman->getLast('kode_peminjaman');
		$kodeDariDb = $peminjaman['kode_peminjaman'];
		$split = explode("-", $kodeDariDb);
		$kode = isset($split[1]) ? $this->generateKode($split[1]) : $this->generateKode(0);

		$this->form_validation->set_rules(
			'barang',
			'Nama Barang',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'karyawan',
			'Nama Karyawan',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'keterangan',
			'Keterangan',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'kembali',
			'Kembali',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);


		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Peminjaman';
			$data['group'] = 'Peminjaman';
			$data['kode'] = $kode;
			$data['barang'] = $this->barang->getAllWhere('*', ['status_barang' => 'Tersedia', 'kondisi_barang' => 'Baik']);
			$data['karyawan'] = $this->karyawan->getAll();
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/peminjaman/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$kodeBarang = htmlspecialchars($i->post('barang'));
			$barang = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarang]);
			$id_header_barang = $barang['id_header_barang'];

			$data = [
				'kode_peminjaman' => $kode,
				'kode_karyawan' => htmlspecialchars($i->post('karyawan')),
				'kode_barang' => $kodeBarang,
				'keterangan' => htmlspecialchars($i->post('keterangan')),
				'tgl_kembali' => htmlspecialchars($i->post('kembali')),
			];
			$this->peminjaman->insert($data);

			$this->barang->update(['status_barang' => 'Tidak Tersedia'], ['kode_barang' => $kodeBarang]);

			$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $id_header_barang]);
			$stok_tersedia = $headerBarang['stok_tersedia'] - 1;

			$this->headerBarang->update(['stok_tersedia' => $stok_tersedia], ['id' => $id_header_barang]);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data peminjaman berhasil di simpan'})</script>"
			);
			redirect('Peminjaman');
		}
	}
	public function hapus($kode)
	{
		$kondisiBarang = $this->peminjaman->getWhere('kode_barang', ['kode_peminjaman' => $kode]);
		$kodeBarang = $kondisiBarang['kode_barang'];
		$barang = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarang]);
		$id_header_barang = $barang['id_header_barang'];
		$headerBarang = $this->headerBarang->getWhere('stok_tersedia', ['id' => $id_header_barang]);
		$stok_tersedia = $headerBarang['stok_tersedia'] + 1;

		$this->headerBarang->update(['stok_tersedia' => $stok_tersedia], ['id' => $id_header_barang]);
		$this->barang->update(['status_barang' => 'Tersedia'], ['kode_barang' => $kodeBarang]);
		$this->peminjaman->delete(['kode_peminjaman' => $kode]);
		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data peminjaman berhasil di hapus'})</script>");
		redirect('Peminjaman');
	}

	public function keterangan()
	{
		$kodeBarang = $this->input->post('id');
		$kodeKaryawan = $this->input->post('karyawan');

		// ambil id header barang
		$barang = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarang]);
		$idHeader = $barang['id_header_barang'];

		$pengembalian = $this->pengembalian->getKeterangan($idHeader, $kodeKaryawan);
		echo json_encode($pengembalian);
	}
	public function ubah($kode)
	{
		$this->form_validation->set_rules(
			'barang',
			'Nama Barang',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$data['peminjaman'] = $this->peminjaman->getWhere('*', ['kode_peminjaman' => $kode]);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ubah Peminjaman';
			$data['group'] = 'Peminjaman';
			$data['kode'] = $kode;

			$data['barang'] = $this->barang->getAllWhere('*', ['kondisi_barang' => 'Baik', 'status_barang' => 'Tersedia']);
			$data['karyawan'] = $this->karyawan->getAll();

			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/peminjaman/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$kodeBarangLama = $data['peminjaman']['kode_barang'];
			$kodeBarang = htmlspecialchars($i->post('barang'));

			$data = [
				'kode_peminjaman' => $kode,
				'kode_karyawan' => htmlspecialchars($i->post('karyawan')),
				'kode_barang' => $kodeBarang,
				'keterangan' => htmlspecialchars($i->post('keterangan')),
				'tgl_kembali' => htmlspecialchars($i->post('kembali')),
			];
			if ($kodeBarang != $kodeBarangLama) {
				$barangLama = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarangLama]);
				$id_header_barang_lama = $barangLama['id_header_barang'];
				$headerBarangLama = $this->headerBarang->getWhere('stok_tersedia', ['id' => $id_header_barang_lama]);
				$stok_tersedia_lama = $headerBarangLama['stok_tersedia'] + 1;
				$this->headerBarang->update(['stok_tersedia' => $stok_tersedia_lama], ['id' => $id_header_barang_lama]);
				$this->barang->update(['status_barang' => 'Tersedia'], ['kode_barang' => $kodeBarangLama]);

				$barangBaru = $this->barang->getWhere('id_header_barang', ['kode_barang' => $kodeBarang]);
				$id_header_barang_Baru = $barangBaru['id_header_barang'];
				$headerBarangBaru = $this->headerBarang->getWhere('stok_tersedia', ['id' => $id_header_barang_Baru]);
				$stok_tersedia_Baru = $headerBarangBaru['stok_tersedia'] - 1;
				$this->headerBarang->update(['stok_tersedia' => $stok_tersedia_Baru], ['id' => $id_header_barang_Baru]);
				$this->barang->update(['status_barang' => 'Tidak Tersedia'], ['kode_barang' => $kodeBarang]);
			}

			$this->peminjaman->update($data, ['kode_peminjaman' => $kode]);

			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data peminjaman berhasil di ubah'})</script>"
			);
			redirect('Peminjaman');
		}
	}

	private function generateKode($last)
	{
		$kode = "";
		$last ? $kode = 'PMJ-' . sprintf("%03d", ($last + 1)) : $kode = 'PMJ-' . sprintf("%03d", 1);
		return $kode;
	}
}
