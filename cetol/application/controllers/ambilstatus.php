<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class ambilstatus extends REST_Controller
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
		$a = $this->db->get('pesanan')->result();
		$this->response(array("result" => $a, 200));
	}

	function index_post()
	{
		$id_pesan = $this->input->post('id_pesan');
		$cek = $this->m_ambilstatus->get_pesan_by_id($id_pesan);
		if ($cek) {
			$output['id_pesan'] = $cek['id_pesan'];
			$output['status_proses'] = $cek['status_proses'];
			$output['total_harga'] = $cek['total_harga'];
			$this->response($output, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
