<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') != 'petugas' && $this->session->userdata('role') != 'admin') redirect('Login');
		$this->load->model('KaryawanModel', 'karyawan');
		$this->load->model('UserModel', 'user');
		$this->load->helper('photo_helper');
	}

	private function view()
	{
		$data['judul'] = 'Profile';
		$data['group'] = 'Profile';
		$data['user'] = $this->user->getDetailUser($this->session->userdata('username'));
		$this->load->view('layout/head', $data);
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('petugas/profile/profile');
		$this->load->view('layout/footer');
		$this->load->view('layout/script');
	}
	public function index()
	{
		$this->view();
	}
	public function profile()
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama',
			'required',
			[
				'required' => '%s harus diisi'
			]
		);
		$this->form_validation->set_rules(
			'nohp',
			'No HP',
			'required',
			[
				'required' => '%s harus diisi'
			]
		);
		$this->form_validation->set_rules(
			'foto',
			'Foto',
			'callback_validateSize|callback_validateTypeFile',
			[
				'validateTypeFile' => '%s harus format JPG atau PNG',
				'validateSize' => '%s hanya boleh dibawah 1 Mb',
				'requiredFile' => '%s tidak boleh kosong'
			]
		);
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$nama = htmlspecialchars($this->input->post('nama'));
			$data = [
				"nama" => $nama,
			];
			$sessionData['nama'] = $nama;
			$where = ["username" => $this->session->userdata('username')];

			$gambar = $this->user->getWhere('photo,kode_karyawan', $where);

			$upload_image = $_FILES['foto']['name'];
			// kalau gambar di ganti maka gambar lama dihapus
			if ($upload_image != "") {
				// config upload file
				$file = [
					'tujuan' => './gambar/',
					'size' => '1024', // 1 Mb,
					'tipe' => 'jpg|png',
				];

				// upload file ke folder
				$foto = uploadFile($file, "foto");

				$gambar['photo'] ? deleteFile('gambar/', $gambar['photo']) : '';
				$data['photo'] = $foto;
				$sessionData['photo'] = $foto;
			}
			$this->user->update($data, $where);

			$karyawan = [
				'jk' => htmlspecialchars($this->input->post('jenis')),
				'no_hp' => htmlspecialchars($this->input->post('nohp')),
				'nama_karyawan' => $nama,
			];
			$this->karyawan->update($karyawan, ['kode_karyawan' => $gambar['kode_karyawan']]);
			$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'info',title: 'Profile behasil diubah'})</script>");
			$this->session->set_userdata($sessionData);
			redirect('Profile');
		}
	}
	public function gantiPassword()
	{
		$where = ['username' => $this->session->userdata('username')];
		$data['info'] = $this->user->getWhere('password', $where);
		$this->form_validation->set_rules(
			'oldpassword',
			'Password lama',
			'required|trim',
			[
				'required' => '%s tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'newpassword',
			'Password',
			'required|trim|min_length[8]|matches[repassword]',
			[
				'required' => '%s tidak boleh kosong',
				'matches' => '%s harus sama',
				'min_length' => '%s harus lebih 8 karakter'
			]
		);
		$this->form_validation->set_rules(
			'repassword',
			'Password',
			'required|trim|matches[newpassword]',
			[
				'required' => '%s tidak boleh kosong',
				'matches' => '%s harus sama'
			]
		);
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$passwordlama = md5(htmlspecialchars($this->input->post('oldpassword', true)));
			$passwordbaru = md5(htmlspecialchars($this->input->post('newpassword', true)));
			//ketika isi password lama tidak sama dengan password yang ada di database
			if ($data['info']['password'] != $passwordlama) {
				$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Old password salah'})</script>");
				redirect('Profile');
			} else {
				// jika password yang baru sama dengan password lama
				if ($passwordlama == $passwordbaru) {
					$this->session->set_flashdata('pesan', "<script>Toast.fire({icon: 'error',title: 'Password yang anda masukan sama dengan password sebelumnya'})</script>");
					redirect('Profile');
				}
				// jika berhasil
				else {
					$newPassword = [
						'password' => $passwordbaru
					];
					$this->user->update($newPassword, $where);
					$this->session->set_flashdata(
						'pesan',
						"<script>Toast.fire({icon: 'info',title: 'Password behasil diubah'})</script>"
					);
					redirect('Profile');
				}
			}
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
}
