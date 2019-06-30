<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class listbarang extends REST_Controller
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
        $a = $this->db->get('list_barang')->result();
        $this->response(array("result" => $a, 200));
    }
}
