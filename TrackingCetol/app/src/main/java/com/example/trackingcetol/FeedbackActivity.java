package com.example.trackingcetol;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.example.trackingcetol.Model.PostSaran;
import com.example.trackingcetol.Rest.ApiClient;
import com.example.trackingcetol.Rest.ApiInterface;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class FeedbackActivity extends AppCompatActivity {
EditText nama, email, saran;
Button btn_saran;
ApiInterface mApiInterface;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_feedback);
        nama = findViewById(R.id.et_nama);
        email = findViewById(R.id.et_email);
        saran = findViewById(R.id.et_saran);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);
        btn_saran = findViewById(R.id.btn_saran);

        btn_saran.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Call<PostSaran> postSaran = mApiInterface.postSaran(nama.getText().toString(), email.getText().toString(), saran.getText().toString());
                postSaran.enqueue(new Callback<PostSaran>() {
                    @Override
                    public void onResponse(Call<PostSaran> call, Response<PostSaran> response) {
                        Toast.makeText(FeedbackActivity.this, "Feedback dikirim", Toast.LENGTH_SHORT).show();

                    }

                    @Override
                    public void onFailure(Call<PostSaran> call, Throwable t) {
                        Toast.makeText(getApplicationContext(), "Error", Toast.LENGTH_LONG).show();
                    }
                });
            }
        });

    }
}
