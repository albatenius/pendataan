<?php 

class Berita_model extends CI_Model{
	public function get_all_post(){
		$this->db->select('*');
		$this->db->from('tbl_tulisan tt');
		$this->db->join('tbl_kategori tk', 'tt.tulisan_kategori_id = tk.kategori_id');
		$this->db->join('user u', 'tt.id_user = u.id_user');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function simpan($data){
		$this->db->insert('tbl_tulisan', $data);
	}

	public function get_data_edit($id){
		$this->db->select('*');
		$this->db->from('tbl_tulisan tt');
		$this->db->join('tbl_kategori tk', 'tt.tulisan_kategori_id = tk.kategori_id');
		$this->db->join('user u', 'tt.id_user = u.id_user');
		$this->db->where('tulisan_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update($data, $id){
		$this->db->where('tulisan_id', $id);
		$this->db->update('tbl_tulisan', $data);
	}

	public function hapus($id){
		$this->db->where('tulisan_id', $id);
		$this->db->delete('tbl_tulisan');
	}
}