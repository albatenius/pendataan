<?php 

class Agenda_model extends CI_Model{
	public function get_all_agenda(){
		$this->db->select('*');
		$this->db->from('agenda');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function simpan($data){
		$this->db->insert('agenda', $data);
	}

	public function update($data, $id){
		$this->db->where('id_agenda', $id);
		$this->db->update('agenda', $data);
	}

	public function hapus($id){
		$this->db->where('id_agenda', $id);
		$this->db->delete('agenda');
	}

}