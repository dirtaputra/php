<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function aksi_login(){
		//menangkap data username dan password
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//simpan ke array untuk dikirim ke model m_login
		$data = $array(
			'username' = $username,
			'password' = $password
			);
		//mengecek ketersediaan username dan password di model m_login
		$cek = $this->m_login->cek_login("admin",$data)->num_rows();
		if($cek>0){
			$data_session = array(
				'nama'=>$username,
				'status'=>"login");
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			echo "username dan password salah !";
		}
	}
	function logout(){
		$this->session->session_destroy();
		redirect(base_url('login'));
	}
}

