<?php

class Agenda_controller extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
			$this->load->model('agenda_model');

		if($this->session->userdata('status')!="login"){
			redirect('login');
		}
	}

	public function index()
	{
		$data['agenda']=$this->agenda_model->get_all_agenda();
		$data['container'] = "agenda/index";
		$this->load->view('layout',$data);
	}

	public function simpan(){
		$data = array(
			'nama_agenda' => $this->input->post('agenda'),
			'deskripsi' => $this->input->post('deskripsi'),
			'mulai' => $this->input->post('mulai'),
			'selesai' => $this->input->post('selesai'),
			'tempat' => $this->input->post('tempat'),
			'waktu' => $this->input->post('waktu'),
			'keterangan' => $this->input->post('keterangan'),
		);

		$this->agenda_model->simpan($data);
		echo $this->session->set_flashdata('msg','success');
		redirect('agenda');
	}

	public function update(){
		$id = $this->input->post('kode_edit');

		$data = array(
			'nama_agenda' => $this->input->post('agenda_edit'),
			'deskripsi' => $this->input->post('deskripsi_edit'),
			'mulai' => $this->input->post('mulai_edit'),
			'selesai' => $this->input->post('selesai_edit'),
			'tempat' => $this->input->post('tempat_edit'),
			'waktu' => $this->input->post('waktu_edit'),
			'keterangan' => $this->input->post('keterangan_edit'),
		);

		$this->agenda_model->update($data,$id);
		echo $this->session->set_flashdata('msg_edit','success');
		redirect('agenda');
	}

	public function hapus(){
		$id = $this->input->post('kode_hapus');

		$this->agenda_model->hapus($id);
		echo $this->session->set_flashdata('msg_delete','success');
		redirect('agenda');
	}
}