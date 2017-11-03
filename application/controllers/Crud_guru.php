<?php

class Crud_guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->model('m_data');
	}

	function index(){
		$data['guru'] = $this->m_data->tampil_guru()->result();
		$this->load->view('V_tampilguru',$data);
	}
	function tambah(){
		$this->load->view('V_tambahguru');
	}

	function tambah_aksi(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin
			);
		$this->m_data->input_guru($data,'guru');
		redirect('Crud_guru/index');
	}
	function hapus($nip){
		$where = array('nip'=>$nip);
		$this->m_data->hapus_guru($where,'guru');
		redirect('/Crud_guru/index');
	}
	function update($nip){
		$where= array('nip'=>$nip);
		$data['guru'] = $this->m_data->edit_guru($where,'guru')->result();
		$this->load->view('EditGuru',$data);
	}
	function do_update(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin
			);
		$where = array(
			'nip' => $nip
			);
		$this->m_data->update_guru($where,$data,'guru');
		redirect('crud_guru/index');
	}
}