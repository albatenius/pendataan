<?php

class Pengguna_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
			$this->load->model('pengguna_model');
			$this->load->library('upload');

		if($this->session->userdata('status')!="login"){
			redirect('login');
		}
	}

	public function index(){
		// $id_user = $this->session->userdata('id_user');
		// $data['user']=$this->m_pengguna->get_pengguna_login($id_userb);

		$data['users']=$this->pengguna_model->get_all_pengguna();
		$data['container'] = "admin/index";
		$this->load->view('layout',$data);
	}

	public function simpan(){
		$config['upload_path']= './assets/image/photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

		if(!empty($_FILES['photoprofile']['name']))
		{
			if($this->upload->do_upload('photoprofile')){
				$photo = $this->upload->data();

				$password = $this->input->post('password');
				$konfirm = $this->input->post('konfirm');

				if ($password <> $konfirm){
					echo $this->session->set_flashdata('msg','error');
					redirect('pengguna');
				}else{

					$data = array(
						'username' => $this->input->post('username'),
						'password' => md5($password),
						'nama' => $this->input->post('nama'),
						'level' => $this->input->post('level'),
						'moto' => '-',
						'jenkel' => $this->input->post('jenkel'),
						'tentang' => '-',
						'email' => $this->input->post('email'),
						'no_hp' => $this->input->post('nohp'),
						'facebook' => '-',
						'twitter' => '-',
						'linkdin' => '-',
						'google_plus' => '-',
						'status' => '1',
						'photo' => $photo['file_name']
					);

					$this->pengguna_model->simpan($data);
					echo $this->session->set_flashdata('msg','success');
					redirect('pengguna');
				}

			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('pengguna');
				// echo $this->upload->display_errors();
			}
		}else{
			$password = $this->input->post('password');
			$konfirm = $this->input->post('konfirm');

			if ($password <> $konfirm){
				echo $this->session->set_flashdata('msg','error');
				redirect('pengguna');
			}else{

				$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($password),
					'nama' => $this->input->post('nama'),
					'level' => $this->input->post('level'),
					'moto' => '-',
					'jenkel' => $this->input->post('jenkel'),
					'tentang' => '-',
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('nohp'),
					'facebook' => '-',
					'twitter' => '-',
					'linkdin' => '-',
					'google_plus' => '-',
					'status' => '1',
					'photo' => '-'
				);

				$this->pengguna_model->simpan($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('pengguna');
			}
		}
	}

	public function update(){
		$config['upload_path']= './assets/image/photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

		if(!empty($_FILES['photoprofile_edit']['name']))
		{
			if($this->upload->do_upload('photoprofile_edit')){
				$photo = $this->upload->data();

				$id = $this->input->post('kode');

				$old_password = $this->input->post('old_password');
				$new_password = $this->input->post('password_edit');
				$new_konfirm = $this->input->post('konfirm_edit');

				if(isset($new_password)){
					$password = $new_password;
					$konfirm = $new_konfirm;
				}else{
					$password = $old_password;
					$konfirm = $new_konfirm;
				}

				if ($password <> $konfirm){
					echo $this->session->set_flashdata('msg_edit','error');
					redirect('pengguna');
				}else{

					$data = array(
						'username' => $this->input->post('username_edit'),
						'password' => md5($password),
						'nama' => $this->input->post('nama_edit'),
						'level' => $this->input->post('level_edit'),
						'moto' => '-',
						'jenkel' => $this->input->post('jenkel_edit'),
						'tentang' => '-',
						'email' => $this->input->post('email_edit'),
						'no_hp' => $this->input->post('nohp_edit'),
						'facebook' => '-',
						'twitter' => '-',
						'linkdin' => '-',
						'google_plus' => '-',
						'status' => '1',
						'photo' => $photo['file_name']
					);

					$this->pengguna_model->update($data, $id);
					echo $this->session->set_flashdata('msg_edit','success');
					redirect('pengguna');
				}

			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('pengguna');
				// echo $this->upload->display_errors();
			}
		}else{
			$id = $this->input->post('kode');

			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('password_edit');
			$new_konfirm = $this->input->post('konfirm_edit');

			if(isset($new_password)){
				$password = $new_password;
				$konfirm = $new_konfirm;
			}else{
				$password = $old_password;
				$konfirm = $new_konfirm;
			}

			if ($password <> $konfirm){
				echo $this->session->set_flashdata('msg_edit','error');
				redirect('pengguna');
			}else{

				$data = array(
					'username' => $this->input->post('username_edit'),
					'password' => md5($password),
					'nama' => $this->input->post('nama_edit'),
					'level' => $this->input->post('level_edit'),
					'moto' => '-',
					'jenkel' => $this->input->post('jenkel_edit'),
					'tentang' => '-',
					'email' => $this->input->post('email_edit'),
					'no_hp' => $this->input->post('nohp_edit'),
					'facebook' => '-',
					'twitter' => '-',
					'linkdin' => '-',
					'google_plus' => '-',
					'status' => '1'
				);

				$this->pengguna_model->update($data, $id);
				echo $this->session->set_flashdata('msg_edit','success');
				redirect('pengguna');
			}
		}
	}

	public function hapus(){
		$kode = $this->input->post('kode_hapus');

		$this->pengguna_model->hapus($kode);
		echo $this->session->set_flashdata('msg_delete','success');
		redirect('pengguna');
	}
	
	public function reset_password($id){
		$get_username = $this->pengguna_model->getusername($id);
		$username = $get_username['username'];

		$pass=rand(123456,999999);
		$this->pengguna_model->resetpass($id, $pass);

		echo $this->session->set_flashdata('msg_reset_pass','show-modal');
		echo $this->session->set_flashdata('uname',$username);
		echo $this->session->set_flashdata('upass',$pass);
		redirect('pengguna');
	}
}