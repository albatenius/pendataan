<?php

class Kategori_controller extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
			$this->load->model('kategori_model');

		if($this->session->userdata('status')!="login"){
			redirect('login');
		}
	}

	public function index()
	{
		$data['kategori']=$this->kategori_model->get_all_kategori();
		$data['container'] = "kategori/index";
		$this->load->view('layout',$data);
	}

	public function simpan(){
		$data = array('kategori_nama' => $this->input->post('kategori'));

		$this->kategori_model->simpan($data);
		echo $this->session->set_flashdata('msg','success');
		redirect('berita/kategori');
	}

	public function update(){
		$id = $this->input->post('kode_edit');
		$data = array('kategori_nama' => $this->input->post('kategori_edit'));

		$this->kategori_model->update($data, $id);
		echo $this->session->set_flashdata('msg_edit','success');
		redirect('berita/kategori');
	}

	public function hapus(){
		$id = $this->input->post('kode_hapus');

		$this->kategori_model->hapus($id);
		echo $this->session->set_flashdata('msg_delete','success');
		redirect('berita/kategori');
	}
}