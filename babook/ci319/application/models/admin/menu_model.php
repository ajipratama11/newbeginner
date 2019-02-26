<?php
class Menu_model extends CI_Model {
	public function __construct()	{
		$this->load->database();
	}

	// Menampilkan data menu
	public function daftar_menu() {
		$query = $this->db->get('menu');
		//$query = $this->db->query('SELECT * from menu INNER JOIN hak_akses ON users.hak_akses_user = hak_akses.hak_akses_id');
		return $query->result_array();
	}

	// Model untuk list data tabel hak akses
	public function data_hak_akses() {
		$query = $this->db->get('hak_akses');
		return $query->result_array();
	}

	// Model untuk menambah menu
	public function tambah($data) {
		return $this->db->insert('menu', $data);
	}

	// Detail menu
	public function detail_menu($id = FALSE) {
		if ($id === FALSE)	{
			$query = $this->db->get('menu');
			return $query->result_array();
		}
		$query = $this->db->get_where('menu', array('menu_id' => $id));
		return $query->row_array();
	}
	
	// Update menu
	public function edit_menu($data) {
		$this->db->where('menu_id', $data['menu_id']);
		return $this->db->update('menu', $data);
	}
	
	// Hapus menu
	public function delete_menu($id) {
		$this->db->where('menu_id',$id);
		return $this->db->delete('menu');
	}

	Public function getmenus() {
        $this->load->model('admin/users_model');
        $level = $this->session->userdata('level');
		$query = $this->users_model->get_menu_for_level($level);
		return $query->result_array();
    }


}
?>