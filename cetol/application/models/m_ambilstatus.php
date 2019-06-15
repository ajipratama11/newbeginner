<?php  

/**
* 
*/
class m_ambilstatus extends CI_Model
{
	
	private $table_name = "pesanan";

	function get_pesanan_by_id($id){
		$this->db->where('id_pesan',$id);


		return $this->db->get($this->table_name)->row();
	}
}
