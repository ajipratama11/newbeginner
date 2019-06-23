package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

import java.util.List;

public class ListHarga {


    @SerializedName("status")
    String status;
    @SerializedName("nama_barang")
    String nama_barang;
    @SerializedName("jenis_barang")
    String jenis_barang;
    @SerializedName("jenis_kertas")
    String jenis_kertas;
    @SerializedName("harga_barang")
    String harga_barang;
    @SerializedName("gambar")
    String gambar;
    @SerializedName("message")
    String message;


    public ListHarga(String nama_barang, String jenis_barang, String jenis_kertas, String harga_barang, String gambar) {
        this.nama_barang = nama_barang;
        this.jenis_barang = jenis_barang;
        this.jenis_kertas = jenis_kertas;
        this.harga_barang = harga_barang;
        this.gambar = gambar;
    }

    public String getNama_barang() {
        return nama_barang;
    }

    public void setNama_barang(String nama_barang) {
        this.nama_barang = nama_barang;
    }

    public String getJenis_barang() {
        return jenis_barang;
    }

    public void setJenis_barang(String jenis_barang) {
        this.jenis_barang = jenis_barang;
    }

    public String getJenis_kertas() {
        return jenis_kertas;
    }

    public void setJenis_kertas(String jenis_kertas) {
        this.jenis_kertas = jenis_kertas;
    }

    public String getHarga_barang() {
        return harga_barang;
    }

    public void setHarga_barang(String harga_barang) {
        this.harga_barang = harga_barang;
    }

    public String getGambar() {
        return gambar;
    }

    public void setGambar(String gambar) {
        this.gambar = gambar;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }



    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

}

