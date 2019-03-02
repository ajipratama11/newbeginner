<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('admin/menu_model');
	}
	
	// fungsi 
	public function index() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$data=array('title' =>'Data menu',
					'menus' => $qmenu,
					);
		$this->template->load('template','admin/menu/menu_view',$data);
	}
	
	// fungsi tambah menu di sini
	public function tambah() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('menu_nama', 'menu_nama', 'required');
		$this->form_validation->set_rules('menu_uri', 'menu_uri', 'required');
		$this->form_validation->set_rules('menu_allowed', 'menu_allowed', 'required');
		if ($this->form_validation->run() === FALSE) {
			$data=array('title'=>'Formulir Tambah Menu',
						'hak_akses' => $this->menu_model->data_hak_akses(),
						'menus' 	=> $qmenu,
					);
			$this->template->load('template','admin/menu/menu_tambah',$data);
		}else{
			$data = array(
						'menu_nama' 	=> $this->input->post('menu_nama'),
						'menu_uri'		=> $this->input->post('menu_uri'),
						'menu_allowed'	=> $this->input->post('menu_allowed')
					);
			$this->menu_model->tambah($data);
			redirect(site_url().'/admin/menu/');
		}
	}
	
	// Menampilkan halaman edit
	public function edit($id) {	
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('menu_nama', 'menu_nama', 'required');
		$this->form_validation->set_rules('menu_uri', 'menu_uri', 'required');
		$this->form_validation->set_rules('menu_allowed', 'menu_allowed', 'required');
		if ($this->form_validation->run() === FALSE) {
			$data=array('title'		=> 'Formulir Ubah Menu: ',
						'detail' 	=> $this->menu_model->detail_menu($id),
						'hak_akses' => $this->menu_model->data_hak_akses(),
						'isi'  		=>'admin/menu/menu_edit',
						'menus' 	=> $qmenu,
					);
			$this->template->load('template','admin/menu/menu_edit',$data);
			// Kalau tidak ada error berita diupdate
		}else{
			$data = array(
					'menu_id'	=> $this->input->post('menu_id'),
					'menu_nama'	=> $this->input->post('menu_nama'),
					'menu_uri' => $this->input->post('menu_uri'),
					'menu_allowed'	=> $this->input->post('menu_allowed')
			);
			$this->menu_model->edit_menu($data);
			redirect(site_url().'/admin/menu/');
		}
	}
	
	// Menghapus berita
	public function delete($id) {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$this->menu_model->delete_menu($id);
		redirect(site_url().'/admin/menu/');
	}
}
?>
