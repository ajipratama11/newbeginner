<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_model
{

    public $id  = 'id_pesan';
    public $tgl = 'tgl_pesan';
    public $jumlah = 'jumlah';
    public $tabel = 'pesanan';

    function __construct()
    {
        parent::__construct();
    }
    function get_pesanan()
    {
        $this->db->where("status_proses", 'Pesanan belum diproses');
        $this->db->order_by($this->tgl, $this->jumlah);
        return  $this->db->get('pesanan');
    }

    function get_proses_desain()
    {
        $this->db->where("status_proses", 'Proses Tahap Desain Atau Perbaikan Gambar');
        $this->db->order_by($this->tgl, $this->jumlah);
        return  $this->db->get('pesanan');
    }


    function get_proses_cetak()
    {
        $this->db->where("status_proses", 'Proses Cetak');
        $this->db->order_by($this->tgl, $this->jumlah);
        return  $this->db->get('pesanan');
    }

    function get_kasir()
    {
        $this->db->where("status_proses", 'Proses Selesai, Harap diambil');
        $this->db->order_by($this->tgl, $this->jumlah);
        return  $this->db->get('pesanan');
    }
    function sudah_diambil()
    {
        $this->db->where("status_proses", 'Telah diambil');
        $this->db->order_by($this->tgl, $this->jumlah);
        return  $this->db->get('pesanan');
    }

    function confirm($data, $id)
    {
        $transaksi = $this->db->select("*")->from($this->tabel)->where("id_pesan", $id)->get()->row();
        $this->db->query("Update pesanan set status_proses='" . $data . "' where id_pesan='" . $id . "'", FALSE);
        $this->db->where("id_pesan", $id);
        $this->db->update($this->tabel, $data);
        return $transaksi->id_pesan;
    }

    function tambah_data($data)
    {
        $this->db->insert('pesanan', $data);
    }
    function tambah_barang($data)
    {
        $this->db->insert('list_barang', $data);
    }

    function get_list_barang()
    {
       return $this->db->get('list_barang');
    }

    function get_feedback()
    {
        return  $this->db->get('saran');
    }
}

