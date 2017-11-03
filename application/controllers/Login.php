<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index(){
		$this->load->view('V_login');
	}

	public function aksi_login(){
		//menangkap data username dan password
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//simpan ke array untuk dikirim ke model m_login
		$where = array(
			'username' => $username,
			'password' => $password
			);
		//mengecek ketersediaan username dan password di model m_login
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		if($cek>0){
			$data_session = array(
				'nama'=>$username,
				'status'=>"login");
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/admin"));
		}else{
			echo "username dan password salah !";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome/index'));
	}
}
