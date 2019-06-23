package com.example.trackingcetol.Model;

import com.google.gson.annotations.SerializedName;

import java.util.List;

public class GetHarga {
    @SerializedName("status")
    String status;
    @SerializedName("result")
    List<ListHarga> listDataHarga;
    @SerializedName("message")
    String message;
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
    public List<ListHarga> getListDataHarga() {
        return listDataHarga;
    }
    public void setListDataKontak(List<ListHarga> listDataHarga) {
        this.listDataHarga = listDataHarga;
    }
}
