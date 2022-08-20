<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model('UserModel','user');
		

    }
	public function index()
	{
		if($this->session->userdata('username')) redirect('Dashboard');
        $this->form_validation->set_rules('username','Username','required',
                                        [
                                          'required'=>'Username tidak boleh kosong',
                                        ]);
        $this->form_validation->set_rules('password','Password','required|trim|min_length[8]',
                                        [
                                          'required'=>'Password tidak boleh kosong',
                                          'min_length'=>'%s minimal harus 8 charakter' 
                                        ]);
        if($this->form_validation->run()==false){
            $data['judul']="Login";
            $this->load->view('login/login',$data);
        }
        else{

			$username = $this->input->post('username',true);
      		$password = md5($this->input->post('password',true));
			$user = $this->user->getWhere('*',['username'=>$username]);

			if($user && ($password==$user['password'])){
				$data=[
					'nama'=>$user['nama'],
					'role'=>$user['role'],
					'username'=>$user['username'],
					'photo'=>$user['photo']
				];
				$this->session->set_userdata($data);
				redirect('Dashboard');
			}else{
				$this->session->set_flashdata('pesan','
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email atau Password salah 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>');
				redirect('Login');
			}
		} 
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
