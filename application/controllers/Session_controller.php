<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_controller extends CI_Controller {
	public function __construct() {
        parent::__construct();
            $this->load->model("user_model");
            	$this->load->helper('url');
    }

    public function index()
	{
		if($this->session->userdata('status')==""){
			$this->load->view('login/index');
		}else{
			redirect('/');
		}
	}
 
	function login_action(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$cek = $this->user_model->cek_login("user",$where)->num_rows();
		$user = $this->user_model->cek_login("user",$where)->row();
		if($cek > 0){
 
			$data_session = array(
				'id_user' => $user->id_user,
				'nama' => $user->nama,
				'status' => "login",
				'user_type' => $user->level,
				'user_photo' => $user->photo
				);
 
			$this->session->set_userdata($data_session);
			// $this->session->set_flashdata('success_login', 'Berhasil Login');
			// redirect(base_url());
			$result['status'] = "success";
			echo json_encode($result);
		}else{
			// $this->session->set_flashdata('success_login_failed', 'Gagal Login');
			// redirect('login');
			$result['status'] = "fail";
			echo json_encode($result);
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
