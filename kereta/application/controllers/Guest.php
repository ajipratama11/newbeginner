<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

    public function landing()
    {
        $this->load->view('templates/header');
        $this->load->view('guest/landing');
        $this->load->view('templates/footer');
    }
}
