package com.example.trackingcetol;


import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v4.app.Fragment;
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


    public HomeFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_home, container, false);

        et_id = view.findViewById(R.id.et_kode);

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
