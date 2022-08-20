<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->model('JabatanModel', 'jabatan');
	}

	public function index()
	{
		$data['judul'] = 'Jabatan';
		$data['group'] = 'Jabatan';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/jabatan/jabatan');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getJabatan()
	{
		header('Content-Type: application/json');
		$data = $this->jabatan->getListJabatan();
		echo $data;
	}

	public function tambah()
	{
		$jabatan = $this->jabatan->getLast('kode_jabatan');
		$kodeDariDb = $jabatan['kode_jabatan'];
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
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah Jabatan';
			$data['group'] = 'Jabatan';
			$data['kode'] = $kode;
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/jabatan/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'kode_jabatan' => $kode,
				'nama_jabatan' => htmlspecialchars($i->post('nama')),
			];
			$this->jabatan->insert($data);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data jabatan berhasil di simpan'})</script>"
			);
			redirect('Jabatan');
		}
	}
	public function hapus($kode)
	{
		$this->jabatan->delete(['kode_jabatan' => $kode]);
		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data jabatan berhasil di hapus'})</script>");
		redirect('Jabatan');
	}
	public function ubah($kode)
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ubah Jabatan';
			$data['group'] = 'Jabatan';
			$data['kode'] = $kode;
			$data['jabatan'] = $this->jabatan->getWhere('*', ['kode_jabatan' => $kode]);
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('petugas/jabatan/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'nama_jabatan' => htmlspecialchars($i->post('nama')),
			];
			$this->jabatan->update($data, ['kode_jabatan' => $kode]);
			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data jabatan berhasil di ubah'})</script>"
			);
			redirect('Jabatan');
		}
	}
	private function generateKode($last)
	{
		$kode = "";
		$last ? $kode = 'JBN-' . sprintf("%03d", ($last + 1)) : $kode = 'JBN-' . sprintf("%03d", 1);
		return $kode;
	}
}
