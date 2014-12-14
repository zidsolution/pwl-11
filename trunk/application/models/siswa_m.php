<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Siswa_m extends CI_Model {

	public function get_siswa(){
		$this->db->join('tbkelas', 'tbkelas.kd_kelas = tbsiswa.kd_kelas');
		$this->db->order_by('nik_siswa');
		$rs = $this->db->get('tbsiswa');

		return $rs->result();
	}

	public function get_kelas(){

		$this->db->order_by('nm_kelas');
		$rs = $this->db->get('tbkelas');

		return $rs->result();
	}

	public function delete_siswa($nik){
		$this->db->where('nik_siswa', $nik);
		$this->db->delete('tbsiswa');
	}

	public function delete_kelas($id){
		$this->db->where('kd_kelas', $id);
		$this->db->delete('tbkelas');
	}
}