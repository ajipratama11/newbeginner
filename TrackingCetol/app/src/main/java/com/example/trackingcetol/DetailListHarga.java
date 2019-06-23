package com.example.trackingcetol;

import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.FragmentManager;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

public class DetailListHarga extends AppCompatActivity implements View.OnClickListener {

    TextView nama, jenis_pesanan, jenis_kertas, harga;
    ImageView gambar;
    private Button btn_masukcart;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_list_harga);

        nama = findViewById(R.id.nama);
        jenis_pesanan = findViewById(R.id.jenispesanan);
        jenis_kertas = findViewById(R.id.jeniskertas);
        harga = findViewById(R.id.hargabarang);

        Intent mIntent = getIntent();


        nama.setText(mIntent.getStringExtra("Nama Barang"));
        jenis_pesanan.setText(mIntent.getStringExtra("Jenis Barang"));
        jenis_kertas.setText(mIntent.getStringExtra("Jenis Kertas"));
        harga.setText(mIntent.getStringExtra("Harga Barang"));





    }

    @Override
    public void onClick(View v) {



    }


}
