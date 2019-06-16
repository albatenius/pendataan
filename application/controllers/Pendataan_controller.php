<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model("keluarga_model");
				$this->load->helper('url');

		if($this->session->userdata('status')!="login"){
			redirect('login');
		}
	}
	public function index()
	{
		$data['keluarga'] = $this->keluarga_model->get_data();
		$data['container'] = "pendataan/index";
		$this->load->view('layout',$data);
	}
	public function create(){
		$this->session->set_flashdata('form_type', 'Tambah Data');
		$data['container'] = "pendataan/form";
		$this->load->view('layout',$data);
	}
	public function add_keluarga(){
		$data = $this->input->post();
		$insert_data = $this->keluarga_model->insert_data_keluarga($data);
		echo json_encode($insert_data);
	}

    public function get_last_id(){
        $data = $this->keluarga_model->get_last_id();
        echo json_encode($data);
    }

	public function add_saudara(){
		$data = $this->input->post();

		$nm = $this->input->post('nama_saudara');
		$result = array();
		foreach($nm AS $key => $val){
			$result[] = array(
				"id_keluarga"  => $_POST['id_keluarga'][$key],
				"nama_saudara"  => $_POST['nama_saudara'][$key],
				"usia_saudara"  => $_POST['usia_saudara'][$key],
				"pekerjaan_saudara"  => $_POST['pekerjaan_saudara'][$key],
				"alamat_saudara"  => $_POST['alamat_saudara'][$key],
				"pendidikan_saudara"  => $_POST['pendidikan_saudara'][$key]
			);
     	}

		$insert_data = $this->keluarga_model->insert_data_saudara($result);
		echo json_encode($insert_data);
	}

	public function get_data_by_id($id){
		$data['keluarga'] = $this->keluarga_model->get_data_by_id($id);
		echo json_encode($data['keluarga']);
	}

	public function get_saudara_by_id_keluarga($id){
		$data['saudara'] = $this->keluarga_model->get_saudara_by_id_keluarga($id);
		echo json_encode($data['saudara']);
	}

	public function edit($id){
		$this->session->set_flashdata('form_type', 'Edit Data');
		$data['container'] = "pendataan/form";
		$this->load->view('layout',$data);
	}

	public function hapus_saudara($id){
		$delete_data = $this->keluarga_model->delete_saudara($id);
		echo json_encode($delete_saudara);
	}

	public function update_keluarga($id){
		$data = $this->input->post();
		$update_data = $this->keluarga_model->update_data_keluarga($data,$id);
		echo json_encode($update_data);
	}

	public function update_saudara($id){
        $nama_saudara = $this->input->post('nama_saudara');
        $usia_saudara = $this->input->post('usia_saudara');
        $pendidikan_saudara = $this->input->post('pendidikan_saudara');
        $pekerjaan_saudara = $this->input->post('pekerjaan_saudara');
        $alamat_saudara = $this->input->post('alamat_saudara');

        if(isset($nama_saudara)){
        	$data = array('nama_saudara' => $nama_saudara);
        } else if(isset($usia_saudara)){
        	$data = array('usia_saudara' => $usia_saudara);
        } else if(isset($pendidikan_saudara)){
        	$data = array('pendidikan_saudara' => $pendidikan_saudara);
        } else if(isset($pekerjaan_saudara)){
        	$data = array('pekerjaan_saudara' => $pekerjaan_saudara);
        } else if(isset($alamat_saudara)){
        	$data = array('alamat_saudara' => $alamat_saudara);
        }

        $update_data = $this->keluarga_model->update_saudara($data,$id);
        echo json_encode($update_data);
	}

	public function delete_keluarga($id){
		$this->keluarga_model->delete_keluarga($id);
		$this->session->set_flashdata('success_delete_data', 'Berhasil menghapus data');
		redirect('pendataan');
	}
}
