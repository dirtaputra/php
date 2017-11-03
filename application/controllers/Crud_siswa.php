<?php
class Crud_siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
		$this->load->model('m_data');
	}

	function index(){
		$data['siswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('V_tampilsiswa',$data);
	}

	function tambah(){
		$this->load->view('V_tambahsiswa');
	}
	function tambah_aksi(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin
			);
		$this->m_data->input_data($data,'siswa');
		redirect('/Crud_siswa/index');
	}

	function hapus($nis){
		$where = array('nis'=>$nis);
		$this->m_data->hapus_data($where,'siswa');
		redirect('/Crud_siswa/index');
	}
	function update($nis){
		$where= array('nis'=>$nis);
		$data['siswa'] = $this->m_data->edit_siswa($where,'siswa')->result();
		$this->load->view('EditSiswa',$data);
	}
	function do_update(){
		$nis1 = $this->input->post('nis1');
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$data = array(
			'nis' => $nis1,
			'nama' => $nama,
			'alamat' => $alamat,
			'jenis_kelamin' => $jenis_kelamin
			);
		$where = array(
			'nis' => $nis
			);
		$this->m_data->update_siswa($where,$data,'siswa');
		redirect('crud_siswa/index');
	}
	public function showAllSiswa(){
		$result=$this->m_data->showAllSiswa();
		echo json_encode($result);
	}
}