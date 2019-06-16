<?php 

class Kategori_model extends CI_Model{
	public function get_all_kategori(){
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function simpan($data){
		$this->db->insert('tbl_kategori', $data);
	}

	public function update($data, $id){
		$this->db->where('Kategori_id', $id);
		$this->db->update('tbl_kategori', $data);
	}

	public function hapus($id){
		$this->db->where('Kategori_id', $id);
		$this->db->delete('tbl_kategori');
	}
}