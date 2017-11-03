<?php

class Cari_siswa extends CI_Controller{
	function index(){
		$this->load->view('CariSiswa');
	}
	function get($keyword = '') {
			$this->load->model('m_data');
			echo json_encode($this->m_data->get($keyword));
		}
}