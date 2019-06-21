package com.example.trackingcetol;

import android.content.Context;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class DetailPesananActivity extends AppCompatActivity {
SharedPreferences sharedPreferences;
TextView tx_nama,tx_jenispesanan, tx_jeniskertas, tx_panjang, tx_lebar, tx_jumlah, tx_harga, tx_tgl, tx_totalharga, tx_pembayaran;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_coba);
        sharedPreferences = getSharedPreferences("remember", Context.MODE_PRIVATE);

        String nama_pemesan= sharedPreferences.getString("nama_pemesan","0");
        tx_nama= findViewById(R.id.tx_nama);
        tx_nama.setText(nama_pemesan);

        String jenis_pesanan= sharedPreferences.getString("jenis_pesanan","1");
        tx_jenispesanan= findViewById(R.id.tx_jenispesanan);
        tx_jenispesanan.setText(jenis_pesanan);

        String jenis_kertas= sharedPreferences.getString("jenis_kertas","2");
        tx_jeniskertas= findViewById(R.id.tx_jeniskertas);
        tx_jeniskertas.setText(jenis_kertas);

        String panjang= sharedPreferences.getString("panjang","3");
        tx_panjang= findViewById(R.id.tx_panjang);
        tx_panjang.setText(panjang);

        String lebar= sharedPreferences.getString("lebar","4");
        tx_lebar= findViewById(R.id.tx_lebar);
        tx_lebar.setText(lebar);

        String jumlah= sharedPreferences.getString("jumlah","5");
        tx_jumlah= findViewById(R.id.tx_jumlah);
        tx_jumlah.setText(jumlah);

        String harga= sharedPreferences.getString("harga","6");
        tx_harga= findViewById(R.id.tx_harga);
        tx_harga.setText(harga);

        String tgl_pesan= sharedPreferences.getString("tgl_pesan","7");
        tx_tgl= findViewById(R.id.tx_tgl);
        tx_tgl.setText(tgl_pesan);

        String pembayaran= sharedPreferences.getString("pembayaran","8");
        tx_pembayaran= findViewById(R.id.tx_pembayaran);
        tx_pembayaran.setText(pembayaran);

        String total_harga= sharedPreferences.getString("total_harga","9");
        tx_totalharga= findViewById(R.id.tx_totalharga);
        tx_totalharga.setText(total_harga);



    }
}
