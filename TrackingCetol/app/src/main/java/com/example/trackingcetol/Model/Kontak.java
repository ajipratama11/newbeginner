package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

/**
 * Created by root on 2/3/17.
 */

public class Kontak {
    @SerializedName("id_pesan")
    private String id_pesan;
    @SerializedName("nama_pemesan")
    private String nama_pemesan;


    public Kontak(){}

    public Kontak(String id_pesan, String nama_pemesan) {
        this.id_pesan = id_pesan;
        this.nama_pemesan = nama_pemesan;
    }

    public String getId_pesan() {
        return id_pesan;
    }

    public void setId_pesan(String id_pesan) {
        this.id_pesan = id_pesan;
    }

    public String getNama_pemesan() {
        return nama_pemesan;
    }

    public void setNama_pemesan(String nama_pemesan) {
        this.nama_pemesan = nama_pemesan;
    }
}