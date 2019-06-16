<?php 

class Keluarga_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function get_data(){
		return $this->db->get('keluarga')->result();
	}
	public function count_data(){
        $query = $this->db->query("SELECT COUNT(id_keluarga) as total_keluarga FROM keluarga");
        return $query->row_array();
    }
	public function insert_data_keluarga($data){
		$this->db->insert('keluarga',$data);
	}
	public function get_last_id(){
        $query = $this->db->query("select max(id_keluarga) as last_id from keluarga");
        return $query->result_array();
	}
	public function insert_data_saudara($data){
		$this->db->insert_batch('saudara',$data);
	}
	public function get_data_by_id($id){
		$query = $this->db->select('*')->from('keluarga')->where('id_keluarga', $id)->get();
		return $query->result();
	}
	public function get_saudara_by_id_keluarga($id){
		$query = $this->db->select('*')->from('saudara')->where('id_keluarga', $id)->get();
		return $query->result();
	}
	public function delete_saudara($id){
    	$this->db->where('id_saudara', $id);
    	$this->db->delete('saudara');
	}
	public function update_data_keluarga($data,$id){
    	$this->db->where('id_keluarga', $id);
    	$this->db->update('keluarga', $data);
	}
	public function update_saudara($data,$id){
    	$this->db->where('id_saudara', $id);
    	$this->db->update('saudara', $data);
	}
	public function delete_saudara_by_id_keluarga($id){
    	$this->db->where('id_keluarga', $id);
    	$this->db->delete('saudara');
	}
	public function delete_keluarga($id){
		$this->delete_saudara_by_id_keluarga($id);

    	$this->db->where('id_keluarga', $id);
    	$this->db->delete('keluarga');
    }
}