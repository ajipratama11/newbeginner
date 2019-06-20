package com.example.trackingcetol;

import android.app.Activity;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.util.DisplayMetrics;
import android.widget.TextView;

public class custompopup extends Activity {
    SharedPreferences sharedPreferences;
    TextView tv_status, tv_nama, tv_pesan;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.custompopup);
        sharedPreferences = getSharedPreferences("remember", Context.MODE_PRIVATE);

        String status_proses= sharedPreferences.getString("status_proses","0");
        tv_status= findViewById(R.id.tv_status);
        tv_status.setText(status_proses);

        String total_harga= sharedPreferences.getString("total_harga","1");
        tv_pesan= findViewById(R.id.tv_pesanan);
        tv_pesan.setText("Rp."+total_harga);

        String nama_pemesan = sharedPreferences.getString("nama_pemesan","2");
        tv_nama= findViewById(R.id.tv_nama);
        tv_nama.setText(nama_pemesan);

        DisplayMetrics dm = new DisplayMetrics();
        getWindowManager().getDefaultDisplay().getMetrics(dm);

        int width = dm.widthPixels;
        int height = dm.heightPixels;

        getWindow().setLayout((int) (width * .8), (int) (height * .6));
    }
}