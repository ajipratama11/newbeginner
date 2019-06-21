package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

public class TampilCek {


    @SerializedName("status")
    String status;
    @SerializedName("id_pesan")
    String id_pesan;
    @SerializedName("nama_pemesan")
    String nama_pemesan;
    @SerializedName("status_proses")
    String status_proses;
    @SerializedName("total_harga")
    String total_harga;
    @SerializedName("jenis_pesanan")
    String jenis_pesanan;
    @SerializedName("jenis_kertas")
    String jenis_kertas;
    @SerializedName("panjang")
    String panjang;
    @SerializedName("lebar")
    String lebar;
    @SerializedName("jumlah")
    String jumlah;
    @SerializedName("harga")
    String harga;
    @SerializedName("tgl_pesan")
    String tgl_pesan;
    @SerializedName("pembayaran")
    String pembayaran;
    @SerializedName("message")
    String message;

    public String getJenis_pesanan() {
        return jenis_pesanan;
    }

    public void setJenis_pesanan(String jenis_pesanan) {
        this.jenis_pesanan = jenis_pesanan;
    }

    public String getJenis_kertas() {
        return jenis_kertas;
    }

    public void setJenis_kertas(String jenis_kertas) {
        this.jenis_kertas = jenis_kertas;
    }

    public String getPanjang() {
        return panjang;
    }

    public void setPanjang(String panjang) {
        this.panjang = panjang;
    }

    public String getLebar() {
        return lebar;
    }

    public void setLebar(String lebar) {
        this.lebar = lebar;
    }

    public String getJumlah() {
        return jumlah;
    }

    public void setJumlah(String jumlah) {
        this.jumlah = jumlah;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }

    public String getTgl_pesan() {
        return tgl_pesan;
    }

    public void setTgl_pesan(String tgl_pesan) {
        this.tgl_pesan = tgl_pesan;
    }

    public String getPembayaran() {
        return pembayaran;
    }

    public void setPembayaran(String pembayaran) {
        this.pembayaran = pembayaran;
    }

    public String getNama_pemesan() {
        return nama_pemesan;
    }

    public void setNama_pemesan(String nama_pemesan) {
        this.nama_pemesan = nama_pemesan;
    }

    public String getTotal_harga() {
        return total_harga;
    }

    public void setTotal_harga(String total_harga) {
        this.total_harga = total_harga;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getId_pesan() {
        return id_pesan;
    }

    public void setId_pesan(String id_pesan) {
        this.id_pesan = id_pesan;
    }

    public String getStatus_proses() {
        return status_proses;
    }

    public void setStatus_proses(String status_proses) {
        this.status_proses = status_proses;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }
}
