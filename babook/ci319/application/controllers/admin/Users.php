<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->model('/admin/users_model');
	}
	
	public function index() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$query = $this->users_model->daftar_users();
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);
		$data=array('title'=>'Data Pengguna',
					'users' => $query,
					'menus' => $qmenu
				);
		$this->template->load('template','admin/users/users_view',$data);
	}

	// Controler tambah user di sini 
	public function tambah() {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data=array('title'=>'Formulir Tambah Pengguna',
						'hak_akses' => $this->users_model->data_hak_akses(),
						'menus' => $qmenu
						);
			$this->template->load('template','admin/users/tambah_users',$data);
		}else{
			$data = array(
						'nama' 	=> $this->input->post('nama'),
						'email'		=> $this->input->post('email'),
						'username'	=> $this->input->post('username'),
						'password' 	=> $this->input->post('password'),
						'hak_akses_user' => $this->input->post('hak_akses_user')
					);
			$this->users_model->tambah($data);
			redirect(site_url().'/admin/users/');
		}
	}
	
	// Menampilkan halaman edit
	public function edit($id) {	
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$level = $this->session->userdata('level');
		$qmenu = $this->users_model->get_menu_for_level($level);

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() === FALSE) {
		$data=array('title'		=> 'Formulir Ubah Pengguna',
					'detail' 	=> $this->users_model->detail_users($id),
					'hak_akses' => $this->users_model->data_hak_akses(),
					'menus' => $qmenu
				);
		$this->template->load('template','admin/users/edit_users',$data);

		// Kalau tidak ada error berita diupdate
		}else{
			$data = array(
					'id_user' => $this->input->post('id_user'),
					'nama'	=> $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'username'	=> $this->input->post('username'),
					'password'	=> $this->input->post('password'),
					'hak_akses_user'=> $this->input->post('hak_akses_user')
			);
			$this->users_model->edit_users($data); 
			redirect(site_url().'/admin/users/');
		}
	}
	
	// Menghapus berita
	public function delete($id) {
		$this->auth->restrict();
		$this->auth->cek_menu(1);
		$this->users_model->delete_users($id);
		redirect(site_url().'/admin/users/');
	}
}
?>
