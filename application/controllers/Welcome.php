<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
			$this->load->model("keluarga_model");
				$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('status')=="login"){
			$data['data_count'] = $this->keluarga_model->count_data();
			$data['container'] = 'dashboard';
			$this->load->view('layout', $data);
		}else{
			redirect('login');
		}
	}
}
