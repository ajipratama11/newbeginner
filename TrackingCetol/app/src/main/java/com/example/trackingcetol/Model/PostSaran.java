package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

public class PostSaran {


    @SerializedName("status")
    String status;
    @SerializedName("nama")
    String nama;
    @SerializedName("email")
    String email;
    @SerializedName("saran")
    String saran;
    @SerializedName("message")
    String message;


    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getSaran() {
        return saran;
    }

    public void setSaran(String saran) {
        this.saran = saran;
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

