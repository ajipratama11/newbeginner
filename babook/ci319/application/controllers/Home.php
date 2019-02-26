<?php  defined('BASEPATH') OR exit('No direct script access allowed');
// ***  By Yogiswara 
// ***  Praktek Web JTI Polije

class Home extends CI_Controller {

	public function index()
	{
		// mengecek user udah login belum. fungsi ini ada di folder "application/library/auth
		if($this->auth->is_logged_in() == false)
	   	{
			$this->login();
	   	}
		else
		{
				// load model 'usermodel'
				$this->load->model('admin/users_model');
				// ambil menu dari database sesuai dengan level
				$level = $this->session->userdata('level');
				$qmenu = $this->users_model->get_menu_for_level($level);
				// membuat array multidimensi yang akan dikirim ke view ;
				$data=array('title'=>'Manajemen',
							'menus' => $qmenu
							);
				// instruksi pengiriman data ke folder "view/admin/blank.php"
				$this->template->load('template','admin/blank',$data);
		}
	}

	public function login()
	{
		// mengecek data pada form login sudah betul
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters(' <span style="color:#FF0000">', '</span>');
  
		// jika masih salah tampilkan view/admin/login.php 
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/login'); 
		}
		else
		// jika betul verifikasi user password dari database
		{
		  $username = $this->input->post('username');
		  $password = $this->input->post('password');
		  $success = $this->auth->do_login($username,$password,'',false);
		  if($success)
		  {
			 // jika user pass benar redirect ke halaman index 
			redirect('home');
		  }
		  else
		  {
			// jika masih salah tampilkan halaman login 
			$this->load->view('admin/login');
		  }
	   }
	}

	function logout()
	{
	if($this->auth->is_logged_in() == true)
		{
			// jika dia memang sudah login, destroy session
			$this->auth->do_logout();
		}
		// larikan ke halaman utama
		redirect('home');
		
	}


}

