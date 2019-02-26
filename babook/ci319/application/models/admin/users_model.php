<?php
class Users_model extends CI_Model {
	public function __construct()	{
		$this->load->database();
	}

	// Menampilkand data users
	public function menu_user() {
		$query = $this->db->query('SELECT * from menu INNER JOIN hak_akses ON users.hak_akses_user = hak_akses.hak_akses_id');
		return $query->result_array();
	}



	// Menampilkand data users
	public function daftar_users() {
		$query = $this->db->query('SELECT * from users INNER JOIN hak_akses ON users.hak_akses_user = hak_akses.hak_akses_id');
		return $query->result_array();
	}
	
	// Model untuk menambah users
	public function tambah($data) {
		return $this->db->insert('users', $data);
	}

	// Model untuk list data tabel hak akses
	public function data_hak_akses() {
		$query = $this->db->get('hak_akses');
		return $query->result_array();
	}

	// Detail users
	public function detail_users($id = FALSE) {
		if ($id === FALSE)	{
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('id_user' => $id));
		return $query->row_array();
	}
	
	// Update users
	public function edit_users($data) {
		$this->db->where('id_user', $data['id_user']);
		return $this->db->update('users', $data);
	}
	
	// Hapus users
	public function delete_users($id) {
		$this->db->where('id_user',$id);
		return $this->db->delete('users');
	}

	public function get_menu_for_level($user_level)
	{
		$query = $this->db->query("SELECT * from menu where menu_allowed like '%$user_level%'" );
		return $query->result_array();
	}


	function get_array_menu($id)
	{
		$this->db->select('menu_allowed');
		$this->db->from('menu');
		$this->db->where('menu_id',$id);
		$data = $this->db->get();
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$level = $row->menu_allowed;
			$arr = explode('+',$level);
			return $arr;
		}
		else
		{
			die();
		}
	}

}
?>