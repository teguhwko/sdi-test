<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->library('datatables');
		$this->load->model('UserModel', 'user');
		$this->load->model('KaryawanModel', 'karyawan');
		$this->load->helper('photo_helper');
	}

	public function index()
	{
		$data['judul'] = 'User';
		$data['group'] = 'User';

		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('admin/user/user');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}

	public function getUser()
	{
		header('Content-Type: application/json');
		$data = $this->user->getListUser();
		echo $data;
	}

	public function tambah()
	{
		$password = $this->randomPassword();
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|is_unique[user.username]',
			[
				'required' => '%s tidak boleh kosong',
				'is_unique' => '%s telah digunakan',
			]
		);
		$this->form_validation->set_rules(
			'jenis',
			'Jenis Akses',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'foto',
			'Foto',
			'callback_validateSize|callback_validateTypeFile|callback_requiredFile',
			[
				'validateTypeFile' => '%s harus format JPG atau PNG',
				'validateSize' => '%s hanya boleh dibawah 1 Mb',
				'requiredFile' => '%s tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Tambah User';
			$data['group'] = 'User';
			$data['karyawan'] = $this->karyawan->getKaryawanTidakAdaAkun();
			$data['password'] = $password;
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('admin/user/tambah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$kodeKaryawan = htmlspecialchars($i->post('karyawan'));
			$password = htmlspecialchars($i->post('password'));
			$karyawan = $this->karyawan->getWhere('nama_karyawan', ['kode_karyawan' => $kodeKaryawan]);
			$namaKaryawan = $karyawan['nama_karyawan'];
			$encryp = md5($password);
			$data = [
				'username' => htmlspecialchars($i->post('username')),
				'nama' => $namaKaryawan,
				'password' => $encryp,
				'role' => htmlspecialchars($i->post('jenis')),
				'kode_karyawan' => $kodeKaryawan,
			];

			$file = [
				'tujuan' => './gambar/',
				'size' => '1024', // 1 Mb,
				'tipe' => 'jpg|png|jpeg',
			];

			// upload file ke folder
			$foto = uploadFile($file, "foto");
			$data['photo'] = $foto;
			$this->user->insert($data);

			$this->session->set_flashdata(
				'pesan',
				"<script>Toast.fire({icon: 'info',title: 'Data user berhasil di simpan'})</script>"
			);
			redirect('User');
		}
	}
	public function hapus($username)
	{
		$user = $this->user->getWhere('photo', ['username' => $username]);
		$photo = $user['photo'];

		deleteFile('./gambar/', $photo);
		$this->user->delete(['username' => $username]);

		$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Data user berhasil di hapus'})</script>");
		redirect('User');
	}
	public function ubah($username)
	{
		$this->form_validation->set_rules(
			'jenis',
			'Jenis Akses',
			'required',
			[
				'required' => '%s tidak boleh kosong',
			]
		);
		$this->form_validation->set_rules(
			'foto',
			'Foto',
			'callback_validateSize|callback_validateTypeFile',
			[
				'validateTypeFile' => '%s harus format JPG atau PNG',
				'validateSize' => '%s hanya boleh dibawah 1 Mb',
			]
		);
		$data['user'] = $this->user->getWhere('*', ['username' => $username]);
		$photo = $data['user']['photo'];
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ubah User';
			$data['group'] = 'User';
			$data['karyawan'] = $this->karyawan->getWhere('*', ['kode_karyawan' => $data['user']['kode_karyawan']]);
			$this->load->view('layout/head', $data);
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('admin/user/ubah');
			$this->load->view('layout/footer');
			$this->load->view('layout/script');
		} else {
			$i = $this->input;
			$data = [
				'role' => htmlspecialchars($i->post('jenis')),
			];

			$upload_image = $_FILES['foto']['name'];
			if ($upload_image) {
				deleteFile('./gambar/', $photo);

				$file = [
					'tujuan' => './gambar/',
					'size' => '1024', // 1 Mb,
					'tipe' => 'jpg|png|jpeg',
				];
				$foto = uploadFile($file, "foto");
				$data['photo'] = $foto;
			}

			$this->user->update($data, ['username' => $username]);
			$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'info',title: 'Data user berhasil di ubah'})</script>");
			redirect('User');
		}
	}


	function validateTypeFile()
	{
		$allowed = array('png', 'jpg', 'JPG', 'PNG', 'JPEG', 'jpeg');
		$filename = $_FILES['foto']['name'];
		if ($filename) {
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if (!in_array($ext, $allowed)) {
				return false;
			} else {
				return true;
			}
		}
	}
	function validateSize()
	{
		$filename = $_FILES['foto']['name'];
		if ($filename) {
			if ($_FILES['foto']['size'] > (1024 * 1000)) {
				return false;
			} else {
				return true;
			}
		}
	}

	function requiredFile()
	{
		$filename = $_FILES['foto']['name'];
		if ($filename) {
			return true;
		} else {
			return false;
		}
	}

	private function randomPassword()
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}
}