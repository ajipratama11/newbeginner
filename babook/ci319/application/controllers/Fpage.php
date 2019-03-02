<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fpage extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/berita_model');
	}
	
	public function index() { 
		$data=array('title'		=>'Tutorial Code Igniter',
					'berita'	=> $this->berita_model->data_berita(),
					'isi'  		=>'home/index_home'
						);
		//$this->load->view('layout/wrapper',$data);	
		$this->template->load('frontpage','home/index_home',$data);
	}
	
	// Read berita
	public function read($read) {
		$data['berita'] = $this->berita_model->data_berita();
		$data['detail']	= $this->berita_model->data_berita($read);
		$data=array('title'		=>$data['detail']['judul'],
					'berita'	=> $this->berita_model->data_berita(),
					'detail' 	=> $this->berita_model->data_berita($read),
					'isi'  		=>'/home/read_view'
						);
		//$this->load->view('layout/wrapper',$data);	 
		$this->template->load('frontpage','home/read_view',$data);
		 
	}
	public function kontak() {
		$this->template->load('frontpage','home/kontak_view');
	}
	public function About() {
		$this->template->load('frontpage','home/about_view');
	}
	public function login() {
		//$this->template->load('template','admin/login');
		$this->load->view('admin/login'); 

	}


}