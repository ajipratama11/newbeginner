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
			$output['nama_pemesan'] = $cek['nama_pemesan'];
			$output['total_harga'] = $cek['total_harga'];
			$output['status_proses'] = $cek['status_proses'];
			$output['jenis_pesanan'] = $cek['jenis_pesanan'];
			$output['jenis_kertas'] = $cek['jenis_kertas'];
			$output['panjang'] = $cek['panjang'];
			$output['lebar'] = $cek['lebar'];
			$output['jumlah'] = $cek['jumlah'];
			$output['harga'] = $cek['harga'];
			$output['tgl_pesan'] = $cek['tgl_pesan'];
			$output['pembayaran'] = $cek['pembayaran'];


			$this->response($output, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
