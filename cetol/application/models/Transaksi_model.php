<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_model
{

    public $id  = 'id_pesan';
    public $jumlah = 'jumlah';

    function __construct()
    {
        parent::__construct();
    }
    function get_pesanan()
    {
        $this->db->where("status", 1);
        $this->db->order_by($this->id, $this->jumlah);
        return  $this->db->get('pesanan');
    }

    function get_proses_desain()
    {
        $this->db->where("status", 2);
        $this->db->order_by($this->id, $this->jumlah);
        return  $this->db->get('pesanan');
    }


    function get_proses_cetak()
    {
        $this->db->where("status", 3);
        $this->db->order_by($this->id, $this->jumlah);
        return  $this->db->get('pesanan');
    }

    function get_kasir()
    {
        $this->db->where("status", 4);
        $this->db->order_by($this->id, $this->jumlah);
        return  $this->db->get('pesanan');
    }
}
