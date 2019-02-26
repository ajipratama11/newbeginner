<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/berita_model');
	}
	
	public function index() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$query = $this->berita_model->daftar_berita();
		$data=array('title'=>'Data Berita',
					'berita' => $query,
					'menus' => $qmenu,
					);
 		$this->template->load('template','admin/berita/berita_view',$data);
	}
	
	// tambah berita 
	public function tambah() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('isi', 'Isi berita', 'required');
		if ($this->form_validation->run() === FALSE) {
			$data=array('title'=>'Menambah Berita - Java Web Media',
						'isi'  =>'admin/berita/tambah_berita',					
						'menus' => $qmenu
					);
			$this->load->library('CKEditor');
			$this->load->library('CKFinder');
			$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');  
			$this->template->load('template','admin/berita/tambah_berita',$data);
		}else{
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$data = array(
						'judul' 	=> $this->input->post('judul'),
						'slug'		=> $slug,
						'ringkasan'	=> $this->input->post('ringkasan'),
						'isi' 		=> $this->input->post('isi'),
						'status_berita'	=> $this->input->post('status_berita'),
						'id_user'	=> $this->input->post('id_user'),
					);
			$this->berita_model->tambah($data);
			redirect(site_url().'/admin/berita/');
		}
	}
	
	// Menampilkan halaman edit
	public function edit($id) {	
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('isi', 'Isi berita', 'required');
		if ($this->form_validation->run() === FALSE) {
			$data['berita'] = $this->berita_model->detail_berita();
			$data['detail']	= $this->berita_model->detail_berita($id);
			$data=array('title'		=> 'Mengubah berita: '.$data['detail']['judul'],
						'berita'	=> $this->berita_model->detail_berita(),
						'detail' 	=> $this->berita_model->detail_berita($id),
						'ringkasan_data' => $data['detail']['ringkasan'],
						'isi_data' => $data['detail']['isi'],
						'menus' => $qmenu
					);
			$this->load->view('admin/template/head');
			$this->load->view('admin/template/top');
			$this->load->view('admin/template/side',$data);		
			$this->load->library('CKEditor');
			$this->load->library('CKFinder');
			//Add Ckfinder to Ckeditor
			$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');  
			$this->load->view('admin/berita/edit_berita',$data);
			$this->load->view('admin/template/foot');
			$this->load->view('admin/template/js');
		// Kalau tidak ada error berita diupdate
		}else{
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$data = array(
					'id_berita'	=> $id,
					'judul' 	=> $this->input->post('judul'),
					'slug'		=> $slug,
					'ringkasan'	=> $this->input->post('ringkasan'),
					'isi' 		=> $this->input->post('isi'),
					'status_berita'	=> $this->input->post('status_berita'),
					'id_user'	=> $this->input->post('id_user')
				);
			$this->berita_model->edit_berita($data); 
			redirect(site_url().'/admin/berita/');
		}
	}
	// Menghapus berita
	public function delete($id) {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$this->berita_model->delete_berita($id);
		redirect(site_url().'/admin/berita/');
	}
}