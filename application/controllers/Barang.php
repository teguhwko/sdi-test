<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->model('BarangModel', 'barang');
		$this->load->model('HeaderBarangModel', 'headerBarang');
		//$this->load->library('pdf');
	}

	public function index()
	{
		$data['judul'] = 'Barang';
		$data['group'] = 'Barang';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/barang/barang');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getBarang()
	{
		header('Content-Type: application/json');
		$data = $this->headerBarang->getListBarang();
		echo $data;
	}

	public function tambah()
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Barang');
		}
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'stok',
			'stok',
			'required|numeric',
			[
				'required' => '%s tidak boleh kosong',
				'numeric' => '%s hanya boleh di isi dengan angka',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Barang';
			$data['group'] = 'Barang';

			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/barang/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$stok = htmlspecialchars($i->post('stok'));
			$data = [
				'nama_barang' => htmlspecialchars($i->post('nama')),
				'stok_barang' => $stok,
				'stok_tersedia' => $stok,
			];
			$id = $this->headerBarang->insertWithReturn($data);

			for ($i = 0; $i < $stok; $i++) {
				$barang = $this->barang->getLast('kode_barang');
				$kodeDariDb = $barang['kode_barang'];
				$split = explode("-", $kodeDariDb);
				$kode = isset($split[1]) ? $this->generateKode($split[1]) : $this->generateKode(0);

				$barang = [
					'kode_barang' => $kode,
					'id_header_barang' => $id,
					'status_barang' => 'Tersedia',
					'kondisi_barang' => 'Baik',
				];

				$this->barang->insert($barang);
			}

			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data barang berhasil di simpan'})</script>"
			);
			redirect('Barang');
		}
	}
	public function hapus($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Barang');
		}
		$this->barang->delete(['id_header_barang' => $id]);
		$this->headerBarang->delete(['id' => $id]);
		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data barang berhasil di hapus'})</script>");
		redirect('Barang');
	}
	public function ubah($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Barang');
		}
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ubah Barang';
			$data['group'] = 'Barang';
			$data['id'] = $id;
			$data['barang'] = $this->headerBarang->getWhere('*', ['id' => $id]);
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/barang/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'nama_barang' => htmlspecialchars($i->post('nama')),
			];
			$this->headerBarang->update($data, ['id' => $id]);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data barang berhasil di ubah'})</script>"
			);
			redirect('Barang');
		}
	}
	private function generateKode($last)
	{
		$kode = "";
		$last ? $kode = 'BRG-' . sprintf("%03d", ($last + 1)) : $kode = 'BRG-' . sprintf("%03d", 1);
		return $kode;
	}
	public function cetak()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('petugas/barang/cetak', [], true);
		$mpdf->WriteHTML($data);
		$mpdf->Output('');
	}
}
