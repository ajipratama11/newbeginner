<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth{
   var $CI = NULL;
   function __construct()
   {
      // get CI's object
      $this->CI =& get_instance();
   }
   // untuk validasi login
   function do_login($username,$password)
   {
      // cek di database, ada ga?
      $this->CI->db->from('users');
      $this->CI->db->where('username',$username);
      $this->CI->db->where('password',$password);
      $result = $this->CI->db->get();
      if($result->num_rows() == 0) 
      {
         // username dan password tsb tidak ada 
         return false;
      }
      else 
      {
         // ada, maka ambil informasi dari database
         $userdata = $result->row();
         $session_data = array(
            'user_id'    => $userdata->id_user,
            'nama'       => $userdata->nama,
            'level'      => $userdata->hak_akses_user,
         );
         // buat session
         $this->CI->session->set_userdata($session_data);
         return true;
      }
   }
   // untuk mengecek apakah user sudah login/belum
   function is_logged_in()
   {
      if($this->CI->session->userdata('user_id') == '')
      {
         return false;
      }
      return true;
   }
   // untuk validasi di setiap halaman yang mengharuskan authentikasi
   function restrict()
   {
      if($this->is_logged_in() == false)
      {
         redirect('home');
      }
   }

   // untuk logout  
    function do_logout()
    {
        $this->CI->session->sess_destroy(); 
    }

    function cek_menu($idmenu)
    {
        $this->CI->load->model('/admin/users_model');
        $status_user = $this->CI->session->userdata('level');
        $allowed_level = $this->CI->users_model->get_array_menu($idmenu);
        if(in_array($status_user,$allowed_level) == false)
        {
            die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
        }
    }
}