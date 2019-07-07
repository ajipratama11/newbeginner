package com.example.trackingcetol;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.FragmentManager;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

public class DetailListHarga extends AppCompatActivity implements View.OnClickListener {

    TextView nama, jenis_pesanan, jenis_kertas, harga;
    ImageView gambar;
    Context context;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_list_harga);

        nama = findViewById(R.id.nama);
        jenis_pesanan = findViewById(R.id.jenispesanan);
        jenis_kertas = findViewById(R.id.jeniskertas);
        harga = findViewById(R.id.hargabarang);
        gambar = findViewById(R.id.gambar);

        Intent mIntent = getIntent();



        nama.setText(mIntent.getStringExtra("Nama Barang"));
        jenis_pesanan.setText(mIntent.getStringExtra("Jenis Barang"));
        jenis_kertas.setText(mIntent.getStringExtra("Jenis Kertas"));
        harga.setText(mIntent.getStringExtra("Harga Barang"));
        Picasso.with(DetailListHarga.this).load("http://192.168.43.75/cetol/assets/img/barang/"+mIntent.getStringExtra ("Gambar")).into(gambar);




    }

    @Override
    public void onClick(View v) {



    }


}
