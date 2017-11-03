<?php

class Rapor_public extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
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

		$this->load->view('V_lihatraporpublic',$data);
	}
}