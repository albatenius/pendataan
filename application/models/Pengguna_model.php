<?php 

class Pengguna_model extends CI_Model{
	public function get_all_pengguna(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function simpan($data){
		$this->db->insert('user', $data);
	}

	public function update($data, $id){
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	public function hapus($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	public function getusername($id){
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('id_user', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function resetpass($id, $pass){
		$this->db->where('id_user', $id);
		$this->db->update('user', array('password' => md5($pass)));
	}
}