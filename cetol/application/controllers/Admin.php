<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        check_login();

        $this->load->model('Transaksi_model');
    }
    public function index()
    {
        $data['title'] = 'Dashbord';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access change!
          </div>');
    }

    public function laporan()
    {
        $data['title'] = 'Laporan total';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->sudah_diambil()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function feedback()
    {
        $data['title'] = 'FeedBack';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->get_feedback()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/feedback', $data);
        $this->load->view('templates/footer');
    }

    public function list_barang()
    {
        $data['title'] = 'Daftar List Contoh Desain';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->get_list_barang()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/list_barang', $data);
        $this->load->view('templates/footer');
    }

    public function inputbarang()
    {

        $data['title'] = 'Daftar List Contoh Desain';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->sudah_diambil()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/inputbarang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_barang()
    {
        
            $nama_barang = $this->input->post('nama_barang');
            $jenis_barang = $this->input->post('jenis_barang');
            $jenis_kertas = $this->input->post('jenis_kertas');
            $gambar = $_FILES['gambar'];
            $harga_barang = $this->input->post('harga_barang');
            if($gambar=''){}
                else{
                    $config['upload_path'] = './assets/img/barang/';
                    $config['allowed_types']        = 'gif|jpg|png|JPG';

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('gambar')) {
                        echo "ukuran besar"; die();
                    }else{
                        $gambar=$this->upload->data('file_name');
                    }
                }

            $data = array(
             'nama_barang' => $nama_barang,
             'jenis_barang' => $jenis_barang,
             'jenis_kertas' => $jenis_kertas,
             'gambar' =>$gambar,
             'harga_barang' =>$harga_barang
        );
                
        $this->Transaksi_model->tambah_barang($data);
        $this->session->set_flashdata('pesantambah', '<div class="alert alert-success" role="alert">
                Pesanan ditambahkan
              </div>');
        redirect('admin/list_barang');
        
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './assets/img/barang/';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = round(microtime(true) * 1000);

        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
