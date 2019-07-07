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
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'jenis_kertas' => $this->input->post('jenis_kertas'),
            'gambar' => $this->_uploadImage(),
            'harga_barang' => $this->input->post('harga_barang')
        ];


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
        $config['file_name']            = $_FILES['gambar']['name'];

        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function update($id)
    {
        $row = $this->M_mobil_admin->get_by_id($id);

        if ($row) {
            $data = array(
                'id_barang' => set_value('ID_MOBIL', $row->ID_MOBIL),
                'nama_barang' => set_value('NAMA_MOBIL', $row->NAMA_MOBIL),
                'jenis_kertas' => set_value('MERK_MOBIL', $row->MERK_MOBIL),
                'harga_barang' => set_value('DESKRIPSI_MOBIL', $row->DESKRIPSI_MOBIL),
                'TAHUN_MOBIL' => set_value('TAHUN_MOBIL', $row->TAHUN_MOBIL),
                'KAPASITAS_MOBIL' => set_value('KAPASITAS_MOBIL', $row->KAPASITAS_MOBIL),
                'HARGA_MOBIL' => set_value('HARGA_MOBIL', $row->HARGA_MOBIL),
                'WARNA_MOBIL' => set_value('WARNA_MOBIL', $row->WARNA_MOBIL),
                'BENSIN_MOBIL' => set_value('BENSIN_MOBIL', $row->BENSIN_MOBIL),
                'PLAT_NO_MOBIL' => set_value('PLAT_NO_MOBIL', $row->PLAT_NO_MOBIL),
                'STATUS_SEWA' => set_value('STATUS_SEWA', $row->STATUS_SEWA),
                'STATUS_MOBIL' => set_value('STATUS_MOBIL', $row->STATUS_MOBIL),
                'CREATED_MOBIL' => set_value('CREATED_MOBIL', $row->CREATED_MOBIL),
            );

            $data['fasilitas'] = $this->M_fasilitas_admin->get_all();
            $fasilitas_mobil = $this->M_fasilitas_mobil_admin->get_by_id($id);
            foreach ($data['fasilitas'] as $var) {
                $data['fasilitas_mobil'][$var->ID_FASILITAS] = "";
            }

            foreach ($fasilitas_mobil as $var) {
                $data['fasilitas_mobil'][$var->ID_FASILITAS] = "checked";
            }


            $this->load->view('template/header');
            $this->load->view('mobil/tb_mobil_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('mobil'));
        }
    }

    public function delete($id_barang)
    {

        if ($id_barang) {
            $this->Transaksi_model->delete($id_barang);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect('admin/list_barang');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('admin/list_barang');
        }
    }
}
