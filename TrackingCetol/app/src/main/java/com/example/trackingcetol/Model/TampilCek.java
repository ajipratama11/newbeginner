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
    @SerializedName("message")
    String message;


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
