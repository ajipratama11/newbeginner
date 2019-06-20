package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

/**
 * Created by root on 2/3/17.
 */

public class PostPutDelKontak {
    public PostPutDelKontak(String status, String id_pesan, String message) {
        this.status = status;
        this.id_pesan = id_pesan;
        this.message = message;
    }

    @SerializedName("status")
    String status;
    @SerializedName("id_pesan")
    String id_pesan;
    @SerializedName("message")
    String message;
    public String getStatus() {
        return status;
    }
    public void setStatus(String status) {
        this.status = status;
    }
    public String getId_pesan() {
        return message;
    }
    public void setId_pesan(String message) {
        this.message = id_pesan;
    }
    public String getMessage() {
        return message;
    }
    public void setMessage(String message) {
        this.message = message;
    }


}