<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_list_barang extends CI_Model
{
    private $_table = "list_barang";

    public $nama_barang;
    public $jenis_barang;
    public $jenis_kertas;
    public $gambar = "default.jpg";
    public $harga_barang;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'numeric'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama_barang = $post["id"];
        $this->jenis_barang = $post["jenis_barang"];
        $this->jenis_kertas = $post["jenis_kertas"];
       
        if (!empty($_FILES["gambar"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->harga_barang = $post["harga_barang"];
        $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
        }
    }
}
