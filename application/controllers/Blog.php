<?php

class Blog extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = "NIM Kalian";
		$data['content'] = "Isi data Selamat Datang di Halaman NIM dan Nama Kalian";
		$this->load->view('blog_view',$data);
	}
}