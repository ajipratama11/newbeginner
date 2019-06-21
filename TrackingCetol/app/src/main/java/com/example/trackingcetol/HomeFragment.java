package com.example.trackingcetol;


import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.PackageManager;
import android.net.Uri;
import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v7.widget.CardView;
import android.text.TextUtils;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.example.trackingcetol.Model.PostPutDelKontak;
import com.example.trackingcetol.Model.PostPutDelKontak;
import com.example.trackingcetol.Model.TampilCek;
import com.example.trackingcetol.Rest.ApiClient;
import com.example.trackingcetol.Rest.ApiInterface;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


/**
 * A simple {@link Fragment} subclass.
 */
public class HomeFragment extends Fragment {
    ProgressDialog pDialog;
    private EditText et_id;
    private Button cek;
    ApiInterface mApiInterface;
    SharedPreferences sharedPreferences;
    /*Deklarasi variable*/
    private CardView lokasi;
    String goolgeMap = "com.google.android.apps.maps"; // identitas package aplikasi google masps android
    Uri gmmIntentUri;
    Intent mapIntent;
    String masjid_agung_demak = "-7.917427, 113.828638"; // koordinat Masjid Agung Demak

    /*Deklarasi variable*/


    public HomeFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_home, container, false);

        lokasi = view.findViewById(R.id.pesandokumen);
        et_id = view.findViewById(R.id.et_kode);


        //lokasi
        lokasi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // Buat Uri dari intent string. Gunakan hasilnya untuk membuat Intent.
                gmmIntentUri = Uri.parse("google.navigation:q=" + masjid_agung_demak);

                // Buat Uri dari intent gmmIntentUri. Set action => ACTION_VIEW
                mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);

                // Set package Google Maps untuk tujuan aplikasi yang di Intent yaitu google maps
                mapIntent.setPackage(goolgeMap);

                startActivity(mapIntent);
            }
        });

        sharedPreferences = getContext().getSharedPreferences("remember", Context.MODE_PRIVATE);
        String id_pesan = sharedPreferences.getString("id_pesan","0");


        mApiInterface = ApiClient.getClient().create(ApiInterface.class);

        cek = view.findViewById(R.id.btn_cek);
        cek.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
               pDialog = new ProgressDialog(getContext());
               pDialog.setMessage("Loading...");
               pDialog.setCancelable(false);
               pDialog.show();
        Call<TampilCek> user=mApiInterface.postKontak(et_id.getText().toString());
        user.enqueue(new Callback<TampilCek>() {
            @Override
            public void onResponse(Call<TampilCek> call, retrofit2.Response<TampilCek> response) {
                pDialog.dismiss();
                String status_proses = response.body().getStatus_proses();
                String nama_pemesan = response.body().getNama_pemesan();
                String id_pesan = response.body().getId_pesan();
                String total_harga = response.body().getTotal_harga();
                String jenis_pesanan = response.body().getJenis_pesanan();
                String jenis_kertas = response.body().getJenis_kertas();
                String panjang = response.body().getPanjang();
                String lebar = response.body().getLebar();
                String jumlah = response.body().getJumlah();
                String harga = response.body().getHarga();
                String tgl_pesan = response.body().getTgl_pesan();
                String pembayaran = response.body().getPembayaran();
                Log.e(" status", "gagal"+total_harga);
                if(TextUtils.isEmpty(id_pesan)){
                    Toast.makeText(getContext(), "Id pesanan tidak ada", Toast.LENGTH_SHORT).show();
                } else {
                    Toast.makeText(getContext(), "BISA", Toast.LENGTH_SHORT).show();
                    Intent intent = new Intent(getContext(), custompopup.class);
                    SharedPreferences.Editor editor = sharedPreferences.edit();
                    editor.putString("status_proses", status_proses);
                    editor.putString("nama_pemesan", nama_pemesan);
                    editor.putString("id_pesan", id_pesan);
                    editor.putString("total_harga", total_harga);
                    editor.putString("jenis_pesanan", jenis_pesanan);
                    editor.putString("jenis_kertas", jenis_kertas);
                    editor.putString("panjang", panjang);
                    editor.putString("lebar", lebar);
                    editor.putString("jumlah", jumlah);
                    editor.putString("harga", harga);
                    editor.putString("tgl_pesan", tgl_pesan);
                    editor.putString("pembayaran", pembayaran);
                    editor.commit();
                    startActivity(intent);
                    Log.e("berhasil status", "berhasil"+id_pesan);
                }
            }

            @Override
            public void onFailure(Call<TampilCek> call, Throwable t) {
                pDialog.dismiss();
                Log.e("gagal status", "gagal"+t);
            }
        });


            }
        });
        return view;
    }
}
