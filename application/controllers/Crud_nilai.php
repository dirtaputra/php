<?php

class Crud_nilai extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->model('m_data');
	}

	function index(){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$data['guru'] = $this->m_data->tampil_guru()->result();
		$data['mapel'] = $this->m_data->tampil_mapel()->result();
		$this->load->view('V_tambahnilai',$data);
	}

	function tambah_aksi(){
		$nis = $this->input->post('nis');
		$nip = $this->input->post('nip');
		$kode_mapel = $this->input->post('kode_mapel');
		$nilai_uts = $this->input->post('uts');
		$nilai_uas = $this->input->post('uas');
		$nilai_tugas = $this->input->post('tugas');
		$data = array(
			'nis'=>$nis,
			'nip'=>$nip,
			'kode_mapel'=>$kode_mapel,
			'nilai_uts'=>$nilai_uts,
			'nilai_uas'=>$nilai_uas,
			'nilai_tugas'=>$nilai_tugas
			);
		$this->m_data->input_nilai($data,'detail_nilai');
		redirect('rapor/lihat_data');
	}
	function update($id){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$data['guru'] = $this->m_data->tampil_guru()->result();
		$data['mapel'] = $this->m_data->tampil_mapel()->result();
		/*$where = array('id'=>$id);
		$data = array(
			'list'=>$this->m_data->edit_nilai("id = $id")
			);*/
		$where= array('id'=>$id);
		$data['nilai'] = $this->m_data->edit_nilai($where,'detail_nilai')->result();
		$this->load->view('EditNilai',$data);
	}
	function do_update(){
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$nip = $this->input->post('nip');
		$kode_mapel = $this->input->post('kode_mapel');
		$nilai_uts = $this->input->post('uts');
		$nilai_uas = $this->input->post('uas');
		$nilai_tugas = $this->input->post('tugas');
		$data = array(
			'nis'=>$nis,
			'nip'=>$nip,
			'kode_mapel'=>$kode_mapel,
			'nilai_uts'=>$nilai_uts,
			'nilai_uas'=>$nilai_uas,
			'nilai_tugas'=>$nilai_tugas
			);
		$where = array(
			'id' => $id,
			);
		$this->m_data->update_nilai($where,$data,'detail_nilai');
		redirect('rapor/lihat_data');
	}
	function delete($id){
		$where = array('id'=>$id);
		$this->m_data->hapus_nilai($where,'detail_nilai');
		redirect('rapor/lihat_data');
	}
}