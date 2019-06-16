<?php

class Berita_controller extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
			$this->load->model('kategori_model');
			$this->load->model('berita_model');
			$this->load->library('upload');

		if($this->session->userdata('status')!="login"){
			redirect('login');
		}
	}

	public function index()
	{
		$data['posts']=$this->berita_model->get_all_post();
		$data['container'] = "berita/index";
		$this->load->view('layout',$data);
	}

	public function tulis(){
		$data['kategori'] = $this->kategori_model->get_all_kategori();
		$data['container'] = "berita/tulis";
		$this->load->view('layout',$data);
	}

	public function simpan(){
		$config['upload_path']= './assets/image/photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if(!empty($_FILES['filefoto']['name']))
		{
			if($this->upload->do_upload('filefoto')){
				$photo = $this->upload->data();

				$data = array(
					'tulisan_judul' => $this->input->post('judul'),
					'tulisan_isi' => $this->input->post('isi'),
					'tulisan_kategori_id' => $this->input->post('kategori'),
					'tulisan_views' => 0,
					'tulisan_gambar' => $photo['file_name'],
					'id_user' => $this->session->userdata('id_user'),
					'tulisan_img_slider' => 0,
					'tulisan_slug' => '-',
					'tulisan_rating' => 0
				);

				$this->berita_model->simpan($data);
				echo $this->session->set_flashdata('msg','success');
				redirect('berita');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('berita');
				// echo $this->upload->display_errors();
			}
		}else{
			$data = array(
				'tulisan_judul' => $this->input->post('judul'),
				'tulisan_isi' => $this->input->post('isi'),
				'tulisan_kategori_id' => $this->input->post('kategori'),
				'tulisan_views' => 0,
				'tulisan_gambar' => '-',
				'id_user' => $this->session->userdata('id_user'),
				'tulisan_img_slider' => 0,
				'tulisan_slug' => '-',
				'tulisan_rating' => 0
			);

			$this->berita_model->simpan($data);
			echo $this->session->set_flashdata('msg','success');
			redirect('berita');
		}
	}

	public function edit($id){
		$data['edit'] = $this->berita_model->get_data_edit($id);
		$data['kategori'] = $this->kategori_model->get_all_kategori();
		$data['container'] = "berita/edit";
		$this->load->view('layout',$data);
	}

	public function update(){
		$config['upload_path']= './assets/image/photo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $id = $this->input->post('kode_edit');

        if(!empty($_FILES['filefoto']['name']))
		{
			if($this->upload->do_upload('filefoto')){
				$photo = $this->upload->data();

				$data = array(
					'tulisan_judul' => $this->input->post('judul'),
					'tulisan_isi' => $this->input->post('isi'),
					'tulisan_kategori_id' => $this->input->post('kategori'),
					'tulisan_views' => 0,
					'tulisan_gambar' => $photo['file_name'],
					'id_user' => $this->session->userdata('id_user'),
					'tulisan_img_slider' => 0,
					'tulisan_slug' => '-',
					'tulisan_rating' => 0
				);

				$this->berita_model->update($data, $id);
				echo $this->session->set_flashdata('msg_edit','success');
				redirect('berita');
			}else{
				echo $this->session->set_flashdata('msg_edit','warning');
				redirect('berita');
				// echo $this->upload->display_errors();
			}
		}else{
			$data = array(
				'tulisan_judul' => $this->input->post('judul'),
				'tulisan_isi' => $this->input->post('isi'),
				'tulisan_kategori_id' => $this->input->post('kategori'),
				'tulisan_views' => 0,
				'id_user' => $this->session->userdata('id_user'),
				'tulisan_img_slider' => 0,
				'tulisan_slug' => '-',
				'tulisan_rating' => 0
			);

			$this->berita_model->update($data, $id);
			echo $this->session->set_flashdata('msg_edit','success');
			redirect('berita');
		}
	}

	public function hapus(){
		$id = $this->input->post('kode_hapus');

		$this->berita_model->hapus($id);
		echo $this->session->set_flashdata('msg_delete','success');
		redirect('berita');
	}
}