<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class post_saran extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();



        #Configure load model api table users
        $this->load->model('m_ambilstatus');
    }

    function index_get()
    {
        $a = $this->db->get('saran')->result();
        $this->response(array("result" => $a, 200));
    }

    function index_post()
    {
        $data = array(
            'nama'          => $this->post('nama'),
            'email'    => $this->post('email'),
            'saran'    => $this->post('saran')
        );
        $insert = $this->db->insert('saran', $data);
        if ($insert) {
            $this->response(array('status' => 'success', 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
