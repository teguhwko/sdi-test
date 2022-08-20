<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->model('KaryawanModel', 'karyawan');
		$this->load->model('JabatanModel', 'jabatan');
	}

	public function index()
	{
		$data['judul'] = 'Karyawan';
		$data['group'] = 'Karyawan';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/karyawan/karyawan');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getKaryawan()
	{
		header('Content-Type: application/json');
		$data = $this->karyawan->getListKaryawan();
		echo $data;
	}

	public function tambah()
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Karyawan');
		}
		$karyawan = $this->karyawan->getLast('kode_karyawan');
		$kodeDariDb = $karyawan['kode_karyawan'];
		$split = explode("-", $kodeDariDb);
		$kode = isset($split[1]) ? $this->generateKode($split[1]) : $this->generateKode(0);
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'jenis',
			'Jenis Kelamin',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'nohp',
			'No HP',
			'required|numeric',
			[
				'required' => '%s tidak boleh kosong',
				'numeric' => '%s hanya boleh diisi dengan angka',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Karyawan';
			$data['group'] = 'Karyawan';
			$data['kode'] = $kode;
			$data['jabatan'] = $this->jabatan->getAll();
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/karyawan/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'kode_karyawan' => $kode,
				'nama_karyawan' => htmlspecialchars($i->post('nama')),
				'jk' => htmlspecialchars($i->post('jenis')),
				'kode_jabatan' => htmlspecialchars($i->post('jabatan')),
				'no_hp' => htmlspecialchars($i->post('nohp')),
			];
			$this->karyawan->insert($data);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data karyawan berhasil di simpan'})</script>"
			);
			redirect('Karyawan');
		}
	}
	public function hapus($kode)
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Karyawan');
		}
		$this->karyawan->delete(['kode_karyawan' => $kode]);
		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data karyawan berhasil di hapus'})</script>");
		redirect('Karyawan');
	}
	public function ubah($kode)
	{
		if ($this->session->userdata('role') != 'admin') {
			redirect('Karyawan');
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
			'jenis',
			'Jenis Kelamin',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'nohp',
			'No HP',
			'required|numeric',
			[
				'required' => '%s tidak boleh kosong',
				'numeric' => '%s hanya boleh diisi dengan angka',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ubah Karyawan';
			$data['group'] = 'Karyawan';
			$data['kode'] = $kode;
			$data['jabatan'] = $this->jabatan->getAll();
			$data['karyawan'] = $this->karyawan->getWhere('*', ['kode_karyawan' => $kode]);
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/karyawan/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'kode_karyawan' => $kode,
				'nama_karyawan' => htmlspecialchars($i->post('nama')),
				'jk' => htmlspecialchars($i->post('jenis')),
				'kode_jabatan' => htmlspecialchars($i->post('jabatan')),
				'no_hp' => htmlspecialchars($i->post('nohp')),
			];
			$this->karyawan->update($data, ['kode_karyawan' => $kode]);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data karyawan berhasil di ubah'})</script>"
			);
			redirect('Karyawan');
		}
	}
	private function generateKode($last)
	{
		$kode = "";
		$last ? $kode = 'KYN-' . sprintf("%03d", ($last + 1)) : $kode = 'KYN-' . sprintf("%03d", 1);
		return $kode;
	}
}
