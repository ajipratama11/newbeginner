<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');

		// $coba = [
             //   'name' => $name,
            //    'email' => $email,
             //   'subject' => $subject,
             //   'pesan' => $pesan
                
          //  ];

           // $this->db->insert('user', $data);
           // $this->db->insert('contact', $coba);
          //  $this->_kirimEmail($coba, 'verify');
          
	}

	 public function tambah_pesanan(){
        $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'subject' => $this->input->post('subject'),
        'pesan' => $this->input->post('pesan'),
        
    
    ];
        
        $this->db->insert('contact', $data);
            $this->_kirimEmail($data);
            redirect('Contact');	
    }

	private function _kirimEmail($data)
    {


        $this->load->library('email');
        $this->email->from('projekakhir82@gmail.com', 'aprat');
        $this->email->to($this->input->post('email'));
        $this->email->subject($this->input->post('subject'));
        $this->email->message($this->input->post('pesan'));
        

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */