<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Transaksi_model');
    }
    public function index()
    {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path']          = './assets/img/profile/';
                $config['allowed_types']        = 'gif|jpg|png|JPG';
                $config['max_size']             = '9048';

                $this->load->library('upload', $config);


                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . '/assets/img/profile/' . $old_image);
                    }
                    
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Update Success
                  </div>');
            redirect('user');
        }
    }
    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Old Password Wrong!
                  </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password not change!
                  </div>');
                    redirect('user/changepassword');
                } else {

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed
                  </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }


    // public function penerimapesan()
    // {
    //     $data['title'] = 'Pesanan masuk';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['transaksi'] = $this->Transaksi_model->get_pesanan()->result();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/penerimapesan', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function desainer()
    // {
    //     $data['title'] = 'Pembuatan Desain';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['transaksi'] = $this->Transaksi_model->get_proses_desain()->result();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/desainer', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function pencetak()
    // {
    //     $data['title'] = 'Tahap cetak';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['transaksi'] = $this->Transaksi_model->get_proses_cetak()->result();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/pencetak', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function kasir()
    // {
    //     $data['title'] = 'Pesanan selesai';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['transaksi'] = $this->Transaksi_model->get_kasir()->result();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/kasir', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function input_pesanan()
    // {
    //     $data['title'] = 'Input Pesanan';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('user/inputpesanan', $data);
    //     $this->load->view('templates/footer');
    // }


    // public function confirm_pesan($id)
    // {
    //     $data["status_proses"] = 'Proses Tahap Desain Atau Perbaikan Gambar';
    //     $this->Transaksi_model->confirm($data, $id);
    //     redirect('user/penerimapesan');
    // }

    // public function confirm_langsung_desainer($id)
    // {
    //     $data["status_proses"] = 'Proses Cetak';
    //     $this->Transaksi_model->confirm($data, $id);
    //     redirect('user/penerimapesan');
    // }

    // public function confirm_desainer($id)
    // {
    //     $data["status_proses"] = 'Proses Cetak';
    //     $this->Transaksi_model->confirm($data, $id);
    //     redirect('user/desainer');
    // }

    // public function confirm_cetak($id)
    // {
    //     $data["status_proses"] = 'Proses Selesai, Harap diambil';
    //     $this->Transaksi_model->confirm($data, $id);
    //     redirect('user/pencetak');
    // }

    // public function sudah_diambil($id)
    // {
    //     $data["status_proses"] = 'Telah diambil';
    //     $this->Transaksi_model->confirm($data, $id);
    //     redirect('user/kasir');
    // }

    // public function tambah_pesanan(){
    //     $data = [
    //     'nama_pemesan' => $this->input->post('nama_pemesan'),
    //     'jenis_pesanan' => $this->input->post('jenis_pesanan'),
    //     'nama_file' => $this->input->post('nama_file'),
    //     'jenis_kertas' => $this->input->post('jenis_kertas'),
    //     'panjang' => $this->input->post('panjang'),
    //     'lebar' => $this->input->post('lebar'),
    //     'jumlah' => $this->input->post('jumlah'),
    //     'harga' => $this->input->post('harga'),
    //     'tgl_pesan' => $this->input->post('tgl_pesan'),
    //     'total_harga' => $this->input->post('total_harga'),
    //     'pembayaran' => $this->input->post('pembayaran'),
    //     'status_proses' => 'Pesanan belum diproses'

    // ];

    //     $this->Transaksi_model->tambah_data($data);
    //     $this->session->set_flashdata('pesantambah', '<div class="alert alert-success" role="alert">
    //             Pesanan ditambahkan
    //           </div>');
    //     redirect('user/penerimapesan');
    // }
}
