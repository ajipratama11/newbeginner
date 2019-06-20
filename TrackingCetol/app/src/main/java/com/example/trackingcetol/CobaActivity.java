package com.example.trackingcetol;

import android.content.Context;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class CobaActivity extends AppCompatActivity {
SharedPreferences sharedPreferences;
TextView tStatus,tHarga;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_coba);
        sharedPreferences = getSharedPreferences("remember", Context.MODE_PRIVATE);

        String status_proses= sharedPreferences.getString("status_proses","0");
        tStatus= findViewById(R.id.tStatus);
        tStatus.setText(status_proses);

        String total_harga= sharedPreferences.getString("total_harga","1");
        tHarga= findViewById(R.id.tHarga);
        tHarga.setText(total_harga);



    }
}
