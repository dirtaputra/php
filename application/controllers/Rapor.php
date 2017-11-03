<?php

class Rapor extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->model('m_data');
	}

	function index(){
		$data['murid'] = $this->m_data->tampil_data()->result();
		$this->load->view('V_siswarapor',$data);
	}

	function lihat($nis){
		$where = array('nis'=>$nis);
		//$lihat = $this->m_data->tampil_rapor("nis = $nis");
		/*$data = array(
			'nama_mapel'=> $lihat[0]['nama_mapel'],
			'nilai_uts'=> $lihat[0]['nilai_uts'],
			'nilai_uas'=> $lihat[0]['nilai_uas'],
		
			);*/
		$data = array(
			'list'=>$this->m_data->tampil_rapor("nis = $nis")
			);

		$this->load->view('V_lihatrapor',$data);
	}

	function cetak($nis){
		$data = array(
			'list'=>$this->m_data->tampil_rapor("nis = $nis")
			);

		$this->load->view('V_cetakrapor',$data);
	}
	function lihat_data(){
		$data = array(
			'rapor'=>$this->m_data->tampil_nilai()
			);
		$this->load->view('LihatNilai',$data);
	}
	function get($keyword = '') {
		echo json_encode($this->m_data->get($keyword));
	}
}