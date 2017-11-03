<?php
class M_data extends CI_Model{	
	public function get($keyword) {
			$this->load->database();
			return $this->db->select('*')->from('siswa')->like('nama',$keyword)->or_like('alamat',$keyword)->get()->result();
		}
	//data siswa
	function tampil_data(){		
		return $this->db->get('siswa');
	}	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}


	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_siswa($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_siswa($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		}
	//data guru
	function tampil_guru(){
		return $this->db->get('guru');
	}

	function input_guru($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_guru($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_guru($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_guru($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		}

	//data mapel
	function tampil_mapel(){
		return $this->db->get('mapel');
	}

	//data nilai
	function input_nilai($data,$table){
		$this->db->insert($table,$data);
	}
	function update_nilai($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_nilai($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//data rapor
	function tampil_rapor($where=""){
		$query = $this->db->query('select mapel.nama_mapel,detail_nilai.nilai_uts,detail_nilai.nilai_uas,detail_nilai.nilai_tugas from mapel,detail_nilai,siswa where mapel.kode_mapel=detail_nilai.kode_mapel and detail_nilai.'.$where.' group by detail_nilai.kode_mapel');
		return $query->result_array();
	}
	function tampil_nilai(){
		$query = $this->db->query('select detail_nilai.id,siswa.nama,mapel.nama_mapel,detail_nilai.nilai_uts,detail_nilai.nilai_uas,detail_nilai.nilai_tugas from mapel,detail_nilai,siswa where siswa.nis=detail_nilai.nis and mapel.kode_mapel=detail_nilai.kode_mapel group by detail_nilai.id');
		return $query->result_array();
		
	}
	function edit_nilai($where,$table){
		return $this->db->get_where($table,$where);
	}
	/*public function get($keyword) {
		return $this->db->select('*')->from('detail_nilai')->like('nilai_uts',$keyword)->get()->result();
		$query = $this->db->query('select siswa.nama,mapel.nama_mapel,detail_nilai.nilai_uts,detail_nilai.nilai_uas,detail_nilai.nilai_tugas from mapel,detail_nilai,siswa where siswa.nis=detail_nilai.nis and mapel.kode_mapel=detail_nilai.kode_mapel group by detail_nilai.kode_mapel')->like('siswa.nama',$keyword);
		return $query->result();
		}*/
		function ShowAllSiswa(){
			$query=$this->db->get('siswa');
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return false;
			}
		}
}